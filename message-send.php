<?php
include 'database.php';
 $as  = $_POST['Msg-name'];
 $bs  = $_POST['Msg-email'];
 $cs = $_POST['Msg-phone'];
 $ds = $_POST['Msg-message'];


 $query= "INSERT INTO message(Msg-name,Msg-email,Msg-phone,Msg-message) VALUES('".$as."','".$bs."','".$cs."','".$ds."')";
    $res=mysqli_query($links,$query);
    header('location:index.php');
    ?>
    