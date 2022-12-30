<?php
include'database.php';


$id=$_GET['id'];
$date_clicked = date('m/d/Y h:i:s a', time());;
$details="Delivery within 5 Days";
$query = "UPDATE purchase_product set payment='Received', details='$details' where id='$id'";
mysqli_query($links,$query);

header('location:payments.php');

?>