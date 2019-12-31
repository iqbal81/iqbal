import java.awt.GridLayout;
import java.awt.event.*;
import javax.swing.*;
public class two implements ActionListener
{
 JFrame f;
 JButton b[]=new JButton[16];
 JTextField t1;
 int v1,v2,result;
 char op;
two()
 {
  f=new JFrame("calculator");
  f.setSize(300,300);
  f.setVisible(true);
  f.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
  f.setLayout(new GridLayout(4,3));
  t1=new JTextField(10);
  f.add(t1);
  b[0]=new JButton("0");
  b[1]=new JButton("1");
  b[2]=new JButton("2");
  b[3]=new JButton("3");
  b[4]=new JButton("4");
  b[5]=new JButton("5");
  b[6]=new JButton("6");
  b[7]=new JButton("7");
  b[8]=new JButton("8");
  b[9]=new JButton("9");
  b[10]=new JButton("+");
  b[11]=new JButton("-");
  b[12]=new JButton("*");
  b[13]=new JButton("/");
  b[14]=new JButton("clr");
  b[15]=new JButton("=");
  for(int i=0;i<16;i++)
  {
	  f.add(b[i]);
	  b[i].addActionListener(this);
	  
  }
 }
public void actionPerformed(ActionEvent e)
  {
	  if(e.getSource()==b[0])
	  {  t1.setText("0");}
	  if(e.getSource()==b[1])
	  {String kn=t1.getText()+"1";  
  t1.setText(kn);}
	  if(e.getSource()==b[2])
	  { String kn=t1.getText()+"2";  
  t1.setText(kn);}
	  if(e.getSource()==b[3])
	  { String kn=t1.getText()+"3";  
  t1.setText(kn);}
	  if(e.getSource()==b[4])
	  {String kn=t1.getText()+"4";  
  t1.setText(kn);}
	  if(e.getSource()==b[5])
	  {  String kn=t1.getText()+"5";  
  t1.setText(kn);}
	  if(e.getSource()==b[6])
	  {String kn=t1.getText()+"6";  
  t1.setText(kn);}
	  if(e.getSource()==b[7])
	  {  String kn=t1.getText()+"7";  
  t1.setText(kn);}
	  if(e.getSource()==b[8])
	  {String kn=t1.getText()+"8";  
  t1.setText(kn);}
	  if(e.getSource()==b[9])
	  {String kn=t1.getText()+"9";  
  t1.setText(kn);}
	  if(e.getSource()==b[10])
	  {String kn=t1.getText()+"+";  
  t1.setText(kn);}
	  if(e.getSource()==b[11])
	  {String kn=t1.getText()+"-";  
  t1.setText(kn);}
	  if(e.getSource()==b[12])
	  {String kn=t1.getText()+"*";  
  t1.setText(kn);}
	  if(e.getSource()==b[13])
	  {String kn=t1.getText()+"/";  
  t1.setText(kn);}
 String str=e.getActionCommand();
if(strstr.equals("+"))
{
	
	v1=Integer.parseInt(t1.getText());
	op='+';
}	
	  else if(str.equals("-"))
	  {
		  
		 v1=Integer.parseInt(t1.getText());
		 op='-';
	  }
	  else if(str.equals("*"))
	  {
		  
		 v1=Integer.parseInt(t1.getText());
		 op='*';
	  }
	  else if(str.equals("/"))
	  {
		  
		 v1=Integer.parseInt(t1.getText());
		 op='/';
	  }
	  if(op=='+')
	  {
		  result=v1+v2;
		  t1.setText(""+result);
		  
	  }
	  else if(op=='-')
	  {
		  result=v1-v2;
		  t1.setText(""+result);
		  
	  }
	  else if(op=='*')
	  {
		  
		 result=v1*v2;
		  t1.setText(""+result);
	  }
	  else if(op=='/')
	  {
		  
		 result=v1/v2;
		  t1.setText(""+result);
	  }
  
  if(str.equals("clr"))
  {
	  
	  t1.setText("");
  }
}  
public static void main(String args[])
{
	new two();//it is displaying what selected but operations are ot performed
}
  }

 
