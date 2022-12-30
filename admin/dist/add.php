<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

<?php

include 'database.php';

$a= $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['email'];
$d = $_POST['pass'];


$query= "INSERT INTO users(fname,lname,email,pass) VALUES ('".$a."','".$b."','".$c."','".$d."')";
     

     $rs =mysqli_query($links,$query);

 header('location:index.php');  

?>
<br>