import socket
s=socket.socket()
host="192.168.43.1"
port=3047
z='p'
s.connect((host,port))
import os
os.system("clear")
print ("connection successful")
while z!='0':
    rmsg=s.recv(1024).decode()
    #s.send('have successfully received the data'.encode())
    print("> "+rmsg)
    if rmsg=='0':
        break
    msg=input(">> ")
    s.send(msg.encode())
    z=rmsg
s.close()
print ("connection successfully closed")
