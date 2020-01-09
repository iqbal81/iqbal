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
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}

.navlist:hover{
            background-color:#4834d4;
            color:white;
}
.logout_button{
	background-color: #4834d4;
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
<body>
	<div class="nav" id="hpwrapper">
		<center><h2 style="color:#4834d4">&nbsp;&nbsp;&nbsp;&nbsp;WELCOME PRINCIPAL</h2></center>
		<center><img src="principaldb.jpg" height="400" width="400"></center>
		<br>
            <li class="navlist"><a href="atce.php" style="text-decoration: none; color:black;">Attendance</li>
            <li class="navlist"><a href="timess.php" style="text-decoration: none; color:black;">Timetable</li>
			<li class="navlist"><a href="nb.php" style="text-decoration: none; color:black;">Notice Board</li>
            <li class="navlist"><a href="payi.php" style="text-decoration: none; color:black;">Payment</li>
            <li class="navlist"><a href="viewst.php" style="text-decoration: none; color:black;">students</li>
		
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