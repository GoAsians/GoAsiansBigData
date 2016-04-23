#!/usr/bin/python

import sys
import os

#input comes from STDIN (stream data that goes to the program)
for line in sys.stdin:
	line = line.strip()
	words = line.split(' ')
	if words[0]!="USAF": #Data line
		time = words[2]
		key= time[0:10]
		value = words[0] + "," + words[1] + "," + words[3] + "," + words[4] + "," + words[5] + "," + words[6] + "," + words[7] + "," + words[8] + "," + words[9] + "," + words[10] + "," + words[11] + "," + words[12] + "," + words[13] + "," + words[14] + "," + words[15] + "," + words[16] + "," + words[17] + "," + words[18] + "," + words[19] + "," + words[20] + "," + words[21] + "," + words[22] + "," + words[23] + "," + words[24] + "," + words[25] + "," + words[26] + "," + words[27] + "," + words[28] + "," + words[29] + "," + words[30] + "," + words[31] + "," + words[32]
		print '%s\t%s' % (key,value)
