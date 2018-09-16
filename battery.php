<!DOCTYPE html>
<html>
<head>
	<title>BATTERY</title>
</head>
<body>
<center>
 <h1>BATTERY</h1>
<form action="battery.php" method="POST">
 
BILL NUMBER:<input type="text" name="billnumber" required><br></br>
NAME OF SUPPLIER:<td><input type="text" name="nameofsupplier" required><br></br>
AMOUNT:<input type="number" name="amount" required><br></br>
QUANTITY:<input type="number" name="quantity" required><br></br>
FITTED DATE:<input type="date" name="fitteddate" required><br></br>
FITTED TIME:<input type="time" name="fittedtime" required><br></br>

<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/><br></br>
</form>
 </center>
</body>
</html>      

<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
// mysqli_select_db("transport")
$billnumber=$_POST['billnumber'];
$nameofsupplier=$_POST['nameofsupplier'];
$amount=$_POST['amount'];
$quantity=$_POST['quantity'];
$fitteddate=$_POST['fitteddate'];
$fittedtime=$_POST['fittedtime'];
$query= "INSERT INTO battery VALUES('".mysqli_real_escape_string($res,$billnumber)."','".mysqli_real_escape_string($res,$nameofsupplier)."','".mysqli_real_escape_string($res,$amount)."','".mysqli_real_escape_string($res,$quantity)."','".mysqli_real_escape_string($res,$fitteddate)."','".mysqli_real_escape_string($res,$fittedtime)."')";
if(mysqli_query($res,$query)){
	header('Location: user_admin.php');

}

?>                   