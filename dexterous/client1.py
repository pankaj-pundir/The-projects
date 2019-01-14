import socket
#client
HOST = '192.168.43.166'
PORT = 2055              
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect((HOST, PORT))
#s.sendall('Hello, world')
while True:
	data = s.recv(1024).decode()
	print(data)

s.close()

