<?php
include'database.php';


$id=$_GET['id'];
$query = "UPDATE personal_trainer set payment='Pending' where id='$id'";
mysqli_query($links,$query);

header('location:my-members.php');

?>