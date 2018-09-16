<html>
<head><title>permit View</title></head>
<body>
<center>
<h1>Select Table</h1><br>
<form action="permitV.php" method="POST">
Chalan Number: <input type="text" name="chalanisno" required/><br><br>
<input type="submit" value="Submit"/>
</form>
</center>
</body>
</html>

<?php

error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$chassisno=$_POST['chalanisno'];


$query="SELECT * from permit where Chalan_number= '".mysqli_real_escape_string($res,$chalanisno)."'";

$result=mysqli_query($res,$query);

$cnt=0;

while($row=mysqli_fetch_assoc(mysqli_query($res,$query))){
   $chalan_number=$_POST['Chalan_number'];
$rto_name=$row['Name_of_RTO'];
$expirydate=$row['Expiry_date'];
$renewaldate=$row['Renewal_date'];
$permitamount=$row['Amount_of_permit'];
$vehiclenumber=$row['vehicle_no'];

    
        echo "Chalan Number: ". $chalan_number."<br>";
        echo "RTO Number: ".$rto_name."<br>";
        echo "Expiry Date: ".$expirydate."<br>";
        echo "Renewal Date: ".$renewaldate."<br>";
        echo "Permit Amount: ".$permitamount."<br>";
        echo "Vehicle Number: ".$vehiclenumber."<br>";
       
  
}


?>