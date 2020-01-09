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
				<label><b>Select</b></label>
				<select name="rr"><option value="student">Student</option><option value="teacher">Teacher</option>
				<option value="staff">Staff</option><option value="principal">Principal</option></select>
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit">Login</button>
				<a href="register.php"><button type="button" class="register_btn">Register</button></a>
				<a href="forget.php" style="color:white">Forget Password</a> &nbsp; &nbsp; &nbsp; &nbsp; 
				 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a style="color:white" href="homepage.php">Back</a>
			</div>
		</form>
		
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$ss=$_POST['rr'];
  $un=$_POST["username"];
  $pd=$_POST["password"];
  $dbname="sms";
  $server="localhost";
  $user="root";
  $password="";
  $cnt=0;
  $conn=new mysqli($server,$user,$password);
  mysqli_select_db($conn,$dbname) or die(mysqli_error());

  if($ss=="student")
	  $value="SELECT * FROM student WHERE name='$un'";
  else if($ss=="teacher")
	  $value="SELECT * FROM teacher WHERE name='$un'";
  else if($ss=="staff")
	  $value="SELECT * FROM staff WHERE name='$un'";
  else if($ss=="principal")
	  $value="SELECT * FROM principal WHERE name='$un'";
  
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {

    while ($row = $result->fetch_assoc())
    {
      if($row["name"]==$un && $pd==$row["password"])
        $cnt=1;
      else
      {
        $cnt=0;
      }
    }
  }
  if($cnt==0)
  {
    $message = "Invalid selection or name or Password!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  else if($cnt==1)
  {
	  session_start();
	$_SESSION['loged'] = 1;
	if($ss=="student")
		header('Location:studentdb.php');
  else if($ss=="teacher")
    header('Location:teacherdb.php');
  else if($ss=="staff")
    header('Location:staffdb.php');
  else if($ss=="principal")
    header('Location:principaldb.php');
  }
}
?>
	</div>
</body>
</html>