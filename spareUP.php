<!DOCTYPE html>
<html>
<head>
	<title>SPARE PARTS UPADATE</title>
</head>
<body>
<center>
<h1>SPARE PARTS</h1>
<br>
<br>
<form action="spareUP.php" method="POST">
<table>
<tr><td><h4>VEHICLE REG.NO :</h4> </td><td> <input type="text" name="vehicleregno" required></td></tr>
<tr><td><h4>PURCAHSED DATE: </h4></td><td><input type="DATE" name="purchasedate" required></td></tr>
<tr><td><h4>PURCHASED FROM:</h4></td> <td><input type="text" name="purchasefrom" required></td></tr>
<tr><td><h4>BILL NUMBER:</h4></td><td><input type="number" name="bill_number" required></td></tr>
 <tr><td><h4>QUANTITY:</h4> </td><td> <input type="number" name="quantity" required></td></tr>
 <tr><td><h4>PARTICULARS: </h4></td> <td><input type="text" name="particular" required></td></tr>
 <tr><td><h4>BILL AMOUNT:</h4> </td><td> <input type="number" name="billamount" required></td></tr>
 <tr><td></td><td><input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/></td></tr>
 </table>
</form>
 </center>
</body>
</html>

<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$vehicleregno=$_POST['vehicleregno'];
$purchasedate=$_POST['purchasedate'];
$purchasefrom=$_POST['purchasefrom'];
$bill_number=$_POST['bill_number'];
$quantity=$_POST['quantity'];
$particular=$_POST['particular'];

$query= "UPDATE spareparts SET PURCHASED_DATE='".mysqli_real_escape_string($res,$purchasedate)."' ,
PURCHASED_FORM='".mysqli_real_escape_string($res,$purchasefrom)."' ,
BILL_NUMBER='".mysqli_real_escape_string($res,$bill_number)."',
PARTICULARS='".mysqli_real_escape_string($res,$particular)."',
QUANTITY='".mysqli_real_escape_string($res,$quantity)."' WHERE VEHICLE_REG_NO='".mysqli_real_escape_string($res,$vehicleregno)."'";
if(mysqli_query($res,$query)){
	header('Location: update.php');

}

 
?>