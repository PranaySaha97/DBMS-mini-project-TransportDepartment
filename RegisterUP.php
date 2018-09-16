<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   
    <meta name="dcterms.created" content="Sun, 08 Oct 2017 19:14:13 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Register</title>
    <h1 align="middle">Fill the form for a new vehicle 
	</h1>
	<center>
	<form action="RegisterUP.php" method="POST">
	
	Vehicle number 
	<input type="text" value="" name="vnum" />
	<br></br>
	Vehicle Type
	<input type="text" value="" name="vtype"/><br><br/>
	Chasis number 
	<input type="text" value="" name="cnum"/>
		<br></br>
	Engine number
	<input type="text" value="" name="enum"/>
		<br></br>
  	Make<select name="make">
	<option value="tata">TATA</option>
	<option value="mahindra">Mahindra</option>
	<option value="ashok">Ashok Leyland</option>
	</select>
		<br></br>
	Wheel base
	<input type="text" value="" name="wbase" />
		<br></br>
	Seating capacity
	<input type="text" value="" name="scap" />
		<br></br>

	Model Manufacturing Year
	<input type="text" value="" name="mmy"/> <br><br>

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
$cnt=0;
    // $chassno=$query_row['chassis_no'];
    // if($chassno==$cnum){
        $query= "UPDATE registration SET vehicle_no='".mysqli_real_escape_string($res,$vnum)."' ,
        eng_no='".mysqli_real_escape_string($res,$enum)."' ,
        vehicle_type='".mysqli_real_escape_string($res,$vtype)."' ,
        make='".mysqli_real_escape_string($res,$make)."',
        wheel_base='".mysqli_real_escape_string($res,$wbase)."' ,
        seating_capacity='".mysqli_real_escape_string($res,$scap)."' ,
        mmy='".mysqli_real_escape_string($res,$mmy)."' WHERE chassis_no='".mysqli_real_escape_string($res,$cnum)."'";
        if(mysqli_query($res,$query)){
            header('Location: update.php');
        
        }

 

?>