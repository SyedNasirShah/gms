<?php
session_start();

include '../../admin/dist/database.php';

$user= $_SESSION['name'];
$name = $_POST['cars'];
$datee= date('m/d/Y h:i:s a', time());;
$status = $_POST['stat'];

  if(!empty($_POST['cars']) && !empty($_POST['stat']))
    {
    $query= "INSERT INTO attendence(name,datee,status,trainer) VALUES('".$name."','".$datee."','".$status."','".$user."')";

    
    $res=mysqli_query($links,$query);
	echo '<script>alert("Attendence Saved")</script>';
     header('location:attendence2.php');
}
else{
        echo '<script>alert("Fill all fields first")</script>';
        echo "<script>window.open('attendence2.php','_self')</script>";
    }
?>