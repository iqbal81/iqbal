import java.awt.*;//run using appletviewer prog_name.java
import java.awt.event.*;
import javax.swing.*;
import java.applet.*;
/*<applet code="three.class" width=100 height=100>
</applet>
*/
public class three extends Applet
{
 JPanel p;
 JTextField t;
 String message;
 public void init()
 {
 t=new JTextField(20);
 add(t);
  addMouseListener(new MouseAdapter()
  {
   public void mouseClicked(MouseEvent me)
   {
   message ="Mouse Clicked:X="+me.getX()+"Y="+me.getY();
   t.setText(message);
   }
  });
  addMouseMotionListener(new MouseMotionAdapter()
  {
   public void mouseMoved(MouseEvent me)
   {
   message ="Mouse Moved:X="+me.getX()+"Y="+me.getY();
   t.setText(message);
   }
  });
}
public static void main(String args[])
{
	new three();
}
  }
 
