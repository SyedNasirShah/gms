<?php 
session_start();
?>
<?php

include 'admin/dist/database.php';

$userprofile=$_SESSION['email'];
$username=$_SESSION['fname'];

$cell = $_POST['cell'];
$class = $_POST['cars'];
$file = $_FILES['image']['name'];

  if(!empty($_POST['cell']) && !empty($_POST['cars']) && !empty($file))
    {
    $query= "INSERT INTO apply_class(name,email,cell,class,payment) VALUES('".$username."','".$userprofile."','".$cell."','".$class."','".$file."')";

    
    $res=mysqli_query($links,$query);
	echo '<script>alert("Data added successfully")</script>';
    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/$file");
        echo "<script>window.open('apply-classes.php','_self')</script>";
}
}
else{
        echo '<script>alert("Fill all fields first")</script>';
        echo "<script>window.open('apply-classes.php','_self')</script>";
    }
?>