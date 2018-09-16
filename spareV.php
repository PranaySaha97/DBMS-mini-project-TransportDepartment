<html>
<head>
	<title>Spare View</title>
</head>
<body>
<center>
 <h1>Select Table</h1><br>  
 <form action="spareV.php" method="POST">
Vehicle Reg No: <input type="number" name="vehicleregno" required><br></br>
<input type="submit" value="Submit"/>
  </form>
 </center>
</body>
</html> 
  
<?php 
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$vehicleno=$_POST['vehicleregno'];

$query="SELECT * from stocks where Bill_no= '".mysqli_real_escape_string($res,$vehicleno)."'";

$result=mysqli_query($res,$query);

$cnt=0;
while($row= mysqli_fetch_assoc($query))
{
    $vehicleregno=$row['VEHICLE_REG_NO'];
    $purchasedate=$row['PURCHASED_DATE'];
    $purchasefrom=$row['PURCHASED_FROM'];
    $bill_number=$row['BILL_NUMBER'];
    $quantity=$row['QUANTITY'];
    $particular=$row['PARTICUALRS'];
    
        echo "Vehicle reg no: ".$vehicleregno."<br>";
        echo "Purchase Date: ".$purchasedate."<br>";
        echo "Purchase From: ".$purchasefrom."<br>";
        echo "Bill Number: ".$bill_number."<br>";
        echo "Quantity: ".$quantity."<br>";
        echo "Particular: ".$particular."<br><br>";

}

?>
                      