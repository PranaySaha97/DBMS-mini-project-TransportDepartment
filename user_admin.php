<html>
<head><title>Admin</title></head>

<body>
<div style="float: right"><a href="logout.php">Logout</a></div><br><hr>

<center>

<h1>Welcome Admin</h1>

<form action="user_admin.php" method="POST">
Operation: <select name="operation">
<option value="insert">Insert New Records</option>
<option value="update">Update Existing Records</option>
<option value="view">View records</option>

</select>
<br><br>
<input type="submit" value="Submit" name="submit"/>

</form>
</center>


</body>

</html>



<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","","transport");
// error_reporting(E_ALL|E_NOTICE);
$operation=$_POST['operation'];

if($operation=="insert"){
header('Location: insert.php');
}else if($operation=="update"){
    header('Location: update.php');
}

else if($operation=="view"){
    header('Location: view.php');
}

 session_start();
 $_SESSION['name']='Admin';
?>
