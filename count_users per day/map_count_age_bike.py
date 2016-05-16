#!/usr/bin/env python

import sys

for line in sys.stdin:
	try:
		line = line.strip()
		words = line.split(",")
		birth_year = words[45]
		if(len(birth_year)==4):
			birth_year = int(words[45])
			if(birth_year<=1955):
				print "60+ years,1"
			elif(birth_year<=1975):
				print "40 to 60 years old,1"
			elif(birth_year<=1995):
				print "20 to 40 years old,1"
			elif(birth_year<=2000):
				print "15 to 20 years old,1"
			elif(birth_year<=2015):
				print "Below 15 years old,1"
	except:
		pass