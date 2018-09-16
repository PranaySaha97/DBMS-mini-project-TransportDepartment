<!DOCTYPE html>
<html>
<head>
	<title>INSURANCE</title>
</head>
<body>
<center>
 <h1>INSURANCE</h1>
<form action="insurance.php" method="POST">
POLICY NUMBER :<input type="text" name="policy_number" required><br></br>
COMPANY NAME:<input type="text" name="company_name" required><br></br>
EXPIRED DATE: <input type="DATE" name="expirydate" required><br></br>
RENEWAL DATE: <input type="DATE" name="renewaldate" required><br></br>
AMOUNT: <input type="number" name="amount" required><br></br>
VEHICLE NO :<input type="text" name="vehicle_no" required><br></br>
<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/><br></br>
</form>
 </center>
</body>
</html>  


<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$policy_number=$_POST['policy_number'];
$company_name=$_POST['company_name'];
$expirydate=$_POST['expirydate'];
$renewaldate=$_POST['renewaldate'];
$amount=$_POST['amount'];
$vehicle_no=$_POST['vehicle_no'];
$query= "INSERT INTO insurance VALUES('".mysqli_real_escape_string($res,$policy_number)."','".mysqli_real_escape_string($res,$company_name)."','".mysqli_real_escape_string($res,$expirydate)."','".mysqli_real_escape_string($res,$renewaldate)."','".mysqli_real_escape_string($res,$amount)."','".mysqli_real_escape_string($res,$vehicle_no)."')";
if(mysqli_query($res,$query)){
	header('Location: user_admin.php');

}

?>