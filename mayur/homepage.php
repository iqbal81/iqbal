<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
body
{
	background-image: url('bg.jpg');
	background-repeat: no-repeat;
	background-size: 100%,100%;
}
#hpwrapper{
	height: 650px;
	border-radius : 10px;
	background-color: #2980b9;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
</style>
</head>
<body>
	<div class="nav" id="hpwrapper">
		<center><h2>Home Page</h2></center>
		
		<form action="index.php" method="post">
		<center><img src="logo.jpg" height="400" width="400"></center>
		<br>
            <li class="navlist"><a href="serv.html" style="text-decoration: none; color:black;">Features</li>
            <li class="navlist"><a href="about.html" style="text-decoration: none; color:black;">About</li>
            <li class="navlist"><a href="contact.html" style="text-decoration: none;color:black;">Contact us</li>
			
		<button class="logout_button"><a href="login.php">
		LOG IN</a></button>
		</form>
	</div>
</body>
</html>