import java.io.*;
import java.awt.*;
import java.applet.*;
/*<applet code="AppletDemo.class" height="1000" width="1000"></applet>*/
public class AppletDemo extends Applet
{
	public void init()
	{
	
	}
	public void start()
	{
	
	}
	public void paint(Graphics g)
	{
		g.setColor(Color.red);
		g.drawRect(531,68,81,46);
		g.drawLine(530,150,530,68);
	}
	public void stop()
	{
		
	}
	public void destroy()
	{
		System.out.println("Applet was Destroyed");
	}
}