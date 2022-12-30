<?php
include 'database.php';
 $a  = $_POST['title'];
 $b = $_POST['price'];
if(isset($_POST['upload'])){
    
    $file = $_FILES['image']['name'];

    $query= "INSERT INTO nav_img(image,title,price) VALUES('".$file."','".$a."','".$b."')";

    
    $res=mysqli_query($links,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "store/$file");

    }
}


 







 header('location:store.php');       
        ?>