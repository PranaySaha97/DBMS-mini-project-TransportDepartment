<!DOCTYPE html>
<html>
<head>
	<title>INSURANCE</title>
</head>
<body>
<center>
 <h1>INSURANCE</h1>
<form action="insurance.php" method="POST">
VEHICLE REGISTRATION :<input type="text" name="vreg" required><br></br>
REPAIR DATE:<input type="text" name="rdate" required><br></br>
REPAIR FROM: <input type="DATE" name="rfrom" required><br></br>
BILL NUMBER: <input type="DATE" name="bnum" required><br></br>
BILL AMOUNT: <input type="number" name="bamount" required><br></br>
DESCRIPTION: <input type="number" name="bdes" required><br></br>
<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/><br></br>
</form>
 </center>
</body>
</html>  


<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$vreg=$_POST['vreg'];
$rdate=$_POST['rdate'];
$rfrom=$_POST['rfrom'];
$bnum=$_POST['bnum'];
$bamount=$_POST['bamount'];
$bdes=$_POST['bdes'];
$query= "UPDATE insurance SET 
Repair_DATE='".mysqli_real_escape_string($res,$expirydate)."',
Repair_FROM='".mysqli_real_escape_string($res,$renewaldate)."' ,
BILL_NUMBER='".mysqli_real_escape_string($res,$amount)."',
Description='".mysqli_real_escape_string($res,$bdes)."'  
WHERE Policy_number='".mysqli_real_escape_string($res,$vreg)."'";

if(mysqli_query($res,$query)){
	header('Location: update.php');

}

?>