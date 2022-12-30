<?php
include 'database.php';

$id = $_POST['id'];

$title = $_POST['titlename'];
$file = $_FILES['image']['name'];

$query = "UPDATE images set image='$file' WHERE id='$id'";

$r= mysqli_query($links,$query);
if($r){
    echo "<script>alert('Image Updated Successfully!')</script>";
    echo "<script>window.open('gallery.php','_self')</script>";
}
?>
