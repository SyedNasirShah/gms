<?php 
session_start();
?>

<?php 
include 'header.php';
include 'sidenav.php';
include'database.php';
$user= $_SESSION['name'];
$query="SELECT * FROM personal_trainer where trainer='$user'";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Attendence</title>
      <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
       <link href="assets/css/style.css" rel="stylesheet">
 </head>
 <body>
 <br>
       

  <div class="my-form-body">
    <h1 id="form-heading" style="#333: green;">Mark Attendence</h1>
    <form action="attend-rec.php" method="POST" enctype="multipart/form-data" style="margin-left: 40px;">
      <div class="form-group row">

 <?php
                $query="SELECT * FROM personal_trainer where trainer='$user'";
                 $ongo= mysqli_query($links,$query);
                ?>
                <label>Student Name*</label>
                <select name="cars" id="cars" class="form-control">
                  <?php
                while ($row = mysqli_fetch_array($ongo)) {
                ?>
                <option value="<?php echo $row["name"] ?>"><?php echo $row["name"] ?></option>
                <?php
              }
                ?>
                </select>
                <label>Status*</label>
<select name="stat" id="stat" class="form-control">
  <option value="Present">Present</option>
  <option value="Absent">Absent</option>
</select><br>
       
       
      </div>
      <br><br>
      <div class="row">
        
          <input type="submit" name="upload" class="btn btn-primary" value="Submit">
       
      </div>
    </form>
  </div>
 </body>
 </html>


 <?php 

$query="SELECT * FROM attendence where trainer='$user'";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>
  <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                              <th>Sr.No</th>          
                                              <th>Name</th>
                                              <th>Date</th>
                                              <th>Status </th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                  for ($k=1; $k<=$number ; $k++) { 
                                   $rs=mysqli_fetch_array($result);
                                   ?>
                                            <tr style="text-align: center;">
                                              <td><?php echo $k;?></td>
                                              <td><?php echo $rs['name'];?></td>
                                              <td><?php echo $rs['datee'];?></td>
                                              <td><?php echo $rs['status'];?></td>
                                            </tr>
                                               <?php
                                               }
                                               ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
