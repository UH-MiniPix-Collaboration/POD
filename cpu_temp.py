#!/usr/bin/python3

import os
import datetime
import pymysql as sql

# Prepare cursor object
cursor = db.cursor()

# Prepare SQL Query
query = "INSERT INTO cpu(temperature, timestamp, date) values (" + get_pi_temp() + ", " + get_timestamp()[1] + ", " + get_timestamp()[0] + ");"

# Try and execute the SQL command
try: 
    cursor.execute(sql)
    db.commit()
except: 
    db.rollback()
 
def get_timestamp():
    
    ts = str(datetime.datetime.utcnow()).split(".")[0]
    date = str(ts.split(" ")[0])
    time = str(ts.split(" ")[1])

    return (date, time) 


def get_pi_temp():
    
    cpu_temp = os.popen("/opt/vc/bin/vcgencmd measure_temp").read()
    cpu_temp = float(cpu_temp.split("=")[1].split("'")[0])
	
    return str(cpu_temp)

if __name__ == "__main__":
    
    print (str(get_timestamp()[0]), str(get_timestamp()[1]), str(get_pi_temp()))

