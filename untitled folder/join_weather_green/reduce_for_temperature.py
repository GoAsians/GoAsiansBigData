#!/usr/bin/python

from operator import itemgetter
import sys

current_key = None
key = None
t_value = []
#input comes from STDIN (stream data that goes to the program)

for line in sys.stdin:
	line = line.strip()
	words = line.split('\t')
	key, table, value = words
	if(current_key == key):#Same Key
		if(table == "0"):#Weather table
			t_value.append(value)
		else:#Fare table
			for t in t_value:
				print '%s,%s' % (current_key, t + ',' + value)
	else:#Next Key
		t_value = []
		current_key = key
		if(table == "0"):#Trip table
			t_value.append(value)