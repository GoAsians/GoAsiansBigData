#!/usr/bin/env python

import sys

for line in sys.stdin:
	try:
		line = line.strip()
		words = line.split(",")
		hour = words[0][8:10]
		if(len(hour)==1):
			hour=str("0"+hour)
		key=str(words[46])
		if(hour=="22" or hour=="23" or hour=="00" or hour=="01" or hour=="02" or hour=="03" or hour=="04" or hour=="05"):
			if(key=="1"):
				print "Night Time Males,1"
			elif(key=="2"):
				print "Night Time Females,1"
			elif(key=="0"):
				pass
		elif(hour=="06" or hour=="07" or hour=="08" or hour=="09" or hour=="10" or hour=="11" or hour=="12" or hour=="13" or hour=="14" or hour=="15" or hour=="16" or hour=="17" or hour=="18" or hour=="19" or hour=="20" or hour=="21"):
			if(key=="1"):
				print "Day Time Males,1"
			elif(key=="2"):
				print "Day Time Females,1"
			elif(key=="0"):
				pass
	except:
		pass