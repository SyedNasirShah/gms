<?php
include 'database.php';

$mon= $_POST['monday'];
$tue= $_POST['tuesday'];
$wed= $_POST['wed'];
$thu= $_POST['thu'];
$fri= $_POST['fri'];
$sat= $_POST['sat'];
$sun= $_POST['sun'];


 
    

    $query= "INSERT INTO class_schedule(mon,tue,wed,thu,fri,sat,sun) VALUES('".$mon."','".$tue."','".$wed."','".$thu."','".$fri."','".$sat."','".$sun."')";

    $res=mysqli_query($links,$query);
    

echo ("Data Added Successfully");
 header('location:schedule.php'); 

        ?>