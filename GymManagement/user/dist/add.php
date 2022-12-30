<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

<?php

include 'database.php';

$a= $_POST['fname'];
$c = $_POST['email'];
$d = $_POST['pass'];

      
$query= "INSERT INTO users(fname,email,pass) VALUES ('".$a."','".$c."','".$d."')";
     

     $rs =mysqli_query($links,$query);
     echo "<script>window.open('index.php','_self')</script>";
     // }else
     // {
     // 	echo("Email Or Cell Number Already Exists");
     // }

?>
