<?php
include 'database.php';
 $a  = $_POST['title'];
 $ch  = $_POST['charges'];
 $b  = $_POST['dsp'];
 $c  = $_POST['username'];
 $d  = $_POST['pass'];

if(isset($_POST['upload'])){
    
    $file = $_FILES['image']['name'];

    $query= "INSERT INTO team(name,image,charges,dsp,username,pass) VALUES('".$a."','".$file."','".$ch."','".$b."','".$c."','".$d."')";

    
    $res=mysqli_query($links,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "trainer/$file");

    }
}


 header('location:trainer.php');       
        ?>