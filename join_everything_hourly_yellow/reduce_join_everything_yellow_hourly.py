#!/usr/bin/python

from operator import itemgetter
import sys

current_key = None
current_table = None
t_value = []

for line in sys.stdin:
	line = line.strip()
	words = line.split("\t")
	key, table, value = words
	if(current_key == key):
		if(current_table == table):
			t_value.append(value)
		else:
			for t in t_value:
					print '%s,%s' % (key, t + ',' + value)
	else:
		current_table = table
		current_key = key
		t_value = []
		t_value.append(value)
		