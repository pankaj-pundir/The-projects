import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
import seaborn as sb
import pylab as pl
#style.use("fivethirtyeight")
fig=plt.figure()
ax1=fig.add_subplot(111,projection='3d')
fig.suptitle('Dexterous \n ', fontsize=20, fontweight='bold')

graph_data=open("data.txt",'r').read()
lines=graph_data.split('\n')
xs=[]
ys=[]
zs=[]
ts=[]
dist=[0.0 for i in range(4)]
velocity=[0.0 for i in range(4)]
pr=[0.0 for i in range(4)]
pan=[0.0 for i in range(4)]
#plt.axon()
def distance(v,a,t=30):
	return v*t+((0.5)*a*t**2)
for l in range(1,len(lines)-1):
	
	z=list(map(lambda x:(float(x)),lines[l].split(',')))
	tnew=int(z[0])

	# for b in range(1,4):
	# 	if b==2:
	# 		if z[2]>-3 and z[2]<0:
	# 			z[2]=0
	# 	pan[b]+=(z[b])
	# 	dist[b]=pan[b]
	time=0.03
	for i in range(1,4):
		velocity[i]=z[i]*time
	for i in range(1,4):
		dist[i]+=distance(velocity[i],z[i],time)
	#print(str(z[2])+"  "+str(pan[2]))	
	if  dist[3]<0:
		ax1.scatter(dist[1],dist[2],dist[3],c='blue',marker='o',alpha=0.8,s=10)
		#print("new format")
	else:
		ax1.scatter(dist[1],dist[2],dist[3],c='red',s=10,alpha=0.8)
	for b in range(4):
		pr[b]=z[b]
const=10
# ma=max(max(xs),const,max(ys),max(zs))
# mi=min(min(xs),min(ys),min(zs),-1*const)
# plt.xlim(mi,ma)
plt.title("pankaj pundir",fontsize=10)
plt.xlabel("x-axis",fontsize=10)
plt.ylabel("y-axis",fontsize=10)

#plt.zlabel("Z-axis")
# plt.ylim(mi,ma)
# ax1.set_zlim(mi,ma)

#ax1.text(2, 6, "an equation: $E=mc^2$", fontsize=15)
#ax1.set_aspect('equal')
ax1.grid(False)
fig.tight_layout()
#plt.zlim(-10,10)
#ax1.plot_wireframe(xs,ys,zs)
#sb.lmplot(xs,ys,zs)
plt.show()
'''
tim=[i for i in range(1,len(lines)-1)]
pl.plot(tim,xs)'''
#pl.plot(tim,zs)
#pl.show()
