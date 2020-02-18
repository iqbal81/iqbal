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
	height: 650px;
	border-radius : 10px;
	background-color: white;//#2980b9;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
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
<a href="principaldb.php"><input type="button" value="back"></a><br>
<table border="1">
<?php
//if($_SERVER["REQUEST_METHOD"]=="POST")
//{
//$ne=$_POST['fn'];
  $dbname="sms";
   $servername = "localhost";
   $username = "root";
   $password = "";
    $conn=new mysqli($servername, $username, $password)or die(mysqli_error());
    //mysqli_query($conn,$sql) or die(mysqli_error());//$conn->query($conn,$sql)or die(mysqli_error());
    mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
    $value="SELECT * FROM student";
  $result=$conn->query($value);
  if($result->num_rows > 0)
  {
  	$present_data="present";
  	$absent_data="absent";
    while ($row = $result->fetch_assoc())
    {
        {
        	$stud_name=$row['name'];
			echo "</td><td>".$stud_name;
			echo "<button onclick='insertdata($stud_name,$present_data)'>present</button>";
			echo "<button onclick='insertdata($stud_name,$absent_data)'>absent</button>";
			//echo "</td><td><input type='button' value='present' onclick='insertdata($stud_name,$present_data)'><input type='button' value='absent' onclick='insertdata($stud_name,$absent_data)'>";
			echo "</td></tr>";
		}	
	}
	
	//mysqli_query($conn,"create table dynatt(dt date,sname varchar(20),preabs varchar(20))");
	function insertdata($snames,$pres)
	{
		$date_data="".date("d/m/Y");
		echo $pres.$snames.$date_data;
		$inserting_data="INSERT INTO dynatt(dt,sname,preabs) VALUES($date_data,$snames,$pres)";
		if($conn->query($inserting_data)===TRUE)
		{
			echo "success";
		}
	}
}
?>
</table>
</center>
</form>
</div>
</body>
</html>