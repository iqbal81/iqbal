<html>
<head>
<title>dynamic attendance</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
body
{
	background-image: url('bg.jpg');
	background-repeat: no-repeat;
	background-size: 100%,100%;
}
#hpwrapper{
	height: 950px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
td
{
	width:400;
	height:80;
	font-size:20px;
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
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<div class="nav" id="hpwrapper">
		<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;attendance</h2></center>
		<center><img src="studentdb.jpg" height="200" width="200">
		<br>
<br>
<a href="teacherdb.php"><input type="button" style="color:pink; background:orange;" value="back"></a><br>
<br><Br><br><br>
	select date:<input type="date" name="da">
  	<br>select time:<select name="tm"><option>8:30-9:30</option><option>9:30-10:30</option><option>10:30-11:30</option></select>
  	<br>select subject<select name="sb"><option>JAVA</option><option>PHP</option><option>MINI PROJECT</option><option>PYTHON</option></select><br><br><br><br>
  	<input type="submit"><br>
  	<a href="dynamicat.php">next page</a>
</center>
</form>
</div>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
//$ne=$_POST['fn'];
setcookie("dt",$_POST["da"]);
setcookie("tm",$_POST["tm"]);
setcookie("sb",$_POST["sb"]);
}
?>