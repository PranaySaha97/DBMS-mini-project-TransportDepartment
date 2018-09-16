<!DOCTYPE html>
<html>
<head>
	<title>FITNESS CERTIFICATE</title>
</head>
<body>
<center>
    
<h1>FITNESS CERTIFICATE</h1>
<br>
<br>
<form action="fitness.php" method="POST">

CERTIFICATE NUMBER :<input type="number" name="certificate_number" required><br></br>
 NAME OF RTO :<input type="text" name="rto_name" required><br></br>
 VEHICLE NO :<input type="number" name="vehicle_no" required><br></br>
 EXPIRED DATE:<input type="DATE" name="expirydate" required><br></br>
 RENEWAL DATE: <input type="DATE" name="renewaldate" required><br></br>
FEE AMOUNT: <input type="number" name="fee_amount" required><br></br>
<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/> 
 
 </form>
 </center>
</body>
</html>

<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$certificate_number=$_POST['certificate_number'];
$rto_name=$_POST['rto_name'];
$vehicle_no=$_POST['vehicle_no'];
$expirydate=$_POST['expirydate'];
$renewaldate=$_POST['renewaldate'];
$fee_amount=$_POST['fee_amount'];
$query= "UPDATE registration SET vehicle_no='".mysqli_real_escape_string($res,$vehicle_no)."' ,
name_of_rto='".mysqli_real_escape_string($res,$rto_name)."' ,
expiry_date='".mysqli_real_escape_string($res,$expirydate)."' ,
renewal_date='".mysqli_real_escape_string($res,$renewaldate)."',
amount_cert='".mysqli_real_escape_string($res,$fee_amount)."' ,
WHERE certificate_no='".mysqli_real_escape_string($res,$certificate_number)."'";
if(mysqli_query($res,$query)){
	header('Location: update.php');

}
?>