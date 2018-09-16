<html>
<head><title>Insurance View</title></head>
<body>
<center>
<h1>Select Table</h1><br>
<form action="InsuranceV.php" method="POST">
Policy Number: <input type="text" name="policynumber" required/><br><br>
<input type="submit" value="Submit"/>
</form>
</center>
</body>
</html>

<?php

error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$policynumber=$_POST['policynumber'];


$query="SELECT * from insurance where Policy_number= '".mysqli_real_escape_string($res,$policynumber)."'";

$result=mysqli_query($res,$query);


$cnt=0;

while($row=mysqli_fetch_assoc(mysqli_query($res,$query))){
    $pnum=$row['Policy_number'];
    $company=$row['Name_of_company'];
    $exdate=$row['Expiry_date'];
    $redate=$row['Renewal_date'];
    $amt=$row['Amount_of_insurance'];
    $vum=$row['vehicle_no'];
    
    
        echo "Chassis Number: ".$pnum."<br>";
        echo "Vehicle Number: ".$company."<br>";
        echo "Engine Number: ".$exdate."<br>";
        echo "Vehicle Type: ".$redate."<br>";
        echo "Make: ".$amt."<br>";
        echo "Wheel Base: ".$vnum."<br>";
       
}


?>