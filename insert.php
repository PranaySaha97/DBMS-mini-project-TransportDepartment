<html>
<head><title>New Records</title></head>


<body>


<center>
<form action="insert.php" method="POST">
Select table:<select name="table">
<option value="register">Registration</option>
<option value="battery">Battery</option>
<option value="emission">Emission</option>
<option value="engineoil">Engine oil</option>
<option value="fitness">Fitess</option>
<option value="fuel">Fuel</option>
<option value="insurance">Insurance</option>
<option value="permit">Permit</option>
<option value="roadtax">Road Tax</option>
<option value="spareparts">Spare parts</option>
<option value="stocks">Stock</option>
<option value="tyres">Tyres</option>
</select>
<br></br>
<input type="submit" value="Submit" name="submit"/>


</form>
</center>

</body>

</html>

<?php
error_reporting(0);
$table=$_POST['table'];
if ($table=="register"){
    header('Location: Register.php');
}
else if($table=="battery"){
    header('Location: battery.php');
}
else if($table=="emission"){
    header('Location: emission.php');
}
else if($table=="engineoil"){
    header('Location: engineoil.php');
}
else if($table=="fitness"){
    header('Location: fitness.php');
}
else if($table=="fuel"){
    header('Location: fuel.php');
}
else if($table=="insurance"){
    header('Location: insurance.php');
}
else if($table=="permit"){
    header('Location: permit.php');
}
else if($table=="roadtax"){
    header('Location: roadtax.php');
}
else if($table=="spareparts"){
    header('Location: spare.php');
} 
else if($table=="stocks"){
    header('Location: STOCKS.php');
}
else if($table=="tyres"){
    header('Location: tyres.php');
}
?>