<!DOCTYPE html>
<html>
<head>
	<title>FUEL</title>
</head>
<body>
<center>
 <h1>FUEL</h1>
 <br>
 <br>
<form action="fuel.php" method="POST">
 
 VEHICLE REG NO:<input type="text" name="vehicle_reg_no"  required><br></br>
 FILLING DATE:<input type="date" name="fillingdate" required><br></br>
INDENT NUMBER:<input type="number" name="indentnumber" required><br></br>
 HSD IN LITRES:<input type="number" name="hsdinlitres" required><br></br>
 PREVIOUS READING:<input type="number" name="previousreading" required><br></br>
TOTAL KM:<input type="number" name="totalkm" required><br></br>
 KMPL:<input type="number" name="kmpl" required><br></br>
BILL NUMBER:<input type="number" name="billnumber" required><br></br>
AMOUNT:<input type="number" name="amount" required><br></br>
<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/>
 </form>
 </center>
</body>
</html> 
<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$vehicle_reg_no=$_POST['vehicle_reg_no'];
$fillingdate=$_POST['fillingdate'];
$indentnumber=$_POST['indentnumber'];
$hsdinlitres=$_POST['hsdinlitres'];
$previousreading=$_POST['previousreading'];
$totalkm=$_POST['totalkm'];
$kmpl=$_POST['kmpl'];
$billnumber=$_POST['billnumber'];
$amount=$_POST['amount'];
$query= "INSERT INTO fuel VALUES('".mysqli_real_escape_string($res,$vehicle_reg_no)."','".mysqli_real_escape_string($res,$fillingdate)."','".mysqli_real_escape_string($res,$indentnumber)."','".mysqli_real_escape_string($res,$hsdinlitres)."','".mysqli_real_escape_string($res,$previousreading)."','".mysqli_real_escape_string($res,$totalkm)."','".mysqli_real_escape_string($res,$kmpl)."','".mysqli_real_escape_string($res,$billnumber)."','".mysqli_real_escape_string($res,$amount)."')";
if(mysqli_query($res,$query)){
	header('Location: user_admin.php');

}

?>                              