<?php
include'database.php';


$id=$_GET['id'];

$query = "UPDATE personal_trainer set attend='Absent' where id='$id'";
mysqli_query($links,$query);

header('location:attendence.php');

?>