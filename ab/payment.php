<html>
<head>
<title>Payment Page</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<br>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<center><h2 style="color:#78e08f">&nbsp;&nbsp;&nbsp;&nbsp;Make Payment</h2></center>
<center><img src="studentdb.jpg" height="200" width="400"><br>
Enter Card Owner Name:<input type="text"><br>
Enter card number:<input type="text" name="dd"><br>
Select Expiry Date:
<br>
Month:<select><option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option></select><br>
year:<select><option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option></select>
<br>
Enter CVV:<input type="int" name="ta"><br>
<input type="submit">
<br>
<a href="studentdb.php"><input type="button" value="back"></a>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
$message = "payment successful";
echo "<script type='text/javascript'>alert('$message');</script>";
}
?>