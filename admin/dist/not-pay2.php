<?php
include'database.php';


$id=$_GET['id'];

$date_clicked = date('m/d/Y h:i:s a', time());;
$odr= "Waiting for Valid Payment";

$query = "UPDATE purchase_product set date='$date_clicked', details='$odr' where id='$id'";

mysqli_query($links,$query);

header('location:payments.php');



?>