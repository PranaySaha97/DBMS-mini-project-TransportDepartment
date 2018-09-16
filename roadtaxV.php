<html>
<head><title>roadtax View</title></head>
<body>
<center>
<h1>Select Table</h1><br>
<form action="roadtaxV.php" method="POST">
Chalan Number: <input type="text" name="chalanno" required/><br><br>
<input type="submit" value="Submit"/>
</form>
</center>
</body>
</html>

<?php

error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$chalanno=$_POST['chalanno'];


$query="SELECT * from roadtax where Chalan_number= '".mysqli_real_escape_string($res,$chalanno)."'";

$result=mysqli_query($res,$query);


$cnt=0;

while($row=mysqli_fetch_assoc(mysqli_query($res,$query))){
   $chalan_number=$row['Chalan_number'];
$rto_name=$row['Name_of_rto'];
$expirydate=$row['Expire_date'];
$renewaldate=$row['Renewal_date'];
$amount=$row['Amount'];
$vehiclenumber=$_POST['vehicle_no'];

    
        echo "Chalan Number: ".$chalan_number."<br>";
        echo "Rto Number: ".$rto_name."<br>";
        echo "Expiry Date: ".$expirydate."<br>";
        echo "Renewal Date: ".$renewaldate."<br>";
        echo "Amount: ".$amount."<br>";
		echo ":Vehicle Number ".$vehiclenumber."<br>";
       
  
}


?>