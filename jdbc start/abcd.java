import java.sql.*;
import java.io.*;
public class abcd
{
	public static void main(String a[]) throws SQLException, IOException
	{
		try{
		Class.forName("com.mysql.jdbc.Driver");
		Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3307/test","root","1111");
		PreparedStatement ps=con.prepareStatement("UPDATE a SET name=? WHERE name=?");
		ps.setString(1,a[0]);
		ps.setString(2,a[1]);
		int r=ps.executeUpdate();
		if(r>0)
			System.out.println("success");
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
}