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
            background-color:#ff9ff3;
            color:white;
}
.logout_button{
	background-color: #ff9ff3;
    color: white;
	margin-top:10px;
    padding:10px;
    width: 100%;
	font-size:18px;
	font-weight: bold;
	border: 0px solid #f1f1f1;
}
.navlist{
            text-align: center;
            float: left;
            list-style-type: none;
            width: 80px;
            height: 50px;
            line-height: 50px;
            cursor:  pointer;
}
</style>
</head>
<body>
	<div class="nav" id="hpwrapper">
		<center><h2 style="color:#f368e0">&nbsp;&nbsp;&nbsp;&nbsp;WELCOME STUDENT</h2></center>
		<center><img src="studentdb.jpg" height="400" width="400"></center>
		<br>
            <li class="navlist"><a href="viewatt.php" style="text-decoration: none; color:black;">Attendance</li>
            <li class="navlist"><a href="marks.php" style="text-decoration: none; color:black;">Marks</li>
            <li class="navlist"><a href="times.php" style="text-decoration: none; color:black;">Timetable</li>
			<li class="navlist"><a href="viewnb.php" style="text-decoration: none; color:black;">Notice Board</li>
            <li class="navlist"><a href="examform.php" style="text-decoration: none;color:black;">Exam Form</li>
            <li class="navlist"><a href="payment.php" style="text-decoration: none; color:black;">Payment</li>
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