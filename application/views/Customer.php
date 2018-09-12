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
  <h2>รายละเอียดแจ้งซ่อม</h2>        
  <table class="table table-hover">
    <thead>
      <tr class="info">
        <th>id</th>
        <th>ชื่ออุปกรณ์</th>
        <th>serial</th>
        <th>วัน/เดือน/ปี</th>
        <th>สถานะ</th>
      </tr>
    </thead>
    <tbody>
<?php 
if ($num==0) {
  # code...
  echo "ไม่พบข้อมูล";
}
else{
foreach($rs as $sh){ ?>
      <tr class="warning">
        <td><?=$sh['id'];?></td>
        <td><?=$sh['devicename'];?></td>
        <td><?=$sh['serial_number'];?></td>
        <td><?=$sh['date'];?></td>
        <td><?=$sh['status'];?></td>
       </td>
      </tr>
<?php }} ?>
    </tbody>
  </table>
</div>
<center>
 <?=anchor("new_controller/","กลับสู่หน้าหลัก",array("class"=>"btn btn-primary"));?>
 </center>
</body>
</html>
