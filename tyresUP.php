<!DOCTYPE html>
<html>
<head>
	<title>TYRES</title>
</head>
<body>
<center>
 <h1>TYRES</h1>
 <br>
 <br>
 <form action="tyresUP.php" method="POST">
     
 TYRE NUMBER :<input type="number" name="tyre_number" required><br></br>
 FITTED DATE: <input type="date" name="fitted_date" required><br></br>
 FITTED TIME PROGRESSIVE KMS:<input type="time" name="fitted_time_progressive_kms" required><br></br>
 REMOVED TIME PROGRESSIVE KMS:<input type="time" name="removed_time_progressive_kms" required><br></br> 
 REMOVED DATE:<input type="date" name="removed_date" required><br></br>
 TYRE POSITION <input type="text" name="tyre_position" required><br></br>
 TOTAL COVERED KMS:<input type="number" name="number" required><br></br>
<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/>

 </form>
 </center>
</body>
</html>   



<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$tyre_number=$_POST['tyre_number'];
$fitted_date=$_POST['fitted_date'];
$fitted_time_progressive_kms=$_POST['fitted_time_progressive_kms'];
$removed_time_progressive_kms=$_POST['removed_time_progressive_kms'];
$removed_date=$_POST['removed_date'];
$tyre_position=$_POST['tyre_position'];
$number=$_POST['number']

$query= "UPDATE tyres SET fitted_date='".mysqli_real_escape_string($res,$fitted_date)."' ,
fitted_time_progressive_kms='".mysqli_real_escape_string($res,$fitted_time_progressive_kms)."' ,
fitted_time_progressive_kms='".mysqli_real_escape_string($res,$fitted_time_progressive_kms)."',
removed_time_progressive_kms='".mysqli_real_escape_string($res,$removed_time_progressive_kms)."',
removed_date='".mysqli_real_escape_string($res,$removed_date)."',
number='".mysqli_real_escape_string($res,$removed_date)."' WHERE tyre_number='".mysqli_real_escape_string($res,$tyre_number)."' ";
if(mysqli_query($res,$query)){
	header('Location: updateUP.php');

}



?>