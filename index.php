<html>
<head>
	<title>Login</title>
</head>
<body bgcolor="skyblue">
<center>
<h1>Welcome To Transport Database. Please Login to continue...</h1>
<br>
<br>
<form action="index.php" method="POST">
    Login as: <select name="user">
            <option value="admin">Admin</option>
            <option value="princi">Principal</option>
    </select>
    <br><br>
    Password: <input type="password" name="pass" /><br><br>
    <input type="Submit" value="Submit" name="submit" />

</form>
</center>
</body>
</html>


<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","root","transport");


require 'connect.inc.php';


if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['submit'])){
    
        $uname=$_POST['user'];
        $pass=$_POST['pass'];
        // $pass_hash=md5($pass);
    
       
    
        $query="SELECT `username`,`password` FROM `user_db`";
        //$query_run=mysqli_query($res,$query);
        $cnt=0;
    
        if($query_run=mysqli_query($res,$query)){

             while($query_row=mysqli_fetch_assoc($query_run)){
                $username=$query_row['username'];
                $password=$query_row['password'];
                // $password_hash=md5($password);
    
                
                    if($pass==$password){


                        if($uname=="admin"){

                            header('Location: user_admin.php');

                        }
                        else{
                            header('Location: user_princi.php');
                        }
                        
                        
    
                    }
                    else{
                        $cnt++;
                    }
                
    
    
            }
            if($cnt!=0){
                echo "<br>Invalid Password.";
            }
    
    
        }else{
            echo '<br>Unable to fetch data';
        }
    }

?>