<!DOCTYPE html>
<html>
<head>
	<title>EMISSION TEST VIEW</title>
</head>
<body>
<center>
<h1>Select Data</h1>
<br>
<br>
<form action="emissionV.php" method="POST">
VEHICLE REG.NO: <input type="text" name="vehicleregno" required><br></br>
  
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
$query1="SELECT * from emissiontest where VEHICLE_REG_NO='".mysqli_real_escape_string($res,$vehno)."'";
if($vehno==0){
    // echo "Please enter a chassis number";
    die("Please enter a vehicle number");
}
$cnt=0;

$result=mysqli_query($res,$query1);
while($row=mysqli_fetch_assoc($result)){
    $vehno=$row['VEHICLE_REG_NO'];
    $rdate=$row['Renewal_DATE'];
    $testcenter=$row['NAME_OF_TESTCENTRE'];
    $chalanno=$row['CHALAN_NUMBER'];
    $amt=$row['AMOUNT'];
    $exp_date=$row['EXPIRY_DATE'];
    $cnt++;
    echo "<table border=1px>
    <tr>
   
    <th>Vehivle Number</th>
    <th>Renewal date</th>
    <th>Test centre</th>
    <th>Chalan number</th>
    <th>Amount</th>
    <th>Expiry date</th>
    </tr>
    <tr>
    <td>".mysqli_real_escape_string($res,$vehno)."</td>
    <td>".mysqli_real_escape_string($res,$rdate)."</td>
    <td>".mysqli_real_escape_string($res,$testcenter)."</td>
    <td>".mysqli_real_escape_string($res,$chalanno)."</td>
    <td>".mysqli_real_escape_string($res,$amt)."</td>
    <td>".mysqli_real_escape_string($res,$exp_date)."</td>
    </tr>
    </table>";
    


    // echo "Vehicle number: ".mysqli_real_escape_string($res,$vehno)."<br>";
    // echo "Renewal Date: ".mysqli_real_escape_string($res,$rdate)."<br>";
    // echo "TestCenter: ".mysqli_real_escape_string($res,$testcenter)."<br>";
    // echo "Chalan Number: ".mysqli_real_escape_string($res,$chalanno)."<br>";
    // echo "Amount: ".mysqli_real_escape_string($res,$amt)."<br>";
    // echo "Expiry Date: ".mysqli_real_escape_string($res,$exp_date)."<br><br>";
}
if($cnt==0){
    echo "Vehicle number not found.";
}



?>