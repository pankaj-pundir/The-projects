import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
import seaborn as sb
import pylab as pl
import socket
#tyle.use("fivethirtyeight")
fig=plt.figure()
plt.ion()
#ax1=fig.add_subplot(111,projection='3d')
ax1=fig.gca(projection='3d')
HOST = '192.168.43.166'
PORT = 2058       
s = socket.socket()
s.bind((HOST, PORT))
s.listen(5)
c,addr=s.accept()
time=0
n=0
pan=[0.0 for i in range(4)]
v=[0.0 for i in range(4)]
if True:
	print("successfully conneccted with ",addr)
	while n<100:
		n+=1
		data = c.recv(1024).decode()
		print(data)
		#d.write(str(data))
		z=list(map(lambda x:(float(x)),data.split(',')))
		print(z)
		for b in range(0,3):
			pan[b]+=(z[b])
			v[b]=pan[b]
		if v[0]>0 and -1<v[1]<3 and v[2]>0:
			ax1.scatter(v[0]*0.04,v[1]*0.04,v[2]*0.04,c='blue')
		else:
			ax1.scatter(v[0]*0.04,v[1]*0.04,v[2]*0.04,c='red')
	s.close()
	plt.show()
	plt.pause(25)
# plt.xlabel("x-axis")
# plt.ylabel("y-axis")
