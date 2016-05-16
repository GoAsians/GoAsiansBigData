#!/usr/bin/env python

import sys

for line in sys.stdin:
	try:
		line = line.strip()
		words = line.split(",")
		key=str(words[46])
		if(key=="1"):
			print "Male,1"
		elif(key=="2"):
			print "Female,1"
		elif(key=="0"):
			pass
	except:
		pass