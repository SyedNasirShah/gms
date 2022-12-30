<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<div class="form-body">
    <form action="add-img-record.php" method="POST" enctype="multipart/form-data">
      <h1 id="form-heading" style="color: green;margin-bottom: 40px;">Add Image</h1>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Select Image</label>
        <div class="col-sm-9 m-auto">
          <input type="file" name="image" class="form-control" id="colFormLabel">
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
</body>
</html>
  
  <!--Form End here -->