import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
public class one extends JFrame implements ActionListener
{
	JLabel l1,l2,l3,l4;
	JButton b1,b2;
	JTextField t1,t2,t3,t4,t5;
	JFrame f;
	one()
	{
		f=new JFrame("Calculations");
		l1=new JLabel("Decimal");
		l2=new JLabel("Binary");
		l3=new JLabel("Octel");
		l4=new JLabel("Hexadecimal");
		t1=new JTextField(10);
		t2=new JTextField(10);
		t3=new JTextField(10);
		t4=new JTextField(10);
		t5=new JTextField(10);
		l1.setBounds(10,10,100,20);
		t1.setBounds(10,30,100,20);
		l2.setBounds(10,50,100,20);
		t2.setBounds(10,70,100,20);
		l3.setBounds(10,90,100,20);
		t3.setBounds(10,110,100,20);
		l4.setBounds(10,130,100,20);
		t4.setBounds(10,150,100,20);
		b1=new JButton("calculate");
		b2=new JButton("exit");
		b1.setBounds(10,200,100,50);
		b2.setBounds(10,250,100,50);
		b1.addActionListener(this);
		b2.addActionListener(this);
		b1.setMnemonic('c');
		f.add(l1);
		f.add(t1);
		f.add(l2);
		f.add(t2);
		f.add(l3);
		f.add(t3);
		f.add(l4);
		f.add(t4);
		f.add(t5);
		f.remove(t5);
		f.add(b1);
		f.add(b2);
		f.setSize(600,600);
		f.setLayout(null);
		f.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		f.setVisible(true);
	}
	public void actionPerformed(ActionEvent e)
	{
		if(e.getSource()==b1)
		{
			int s=Integer.parseInt(t1.getText());
		t2.setText(Integer.toBinaryString(s).toString());
		t3.setText(Integer.toOctalString(s).toString());
		t4.setText(Integer.toHexString(s).toString());
		String s1=t1.getText();
		t5.setText(s1);
		}
		else if(e.getSource()==b2)
		
			JOptionPane.showMessageDialog(null,"Nice Job");
		
	}
	public static void main(String args[])
	{
		new one();
		
	}
}