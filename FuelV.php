<html>
<head><title>Fuel View</title></head>
<body>
<center>
<h1>Select Table</h1><br>
<form action="FuelV.php" method="POST">
Vehicle register Number: <input type="text" name="vnum" required/><br><br>
<input type="submit" value="Submit"/>
</form>
</center>
</body>
</html>

<?php

error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$vnumb=$_POST['vnum'];


$query="SELECT * from fuel where VEHICLE_REG_NO= '".mysqli_real_escape_string($res,$vnum)."'";

$result=mysqli_query($res,$query);


$cnt=0;

while($row=mysqli_fetch_assoc(mysqli_query($res,$query))){
    $vnumb=$row['VEHICLE_REG_NO'];
    $filling_date=$row['FILLING_DATE'];
    $indent_no=$row['INDENT_NO'];
    $hsdlitres=$row['HSD_IN_LITRES'];
    $preading=$row['PREVIOUS_READING'];
    $total_km=$row['TOTAL_KM'];
    $kmpl=$row['KMPL'];
    $bill_no=$row['BILL_NO'];
    $amount=$row['AMOUNT'];
    
        echo "VEhicle Number: ".$vnum."<br>";
        echo "Filling date: ".$filling_date."<br>";
        echo "Indent Number: ".$indent_no."<br>";
        echo "HSD in Litres: ".$hsdlitres."<br>";
        echo "Previous reading: ".$preading."<br>";
        echo "Total number of KMS: ".$total_km."<br>";
        echo "Kilometres per litre: ".$kmpl."<br>";
        echo "Bill number: ".$bill_no."<br>";
        echo "Total amount: ".$amount."<br><br>";
  
}


?>
