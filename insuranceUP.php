<!DOCTYPE html>
<html>
<head>
	<title>INSURANCE UPDATE</title>
</head>
<body>
<center>
 <h1>INSURANCE</h1>
<form action="insuranceUP.php" method="POST">

    POLICY NUMBER :<input type="text" name="policy_number" required><br></br>
COMPANY NAME:<input type="text" name="company_name" required><br></br>
EXPIRED DATE: <input type="DATE" name="expirydate" required><br></br>
RENEWAL DATE: <input type="DATE" name="renewaldate" required><br></br>
AMOUNT: <input type="number" name="amount" required><br></br>
VEHICLE NO :<input type="text" name="vehicle_no" required><br></br>
<input type="submit" name="submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/><br></br>
</form>
 </center>
</body>
</html>  


<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$policy_number=$_POST['policy_number'];
$company_name=$_POST['company_name'];
$expirydate=$_POST['expirydate'];
$renewaldate=$_POST['renewaldate'];
$amount=$_POST['amount'];
$vehicle_no=$_POST['vehicle_no'];
$cnt=0;
$query_disp="SELECT * from Insurance";
$query_success=mysqli_query($query_disp);
while($query_row= mysqli_fetch_assoc($query_success))
{
    $policyno=$query_row['Policy_number'];
    if($policyno==$policy_number){
        $query= "UPDATE registration SET Name_of_company='".mysqli_real_escape_string($res,$company_name)."' ,
        Expiry_date='".mysqli_real_escape_string($res,$expirydate)."' ,
        Renewal_date='".mysqli_real_escape_string($res,$renewaldate)."' ,
        Amount_of_insurance='".mysqli_real_escape_string($res,$amount)."',
        vehicle_no='".mysqli_real_escape_string($res,$vehicle_no)."'
        WHERE Policy_number='".mysqli_real_escape_string($res,$policy_number)."'";
if(mysqli_query($res,$query)){
	header('Location: update.php');

}
    }
else {
    $cnt++;
    }
}
if($cnt!=0){
	echo "<h2>Error...Cannot find chassis number.</h2>";
}

?>