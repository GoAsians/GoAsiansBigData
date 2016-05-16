#!/usr/bin/env python

from operator import itemgetter
import sys

average=0.0
current_word = None
current_count = 0
word = None
current_value = 0.0

for line in sys.stdin:
	line = line.strip()
	word,value,count = line.split("\t")
	try:
		count = int(count)
		value=float(value)
	except:
		continue

	if current_word == word:
		current_count += count
		current_value += float(value)
	else:
		if current_word:
			if(current_count==0):
				current_count=1
			average = float(current_value/current_count)
			print '%s,%s,%s' % (current_word,current_count,average)
		current_count = count
		current_word=word
		current_value=value
if current_word == word:
	if(current_count==0):
		current_count=1
	average=float(current_value/current_count)
	print '%s,%s,%s' % (current_word,current_count,average)