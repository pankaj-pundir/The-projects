#include<iostream>
#include<cstdio>
using namespace std;
int sum(int a[],int b[],int c[],int ai,int bi)
{	
	int carry=0,ci,x;
	for(ci=0;ci<ai||ci<bi;ci++)
	{	
		x=b[ci];
		c[ci]=(a[ci]+x+carry)%10;
		carry=(a[ci]+x+carry)/10;
	}
	if(carry>0)
		c[ci++]=carry;
	return ci;
}

// Main multiplication function using "vedic maths"

int mul(int a[],int b[],int c[],int ai,int bi)     
{
	int i,ci=0,x[42],xi=0,t,s,j;
	for(i=0;i<ai/2;i++)
	{	
		s=a[i];
		a[i]=a[ai-i-1];
		a[ai-i-1]=s;
	}
	for(i=0;i<bi/2;i++)
	{	
		s=b[i];
		b[i]=b[bi-i-1];
		b[bi-i-1]=s;
	}
	for(i=0;i<bi;i++)
	{
		int carry=0;
		for(t=0;t<42;t++)
			x[t]=0;
		for(j=0;j<ai;j++)
		{
			x[j]=(b[i]*a[j]+carry)%10;
			carry=(b[i]*a[j]+carry)/10;
		}
		if(carry>0)
			x[j++]=carry;
		for(t=i+j-1;t>=i;t--)
			x[t]=x[t-i];
		for(t=i;t>0;t--)
			x[t-1]=0;
		j=j+i;
		ci=sum(x,c,c,j,ci);
	}
	return ci;
}




int main()
{

  //Maximum size to 20 digits input (adjustable)

	int a[20],b[20],c[41],i,ai,bi,ci,s;
	char n;
	for(i=0;i<20;i++)
		a[i]=b[i]=c[i]=0;
	for(i=20;i<41;i++)
		c[i]=0;

  cout<<"Large Number multiplication using \"VEDIC MATHS\" \ninput 1st number \n";
	for(ai=0;ai<20;ai++)
	{
		n=getchar();
		if(n==32||n==10||n==-1)
			break;
		// cout<<n;
		a[ai]=n-48;
	}		//ai is the number of elements present in a[]
	cout<<endl;
  cout<<"input 2nd number \n ";
	for(bi=0;bi<20;bi++)
	{
		n=getchar();
		if(n==32||n==10||n==-1)
			break;
	//	cout<<n;
		b[bi]=n-48;
	}

  // multiplication is performed using arrays and vedic maths

	ci=mul(a,b,c,ai,bi);


	cout<<endl;
	for(i=ci-1;i>=0;i--)
		cout<<c[i];
	return 0;
}
