<html>
<head><title>battery View</title></head>
<body>
<center>
<h1>Select Table</h1><br>
<form action="batteryV.php" method="POST">
Bill Number: <input type="text" name="billno" required/><br><br>
<input type="submit" value="Submit"/>
</form>
</center>
</body>
</html>

<?php

error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
// mysqli_select_db("transport");
$billno=$_POST['billno'];
if($billnumber==0){
    // echo "Please enter a chassis number";
    die("Please enter a chassis number");
}

$query="SELECT * from battery where BILL_NO= '".mysqli_real_escape_string($res,$billno)."'";

$result=mysqli_query($res,$query);

$cnt=0;

while($row=mysqli_fetch_assoc($result)){
    $billnumber=$row['BILL_NO'];
$nameofsupplier=$row['SUPPLIERS_NAME'];
$amount=$row['AMOUNT'];
$quantity=$row['QUANTITY'];
$fitteddate=$row['FITTED_DATE'];
$fittedtime=$row['FITTED_TIME'];

    $cnt++;
   echo "<table border=1px>
    <tr>
    <th>Bill Number</th>
    <th>Name of supplier</th>
    <th>Amount</th>
    <th>Quantity</th>
    <th>Fitted date</th>
    <th>Fitted time</th>
    
    </tr>
    <tr>
    <td>".mysqli_real_escape_string($res,$billnumber)."</td>
    <td>".mysqli_real_escape_string($res,$nameofsupplier)."</td>
    <td>".mysqli_real_escape_string($res,$amount)."</td>
    <td>".mysqli_real_escape_string($res,$quantity)."</td>
    <td>".mysqli_real_escape_string($res,$fitteddate)."</td>
    <td>".mysqli_real_escape_string($res,$fittedtime)."</td>
    </tr>
    </table>";
    
    
      //  echo "Bill Number: ".$billnumber."<br>";
      //  echo "Name Of Supplier: ".$nameofsupplier."<br>";
        // echo "Amount: ".$amount."<br>";
        // echo "Quantity: ".$quantity."<br>";
        // echo "Fitted Date: ".$fitteddate."<br>";
        // echo "Fitted Time: ".$fittedtime."<br>";
       
  
}
if($cnt==0){
    echo "Bill number not found.";
}


?>