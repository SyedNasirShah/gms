<?php
include 'database.php';

$id = $_POST['id'];

$title = $_POST['titleupdate'];
$duration = $_POST['durationupdate'];
$price = $_POST['priceupdate'];
$file = $_FILES['image']['name'];

$query = "UPDATE upcoming set image='$file', title='$title', duration='$duration', price='$price' WHERE id='$id'";

$r= mysqli_query($links,$query);
if($r){
    move_uploaded_file($_FILES['image']['tmp_name'], "classes/$file");
    echo "<script>alert('Updated Successfully!')</script>";
    echo "<script>window.open('classes.php','_self')</script>";
}
?>
