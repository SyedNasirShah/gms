<?php  
include 'database.php';

$id = $_GET['id'];

$query = "delete from customer_carts where id = '$id'";

mysqli_query($links,$query);

header('location:../../user/dist/my-cart.php');

?>
