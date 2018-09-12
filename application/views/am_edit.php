<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>แก้ไขข้อมูล</h2>
  <?=form_open("new_controller/edit_am",array("class"=>"form-horizontal")); ?>
   <div class="form-group">
      <label class="control-label col-sm-2" for="name">ชื่อ</label>
      <div class="col-sm-10">
        <input type="hidden" name="id" value="<?=$rs['id'];?>">
        <input type="text" class="form-control" id="name"  value="<?=$rs['name'];?>" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lastname">นามสกุล</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lastname"  value="<?=$rs['lastname'];?>" name="lastname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" value="<?=$rs['username'];?>"  name="username">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="password">password</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="password" value="<?=$rs['password'];?>"  name="password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="status">สถานะ</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="status" value="<?=$rs['status'];?>"  name="status">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="btn_save"  class="btn btn-success">แก้ไขข้อมูล</button>
      </div>
    </div>
  <?=form_close();?>
</div>

</body>
</html>
