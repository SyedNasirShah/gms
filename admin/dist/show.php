<?php 
include 'database.php';

	
$sel= "SELECT * FROM images WHERE id='2'";
  

$imageresult1 = mysql_query($sel);

while($rows = mysql_fetch_assoc($imageresult1))
{       
    $image = $rows['image'];    
    print $image;
}
  

?>
