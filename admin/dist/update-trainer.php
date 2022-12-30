<?php 
 include ('database.php');
 $id= $_GET['id'];
$query= "SELECT * FROM team WHERE id='$id'";
$result= mysqli_query($links,$query);
$rs= mysqli_fetch_array($result);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <title>GYM Managment System</title>
</head>

<body>

<div class="form-body">
    <form action="update-trainer-record.php" method="POST" enctype="multipart/form-data">
      <h1 id="form-heading" style="color: green;margin-bottom: 40px;">Update Trainer</h1>
      <input type="number" name="id" value="<?php echo $id; ?>" hidden  required>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Image</label>
        <div class="col-sm-9 m-auto">
          <input type="file" name="image" class="mail_text" id="colFormLabel" value="<?php echo $rs['image'];?>" required>
        </div><br>
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Name</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="title" class="form-control" id="colFormLabel" value="<?php echo $rs['name'];?>" required>
        </div>
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Charges</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="charges" class="form-control" id="colFormLabel" value="<?php echo $rs['charges'];?>" required>
        </div>
          <label for="colFormLabel" class="col-sm-2 col-form-label lab">Description</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="dsp" class="form-control" id="colFormLabel" value="<?php echo $rs['dsp'];?>" required>
        </div>
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Username </label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="username" class="form-control" id="colFormLabel" value="<?php echo $rs['username'];?>" required>
        </div>
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Password</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="pass" class="form-control" id="colFormLabel" value="<?php echo $rs['pass'];?>" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <input type="submit" name="upload" class="btn btn-primary" value="UPDATE">
        </div>
      </div>
    </form>
  </div>
</body>

</html>