import java.awt.*;  
import java.awt.event.*;  
public class four extends Frame implements MouseMotionListener
{  
    four()
	{  
        addMouseMotionListener(this);  
        setSize(300,300);  
        setLayout(null);  
        setVisible(true);  
    }  
	public void mouseDragged(MouseEvent e) 
	{  
		Graphics g=getGraphics();  
		g.setColor(Color.BLUE);  
		g.fillOval(e.getX(),e.getY(),20,20);  
	}  
	public void mouseMoved(MouseEvent e) 
	{
		Graphics g=getGraphics();  
		g.setColor(Color.RED);  
		g.fillOval(e.getX(),e.getY(),20,20); 
	}  
  
	public static void main(String[] args)
	{  
		new four();  
	}  
}  