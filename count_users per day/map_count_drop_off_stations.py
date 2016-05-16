#!/usr/bin/env python

import sys

for line in sys.stdin:
	try:
		line = line.strip()
		words = line.split(",")
		key=words[40]+','+words[41]+','+words[42]
		print "%s\t%s"%(key,1)
	except:
		pass