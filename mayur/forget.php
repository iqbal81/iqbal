<html>
<head>
<title>Forget Password</title>
<link rel="stylesheet" href="style.css">
<style>
#fpwrapper
{
	height: 200px;
	border-radius : 10px;
	background-color: #3742fa;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin: 0 auto;
}
#mc
{
	background-color:#2ecc71;
	color:white;
}
</style>
</head>
<body bgcolor="black" text="white">
<div id="fpwrapper">
<center><br><br>Enter Your mail:<br><br><input type="text" placeholder="enter mail" name="ml">
<br><br>
<a href="login.php"><input id="mc" type="button" value="Send OTP" onClick="myfunction()"></a>
</div>
<script>
function myfunction() {
  alert("mail has been sent to you");
}
</script>
</center>
</body>
</html>