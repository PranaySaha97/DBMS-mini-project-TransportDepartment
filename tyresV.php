<html>
<head><title>tyres View</title></head>
<body>
<center>
<h1>Select Table</h1><br>
<form action="tyresV.php" method="POST">
Tyre Int: <input type="text" name="tyreint" required/><br><br>
<input type="submit" value="Submit"/>
</form>
</center>
</body>
</html>

<?php

error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
$tyreint=$_POST['tyreint'];

if($tyreint==0){
        die("Please entre some Tyre Int");
}

$query="SELECT * from tyres where Tyre_int= '".mysqli_real_escape_string($res,$tyreint)."'";

$result=mysqli_query($res,$query);


$cnt=0;

while($row=mysqli_fetch_assoc(mysqli_query($res,$query))){
   $tyre_number=$row['Tyre_int'];
$fitted_date=$row['Fitted_date'];
$fitted_time_progressive_kms=$row['Fitted_time_progressive_kms'];
$removed_time_progressive_kms=$row['Removed_time_progressive_kms'];
$removed_date=$row['Removed_date'];
$tyre_position=$row['Tyre_position'];
$Total_coveredkms=$row['Total_covered_Kms'];


$cnt++;
echo "<table border=1px>
 <tr>
 <th>Tyre Number Number</th>
 <th>Fitted Date</th>
 <th>Fitted Time</th>
 <th>Removed Time Progressive Kms</th>
 <th>Removed Date</th>
 <th>Tyre Position</th>
 <th>Total covered Kms</th>
 
 </tr>
 <tr>
 <td>".mysqli_real_escape_string($res,$tyre_number)."</td>
 <td>".mysqli_real_escape_string($res,$fitted_date)."</td>
 <td>".mysqli_real_escape_string($res,$fitted_time_progressive_kms)."</td>
 <td>".mysqli_real_escape_string($res,$removed_time_progressive_kms)."</td>
 <td>".mysqli_real_escape_string($res,$removed_date)."</td>
 <td>".mysqli_real_escape_string($res,$tyre_position)."</td>
 <td>".mysqli_real_escape_string($res,$Total_coveredkms)."</td>

 </tr>
 </table>";


 if($cnt==0)){
         echo "Invlid Tyre Number.";
 }

    
        // echo "Tyre Number: ".$tyre_number."<br>";
        // echo "Fitted Date: ".$fitted_date."<br>";
        // echo "Fitted Time Progressive Kms: ".$fitted_time_progressive_kms."<br>";
        // echo "Removed Time Progressive Kms: ".$removed_time_progressive_kms."<br>";
        // echo "Removed Date: ".$removed_date."<br>";
        // echo "Tyre Position: ".$tyre_position."<br>";
        // echo "Total covered Kms: ".$Total_coveredkms."<br>";
       
  
}


?>