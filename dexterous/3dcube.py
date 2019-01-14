import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
#style.use("fivethirtyeight")
fig=plt.figure()
ax1=fig.add_subplot(111,projection='3d')
# xs=[i for i in range(2,12) ]
# ys=[i for i in range(20,30) ]
# zs=[i for i in range(5,15) ]
graph_data=open("data.txt",'r').read()
lines=graph_data.split('\n')
xs=[5,5,5,5,-5,-5,-5,-5]
ys=[5,5,-5,-5,5,5,-5,-5]
zs=[5,-5,5,-5,5,-5,5,-5]
ts=[]
#print(xs)
ax1.scatter(xs,ys,zs,c='r',)

			#plt.pause(0.05)
#ani=animiation.FuncAnimation(fig,animate,interval=1000)
plt.show()
