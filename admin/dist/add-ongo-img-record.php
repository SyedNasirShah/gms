<?php
include 'database.php';
 $a  = $_POST['title'];
if(isset($_POST['upload'])){
    
    $file = $_FILES['image']['name'];

    $query= "INSERT INTO ongoing(image,title) VALUES('".$file."','".$a."')";

    
    $res=mysqli_query($links,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "$file");

    }
}


 







 header('location:slider.php');       
        ?>