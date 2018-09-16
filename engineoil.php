<!DOCTYPE html>
<html>
<head>
	<title>ENGINE OIL AND HUBGREASING</title>
</head>
<body>
<center>
 <h1>ENGINE OIL AND HUBGREASING</h1>
 <br>
 <br>
<form action="engineoil.php" method="POST">
     
VEHICLE REG NO :<input type="text" name="vehicle_reg_no" required><br></br>
SUPPLIER NAME :<input type="text" name="supplier_name" required><br></br>
BILL NO:<input type="number" name="bill_no" required><br></br>
BILL AMOUNT:<input type="number" name="bill_amount" required><br></br>
BILLING DATE:<input type="DATE" name="date" required><br></br>
PROGRESSIVE KMS:<input type="number" name="progressive_kms" required><br></br>
NO. OF LITRES:<input type="number" name="number_of_litres" required><br></br>
DESCRIPTIONS:<input type="text" name="descriptions" required><br></br>
<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/>
 
</form>
 </center>
</body>
</html> 



<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");

$vehicle_reg_no=$_POST['vehicle_reg_no'];
$supplier_name=$_POST['supplier_name'];
$bill_no=$_POST['bill_no'];
$bill_amount=$_POST['bill_amount'];
$date=$_POST['date'];
$progressive_kms=$_['progressive_kms'];
$number_of_litres=$_POST['number_of_litres'];
$descriptions=$_['descriptions'];
$query= "INSERT INTO Engineoil VALUES('".mysqli_real_escape_string($res,$vehicle_reg_no)."','".mysqli_real_escape_string($res,$date)."','".mysqli_real_escape_string($res,$progressive_kms)."','".mysqli_real_escape_string($res,$number_of_litres)."','".mysqli_real_escape_string($res,$supplier_name)."','".mysqli_real_escape_string($res,$bill_no)."','".mysqli_real_escape_string($res,$bill_amount)."','".mysqli_real_escape_string($res,$descriptions)."')";
if(mysqli_query($res,$query)){
	header('Location: user_admin.php');

}


?>                        