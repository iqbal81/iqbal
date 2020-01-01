<html>
<head>
<script>
function showhint(str)
{
	if(str.length==0)
	{
		document.getElementById("txthint").innerHTML="";
		return;
	}
	else
	{
		var xmlhttp=new XMLHttpRequest();
		
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4&&xmlhttp.status==200)
			{
				document.getElementById("txthint").innerHTML=xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","one.php?qr="+str,true);
	
		xmlhttp.send();
	}
}
</script>
</head>
<body>
<p><b> start typing a name in the input field</b>
</p>
<form>
first name<input type="text" onkeyup="showhint(this.value)">
</form>
<p>suggestion:<span id="txthint"></span></p>
</body>
</html>
