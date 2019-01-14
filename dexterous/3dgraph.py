import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
import seaborn as sb
import pylab as pl
#style.use("fidistethirtyeight")
fig=plt.figure()
ax1=fig.add_subplot(111,projection='3d')
fig.suptitle('DexTerous \n ',color='red', fontsize=20, fontweight='bold')

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
	#lambda x:(float(x)*100)//10
	#print(z)
	#print(str(x)+str(y)+str(z))
	#ts.append(t)
	#print(type(z[1]))
	time=(tnew-int(lines[l-1].split(',')[0]))/100
	for b in range(1,4):
		if b==2:
			if z[2]>-1 and z[2]<0:
				z[2]=0
		pan[b]+=(z[b])
		dist[b]=pan[b]*0.4
	print(str(z[2])+"  "+str(pan[2]))	
	xs.append(dist[1])
	ys.append(dist[2])
	zs.append(dist[3])
	for b in range(4):
		pr[b]=z[b]
const=10
plt.title("\n 3D Object Tracking",fontsize=10)
plt.xlabel("X-axis",fontsize=10)
plt.ylabel("Y-axis",fontsize=10)

# red_dot = plt.plot(3, "ro", markersize=15)
# blue_dot = plt.plot(4, "bo", markersize=15)
#red_patch = mpatches.Patch(color='red', marker='o',label='Under specified speed')

# c = mpatches.Circle((0.5, 0.5), 0.25, facecolor="green",
#                     edgecolor="red", linewidth=3)
# plt.legend([c], ["under"])
ax1.set_zlabel("Z-axis")
# plt.ylim(mi,ma)
# ax1.set_zlim(mi,ma)

#ax1.text(2, 6, "an equation: $E=mc^2$", fontsize=15)
#ax1.set_aspect('equal')
ax1.grid(False)
fig.tight_layout()
# ax1.set_zlim(mi,ma)
ax1.scatter(xs,ys,zs)
plt.show()
