<!DOCTYPE html>
<html>
<head>
	<title>PERMIT</title>
</head>
<body>
<center>
<h1>PERMIT</h1>

<form action="permit.php" method="POST">
CHALAN NUMBER:<input type="number" name="chalan_number" required><br></br>
NAME OF RTO :<input type="text" name="rto_name" required> <br></br>
EXPIRED DATE:<input type="DATE" name="expirydate" required><br></br>
RENEWAL DATE: <input type="DATE" name="renewaldate" required><br></br>
PERMIT AMOUNT: <input type="number" name="permitamount" required><br></br>
<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/> 
 
</form>
 </center>
</body>
</html>


<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$chalan_number=$_POST['chalan_number'];
$rto_name=$_POST['rto_name'];
$expirydate=$_POST['expirydate'];
$renewaldate=$_POST['renewaldate'];
$permitamount=$_POST['permitamount'];
$query= "INSERT INTO permit VALUES('".mysqli_real_escape_string($res,$chalan_number)."','".mysqli_real_escape_string($res,$expirydate)."','".mysqli_real_escape_string($res,$renewaldate)."','".mysqli_real_escape_string($res,$permitamount)."')";
if(mysqli_query($res,$query)){
	header('Location: user_admin.php');

}

?>