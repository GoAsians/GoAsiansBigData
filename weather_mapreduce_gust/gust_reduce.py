#!/usr/bin/python

from operator import itemgetter
import sys

current_key = None
key = None
t_value = [0,0]
#s is the aaded number
#val is the t_value list
#i is the ith item in the list

#input comes from STDIN (stream data that goes to the program)

for line in sys.stdin:
    line = line.strip()
    words = line.split('\t')
    key = words[0]
    value = words[1]
    if(current_key == key):#Same Key
        try:
            t_value[0] = t_value[0] + 1
            t_value[1] = (t_value[1] + float(value))/t_value[0]
        except:
            pass
    else:#Next Key
        if current_key:    
            print '%s\t%s' % (current_key, t_value[1])
        t_value = [0,0]
        current_key = key
        try:
            t_value[0] = t_value[0] + 1
            t_value[1] = (t_value[1] + float(value))/t_value[0]
        except:
            pass
if current_key == key:
    print '%s\t%s' % (current_key, t_value[1])
