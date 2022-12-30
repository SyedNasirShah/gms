<?php
include 'database.php';

$id = $_POST['id'];

$name = $_POST['title'];
$file = $_FILES['image']['name'];
$ch = $_POST['charges'];
$dsp = $_POST['dsp'];
$un = $_POST['username'];
$ps = $_POST['pass'];
$query = "UPDATE team set name='$name', image='$file', charges='$ch', dsp='$dsp', username='$un', pass='$ps' WHERE id='$id'";

$r= mysqli_query($links,$query);
if($r){
    move_uploaded_file($_FILES['image']['tmp_name'], "trainer/$file");
    echo "<script>alert('Updated Successfully!')</script>";
    echo "<script>window.open('trainer.php','_self')</script>";
}
?>
