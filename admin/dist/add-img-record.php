<?php
include 'database.php';

if(isset($_POST['upload'])){
    
    $file = $_FILES['image']['name'];

    $query= "INSERT INTO images(image) VALUES('$file')";

    
    $res=mysqli_query($links,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "gallery/$file");

    }
}
 header('location:gallery.php');       
        ?>