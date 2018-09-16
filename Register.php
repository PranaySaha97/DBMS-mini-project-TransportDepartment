<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   
    <meta name="dcterms.created" content="Sun, 08 Oct 2017 19:14:13 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Register</title>
   
	<center>
	<h1>Please register a new vehicle</h1>
	<form action="Register.php" method="POST">
	
	Vehicle number 
	<input type="text" value="" name="vnum" required />
	<br></br>
	Vehicle Type
	<select type="vtype">
	<option value="car">Car</option>
	<option value="bus">Bus</option>
	<option value="tractor">Tractor</option>
	<option value="van">Van</option>
	</select><br><br/>
	Chasis number 
	<input type="text" value="" name="cnum" required/>
		<br></br>
	Engine number
	<input type="text" value="" name="enum" required/>
		<br></br>
  	Make<select name="make">
	<option value="tata">TATA</option>
	<option value="mahindra">Mahindra</option>
	<option value="ashok">Ashok Leyland</option>
	</select>
		<br></br>
	Wheel base
	<input type="text" value="" name="wbase" required/>
		<br></br>
	Seating capacity
	<input type="text" value="" name="scap" required/>
		<br></br>

	Model Manufacturing Year
	<input type="text" value="" name="mmy" required/> <br><br>

    <input type="submit" name="submit" value="Submit"/><input type="reset" name="reset" value="Reset"/></td>
    	<br></br>
	</form>
	</center>
  
  </head>
  <body>

  </body>
</html>


<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$vnum=$_POST['vnum'];
$cnum=$_POST['cnum'];
$enum=$_POST['enum'];
$make=$_POST['make'];
$wbase=$_POST['wbase'];
$scap=$_POST['scap'];
$vtype=$_POST['vtype'];
$mmy=$_POST['mmy'];
$query= "INSERT INTO registration VALUES('".mysqli_real_escape_string($res,$cnum)."','".mysqli_real_escape_string($res,$vnum)."','".mysqli_real_escape_string($res,$enum)."','".mysqli_real_escape_string($res,$vtype)."','".mysqli_real_escape_string($res,$make)."','".mysqli_real_escape_string($res,$wbase)."','".mysqli_real_escape_string($res,$scap)."','".mysqli_real_escape_string($res,$mmy)."')";
if(mysqli_query($res,$query)){
	header('Location: user_admin.php');

}
?>