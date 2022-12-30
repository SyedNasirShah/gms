   <?php
include 'database.php';

 $a  = $_POST['content'];


    $query= "INSERT INTO about(details) VALUES('".$a."')";

    
    $res=mysqli_query($links,$query);





 header('location:about_content.php');       
        ?>