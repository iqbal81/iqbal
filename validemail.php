<html>
<body bgcolor="blue" text="red">
<form method="POST" action="2.php">
enter email<input type="text" name="ml" placeholder="enter mail">
<input type="submit">
</form>
</body>
</html>
/*
<?php
$email=$_POST['ml'];
$pat="^[_a-z0-9]+(\.[_a-z0-9]+)*@[_a-z0-9]+(.\[_a-z0-9]+)*(\.[a-z]{2,3})$";
//if(eregi($pat,$email))//wont work with xampp server
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
	echo "valid email";
}
else
{
	echo "invalid email";
}
?>
*/