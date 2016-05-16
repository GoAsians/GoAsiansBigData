#!/usr/bin/env python
import sys

# input comes from STDIN (standard input)
for line in sys.stdin:
	line = line.strip()
	words = line.split(',')
	hour = words[0][8:10]
	try:
		if hour=='00':
			print '%s\t%s' % ("12am to 1am", 1)
		elif hour=='01':
			print '%s\t%s' % ("1am to 2am", 1)
		elif hour=='02':
			print '%s\t%s' % ("2am to 3am", 1)
		elif hour=='03':
			print '%s\t%s' % ("3am to 4am", 1)
		elif hour=='04':
			print '%s\t%s' % ("4am to 5am", 1)
		elif hour=='05':
			print '%s\t%s' % ("5am to 6am", 1)
		elif hour=='06':
			print '%s\t%s' % ("6am to 7am", 1)
		elif hour=='07':
			print '%s\t%s' % ("7am to 8am", 1)
		elif hour=='08':
			print '%s\t%s' % ("8am to 9am", 1)
		elif hour=='09':
			print '%s\t%s' % ("9am to 10am", 1)
		elif hour=='10':
			print '%s\t%s' % ("10am to 11am", 1)
		elif hour=='11':
			print '%s\t%s' % ("11am to 12pm", 1)
		elif hour=='12':
			print '%s\t%s' % ("12pm to 1pm", 1)
		elif hour=='13':
			print '%s\t%s' % ("1pm to 2pm", 1)
		elif hour=='14':
			print '%s\t%s' % ("2pm to 3pm", 1)
		elif hour=='15':
			print '%s\t%s' % ("3pm to 4pm", 1)
		elif hour=='16':
			print '%s\t%s' % ("4pm to 5pm", 1)
		elif hour=='17':
			print '%s\t%s' % ("5pm to 6pm", 1)
		elif hour=='18':
			print '%s\t%s' % ("6pm to 7pm", 1)
		elif hour=='19':
			print '%s\t%s' % ("7pm to 8pm", 1)
		elif hour=='20':
			print '%s\t%s' % ("8pm to 9pm", 1)
		elif hour=='21':
			print '%s\t%s' % ("9pm to 10pm", 1)
		elif hour=='22':
			print '%s\t%s' % ("10pm to 11pm", 1)
		elif hour=='23':
			print '%s\t%s' % ("11pm to 12am", 1)
		else:
			continue
	except:
		pass