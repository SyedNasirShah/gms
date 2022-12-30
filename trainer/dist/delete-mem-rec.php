<?php
include'database.php';

$id=$_GET['id'];

$delete2= " DELETE FROM personal_trainer  WHERE id='$id'";

$rs= mysqli_query($links,$delete2);


header('location:my-members.php');

 
?>