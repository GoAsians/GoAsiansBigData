'''
Created on 2016年4月23日

@author: Guo
'''
#!/usr/bin/python

from operator import itemgetter
import sys
#s is the aaded number
#val is the t_value list
#i is the ith item in the list
current_key = None
key = None
t_value = [0,0,[0,0],[0,0],[0,0],[0,0],0,0,0,0,[0,0],0,0,0,0,0,0,0,0,0,[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0]]
def num(s,val,i):
    try:
        float(s)
        val[i] = [val[i][0] + 1, (val[i][1]*val[i][0] + float(s))/val[i][0] + 1]
    except:
        val[i] = [val[i][0], val[i][1]]
    return
        
def addto(valu):
    num(valu[2],t_value,2)
    num(valu[3],t_value,3)
    num(valu[4],t_value,4)
    num(valu[5],t_value,5)
    num(valu[10],t_value,10)
    num(valu[20],t_value,20)
    num(valu[21],t_value,21)
    num(valu[22],t_value,22)
    num(valu[23],t_value,23)
    num(valu[24],t_value,24)
    num(valu[25],t_value,25)
    num(valu[26],t_value,26)
    num(valu[27],t_value,27)
    num(valu[28],t_value,28)
    num(valu[29],t_value,29)
    num(valu[30],t_value,30)
    num(valu[31],t_value,31)
    t_value[0] = valu[0]
    t_value[1] = valu[1]
    t_value[6] = valu[6]
    t_value[7] = valu[7]
    t_value[8] = valu[8]
    t_value[9] = valu[9]
    t_value[11] = valu[11]
    t_value[12] = valu[12]
    t_value[13] = valu[13]
    t_value[14] = valu[14]
    t_value[15] = valu[15]
    t_value[16] = valu[16]
    t_value[17] = valu[17]
    t_value[18] = valu[18]
    t_value[19] = valu[19]
    return;

def printout():
    print '%s\t%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s.%s' % (current_key, t_value[0],t_value[1],t_value[2][1],t_value[3][1],t_value[4][1],t_value[5][1],t_value[6],t_value[7],t_value[8],t_value[9],t_value[10][1],t_value[11],t_value[12],t_value[13],t_value[14],t_value[15],t_value[16],t_value[17],t_value[18],t_value[19],t_value[20][1],t_value[21][1],t_value[22][1],t_value[23][1],t_value[24][1],t_value[25][1],t_value[26][1],t_value[27][1],t_value[28][1],t_value[29][1],t_value[30][1],t_value[31][1])
#input comes from STDIN (stream data that goes to the program)

for line in sys.stdin:
    line = line.strip()
    words = line.split('\t')
    key = words[0]
    values = words[1].split(',')
    if(current_key == key):#Same Key
        addto(values)
    else:#Next Key
        if current_key:    
            printout()
        t_value = [0,0,[0,0],[0,0],[0,0],[0,0],0,0,0,0,[0,0],0,0,0,0,0,0,0,0,0,[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0]]
        current_key = key
        addto(values)
if current_key == key:
    printout()
