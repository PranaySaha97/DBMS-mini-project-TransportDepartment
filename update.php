<html>
<head><title>Update</title></head>
<body>
<center>
<h1>Choose What You Want To Update</h1>

<form action="update.php" method="POST">
Select:<select name="table">
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
</form>
</center>
</body>
</html>

<?php
error_reporting(0);
$table=$_POST['table'];

switch($table){

    case "reg": header('Location: RegisterUP.php');break;
    case "emission": header('Location: emissionUP.php');break;
    case "engineoil": header('Location: engineoilUP.php');break;
    case "fitness": header('Location: fitnessUP.php');break;
    case "fuel": header('Location: fuelUP.php');break;
    case "insurance": header('Location: insuranceUP.php');break;
    case "permit": header('Location: permitUP.php');break;
    case "roadtax": header('Location: roadtaxUP.php');break;
    case "spare": header('Location: spareUP.php');break;
    case "stocks": header('Location: stocksUP.php');break;
    case "tyrs": header('Location: tyresUP.php');break;
}
?>