<html>
<head><title>Fitness View</title></head>
<body>
<center>
<h1>Select Table</h1><br>
<form action="fitnessV.php" method="POST">
Certificate Number: <input type="text" name="cnum" required/><br><br>
<input type="submit" value="Submit"/>
</form>
</center>
</body>
</html>

<?php

error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$cnum=$_POST['cnum'];
if($cnum==0){
    // echo "Please enter a chassis number";
    die("Please enter a certificate number");
}


$query="SELECT * from fitnesss where certificate_no= '".mysqli_real_escape_string($res,$cnum)."'";

$result=mysqli_query($res,$query);


$cnt=0;

while($row=mysqli_fetch_assoc(mysqli_query($res,$query))){
    $cnumb=$row['certificate_no'];
    $vnum=$row['vehicle_no'];
    $name_of_rto=$row['name_of_rto'];
    $exdate=$row['expiry_date'];
    $redate=$row['renewal_date'];
    $amt_cert=$row['amount_cert'];
    $cnt++;
    echo "<table border=1px>
    <tr>
    <th>Certificate Number</th>
    <th>Vehivle Number</th>
    <th>Namee of RTO</th>
    <th>Expiery date</th>
    <th>Renewal date</th>
    <th>Amount</th>
    
    </tr>
    <tr>
    <td>".mysqli_real_escape_string($res,$cnumb)."</td>
    <td>".mysqli_real_escape_string($res,$vnum)."</td>
    <td>".mysqli_real_escape_string($res,$name_of_rto)."</td>
    <td>".mysqli_real_escape_string($res,$exdate)."</td>
    <td>".mysqli_real_escape_string($res,$redate)."</td>
    <td>".mysqli_real_escape_string($res,$amt_cert)."</td>
    </tr>
    </table>";
       

    
        // echo "Certificate Number: ".$cnumb."<br>";
        // echo "Vehicle Number: ".$vnum."<br>";
        // echo "Name of rto: ".$enum."<br>";
        // echo "Expiry date: ".$vtype."<br>";
        // echo "Renewal date: ".$make."<br>";
        // echo "Wheel Base: ".$wbase."<br>";
        // echo "Amount certificate: ".$scap."<br>";
        
  
}

if($cnt==0){
    echo "Chassis number not found.";
}

?>