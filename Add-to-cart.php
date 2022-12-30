<?php
session_start();
include "admin/dist/database.php";


$userprofile=$_SESSION['email'];
if($userprofile==true)
{
$i = $_POST['id'];
$a = $_POST['name'];
$b = $_POST['img'];
$c = $_POST['quan'];
$d = $_POST['price'] ;
$e = $c*$d;
if(!empty($_POST['name']) && !empty($_POST['img']) && !empty($_POST['quan']) && !empty($_POST['price'])){
$query= "INSERT INTO customer_carts(id,name,img,quan,price,username) VALUES ('".$i."','".$a."','".$b."','".$c."','".$e."','".$userprofile."')";
     
     $rs =mysqli_query($links,$query);

     echo '<script>alert("Added to Cart Successuly")</script>';
     echo "<script>window.open('store.php','_self')</script>";
 }
}
else{
header('location:login.php');
}

?>