#!/usr/bin/env python

import sys

# input comes from STDIN (standard input)
for line in sys.stdin:
	line = line.strip()
	words = line.split(',')
	temp = words[1]
	try:
		temp = float(temp)
		temp = (temp - 32) * 0.5556#to celcious
		if temp<-15:
			print '%s\t%s' % ("-20~-15", 1)
		elif temp<-10:
			print '%s\t%s' % ("-15~-10", 1)
		elif temp<-5:
			print '%s\t%s' % ("-10~-5", 1)
		elif temp<0:
			print '%s\t%s' % ("-5~0", 1)
		elif temp<5:
			print '%s\t%s' % ("0~5", 1)
		elif temp<10:
			print '%s\t%s' % ("5~10", 1)
		elif temp<15:
			print '%s\t%s' % ("10~15", 1)
		elif temp<20:
			print '%s\t%s' % ("15~20", 1)
		elif temp<25:
			print '%s\t%s' % ("20~25", 1)
		elif temp<30:
			print '%s\t%s' % ("25~30", 1)
		elif temp<35:
			print '%s\t%s' % ("30~35", 1)
		elif temp<40:
			print '%s\t%s' % ("35~40", 1)
		else:
			print '%s\t%s' % ("40~45", 1)
	except:
		pass