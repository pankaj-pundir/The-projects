import socket
#client
HOST = '192.168.43.1'
PORT = 3047              
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect((HOST, PORT))
s.sendall('Hello, world')
data = s.recv(1024).decode()
s.close()
print ('Received', repr(data))
