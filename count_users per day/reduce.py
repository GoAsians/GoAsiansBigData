#!/usr/bin/env python

from operator import itemgetter
import sys

current_word = None
current_count = 0
current_value = None
word = None

for line in sys.stdin:
	line = line.strip()
	word,count,value = line.split("\t")
	try:
		count = int(count)
		value = str(value)
	except:
		continue

	if current_word == word:
		current_count += count
		current_value = value
	else:
		if current_word:
			print '%s,%s,%s' % (current_word,current_count,current_value)
		current_count = count
		current_word=word
		current_value = value
if current_word == word:
		print '%s,%s,%s' % (current_word,current_count,current_value)