<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gym";


$links= mysqli_connect($servername,$username,$password);

 mysqli_select_db($links,$database);

 ?>	