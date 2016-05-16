#!/usr/bin/env python
import sys

# input comes from STDIN (standard input)
for line in sys.stdin:
	line = line.strip()
	line = line.replace('\"','')
	words = line.split(',')
	temp = words[21]
	try:
		temp = float(temp)
		temp = (temp - 32) * 0.5556#to celcious
		if temp<-15:
			print '%s\t%s' % ("Below -15 Celsius", 1)
		elif temp<=-10:
			print '%s\t%s' % ("-15 to -10 Celsius", 1)
		elif temp<=-5:
			print '%s\t%s' % ("-10 to -5 Celsius", 1)
		elif temp<=0:
			print '%s\t%s' % ("-5 to 0 Celsius", 1)
		elif temp<=5:
			print '%s\t%s' % ("0 to 5 Celsius", 1)
		elif temp<=10:
			print '%s\t%s' % ("5 to 10 Celsius", 1)
		elif temp<=15:
			print '%s\t%s' % ("10 to 15 Celsius", 1)
		elif temp<=20:
			print '%s\t%s' % ("15 to 20 Celsius", 1)
		elif temp<=25:
			print '%s\t%s' % ("20 to 25 Celsius", 1)
		elif temp<=30:
			print '%s\t%s' % ("25 to 30 Celsius", 1)
		elif temp<=35:
			print '%s\t%s' % ("30 to 35 Celsius", 1)
		elif temp<=40:
			print '%s\t%s' % ("Above 35 Celsius", 1)
		else:
			continue
	except:
		pass