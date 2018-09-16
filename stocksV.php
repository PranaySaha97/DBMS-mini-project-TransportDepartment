<html>
<head>
	<title>Stocks View</title>
</head>
<body>
<center>
 <h1>Select Table</h1><br>  
 <form action="stocksV.php" method="POST">
Bill Number: <input type="number" name="bill_number" required><br></br>
<input type="submit" value="Submit"/>
  </form>
 </center>
</body>
</html> 
  
<?php 
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$bill_no=$_POST['bill_number'];

$query="SELECT * from stocks where Bill_no= '".mysqli_real_escape_string($res,$bill_no)."'";

$result=mysqli_query($res,$query);

$cnt=0;
while($row= mysqli_fetch_assoc($result))
{
    $tyre_number=$row['Tyre_int'];
    $bill_number=$row['Bill_no'];
    $manufacturer=$row['Manufacturer'];
    $cost_of_tyre=$row['Cost_of_tyre'];
    $date_of_purchase=$row['Date_of_purchase'];
    $tyre_type=$row['Tyre_type'];
    $tyre_positions=$row['Tyre_position'];
    
        echo "Tyre Number: ".$tyre_number."<br>";
        echo "Bill Number: ".$bill_number."<br>";
        echo "Manufacturer: ".$manufacturer."<br>";
        echo "Cost of Tyre: ".$cost_of_tyre."<br>";
        echo "Date of Purchase: ".$date_of_purchase."<br>";
        echo "Tyre Type: ".$tyre_type."<br><br>";
        echo "Tyre Position: ".$tyre_positions."<br><br>";

}

?>
                      