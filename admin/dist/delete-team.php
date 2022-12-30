<?php
include'database.php';

$id=$_GET['id'];

$delete2= " DELETE FROM team  WHERE id='$id'";

$rs= mysqli_query($links,$delete2);


header('location:trainer.php');

 
?>