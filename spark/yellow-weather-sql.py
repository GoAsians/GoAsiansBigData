from __future__ import print_function
import sys
from operator import add
from pyspark import SparkConf, SparkContext
from pyspark.sql import SQLContext
from pyspark.sql.types import *
import types

class Point:
	def __init__(self,x,y):
		self.x = x
		self.y = y

class Polygon:
	def __init__(self,points):
		self.points = points
		self.nvert = len(points)

		minx = maxx = points[0].x
		miny = maxy = points[0].y
		for i in range(1,self.nvert):
			minx = min(minx,points[i].x)
			miny = min(miny,points[i].y)
			maxx = max(maxx,points[i].x)
			maxy = max(maxy,points[i].y)

		self.bound = (minx,miny,maxx,maxy)


	def contains(self,pt):
		firstX = self.points[0].x
		firstY = self.points[0].y
		testx = pt.x
		testy = pt.y
		c = False
		j = 0
		i = 1
		nvert = self.nvert
		while (i < nvert) :
			vi = self.points[i]
			vj = self.points[j]
			
			if(((vi.y > testy) != (vj.y > testy)) and (testx < (vj.x - vi.x) * (testy - vi.y) / (vj.y - vi.y) + vi.x)):
				c = not(c)

			if(vi.x == firstX and vi.y == firstY):
				i = i + 1
				if (i < nvert):
					vi = self.points[i];
					firstX = vi.x;
					firstY = vi.y;
			j = i
			i = i + 1
		return c

	def bounds(self):
		return self.bound
polySTATENISLAND = Polygon([Point(40.640457, -74.124584),Point(40.636028, -74.157543),Point(40.635247, -74.193249),Point(40.596937, -74.199429),Point(40.557300, -74.215221),Point(40.507983, -74.255390),Point(40.494930, -74.237881),Point(40.546866, -74.112225),Point(40.599022, -74.052830),Point(40.646709, -74.075832),Point(40.640457, -74.124584)])
polyBROOKLYN = Polygon([Point(40.736165, -73.961077),Point(40.682648, -73.898678),Point(40.646709, -73.851643),Point(40.615182, -73.889751),Point(40.581033, -73.877735),Point(40.573731, -73.896961),Point(40.571124, -74.011631),Point(40.618310, -74.050083),Point(40.662337, -74.017124),Point(40.679263, -74.023647),Point(40.706596, -73.991718),Point(40.708157, -73.973179),Point(40.736165, -73.961077)])
polyQUEENS = Polygon([Point(40.736165, -73.961077),Point(40.682648, -73.898678),Point(40.646709, -73.851643),Point(40.593882, -73.824829),Point(40.554244, -73.947052),Point(40.537025, -73.942245),Point(40.537025, -73.942245),Point(40.622552, -73.765778),Point(40.656941, -73.720459),Point(40.750638, -73.703979),Point(40.801596, -73.822769),Point(40.776122, -73.935379),Point(40.736165, -73.961077)])
polyMANHATTAN = Polygon([Point(40.679263, -74.023647),Point(40.706596, -73.991718),Point(40.708157, -73.973179),Point(40.736165, -73.961077),Point(40.796398, -73.924393),Point(40.842126, -73.929886),Point(40.870690, -73.904480),Point(40.875363, -73.927826),Point(40.750118, -74.013657),Point(40.679263, -74.023647)])
polyBRONX = Polygon([Point(40.796398, -73.924393),Point(40.842126, -73.929886),Point(40.870690, -73.904480),Point(40.875363, -73.927826),Point(40.916291, -73.914413),Point(40.878088, -73.780472),Point(40.837840, -73.778412),Point(40.812380, -73.795921),Point(40.793669, -73.906471),Point(40.796398, -73.924393)])

def finddiscrist(c):
	try:
		c[6] = float(c[6])
		c[5] = float(c[5])
		p = Point(c[6], c[5])
		if polySTATENISLAND.contains(p):
			c[8] = 1
		elif polyBROOKLYN.contains(p):
			c[8] = 2
		elif polyQUEENS.contains(p):
			c[8] = 3
		elif polyMANHATTAN.contains(p):
			c[8] = 4
		elif polyBRONX.contains(p):
			c[8] = 5
		else:
			c[8] = 0
	except:
		c[8] = 0
	return c
	
def tohour(c):
	try:
		date, time = c[1].split(' ')
		year, month, day = date.split('-')
		hour, miniute, second = time.split(':')
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
		
def quotation(c):
	for element in c:
		element.replace('\"','')#Leave out the quotation marks
	return c
	
if __name__ == "__main__":	
	if len(sys.argv) != 3:
		print("Invalid argument: need 3", file=sys.stderr)
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
	getComumn1 = lines1.map(lambda x: x.split(",")).map(tohour).map(finddiscrist)
	getComumn2 = lines2.map(lambda x: x.split(",")).map(checklength)
	attributesNames1 = "VendorID,tpep_pickup_datetime,tpep_dropoff_datetime,passenger_count,trip_distance,pickup_longitude,pickup_latitude,RateCodeID,store_and_fwd_flag,dropoff_longitude,dropoff_latitude,payment_type,fare_amount,extra,mta_tax,tip_amount,tolls_amount,improvement_surcharge,total_amount".split(",")
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
	frame1.registerTempTable("yellow_taxi")
	frame2.registerTempTable("weather")
	
	#Run SQL
	joined = sqlCtx.sql("SELECT count(*) FROM yellow_taxi JOIN weather ON tpep_pickup_datetime=YYYYMODAHR WHERE tip_amount>0").collect()
	print("tip amount>0:"+str(joined))
	
	joined = sqlCtx.sql("SELECT SUM(tip_amount) FROM yellow_taxi JOIN weather ON tpep_pickup_datetime=YYYYMODAHR WHERE tip_amount>0").collect()
	print("tip totao amount>0:"+str(joined))
	
	