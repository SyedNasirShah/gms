

<?php include 'header.php';
include 'sidenav.php';
?>

<div style="width= 100%; margin-left: 20px; margin-right: 20px;">
<h3 style="margin-left: 41%; margin-top: 5px; padding-top: 5px;">Gallery</h3>
</div>
<div class="container-fluid">

<td><button class="btn btn-success" style="margin-top:10px;margin-bottom: 10px;"><a style="color: #fff;  text-decoration: none;" href="add_img.php">Add Images</a></button></td>
</div>

<!-- Php code For data View -->
<?php
// $user=$_SESSION['username'];

include'database.php';
$query="SELECT*FROM images";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>
<!-- Php code end -->

 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Sr.No</th>
                                                <th hidden>id</th>
                                                 <th>Image</th>
                                                <th colspan="2">Operation</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                  for ($k=1; $k<=$number ; $k++) { 
                                   $rs=mysqli_fetch_array($result);
                                   
                                   ?>
                                            <tr style="text-align: center;">
                                                <td><?php echo $k;?></td>
                                                <td hidden><?php echo $rs['id'];?></td>
                                                <td>
                                                <div class="col-md-3" style="max-width: 90%;!important;">
                                                <a href="../../admin/dist/gallery/<?php echo $rs['image'];?>" target="_blank"><p>View Image</p></a>
                                                </div> 
                                                </td>
                                                <td><button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="update-gallery.php?id=<?php echo $rs['id'];?>">update</a></button></td>
                                                <td><button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="delete-img-record.php?id=<?php echo $rs['id'];?>">Delete</a></button></td>
                                            </tr>
                                               <?php
}
?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>



