#!/usr/bin/python

import sys
import os

#input comes from STDIN (stream data that goes to the program)
for line in sys.stdin:
    line = line.strip()
    words = line.split()
    if words[0]!="USAF": #Data line
        time = words[2]
        key= time[0:10]
        value = words[5]
        print '%s\t%s' % (key,value)
