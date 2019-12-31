import java.awt.*;
import javax.swing.*;
import java.awt.event.*;
public class one extends JFrame implements ActionListener,ItemListener
{
	JLabel l1,l2,l3,l4,l5,l6;
	JRadioButton r[]=new JRadioButton[3];
	JCheckBox c[]=new JCheckBox[3];
	JTextField t,t1,t2,t3;
	JFrame f;
	one()
	{
		f=new JFrame();
		f.setSize(400,400);
		f.setVisible(true);
		f.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		f.setLayout(new FlowLayout());
		l1=new JLabel("you name :");
		t=new JTextField(10);
		f.add(l1);
		f.add(t);
		l2=new JLabel("your class : ");
		f.add(l2);
		r[0]=new JRadioButton("FY");
		r[1]=new JRadioButton("SY");
		r[2]=new JRadioButton("TY");
		for(int i=0;i<3;i++)
		{
			f.add(r[i]);
			r[i].addActionListener(this);
		}
		l3=new JLabel("your hobbies");
		f.add(l3);
		c[0]=new JCheckBox("cooking");
		c[1]=new JCheckBox("dance");
		c[2]=new JCheckBox("sports");
		for(int i=0;i<3;i++)
		{
			f.add(c[i]);
			c[i].addItemListener(this);
		}
		l4=new JLabel("name");
		f.add(l4);
		t1=new JTextField(10);
		f.add(t1);
		l5=new JLabel("class");
		f.add(l5);
		t2=new JTextField(10);
		f.add(t2);
		l6=new JLabel("hobbies");
		f.add(l6);
		t3=new JTextField(30);
		f.add(t3);
	}
	public void itemStateChanged(ItemEvent e)
	{
		String text="";
		String k="";
		for(int i=0;i<3;i++)
		{
			if(c[i].isSelected())
				text=c[i].getText();
			k=k+" "+text;
			t3.setText(k);
		}
	}
	public void actionPerformed(ActionEvent e)
	{
		if(e.getActionCommand()=="FY" || e.getActionCommand()=="SY" || e.getActionCommand()=="TY")
		{
			t2.setText(e.getActionCommand());
			String s=t.getText();
			t1.setText(s);
		}
	}
	public static void main(String args[])
	{
		new one();//your class has radio buttons and gives selected items on screen//
	}
}