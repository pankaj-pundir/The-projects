import matplotlib as mpl
from mpl_toolkits.mplot3d import Axes3D
import numpy as np
import matplotlib.pyplot as plt

fig = plt.figure()
ax = fig.gca(projection='3d')
theta = np.linspace(-4 * np.pi, 4 * np.pi, 10)
z = np.linspace(-2, 2, 10)
r = z**2 + 1
x = r * np.sin(theta)
y = r * np.cos(theta)

#1 colored by value of `z`
ax.scatter(x, y, z, c = plt.cm.jet(z/max(z))) 

#2 colored by index (same in this example since z is a linspace too)
N = len(z)
ax.scatter(x, y, z, c = plt.cm.jet(np.linspace(0,1,N)))

po=[i for i in range(1,23,1)]
pi=[i for i in range(1,23,1)]
pu=[i for i in range(1,23,1)]
ax.scatter(po,pi,pu,c='green')

po=[i for i in range(0,24,2)]
pi=[i for i in range(0,36,3)]
pu=[i for i in range(00,48,4)]
ax.scatter(po,pi,pu,c='red')

plt.show()