<!DOCTYPE html>
<html>
<head>
	<title>ROADTAX</title>
</head>
<body>
<center>
<h1>ROAD TAX</h1>
<br>
<br>
<form action="roadtaxUP.php" method="POST">
<table>
<tr><td><h4>CHALAN NUMBER:</h4></td><td><input type="number" name="chalan_number" required></td></tr>
 <tr><td><h4>NAME OF RTO :</h4></td> <td><input type="text" name="rto_name" required></td></tr>
 <tr><td><h4>EXPIRED DATE: </h4></td> <td><input type="DATE" name="expirydate" required></td></tr>
 <tr><td><h4>RENEWAL DATE: </h4></td><td><input type="DATE" name="renewaldate" required></td></tr>
 <tr><td><h4>AMOUNT:</h4> </td><td> <input type="number" name="amount" required></td></tr>
 <tr><td><h4>VEHICLE NUMBER:</h4> </td><td> <input type="number" name="vehicle_number" required></td></tr>
 <tr><td></td><td><input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/> </td></tr>
 </table>
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
$amount=$_POST['amount'];
$amount=$_POST['vehicle_number'];

$query= "UPDATE roadtax SET Name_of_rto='".mysqli_real_escape_string($res,$rto_name)."' ,
Expire_date='".mysqli_real_escape_string($res,$expirydate)."' ,
Renewal_date='".mysqli_real_escape_string($res,$renewaldate)."',
Amount='".mysqli_real_escape_string($res,$amount)."' ,
vehicle_no='".mysqli_real_escape_string($res,$vehicle_number)."' WHERE Chalan_number='".mysqli_real_escape_string($res,$chalan_number)."'";
if(mysqli_query($res,$query)){
	header('Location: update.php');

}

?>