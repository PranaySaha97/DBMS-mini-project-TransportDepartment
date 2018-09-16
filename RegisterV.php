<html>
<head><title>Register View</title></head>
<body>
<div style="float: right;"><a href="view.php">Back</a></div>
<center>
<h1>Select Table</h1><br>
<form action="RegisterV.php" method="POST">
Chassis Number: <input type="text" name="chassisno" required/><br><br>
<input type="submit" value="Submit"/>
</form>
</center>
</body>
</html>

<?php

 error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$chassisno=$_POST['chassisno'];

if($chassisno==0){
    // echo "Please enter a chassis number";
    die("Please enter a chassis number");
}


$query="SELECT * from registration where chassis_no= '".mysqli_real_escape_string($res,$chassisno)."'";

$result=mysqli_query($res,$query);



$cnt=0;

while($row=mysqli_fetch_assoc($result)){
    $cnum=$row['chassis_no'];
    $vnum=$row['vehicle_no'];
    $enum=$row['eng_no'];
    $vtype=$row['vehicle_type'];
    $make=$row['make'];
    $wbase=$row['wheel_base'];
    $scap=$row['seating_capacity'];
    $mmy=$row['mmy'];

    $cnt++;
   echo "<table border=1px>
    <tr>
    <th>Chassis Number</th>
    <th>Vehivle Number</th>
    <th>Engine Number</th>
    <th>Vehicle Type</th>
    <th>Make</th>
    <th>Wheel Base</th>
    <th>Seating Capacity</th>
    <th>Model Manufacturing Year</th>
    </tr>
    <tr>
    <td>".mysqli_real_escape_string($res,$cnum)."</td>
    <td>".mysqli_real_escape_string($res,$vnum)."</td>
    <td>".mysqli_real_escape_string($res,$enum)."</td>
    <td>".mysqli_real_escape_string($res,$vtype)."</td>
    <td>".mysqli_real_escape_string($res,$make)."</td>
    <td>".mysqli_real_escape_string($res,$wbase)."</td>
    <td>".mysqli_real_escape_string($res,$scap)."</td>
    <td>".mysqli_real_escape_string($res,$mmy)."</td>
    </tr>
    </table>";
    
        // echo "Chassis Number: ".$cnum."<br>";
        // echo "Vehicle Number: ".$vnum."<br>";
        // echo "Engine Number: ".$enum."<br>";
        // echo "Vehicle Type: ".$vtype."<br>";
        // echo "Make: ".$make."<br>";
        // echo "Wheel Base: ".$wbase."<br>";
        // echo "Seating Capacity: ".$scap."<br>";
        // echo "Model Manufacturing Year: ".$mmy."<br><br><hr>";
  
}

if($cnt==0){
    echo "Chassis number not found.";
}


?>