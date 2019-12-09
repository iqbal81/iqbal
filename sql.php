<?php
	
	$name=$_GET["name"];
	$email=$_GET["email"];
	$psw=$_GET["psw"];
	$address=$_GET["address"];
	$mno=$_GET["number"];
	$dbname="plant";
	$conn = mysqli_connect ("localhost","root","") or die(mysqli_error($conn));
	$dbname="plant";
	//mysqli_query($conn,"CREATE DATABASE $dbname") or die(mysqli_error($conn));
	mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
	mysqli_query($conn,"CREATE TABLE login(id INT  primary key AUTO_INCREMENT,name VARCHAR(20),email VARCHAR(50),psw VARCHAR(20),address VARCHAR(50),mno BIGINT)") or die(mysqli_error($conn));
	mysqli_query($conn,"INSERT INTO login(name,email,psw,address,mno) VALUES('$name','$email','$psw','$address',$mno)") or die(mysqli_error($conn));
	$result=mysqli_query($conn,"SELECT * FROM login");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo "<br>"."ID:".$row["id"];
			echo "<br>"."name:".$row["name"];
			echo "<br>"."email:".$row["email"];
			echo "<br>"."password:".$row["psw"];
			echo "<br>"."address:".$row["address"];
			echo "<br>"."phone:".$row["mno"];
		}
	}
	else
		echo"null result";
		//mysqli_query($conn,"DROP DATABASE $dbname") or die(mysqli_error($conn));
		//echo"Database seleteed";
	mysqli_close($conn);
?>