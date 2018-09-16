<!DOCTYPE html>
<html>
<head>
	<title>EMISSION TEST</title>
</head>
<body>
<center>
<h1>EMISSION TEST</h1>
<br>
<br>
<form action="emissionUP.php" method="POST">
VEHICLE REG.NO: <input type="text" name="vehicleregno" required><br></br>
  
RENEWAL DATE: <input type="DATE" name="renewaldate" required><br></br>

NAME OF TEST CENTER :<input type="text" name="testcenter_name" required><br></br>

CHALAN NUMBER:<input type="number" name="chalan_number" required><br></br>

 AMOUNT:<input type="number" name="amount" required><br></br>
 
 EXPIRED DATE:<input type="DATE" name="expireddate" required</td></tr><br/><br/>

 <input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/>
 

 </form>
 </center>
</body>
</html>



<?php

error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
// mysqli_select_db("transport");
$vehno=$_POST['vehicleregno'];
$testcenter_name=$_POST['testcenter_name'];
$chalan_number=$_POST['chalan_number'];
$amount=$_POST['amount'];
$expireddate=$_POST['expireddate'];
$renewaldate=$_POST['renewaldate'];
$query= "UPDATE registration SET
Renewal_DATE='".mysqli_real_escape_string($res,$renewaldate)."' ,
NAME_OF_TESTCENTRE='".mysqli_real_escape_string($res,$testcenter_name)."' ,
CHALAN_NUMBER='".mysqli_real_escape_string($res,$chalan_number)."',
AMOUNT='".mysqli_real_escape_string($res,$amount)."' ,
EXPIRY_DATE='".mysqli_real_escape_string($res,$expireddate)."' WHERE VEHICLE_REG_NO='".mysqli_real_escape_string($res,$vehno)."'";
if(mysqli_query($res,$query))
{
  header('Location: update.php');
}



?>
