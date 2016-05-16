#!/usr/bin/env python
import sys
# input comes from STDIN (standard input)
for line in sys.stdin:
	line = line.strip()
	words = line.split(',')
	date = str(words[0])
	month = str(date[4:6])
	try:
		if month=="01":
			print '%s\t%s' % ("January", 1)
		elif month=="02":
			print '%s\t%s' % ("February", 1)
		elif month=="03":
			print '%s\t%s' % ("March", 1)
		elif month=="04":
			print '%s\t%s' % ("April", 1)
		elif month=="05":
			print '%s\t%s' % ("May", 1)
		elif month=="06":
			print '%s\t%s' % ("June", 1)
		elif month=="07":
			print '%s\t%s' % ("July", 1)
		elif month=="08":
			print '%s\t%s' % ("August", 1)
		elif month=="09":
			print '%s\t%s' % ("September", 1)
		elif month=="10":
			print '%s\t%s' % ("October", 1)
		elif month=="11":
			print '%s\t%s' % ("November", 1)
		elif month=="12":
			print '%s\t%s' % ("December", 1)
	except:
		pass
