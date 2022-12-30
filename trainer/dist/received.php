<?php
include'database.php';


$id=$_GET['id'];
$date_clicked = date('m/d/Y h:i:s a', time());;

$query = "UPDATE personal_trainer set payment='Received' where id='$id'";
mysqli_query($links,$query);

header('location:my-members.php');

?>