#!/usr/bin/env python

import sys

for line in sys.stdin:
	try:
		line = line.strip()
		words = line.split(",")
		key=words[36]+','+words[37]+','+words[38]
		print "%s\t%s"%(key,1)
	except:
		pass
