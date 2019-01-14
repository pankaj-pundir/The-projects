import matplotlib as mpl
from mpl_toolkits.mplot3d import Axes3D
import numpy as np
import matplotlib.pyplot as plt

fig = plt.figure()
ax = fig.gca(projection='3d')


graph_data=open("data.txt",'r').read()
lines=graph_data.split('\n')
xs=[]
ys=[]
zs=[]
ts=[]
v=[0.0 for i in range(4)]
pr=[0.0 for i in range(4)]
pan=[0.0 for i in range(4)]

for l in range(1,len(lines)-1):
	
	z=list(map(lambda x:(float(x)),lines[l].split(',')))
	tnew=int(z[0])
	for b in range(1,4):
		pan[b]+=(z[b])*20
		if b==4:
			v[b]=0
		else:
			v[b]=pan[b]*20
	if abs(pan[1]+pan[2]+pan[3])>400:
		ax.scatter(v[1],v[2],v[3],c='red')
	else:
		ax.scatter(v[1],v[2],v[3],c='green')

plt.show()