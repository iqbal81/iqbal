<html>
<head>
<script>
function validation(strurl)
{
if(window.XMLHttpRequest)
{
var xmlobj=new XMLHttpRequest();
}

else
{
var xmlobj=new ActiveXObject("Microsoft.XMLHTTP");
}

xmlobj.open('POST',strurl,true);
xmlobj.send(strurl)
xmlobj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
			{
                //document.getElementById("txtHint").innerHTML = this.responseText;
				updatepage(xmlobj.responseText);
            }
        };
		
}

function call_login()
{
var uname=f.username.value;
var pass=f.pass.value;
var url="un.php?username="+uname+"& password="+pass;
validation(url);
}

function updatepage(str)
{
if(str=="uless")
{
alert("Username is too samll!!");
}
else if(str=="pless")
{
alert("PASSWORD is too samll!!");
}
else if(str=="ublank")
{
alert("enter username !!");
}
else if(str=="pblank")
{
alert("enter password!!");
}
else if(str=="well"){alert("welcome!Valid username and password");}

else{alert("somthing went wrong!!");}
}
</script>
</head>
<body>
<form name="f">
USERNAME:<input type="text" name="username"><br><br>
PASSWORD:<input type="text" name="pass"><br><br>
<input type="button" value="submit" onclick="call_login()">
</form>
</body>
</html>
//un.php
<?php
$uname=$_REQUEST["username"];
$pass=$_REQUEST["password"];

if($uname ==""){echo "ublank";}

else if($pass ==""){echo "pblank";}

else if(strlen($uname)<=3){echo "uless";}

else if(strlen($pass)<3){echo "pless";}

else{echo "well";}
?>
