<?php
include 'database.php';

$id = $_POST['id'];
$image = $_POST['image'];
$title = $_POST['titlename'];
$cell = $_POST['cell'];
$address = $_POST['address'];
$file = $_FILES['image']['name'];

$query = "UPDATE training set image='$file', title='$title', cell='$cell', address='$address' WHERE id='$id'";

$r= mysqli_query($links,$query);
if($r){
    move_uploaded_file($_FILES['image']['tmp_name'], "training-center/$file");
    echo "<script>alert('Updated Successfully!')</script>";
    echo "<script>window.open('training.php','_self')</script>";
}
?>
