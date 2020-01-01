<html>
<head>
<script>
function showCD(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
 
  else
  {xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","ball.php?q="+str,true);
  xmlhttp.send();
}
}
</script>
</head>
<body>

<form>
Select a book:
<select name="cds" onchange="showCD(this.value)">
<option value="">Select a book:</option>
<option value="abc">abc</option>
<option value="xyz">xyz</option>
<option value="pqr">pqr</option>
</select>
</form>
<div id="txtHint"><b>CD info will be listed here...</b></div>

</body>
</html>
//book.php
<?php
$q=$_GET["q"];

$xml = simplexml_load_file("book.xml");


foreach($xml->books as $b)
{
	if(($b->title)==$q)
	{
		echo "book title ".$b->title;
		echo "<br>book genre ".$b->genre;
		echo "<br>author  ".$b->author;
	}
}
?>
//book.xml
<?xml version="1.0" ?>
<bookstore>
<books>
<title>abc</title>
<genre>history</genre>
<author>jay</author>
</books>
<books>
<title>xyz</title>
<genre>romantic</genre>
<author>viraj</author>
</books>
<books>
<title>pqr</title>
<genre>adventure</genre>
<author>vinay</author>
</books>
</bookstore>