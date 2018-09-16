<!DOCTYPE html>
<html>
<head>
	<title>STOCKS UPDATE</title>
</head>
<body>
<center>
 <h1>STOCKS</h1>
 <br>
 <br>
 <form action="STOCKSUP.php" medthod="POST">
     
 TYRE NUMBER:<input type="number" name="tyre_number" required ><br></br>
 BILL NUMBER :<input type="number" name="bill_number" required><br></br>
 MANUFACTURER:<input type="text" name="manufacturer" required><br></br>
 COST OF TYRE:<input type="number" name="cost_of_tyre" required><br></br>
 DATE OF PURCHASE:<input type="date" name="date_of_purchase" rerquired><br></br>
 TYRE TYPE:<input type="text" name="tyre_type" required><br></br>
TYRE POSITION :<input type="directions" name="tyre_positions"><br></br>
 
<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/>
 

  </form>
 </center>
</body>
</html>  


  
<?php 
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$tyre_number=$_POST['tyre_number'];
$bill_number=$_POST['bill_number'];
$manufacturer=$_POST['manufacturer'];
$cost_of_tyre=$_POST['cost_of_tyre'];
$date_of_purchase=$_POST['date_of_purchase'];
$tyre_type=$_POST['tyre_type'];
$tyre_positions=$_POST['tyre_positions'];

$query= "UPDATE stocks SET Tyre_int='".mysqli_real_escape_string($res,$tyre_number)."' ,
Manufacturer='".mysqli_real_escape_string($res,$manufacturer)."' ,
Cost_of_tyre='".mysqli_real_escape_string($res,$cost_of_tyre)."',
Date_of_purchase='".mysqli_real_escape_string($res,$date_of_purchase)."' ,
Tyre_position='".mysqli_real_escape_string($res,$directions)."' ,
Tyre_type='".mysqli_real_escape_string($res,$tyre_type)."' WHERE Bill_no='".mysqli_real_escape_string($res,$bill_number)."'";
if(mysqli_query($res,$query)){
	header('Location: update.php');

}

?>
                      