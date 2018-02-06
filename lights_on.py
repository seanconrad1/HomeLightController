import serial  
import time
import sys  

try:  
    print "Connected..."  
    arduino = serial.Serial('COM5', 9600)
    time.sleep(1)
    arduino.flush()

except:  
    print "Failed to connect"

sleeptime = 0.1
num = None
num2 = 1

while True:
    try:
        
      # Open a file
        fo = open("lightstate.txt", "r+")
        num = fo.read()
        # Close opend file
        fo.close()

        if num2 != num :
            arduino.write('H' + num)
            time.sleep(sleeptime)
            num2 = num
            print num

    except:  
        print "Failed !"
