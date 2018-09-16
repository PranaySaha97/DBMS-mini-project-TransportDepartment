<html>
<head><title>View</title></head>

<body>
<div style="float:right;"><a href="user_admin.php">Back</a></div>
<center>
<h1>Please choose the table you want to view</h1>

<form action="view.php" method="POST">

Select Table:<select name="table">
<option value="reg">Registration</option>
<option value="emission">Emission</option>
<option value="engineoil">Engineoil</option>
<option value="fitness">Fitness</option>
<option value="fuel">Fuel</option>
<option value="insurance">Insurance</option>
<option value="permit">Permit</option>
<option value="roadtax">Roadtax</option>
<option value="spare">Spare</option>
<option value="stocks">Stock</option>
<option value="tyres">Tyres</option>
</select><br><br>
<input type="submit" value="Submit" name="submit"/><input type="reset" value="Reset" name="reset"/>
</select>

</form>

</center>

</body>

</html>

<?php
error_reporting(0);
$table=$_POST['table'];

switch($table){

    case "reg": header('Location: RegisterV.php');break;
    case "emission": header('Location: emissionV.php');break;
    case "engineoil": header('Location: engineoilV.php');break;
    case "fitness": header('Location: fitnessV.php');break;
    case "fuel": header('Location: fuelV.php');break;
    case "insurance": header('Location: insuranceV.php');break;
    case "permit": header('Location: permitV.php');break;
    case "roadtax": header('Location: roadtaxV.php');break;
    case "spare": header('Location: spareV.php');break;
    case "stocks": header('Location: stocksV.php');break;
    case "tyrs": header('Location: tyresV.php');break;
}

?>