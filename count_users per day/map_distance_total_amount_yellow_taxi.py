#!/usr/bin/env python

import sys

for line in sys.stdin:
	try:
		line = line.strip()
		words = line.split(",")
		distance = float(words[36])
		total_amount= float(words[50])
		if(distance>0.0 and distance<=1.0):
			key="Less than 1 Mile"
			value=total_amount
		elif(distance>1.0 and distance<=2.0):
			key="1-2 Miles"
			value=total_amount
		elif(distance>2.0 and distance<=4.0):
			key="2-4 Miles"
			value=total_amount
		elif(distance>4.0 and distance<=6.0):
			key="4-6 Miles"
			value=total_amount
		elif(distance>6.0 and distance<=8.0):
			key="6-8 Miles"
			value=total_amount
		elif(distance>8.0 and distance<=10.0):
			key="8-10 Miles"
			value=total_amount
		elif(distance>10.0 and distance<=15.0):
			key="10-15 Miles"
			value=total_amount
		elif(distance>15.0 and distance<=20.0):
			key="15-20 Miles"
			value=total_amount
		elif(distance>20.0 and distance<=25.0):
			key="20-25 Miles"
			value=total_amount
		elif(distance>25.0 and distance<=30.0):
			key="25-30 Miles"
			value=total_amount
		elif(distance>30.0 and distance<=35.0):
			key="30-35 Miles"
			value=total_amount
		elif(distance>35.0 and distance<=45.0):
			key="35-45 Miles"
			value=total_amount
		elif(distance>45.0):
			key="More than 45 Miles"
			value=total_amount

		print "%s\t%s\t%s"%(key,value,1)
	except:
		pass