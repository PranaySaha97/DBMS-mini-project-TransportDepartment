<!DOCTYPE html>
<html>
<head>
	<title>LABOUR VIEW</title>
</head>
<body>
<center>
 <h1>SELECT VEHICLE</h1>
<form action="labourV.php" method="POST">
VEHICLE REGISTRATION :<input type="text" name="vreg" required><br></br>

<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/><br></br>
</form>
 </center>
</body>
</html>  


<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$vreg=$_POST['vreg'];

$query= "SELECT * FROM labour where VEHICLE_REG_NO='".mysqli_real_escape_string($res,$vreg)."'";
$result=mysqli_query($res,$query);

while($row=mysqli_fetch_assoc($result)){
    $vehno=$row['VEHICLE_REG_NO'];
    $rdate=$row['Repair_DATE'];
    $rfrom=$row['Repair_FROM'];
    $billno=$row['BILL_NUMBER'];
    $billamt=$row['BILL_AMOUNT'];
    $description=$row['Desciption'];


    echo "Vehicle number: ".mysqli_real_escape_string($vehno)."<br>";
    echo "Repair Date: ".mysqli_real_escape_string($rdate)."<br>";
    echo "Repair From: ".mysqli_real_escape_string($rfrom)."<br>";
    echo "Bill Number: ".mysqli_real_escape_string($billno)."<br>";
    echo "Bill Amount: ".mysqli_real_escape_string($billamt)."<br>";
    echo "Desciption: ".mysqli_real_escape_string($description)."<br><br>";
}

?>