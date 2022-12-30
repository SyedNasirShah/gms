<?php
include'database.php';

$id=$_GET['id'];

$delete2= " DELETE FROM about  WHERE id='$id'";

$rs= mysqli_query($links,$delete2);


header('location:about_content.php');

 
?>