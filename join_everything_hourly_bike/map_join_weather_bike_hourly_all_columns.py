#!/usr/bin/python

import sys
import os

#input comes from STDIN (stream data that goes to the program)
for line in sys.stdin:
	line = line.strip()
	line = line.replace('\"','')
	words = line.split(',')
	if (len(words)>0):
		if words[0]!="tripduration": #Data line
			if (len(words)==33): #Data from weather
				key = words[0]
				try:
					value = words[1]+','+words[2]+','+words[3]+','+words[4]+','+words[5]+','+words[6]+','+words[7]+','+words[8]+','+words[9]+','+words[10]+','+words[11]+','+words[12]+','+words[13]+','+words[14]+','+words[15]+','+words[16]+','+words[17]+','+words[18]+','+words[19]+','+words[20]+','+words[21]+','+words[22]+','+words[23]+','+words[24]+','+words[25]+','+words[26]+','+words[27]+','+words[28]+','+words[29]+','+words[30]+','+words[31]+','+words[32]
					print '%s\t%s\t%s' % (key,"0",value)
				except:
					pass
			else: #Data from citi bike"10/1/2015 00:00:02"
				try:
					key = words[1].replace('\"','')
					month=str(key.split("/")[0])
					day = str(key.split("/")[1])
					year=str(key.split("/")[2].split(" ")[0])
					hour = str(key.split("/")[2].split(" ")[1].split(":")[0])
					if (len(month)==1):
						month = "0"+str(month)
					if (len(day)==1):
						day = "0"+str(day)
					if (len(year)==2):
						year = "00"+str(year)
					if (len(hour)==1):
						hour = "0"+str(hour)
					key2 = year+month+day+hour
					value = words[0]+','+words[2]+','+words[3]+','+words[4]+','+words[5]+','+words[6]+','+words[7]+','+words[8]+','+words[9]+','+words[10]+','+words[11]+','+words[12]+','+words[13]+','+words[14]
					print '%s\t%s\t%s' % (key2,"1",value)
				except:
					pass