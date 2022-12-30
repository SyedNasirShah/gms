<!-- Header start -->
<?php include 'header.php';?>
<!-- Header end  -->
<!-- sidenav start -->
    <?php include 'sidenav.php';?>
<!-- sidnav end -->
<!-- Search BAR CODE -->
<div class="container-fluid">
   
<td><button class="btn btn-success" style="margin-top:60px;margin-bottom: 40px;"><a style="color: #fff;  text-decoration: none;" href="add_about_content.php">Add Content</a></button></td>
</div>

<!-- Php code For data View -->
<?php
include'database.php';
$query="SELECT*FROM about";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>
<!-- Php code end -->

 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>id</th>
                                                 <th>details</th>
                                                 
                                                <th colspan="2">Operation</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                  for ($k=1; $k<=$number ; $k++) { 
                                   $rs=mysqli_fetch_array($result);
                                   ?>
                                            <tr>
                                                <td><?php echo $k;?></td>
                                                <td><?php echo $rs['id'];?></td>
                                                <td><?php echo $rs['details'];?></td>
                                                
                                                <!-- <td><button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="update-img.php?id=<?php echo $rs['id'];?>">update</a></button></td> -->
                                                <td><button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="delete-about.php?id=<?php echo $rs['id'];?>">Delete</a></button></td>
                                            </tr>
                                               <?php
}
?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!-- <?php
$sel= "SELECT * FROM images";
  $q= mysqli_query($links,$sel);

  echo "<table>";

  while ($row = mysqli_fetch_array($q)) {
echo "<tr>";
echo "<td>"; ?> <img src="<?php echo $row['image']; ?>" height="300"; width="300"> <?php echo "</td>";


echo "<tr>";


    // echo "<div id='img_div>";
    // echo "<img src='images/" .$row['image']."'>";
    // echo "<div>";
    
  }
  echo "</table>"
  
?>
 -->

 <?php include 'footer.php';
?>


