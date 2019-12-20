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
		<form action="register.php" method="post">
			<div class="imgcontainer">
				
			</div>
			<div class="inner_container">
				<label><b>Name</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Address</b></label>
				<input type="text" placeholder="Enter address" name="addr" required>
				<label><b>Select Role</b></label><br><br>
				<select><option>Student</option><option>Teacher</option><option>Staff</option><option>Principal</option></select>
				<br><br><label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" required>
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				<a href="login.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from userinfotbl where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into userinfotbl values('$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: homepage.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>
</body>
</html>