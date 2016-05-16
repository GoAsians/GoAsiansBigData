from __future__ import print_function
import sys
from operator import add
from pyspark import SparkConf, SparkContext
from pyspark.sql import SQLContext
from pyspark.sql.types import *
import types

def tohour(c):
	try:
		date, time = c[1].split(' ')
		month, day ,year = date.split('/')
		hour, miniute = time.split(':')
		if (len(month)<2):
			month = "0" + month
		if (len(day)<2):
			day = "0" + day	
		if (len(hour)<2):
			hour = "0" + hour
		c[1] = year + month + day + hour
	except:
		pass
	return c

def checklength(c):
	if len(c)==33:
		c[4] = float(c[4])
		c[21] = float(c[21])
		c[28] = float(c[28])
		c[11] = float(c[11])
		c[32] = float(c[32])
		return c
	else:
		return ("","","","",0,"","","","","","",0,"","","","","","","","","",0,"","","","","","",0,"","","",0)
	
if __name__ == "__main__":	
	if len(sys.argv) != 4:
		print("Invalid argument: need 4", file=sys.stderr)
		exit(-1)
	conf = SparkConf().setAppName("Read Table")
	sc = SparkContext(conf=conf)
	sqlCtx = SQLContext(sc)
	lines1 = sc.textFile(sys.argv[1])
	lines2 = sc.textFile(sys.argv[2])
	#Remove Header
	header = lines1.first() #extract header
	lines1 = lines1.filter(lambda x:x !=header)    #filter out header
	#Map Attributes
	getComumn1 = lines1.map(lambda x: x.split(",")).map(tohour)
	getComumn2 = lines2.map(lambda x: x.split(",")).map(checklength)
	attributesNames1 = "tripduration,starttime,stoptime,start station id,start station name,start station latitude,start station longitude,end station id,end station name,end station latitude,end station longitude,bikeid,usertype,birth year,gender".split(",")
	attributesNames2 = "YYYYMODAHR,USAF,WBAN,DIR,SPD,GUS,CLG,SKC,L,M,H,VSB,MW0,MW1,MW2,MW3,AW0,AW1,AW2,AW3,W,TEMP,DEWP,SLP,ALT,STP,MAX,MIN,PCP01,PCP06,PCP24,PCPXX,SD".split(",")
	attributes1 = [StructField(field_name, StringType(), True) for field_name in attributesNames1]
	attributes2 = [StructField(field_name, StringType(), True) for field_name in attributesNames2]
	attributes2[4] = StructField(attributesNames2[4], FloatType(), True)
	attributes2[21] = StructField(attributesNames2[21], FloatType(), True)
	attributes2[28] = StructField(attributesNames2[28], FloatType(), True)
	attributes2[11] = StructField(attributesNames2[11], FloatType(), True)
	attributes2[32] = StructField(attributesNames2[32], FloatType(), True)
	table1 = StructType(attributes1)
	table2 = StructType(attributes2)
	#Frame
	frame1 = sqlCtx.createDataFrame(getComumn1, table1)
	frame2 = sqlCtx.createDataFrame(getComumn2, table2)
	#Register
	frame1.registerTempTable("citibike")
	frame2.registerTempTable("weather")
	
	#Run SQL
	joined = sqlCtx.sql("SELECT * FROM weather JOIN citibike ON starttime=YYYYMODAHR")
	joined.registerTempTable("joined")
	if (sys.argv[3]=='0'):
		#Print temp
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE TEMP <(-15)").collect()
		count = (str(result))[9:-2]
		print ("below -15," + count +"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (-15*1.8+32) < TEMP AND TEMP <= (-10*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("-15 to -10," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (-10*1.8+32) < TEMP AND TEMP <= (-5*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("-10 to -5," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (-5*1.8+32) < TEMP AND TEMP <= (0*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("-5 to 0," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (0*1.8+32) < TEMP AND TEMP <= (5*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("0 to 5," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (5*1.8+32) < TEMP AND TEMP <= (10*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("5 to 10," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (10*1.8+32) < TEMP AND TEMP <= (15*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("10 to 15," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (15*1.8+32) < TEMP AND TEMP <= (20*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("15 to 20," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (20*1.8+32) < TEMP AND TEMP <= (25*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("20 to 25," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (25*1.8+32) < TEMP AND TEMP <= (30*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("25 to 30," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (30*1.8+32) < TEMP AND TEMP <= (35*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("30 to 35," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE (35*1.8+32) < TEMP AND TEMP < (40*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("35 to 40," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE TEMP > (40*1.8+32)").collect()
		count = (str(result))[9:-2]
		print ("above 40," + count+"\r")
	if (sys.argv[3]=='1'):
		#Print Wind Speed
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE SPD<5").collect()
		count = (str(result))[9:-2]
		print ("0 to 5," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 5 <= SPD AND SPD < 10").collect()
		count = (str(result))[9:-2]
		print ("5 to 10," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 10 <= SPD AND SPD < 15").collect()
		count = (str(result))[9:-2]
		print ("10 to 15," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 15 <= SPD AND SPD < 20").collect()
		count = (str(result))[9:-2]
		print ("15 to 20," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 20 <= SPD AND SPD < 25").collect()
		count = (str(result))[9:-2]
		print ("20 to 25," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 25 <= SPD AND SPD < 30").collect()
		count = (str(result))[9:-2]
		print ("20 to 25," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 30 <= SPD AND SPD < 35").collect()
		count = (str(result))[9:-2]
		print ("30 to 35," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE SPD >= 35").collect()
		count = (str(result))[9:-2]
		print ("above 35," + count+"\r")
	if (sys.argv[3]=='2'):
		#Print PCP01(rainfall in last onr hour)
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE PCP01<3").collect()
		count = (str(result))[9:-2]
		print ("0 to 3," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 3 <= PCP01 AND PCP01 < 6").collect()
		count = (str(result))[9:-2]
		print ("3 to 6," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 6 <= PCP01 AND PCP01 < 9").collect()
		count = (str(result))[9:-2]
		print ("6 to 9," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 9 <= PCP01 AND PCP01 < 12").collect()
		count = (str(result))[9:-2]
		print ("9 to 12," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 12 <= PCP01 AND PCP01 < 15").collect()
		count = (str(result))[9:-2]
		print ("12 to 15," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE PCP01 >= 15").collect()
		count = (str(result))[9:-2]
		print ("above 15," + count+"\r")
	if (sys.argv[3]=='3'):
		#Print VSB
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE VSB<=2").collect()
		count = (str(result))[9:-2]
		print ("0 to 2," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 2 < VSB AND VSB <= 4").collect()
		count = (str(result))[9:-2]
		print ("2 to 4," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 4 < VSB AND VSB <= 6").collect()
		count = (str(result))[9:-2]
		print ("4 to 6," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 6 < VSB AND VSB <= 8").collect()
		count = (str(result))[9:-2]
		print ("6 to 8," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 8 < VSB AND VSB <= 10").collect()
		count = (str(result))[9:-2]
		print ("above 8," + count+"\r")
	if (sys.argv[3]=='4'):
		#Print SD
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE SD<=2").collect()
		count = (str(result))[9:-2]
		print ("0 to 2," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 2 < SD AND SD <= 4").collect()
		count = (str(result))[9:-2]
		print ("2 to 4," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 4 < SD AND SD <= 6").collect()
		count = (str(result))[9:-2]
		print ("4 to 6," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 6 < SD AND SD <= 8").collect()
		count = (str(result))[9:-2]
		print ("6 to 8," + count+"\r")
		result = sqlCtx.sql("SELECT COUNT(*) FROM joined WHERE 8 < SD AND SD <= 10").collect()
		count = (str(result))[9:-2]
		print ("above 8," + count+"\r")
	sc.stop()
