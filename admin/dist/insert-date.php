
<?php

include 'database.php';

$id=$_GET['id'];
    
    $query= "UPDATE users set datee='hamza' where id='$id'";

    $res=mysqli_query($links,$query);
?>  