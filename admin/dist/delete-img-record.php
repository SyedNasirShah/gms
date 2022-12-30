<?php  
include 'database.php';

$id = $_GET['id'];

$query = "delete from images where id = '$id'";

mysqli_query($links,$query);

header('location:gallery.php');

?>
