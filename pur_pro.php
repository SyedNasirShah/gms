<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

<?php
session_start();

include 'admin/dist/database.php';

$name= $_SESSION['fname'];
$email = $_SESSION['email'];
$cell = $_POST['cell'];
$address = $_POST['address'];
$quan = $_POST['quan'];
$card_type = $_POST['card_type'];
$image = $_FILES['image']['name']; 

$class = $_POST['cars'];


 if(!empty($_POST['cell']) && !empty($_POST['address']) && !empty($_POST['quan']) && !empty($_POST['cars']) && !empty($_POST['card_type']) && !empty($image))
    {
    $query= "INSERT INTO purchase_product(name,email,phone,address,quan,card_type,image,product) VALUES('".$name."','".$email."','".$cell."','".$address."','".$quan."','".$card_type."','".$image."','".$class."')";

    
    $res=mysqli_query($links,$query);
    echo '<script>alert("Data added successfully")</script>';
    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "product-pay/$image");
        echo "<script>window.open('purchase.php','_self')</script>";
}
   }
else{
        echo '<script>alert("Fill all fields first")</script>';
        echo "<script>window.open('purchase.php','_self')</script>";
    }

     

?>