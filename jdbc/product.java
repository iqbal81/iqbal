import java.sql.*;
import java.awt.*;
import java.awt.event.*;
import java.util.*;
import java.io.*;
public class product extends Frame implements ActionListener
{
	TextField t1,t2,t3,t4;
	Label l1,l2,l3;
	Button b,clear;
	ResultSet rs;
	Statement st;
	product()
	{
		setLayout(new FlowLayout());
		this.setLayout(null);
		l1=new Label("Product Number: ");
		l1.setBounds(30,90,90,60);
		l2=new Label("Product Name: ");
		l2.setBounds(30,130,90,60);
		l3=new Label("Product Price: ");
		l3.setBounds(30,170,90,60);
		t4=new TextField(20);
		t4.setBounds(150,300,90,20);
		t1=new TextField(20);
		t1.setBounds(150,100,90,20);
		t2=new TextField(20);
		t2.setBounds(150,140,90,20);
		t3=new TextField(20);
		t3.setBounds(150,190,90,20);
		b=new Button("Search");
		b.setBounds(100,220,70,40);
		b.addActionListener(this);
		clear=new Button("Clear");
		clear.setBounds(200,220,70,40);
		clear.addActionListener(this);
		this.add(l1);this.add(t1);this.add(l2);
		this.add(t2);this.add(l3);this.add(t3);
		this.add(b);this.add(t4);this.add(clear);
	}
	public void actionPerformed(ActionEvent e)
	{
		
		if(e.getSource()==clear)
		{
			t1.setText("");
			t2.setText("");
			t3.setText("");
		}
		if(e.getSource()==b)
		{
				try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3307/jean","root","1111");
			st=con.createStatement();
			int ab=Integer.parseInt(t1.getText());
			rs=st.executeQuery("select * from product where pno="+ab);
		}
		catch(Exception w)
		{
			t4.setText("error "+w);
		}
			try
			{
					rs.first();
					t1.setText(rs.getString(1));
					t2.setText(rs.getString(2));
					t3.setText(rs.getString(3));
			}
			catch(Exception e1)
			{
				t1.setText("");
				t2.setText("");
				t3.setText("");
				t4.setText(""+e1);
			}
		}
	}
	public static void main(String args[])
	{
		product p=new product();
		p.setVisible(true);
		p.setSize(500,500);
		p.setTitle("Product");
	}
}