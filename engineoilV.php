<html>
<head><title>Engine Oil View</title></head>
<body>
<center>
<h1>Select Table</h1><br>
<form action="engineoilV.php" method="POST">
Vehicle number: <input type="text" name="vnum" required/><br><br>
<input type="submit" value="Submit"/>
</form>
</center>
</body>
</html>

<?php

error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$vnum=$_POST['vnum'];
if($vnum==0){
    // echo "Please enter a vehicle number";
    die("Please enter a vehicle number");
}

$query="SELECT * from engineoil where VEHICLE_REG_NO= '".mysqli_real_escape_string($res,$vum)."'";


$result=mysqli_query($res,$query);

$cnt=0;

while($row=mysqli_fetch_assoc(mysqli_query($res,$query))){
    $vnumb=$row['VEHICLE_REG_NO'];
    $billdate=$row['BILLING_DATE'];
    $pkms=$row['PROGRESSIVE_KMS'];
    $no_of_litres=$row['NO_OF_LITRES'];
    $supplier_name=$row['SUPPLIER_NAME'];
    $bill_no=$row['BILL_NO'];
    $bamt=$row['BILL_AMOUNT'];
    $desc=$row['DESCRIPTION'];
    $cnt++;
    echo "<table border=1px>
    <tr>
    <th>Vehicle Number</th>
    <th>Billing date</th>
    <th>Progressive KMS</th>
    <th>Number of litres</th>
    <th>Supplier name</th>
    <th>Bill number</th>
    <th>Amount</th>
    <th>Description</th>
    </tr>
    <tr>
    
    <td>".mysqli_real_escape_string($res,$vnumb)."</td>
    <td>".mysqli_real_escape_string($res,$billdate)."</td>
    <td>".mysqli_real_escape_string($res,$pkms)."</td>
    <td>".mysqli_real_escape_string($res,$no_of_litres)."</td>
    <td>".mysqli_real_escape_string($res,$supplier_name)."</td>
    <td>".mysqli_real_escape_string($res,$bill_no)."</td>
    <td>".mysqli_real_escape_string($res,$bamt)."</td>
    <td>".mysqli_real_escape_string($res,$desc)."</td>
    </tr>
    </table>";

    
        // echo "Vehicle Number: ".$vnumb."<br>";
        // echo "Bill date: ".$billdate."<br>";
        // echo "Progressive KMS: ".$pkms."<br>";
        // echo "Number of litres: ".$no_of_litres."<br>";
        // echo "Name of the supplier: ".$supplier_name."<br>";
        // echo "Bill number: ".$bill_no."<br>";
        // echo "Bill amount: ".$bamt."<br>";
        // echo "Description : ".$desc."<br><br>";
  
}
if($cnt==0){
    echo "Vehicle number not found.";
}


?>