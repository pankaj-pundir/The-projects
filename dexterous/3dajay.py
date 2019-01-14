import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
import seaborn as sb
import pylab as pl
style.use("fidistethirtyeight")
fig=plt.figure()
plt.ion()
ax1=fig.add_subplot(111,projection='3d')

graph_data=open("data.txt",'r').read()
lines=graph_data.split('\n')
xs=[]
ys=[]
zs=[]
ts=[]
dist=[0.0 for i in range(4)]
pr=[0.0 for i in range(4)]
pan=[0.0 for i in range(4)]
#plt.axon()

for l in range(1,len(lines)-1):
	
	z=list(map(lambda x:(float(x)),lines[l].split(',')))
	tnew=int(z[0])

	for b in range(1,4):
		pan[b]+=(z[b])
		if b==4:
			dist[b]=0
		else:
			dist[b]=pan[b]

	xs.append(dist[1])
	ys.append(dist[2])
	zs.append(dist[3])

	

const=10

ax1.scatter(xs,ys,zs,c='red')
plt.xlabel("x-axis")
plt.ylabel("y-axis")
plt.show()

