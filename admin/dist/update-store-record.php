<?php
include 'database.php';

$id = $_POST['id'];

$file = $_FILES['image']['name'];
$title = $_POST['title'];
$price = $_POST['price'];
$query = "UPDATE nav_img set image='$file', title='$title', price='$price' WHERE id='$id'";

$r= mysqli_query($links,$query);
if($r){
    move_uploaded_file($_FILES['image']['tmp_name'], "store/$file");
    echo "<script>alert('Image Updated Successfully!')</script>";
    echo "<script>window.open('store.php','_self')</script>";
}
?>
