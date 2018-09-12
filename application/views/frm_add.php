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
  <h2>เพิ่มข้อมูล</h2>
  <?=form_open("new_controller/add_process",array("class"=>"form-horizontal")); ?>
   <div class="form-group">
      <label class="control-label col-sm-2" for="name">ชื่อ</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="ชื่อ" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lastname">นามสกุล</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lastname" placeholder="นามสกุล" name="lastname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">ที่อยู่</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address" placeholder="ที่อยู่" name="address">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-10">
        <input type="Email" class="form-control" id="email" placeholder="Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="date">วัน/เดือน/ปี</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="date" placeholder="วัน/เดือน/ปี" name="date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="devicename">ชื่ออุปกรณ์</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="devicename" placeholder="ชื่ออุปกรณ์" name="devicename">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cause">สาเหตุ</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cause" placeholder="สาเหตุ" name="cause">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tell">โทร</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tell" placeholder="โทร" name="tell">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="btn_save"  class="btn btn-success">เพิ่มข้อมูล</button>
      </div>
    </div>
  <?=form_close();?>
</div>

</body>
</html>
