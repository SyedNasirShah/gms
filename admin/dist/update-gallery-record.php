<?php
include 'database.php';

$id = $_POST['id'];

$file = $_FILES['image']['name'];

$query = "UPDATE images set image='$file' WHERE id='$id'";

$r= mysqli_query($links,$query);

 if($r){
        move_uploaded_file($_FILES['image']['tmp_name'], "gallery/$file");
          echo "<script>alert('Updated Successfully!')</script>";
    echo "<script>window.open('gallery.php','_self')</script>";

    }


?>
