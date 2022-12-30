<?php
include 'database.php';

 $a  = $_POST['phone'];
 $b  = $_POST['address'];
 $c = $_POST['email'];


    $query= "INSERT INTO message(phone,address,email) VALUES('".$a."','".$c."','".$b."')";

    
    $res=mysqli_query($links,$query);

        ?>