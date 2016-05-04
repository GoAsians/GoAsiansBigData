from datetime import datetime
from dateutil import tz

from_zone = tz.gettz('GMT')
to_zone = tz.gettz('America/New_York')
f = open("output.csv",'w')
file = open("weather-data.txt", 'r')
lines = file.readlines()[1:]
file.close()
print >> f,"USAF,WBAN,YR--MODAHRMN,DIR,SPD,GUS,CLG,SKC,L,M,H,VSB,MW,MW,MW,MW,AW,AW,AW,AW,W,TEMP,DEWP,SLP,ALT,STP,MAX,MIN,PCP01,PCP06,PCP24,PCPXX,SD"
for line in lines:
    words = line.split()
    if len(words) > 1:
        actual = words[2]
        column2 = words[2]+str("00")
        date1 = column2[0:8]
        time1 = column2[8:]
        dt = datetime.strptime(date1+" "+time1, '%Y%m%d %H%M%S')
        dt = dt.replace(tzinfo=from_zone)
        converted = str(dt.astimezone(to_zone))
        dconverted =  converted[0:16]
        dconverted = dconverted.replace("-","")
        dconverted = dconverted.replace(" ","")
        dconverted = dconverted.replace(":","")
        key = dconverted[0:10]
        try:
            value = words[0] + "," + words[1] + "," +key+","+ words[3] + "," + words[4] + "," + words[5] + "," + words[
                6] + "," + words[7] + "," + words[8] + "," + words[9] + "," + words[10] + "," + words[11] + "," + words[
                        12] + "," + words[13] + "," + words[14] + "," + words[15] + "," + words[16] + "," + words[
                        17] + "," + words[18] + "," + words[19] + "," + words[20] + "," + words[21] + "," + words[
                        22] + "," + words[23] + "," + words[24] + "," + words[25] + "," + words[26] + "," + words[
                        27] + "," + words[28] + "," + words[29] + "," + words[30] + "," + words[31] + "," + words[32]
            print >>f,'%s' % (value)
        except:
            pass

