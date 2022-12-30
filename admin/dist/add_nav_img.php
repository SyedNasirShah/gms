<html>
<body style="background: url(assets/bg.jpg) no-repeat center;">
<?php  $page='index';
  include ('include/header.php');

?>

  <!-- User form start from here -->
  <div class="form-body">
    <form action="add-nav-img-record.php" method="POST" enctype="multipart/form-data">
      <h1 id="form-heading" style="color: green;margin-bottom: 40px;">Add Store Products</h1>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Image</label>
        <div class="col-sm-9 m-auto">
          <input type="file" name="image" class="text_mail" id="colFormLabel" required>
        </div><br>
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Title</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="title" class="form-control" id="colFormLabel" placeholder="Enter Title" required>
        </div>
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Price</label>
        <div class="col-sm-9 m-auto">
          <input type="number" name="price" class="form-control" id="colFormLabel" placeholder="Enter Price" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <input type="submit" name="upload" class="btn btn-primary" value="UPLOAD">
        </div>
      </div>
    </form>
  </div>
  <!--Form End here -->
</body>

</html>