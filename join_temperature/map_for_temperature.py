#!/usr/bin/python

import sys
import os

#input comes from STDIN (stream data that goes to the program)
for line in sys.stdin:
	line = line.strip()
	words = line.split(',')
	if (len(words)>0):
		if words[0]!="VendorID": #Data line
			if (len(words)==33): #Data from weather
				key = words[0]
				try:
					value = words[21]
					print '%s\t%s\t%s' % (key,"0",value)
				except:
					pass
			else: #Data from taxi
				try:
					key = words[1]
					key2 = key[0:4] + key[5:7] + key[8:10] + key[11:13]
					value = 1
					print '%s\t%s\t%s' % (key2,"1",value)
				except:
					pass
