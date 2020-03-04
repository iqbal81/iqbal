import java.sql.*;
import java.util.*;
import java.io.*;
public class empl
{
	public static void main(String a[]) throws SQLException,ClassNotFoundException
	{
		ResultSet rs;
		Statement st;		
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3308/kunal","root","1111");
			/*st=con.createStatement();
			int ab=Integer.parseInt(a[0]);
			rs=st.executeUpdate("UPDATE employee set salary='salary*15/100' WHERE eno="+ab);
			System.out.println("updated salary");*/
			PreparedStatement ps=con.prepareStatement("UPDATE employee set salary = 'salary*(15/100)' WHERE eno = ?");
			ps.setInt(1,Integer.parseInt(a[0]));
			ps.executeUpdate();
			System.out.println("updated salary");
			con.close();
		}
		catch(Exception w)
		{
			System.out.println(w);
		}
	}
}