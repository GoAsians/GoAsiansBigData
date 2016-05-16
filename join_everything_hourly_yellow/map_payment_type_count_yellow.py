#!/usr/bin/env python

import sys

for line in sys.stdin:
	try:
		line = line.strip()
		words = line.split(",")
		payment_type=words[39]
		if payment_type=="1":
			key="Credit Card"
		elif payment_type=="2":
			key="Cash"
		elif payment_type=="3":
			key="No Charge"
		elif payment_type=="4":
			key="Dispute"
		elif payment_type=="5":
			key="Unknown"
		elif payment_type=="6":
			key="Voided Trip"
		print "%s\t%s"%(key,1)
	except:
		pass