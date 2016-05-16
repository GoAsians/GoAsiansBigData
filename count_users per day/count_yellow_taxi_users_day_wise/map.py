#!/usr/bin/env python

import sys

for line in sys.stdin:
	try:
		line = line.strip()
		words = line.split(",")
		key=words[0]
		print "%s\t%s"%(key,1)
	except:
		pass