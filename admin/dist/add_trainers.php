<html>
<body style="background: url(assets/bg.jpg) no-repeat center;">
<?php  $page='index';
  include ('include/header.php');

?>

  <!-- User form start from here -->
  <div class="form-body">
    <form action="add-trainers-record.php" method="POST" enctype="multipart/form-data">
      <h1 id="form-heading" style="color: green;margin-bottom: 40px;">Add Trainers</h1>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Image</label>
        <div class="col-sm-9 m-auto">
          <input type="file" name="image" class="mail_text" id="colFormLabel" required="">
        </div><br>
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Name</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="title" class="form-control" id="colFormLabel" placeholder="Enter Trainer Name" required="">
        </div>
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Charges</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="charges" class="form-control" id="colFormLabel" placeholder="Enter charges/month" required="">
        </div>
          <label for="colFormLabel" class="col-sm-2 col-form-label lab">Description</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="dsp" class="form-control" id="colFormLabel" placeholder="Enter Short Description" required="">
        </div>
         <label for="colFormLabel" class="col-sm-2 col-form-label lab">Username </label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="username" class="form-control" id="colFormLabel" placeholder="e.g. User_name01" required="">
        </div>
         <label for="colFormLabel" class="col-sm-2 col-form-label lab">Password</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="pass" class="form-control" id="colFormLabel" placeholder="Set Password" required="">
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <input type="submit" name="upload" class="btn btn-primary" value="ADD">
        </div>
      </div>
    </form>
  </div>
  <!--Form End here -->
</body>

</html>