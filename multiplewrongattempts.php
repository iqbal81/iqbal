<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<h3 align="center">login form</h3>
<br>
username<input type="text" name="user" placeholder="enter username">
<br>
password<input type="password" name="pass" placeholder="enter password">
<br>
<input type="submit">
</form>
</body>
</html>
<?php
$us=$_POST['user'];
$pd=$_POST['pass'];
session_start();
if(isset($_SESSION['cnt'])) 
    $_SESSION['cnt'] = $_SESSION['cnt']+1; 
else
    $_SESSION['cnt']=1;  
echo"you have visited this page = ".$_SESSION['cnt']." times"; 
if($_SESSION['cnt']<=3)
{
if($us=="prasad" && $pd=="prasad")
{
	echo "<body bgcolor='green'>";
	echo "<br>";
	echo "login is successful";
	echo "<br>";
	echo "welcome admin prasad";
}
else
{
	echo "<br>";
	echo "wrong username or password";
}
}
else
{
	echo "<body bgcolor='red'>";
	echo "<br>";
	echo "you have entered wrong id and ps 3 times in this session";
}
?> 

