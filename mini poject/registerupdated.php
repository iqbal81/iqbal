<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
body{
	background-image: url('reg.jpg');
	background-repeat: no-repeat;
	background-size: 100%,100%;
}
#rgwrapper{
	height: 650px;
	border-radius : 10px;
	background-color: #3498db;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
</style>
</head>
<body>
	<div id="rgwrapper">
	<center><br><br><h2>REGISTER FORM</h2></center>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<div class="inner_container">
				<label><b>Name</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Address</b></label>
				<input type="text" placeholder="Enter address" name="addr" required>
				<label><b>Select Role</b></label><br><br>
				<select name="sl"><option>Student</option><option>Teacher</option><option>Staff</option><option>principle</option></select>
				<br><br><label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" required>
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				<a href="login.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
	</div>
		
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $name=$_POST["username"];

  $pass=$_POST["password"];
  $address=$_POST["addr"];
  $pass0=$_POST["cpassword"];
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";

    $conn=new mysqli($servername, $username, $password);
    $sql="CREATE DATABASE $dbname";
    $conn->query($sql);
    mysqli_select_db($conn,$dbname);
    //$table1="CREATE TABLE CUSTOMER(id INT  primary key AUTO_INCREMENT,c_name VARCHAR(20),c_email VARCHAR(50),c_pass VARCHAR(20),c_address VARCHAR(50),c_mno BIGINT)";
    //$conn->query($table1);

    if($pass==$pass0)
    {
      $values="INSERT INTO student(name,pw,address) VALUES('$name','$pass','$address')";
        if($conn->query($values)===TRUE)
              {
                $message = "Registered Successfully!";
                echo "<script type='text/javascript'>alert('$message');</script>";
              }     
      }
      else 
      {
        $passerr="Chech password";
        echo "<script type='text/javascript'>alert('$passerr');</script>";
      }
  }
?>
</body>
</html>