package intelligent.algo;
import java.lang.Math;
import java.applet.Applet;
import java.awt.*;


public class order extends Applet
{
  
    double x[]=new double[11];
    double x1,y1,x2,y2,t1,t2,s1,s2,u1,u2,l1,l2,d,e;
    int  a=1;
    double[] n=new double[20];
    double[] b=new double [20];
    double[] c=new double [20];
    double [] a1=new double[20];
    double[] df=new double [20];
    double[] ef=new double [20];
   
    
    
       int growth()
           {
                    System.out.println("no\tn \tn2 \tn3    \t       logn       \tnlogn");
                   
                    while(a<=10)
                        {
                             
                             a1[a]=a;
                             n[a]=a;
                             b[a]=a*a;
                             c[a]=a*a*a;
                             d=Math.log(a);
                             e=a*Math.log(a);
                             ef[a]=e;
                             df[a]=d;
           
   System.out.println("" +a1[a] + "\t" +n[a] +"\t"  +b[a] +"\t"  +c[a]         +"\t"+ "\t"  +    df[a]             + "\t" + "\t"  +   ef[a]);
          
           a++;
                          }

    return 0;
 
   }
 
       
public void paint(Graphics g) {

g.setColor(new Color(255, 255, 192)); 
g.fillRect(0,0,1900,1500); 
// Imaginary X-Axis Scale
g.setColor(Color.black);
g.drawLine(50,650,450,650);
g.drawString("0",50,665);
g.fillOval(50,650,3,3);
g.drawString("1",90,665);
g.fillOval(90,650,3,3);
g.drawString("2",130,665);
g.fillOval(130,650,3,3);
g.drawString("3",170,665);
g.fillOval(170,650,3,3);
g.drawString("4",210,665);
g.fillOval(210,650,3,3);
g.drawString("5",250,665);
g.fillOval(250,650,3,3);
g.drawString("6",290,665);
g.fillOval(290,650,3,3);
g.drawString("7",330,665);
g.fillOval(330,650,3,3);
g.drawString("8",370,665);
g.fillOval(370,650,3,3);
g.drawString("9",410,665);
g.fillOval(410,650,3,3);
g.drawString("10",450,665);
g.fillOval(450,650,3,3);
// Imaginary Y Axis

g.drawLine(50,30,50,650);
g.drawString("1000",20,150);
g.fillOval(50,150,3,3);
g.drawString("900",20,200);
g.fillOval(50,200,3,3);
g.drawString("800",20,250);
g.fillOval(50,250,3,3);
g.drawString("700",20,300);
g.fillOval(50,300,3,3);
g.drawString("600",20,350);
g.fillOval(50,350,3,3);
g.drawString("500",20,400);
g.fillOval(50,400,3,3);
g.drawString("400",20,450);
g.fillOval(50,450,3,3);
g.drawString("300",20,500);
g.fillOval(50,500,3,3);
g.drawString("200",20,550);
g.fillOval(50,550,3,3);
g.drawString("100",20,600);
g.fillOval(50,600,3,3);
g.drawString("0",20,650);
g.fillOval(50,650,3,3);

for(int i=0; i<x.length; i++)
{
x1=50+((a1[i]*40)/1);
y1=650-((n[i]*50)/100);
//lx=x1;
//ly=y1;
g.fillOval((int)x1,(int)y1,3,3);
if(i != (x.length -1))
{ 
int j=i+1;
x2=50+((a1[j]*40)/1);
y2=650-((n[j]*50)/100);
//ux=x2;
//uy=y2;
g.setColor(Color.red);

g.drawLine((int)x1,(int)y1,(int)x2,(int)y2);
} //end of if 

} //end of for 
g.setColor(Color.red);
g.drawString("n",(int)x1,(int)y1);
for(int i=0; i<x.length; i++)
{
x1=50+((a1[i]*40)/1);
t1=650-((b[i]*50)/100);

////lx=x1;
////ly=y1;
g.fillOval((int)x1,(int)t1,3,3);
if(i != (x.length -1))
{ 
int j=i+1;
x2=50+((a1[j]*40)/1);
t2=650-((b[j]*50)/100);
////ux=x2;
////uy=y2;
g.setColor(Color.blue);

g.drawLine((int)x1,(int)t1,(int)x2,(int)t2);
} //end of if 

} //end of for
g.setColor(Color.blue);
g.drawString("n2",(int)x1,(int)t1);
for(int i=0; i<x.length; i++)
{
x1=50+((a1[i]*40)/1);
s1=650-((c[i]*50)/100);

//lx=x1;
//ly=y1;
g.fillOval((int)x1,(int)s1,3,3);
if(i != (x.length -1))
{ 
int j=i+1;
x2=50+((a1[j]*40)/1);
s2=650-((c[j]*50)/100);
//ux=x2;
//uy=y2;
g.setColor(Color.green);

g.drawLine((int)x1,(int)s1,(int)x2,(int)s2);
} //end of if 

} //end of for 
g.setColor(Color.green);
g.drawString("n3",(int)x1,(int)s1);
for(int i=0; i<x.length; i++)
{
x1=50+((a1[i]*40)/1);
u1=650-((df[i]*50)/100);

//lx=x1;
//ly=y1;
g.fillOval((int)x1,(int)u1,3,3);
if(i != (x.length -1))
{ 
int j=i+1;
x2=50+((a1[j]*40)/1);
u2=650-((df[j]*50)/100);
//ux=x2;
//uy=y2;
g.setColor(Color.orange);

g.drawLine((int)x1,(int)u1,(int)x2,(int)u2);
} //end of if 

} //end of for 
g.setColor(Color.orange);
g.drawString("logn",(int)x1,(int)u1);
for(int i=0; i<x.length; i++)
{
x1=50+((a1[i]*40)/1);
l1=650-((ef[i]*50)/100);

//lx=x1;
//ly=y1;
g.fillOval((int)x1,(int)l1,3,3);
if(i != (x.length -1))
{ 
int j=i+1;
x2=50+((a1[j]*40)/1);
l2=650-((ef[j]*50)/100);
//ux=x2;
//uy=y2;
g.setColor(Color.black);

g.drawLine((int)x1,(int)l1,(int)x2,(int)l2);
} //end of if 

} //end of for 
g.setColor(Color.black);
g.drawString("nlogn",(int)x1,(int)l1);

}

   
public void start()
{
repaint();
}
}