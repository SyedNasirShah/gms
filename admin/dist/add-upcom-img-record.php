<?php
include 'database.php';
 $a  = $_POST['title'];
 $b  = $_POST['duration'];
 $c  = $_POST['price'];
if(isset($_POST['upload'])){
    
    $file = $_FILES['image']['name'];

    $query= "INSERT INTO upcoming(image,title,duration,price) VALUES('".$file."','".$a."','".$b."','".$c."')";

    
    $res=mysqli_query($links,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "classes/$file");

    }
}

 header('location:classes.php');       
        ?>