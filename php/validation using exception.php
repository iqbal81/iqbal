<?php
//wite a program to accept student name age and percentage a.if age is < 18 and > 25 then raise an exception
//b. if (%=0) or >100 then raise and exception
?>
<html>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
enter name<input type="text" name="nm">
<br>
enter age<input type="int" name="ag">
<br>
enter percentage<input type="int" name="pert">
<br><input type="submit">
</from>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$n=$_POST['nm'];
	$a=$_POST['ag'];
	$p=$_POST['pert'];
	function abcd($a,$p)
	{
		try
		{
			if($a<18 || $a>25)
			{
				throw new Exception("<br>check age");
			}
			if($p<0 || $p>100)
			{
				throw new Exception("<br>check percentage");
			}
		}
		catch(Exception $e)
		{
			echo $e;
		}	
	}
	abcd($a,$p);
}
?>