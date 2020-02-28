<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
#hpwrapper{
	height: 650px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}

.navlist:hover{
            background-color:#f6e58d;
            color:white;
}
.logout_button{
	background-color: #f6e58d;
    color: white;
	margin-top:10px;
    padding:10px;
    width: 100%;
	font-size:18px;
	font-weight: bold;
	border: 0px solid #f1f1f1;
}
</style>
</head>
<body bgcolor="#fbf4d0">
	<div class="nav" id="hpwrapper">
		<center><h2 style="color:#f6e58d">&nbsp;&nbsp;&nbsp;&nbsp;WELCOME STAFF</h2></center>
		<center><img src="staffdb.jpg" height="400" width="400"></center>
		<br>
            <li class="navlist"><a href="viewta.php" style="text-decoration: none; color:black;">Attendance</li>
			<li class="navlist"><a href="viewnbs.php" style="text-decoration: none; color:black;">Notice Board</li>
		
		<button class="logout_button"><a href="logout.php">
		LOG OUT</a></button>
		</form>
	</div>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['loged']))
{
	if($_SESSION['loged']==0)
	header('Location:notlog.php');
}
?>