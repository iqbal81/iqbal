import javax.servlet.*;
import java.io.*;
public class fa extends GenericServlet
{
 public void service(ServletRequest req,ServletResponse res) throws ServletException,IOException
 {
   PrintWriter out=res.getWriter();
   int s1=Integer.parseInt(req.getParameter("kunal"));
   int f=1;
   for(int i=2;i<=s1;i++)
   {
	   f=f*i;
   }
   out.println("the factorial of given number is "+f);
 }
}