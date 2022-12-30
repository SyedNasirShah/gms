<html>
<body style="background: url(assets/bg.jpg) no-repeat center;">
<?php  $page='index';
  include ('include/header.php');

?>

  <!-- User form start from here -->
  <div class="form-body">
    <form action="add-training-record.php" method="POST" enctype="multipart/form-data">
      <h1 id="form-heading" style="color: green;margin-bottom: 40px;">Add Training Centers</h1>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Select Image</label>
        <div class="col-sm-9 m-auto">
          <input type="file" name="image" class="text_mail" id="colFormLabel" required>
        </div><br>
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Title</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="titlename" class="form-control" id="colFormLabel" placeholder="Enter Title" required>
        </div>
         <label for="colFormLabel" class="col-sm-2 col-form-label lab">Cell</label>
        <div class="col-sm-9 m-auto" style="padding-top: 12px;">
          <input type="text" name="cell" class="form-control" id="colFormLabel" placeholder="Enter Cell Number" required>
        </div>
         <label for="colFormLabel" class="col-sm-2 col-form-label lab">Address</label>
        <div class="col-sm-9 m-auto"style="padding-top: 12px;">
          <input type="text" name="address" class="form-control" id="colFormLabel" placeholder="Enter Address" required>
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