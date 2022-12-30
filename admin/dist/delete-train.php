<?php
include'database.php';

$id=$_GET['id'];

$delete2= " DELETE FROM training  WHERE id='$id'";

$rs= mysqli_query($links,$delete2);


header('location:training.php');

 
?>