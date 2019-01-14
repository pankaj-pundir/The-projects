import matplotlib.pyplot as plt
import matplotlib.patches as mpatches
from mpl_toolkits.mplot3d import Axes3D
import seaborn as sb
import pylab as pl
#style.use("fivethirtyeight")
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
velocity=[0.0 for i in range(4)]
# pr=[0.0 for i in range(4)]
pan=[0.0 for i in range(4)]
#plt.axon()
# def distance(v,a,t=30):
# 	return v*t+((0.5)*a*t**2)
d1=[0.0 for i in range(4)]
d2=[0.0 for i in range(4)]
d3=[0.0 for i in range(4)]
diff=0.3
for l in range(1,len(lines)-1):
	
	z=list(map(lambda x:(float(x)),lines[l].split(',')))
	tnew=int(z[0])
	if abs(z[1]-d1[1])<diff:
		z[1]=d1[1]
	if abs(z[2]-d2[2])<diff:
		z[2]=d2[2]
	if abs(z[3]-d3[3])<diff:
		z[3]=d3[3]
	for b in range(1,4):		# avreage distance for smooth curve
		
		#temp=d3[b]
		d3[b]=z[b]

		dist[b]+=((d1[b]+d2[b]+d3[b])/3)*0.03
		#dist_[b].append(pan[b])
		d1[b]=d2[b]
		d2[b]=d3[b]
		#dist[b]=pan[b]

	# time=0.03
	# for i in range(1,4):
	# 	velocity[i]=z[i]*time
	# for i in range(1,4):
	# 	dist[i]+=distance(velocity[i],z[i],time)
	#print(str(z[2])+"  "+str(pan[2]))	
	if  ((z[1]**2+z[2]**2+z[3]**2)**(0.5))>5:			# above speed limit
		ax1.scatter(dist[1],dist[2],dist[3],c='red',marker='o',alpha=0.8,s=10)
		#print("new format")
	else:
		ax1.scatter(dist[1],dist[2],dist[3],c='green',s=10,alpha=0.8)
	# for b in range(4):
	# 	pr[b]=z[b]
const=10
# ma=max(max(xs),const,max(ys),max(zs))
# mi=min(min(xs),min(ys),min(zs),-1*const)
# plt.xlim(mi,ma)
plt.title("\n Speed Alert  \n red- over speed limit ",fontsize=10)
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
ax1.set_aspect('equal')
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
