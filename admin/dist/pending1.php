<?php
include'database.php';


$id=$_GET['id'];
$details="Waiting for Payment";
$query = "UPDATE purchase_product set payment='pending', details='$details' where id='$id'";
mysqli_query($links,$query);

header('location:payments.php');

?>