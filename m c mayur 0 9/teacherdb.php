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
.navlist{
            text-align: center;
            float: left;
            list-style-type: none;
            width: 120px;
            height: 50px;
            line-height: 50px;
            cursor:  pointer;
}
.navlist:hover{
            background-color:#78e08f;
            color:white;
}
.logout_button{
	background-color: #78e08f;
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
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;WELCOME TEACHER</h2></center>
		<center><img src="teacherdb.jpg" height="400" width="400"></center>
		<br>
            <li class="navlist"><a href="atte.php" style="text-decoration: none; color:black;">Attendance</li>
            <li class="navlist"><a href="time.php" style="text-decoration: none; color:black;">Timetable</li>
            <li class="navlist"><a href="entm.php" style="text-decoration: none;color:black;">Enter Marks</li>
            <li class="navlist"><a href="viewnbt.php" style="text-decoration: none; color:black;">Notice Board</li>
		
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