import javax.servlet.*;
import java.io.*;
public class kunal extends GenericServlet
{
	public void service(ServletRequest req, ServletResponse res)throws ServletException,IOException
	{
		PrintWriter out=res.getWriter();
		int x= Integer.parseInt(req.getParameter("n"));
		int y= Integer.parseInt(req.getParameter("p"));
		int m=1;
		for(int i=1;i<=y;i++)
		{
			m=m*x;
		}
		out.println(m);
	}
}
