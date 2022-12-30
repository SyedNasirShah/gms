<?php
include 'database.php';
 $title  = $_POST['titlename'];
 $b  = $_POST['cell'];
 $address  = $_POST['address'];
 
if(isset($_POST['upload'])){
    
    $file = $_FILES['image']['name'];

    $query= "INSERT INTO training(image,title,cell,address) VALUES('".$file."','".$title."','".$b."','".$address."')";

    
    $res=mysqli_query($links,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "$file");

    }
}

 header('location:training.php');       
        ?>