import matplotlib.pyplot as plt
import matplotlib.animation as animiation
from matplotlib import style
import numpy as np
#style.use("fivethirtyeight")
fig=plt.figure()
ax1=fig.add_subplot(1,1,1)

def animate(i):
	
	#lines=graph_data.split('\n')
	xs=[]
	ys=[]
	zs=[]
	ts=[]
	while True:
		
		graph_data=open("data.txt",'r').read()
		if True:
			try:
				t,x,y,z=graph_data.split(',')
				print(str(x)+str(y)+str(z))
				ts.append(t)
				xs.append(x)
				ys.append(y)
				zs.append(z)
		#tim=[k for k in range(1,len(lines)+1) ]
				ax1.clear()
				ax1.plot(ts,xs,'r')
				ax1.plot(ts,zs,'g')
				ax1.plot(ts,ys,'b')
				plt.pause(0.5)
			except ValueError:
				continue

animate(fig)
#ani=animiation.FuncAnimation(fig,animate,interval=1000)
plt.show()