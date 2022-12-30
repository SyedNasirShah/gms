<?php 
session_start();
include 'header.php';
include 'sidenav.php';
include'database.php';

$userprofile=$_SESSION['email'];
$query="SELECT * FROM customer_carts where username='$userprofile'";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>

<div style="width=100%; margin-left: 20px; margin-right: 20px;">
<h3 style="margin-left: 41%; margin-top: 5px; padding-top: 5px;">My Cart</h3>
</div>

 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="text-align: center;">
                                          <th>Sr.No</th>
                                          <th hidden>Id</th>
                                          <th>Name</th>
                                          <th>Image</th>
                                          <th>Quantity</th>
                                          <th>Price</th>
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
                                                <td><?php echo $rs['name'];?></td>
                                                <td><?php echo $rs['img'];?></td>
                                                <td><?php echo $rs['quan'];?></td>
                                                <td><?php echo $rs['price'];?></td>
                                                <td><button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="../../../purchase.php">Buy</a></button></td>
                                                <td><button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="delete-cart-record.php?id=<?php echo $rs['id'];?>">Delete</a></button></td>
                                            </tr>
                                               <?php
                                               }
                                               ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>