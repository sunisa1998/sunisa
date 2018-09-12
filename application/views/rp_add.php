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
  <?=form_open("new_controller/add_post",array("class"=>"form-horizontal")); ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="devicename">ชื่ออุปกรณ์</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="devicename" placeholder="ชื่ออุปกรณ์" name="devicename">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="serial_number">serial</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="serial_number" placeholder="serial" name="serial_number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="date">วัน/เดือน/ปี</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="date" placeholder="วัน/เดือน/ปี" name="date">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="status">สถานะ</label>
      <div class="col-sm-10">
        <select name="status" class="form-control" id="sel1">
        <option value="กำลังซ่อม">กำลังซ่อม</option>
        <option value="ซ่อมเสร็จแล้ว">ซ่อมเสร็จแล้ว</option>
      </select>
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
