<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
body{
	background-image: url('log.jpg');
	background-repeat: no-repeat;
	background-size: 100%,100%;
}

#mw{
	height: 650px;
	border-radius : 10px;
	background-color: #e74c3c;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
</style>
</head>
<body>
	<div id="mw">
	
			<div class="imgcontainer">
			<img src="login.jpg" height="300" width="400">
			</div>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit">Login</button>
				<a href="register.php"><button type="button" class="register_btn">Register</button></a>
				<a href="forget.php">Forget Password</a>
			</div>
		</form>
		
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $un=$_POST["username"];
  $pd=$_POST["password"];
  $dbname="sms";
  $server="localhost";
  $user="root";
  $password="";
  $cnt=0;
  $conn=new mysqli($server,$user,$password);
  mysqli_select_db($conn,$dbname) or die(mysqli_error());

  $value="SELECT * FROM student";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {

    while ($row = $result->fetch_assoc())
    {
      if($row["name"]==$un && $pd==$row["password"])
        $cnt=0;
      else
      {
        $cnt=1;
      }
    }
  }
  if($cnt==1)
  {
    $message = "Invalid Email and Password!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  else
  {
    header('Location:studentdb.php');
  }
}
?>
	</div>
</body>
</html>