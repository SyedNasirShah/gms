<!-- Header start -->
<?php include 'header.php';?>
<!-- Header end  -->
<!-- sidenav start -->
    <?php include 'sidenav.php';?>
<!-- sidnav end -->
<!-- Search BAR CODE -->
<div class="container-fluid">
   
</div>

<!-- Php code For data View -->
<?php
include'database.php';
$query="SELECT*FROM team";
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
                                                 <th>Name</th>
                                                 <th>Image</th>
                                                 <th>Description</th>
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
                                                <td><?php echo $rs['name'];?></td>
                                                <td><?php echo $rs['image'];?></td>
                                                <td><?php echo $rs['dsp'];?></td>
                                                <td><button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="update-trainer.php?id=<?php echo $rs['id'];?>">update</a></button></td>
                                                <td><button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="delete-team.php?id=<?php echo $rs['id'];?>">Delete</a></button></td>
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


