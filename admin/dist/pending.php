<?php
include'database.php';


$id=$_GET['id'];
$query = "UPDATE users set payment='Pending' where id='$id'";
mysqli_query($links,$query);

header('location:class-payment.php');

?>