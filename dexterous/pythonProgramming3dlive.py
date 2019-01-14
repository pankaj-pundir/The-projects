import matplotlib.pyplot as plt
import matplotlib.animation as animation
from mpl_toolkits.mplot3d import Axes3D
import time

fig = plt.figure()
plt.ion()
ax1 = fig.add_subplot(1,1,1)
#ax1=fig.add_subplot(111,projection='3d')

def animate(i):
    pullData = open("sample.txt","r").read()
    dataArray = pullData.split('\n')
    xar = []
    yar = []
    zar = []
    for eachLine in dataArray:
        if len(eachLine)>1:
            x = eachLine.split(',')
            xar.append(float(x[0]))
            yar.append(float(x[1]))
            zar.append(float(x[2]))
    ax1.clear()
    ax1.scatter(xar,yar,zar)
    #ax1.plot(xar,yar)
    plt.show()
ani = animation.FuncAnimation(fig, animate, interval=100)
plt.show()
