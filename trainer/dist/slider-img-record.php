<?php
include 'database.php';
 $caption = $_POST['caption'];

if(isset($_POST['upload'])){
    
   
    $file = $_FILES['image']['name'];
    

    $query= "INSERT INTO image(caption,title) VALUES('".$caption."','".$file."')";

    
    $res=mysqli_query($links,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "images/$file");


    }
}
 header('location:caresol.php');       
        ?>