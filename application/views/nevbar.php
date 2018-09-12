<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="color: #FFFAFA" class="navbar-brand" href="#">ระบบรับแจ้งซ้อม</a>
    </div>
    <ul class="nav navbar-nav">
      <li><center><i style="color: #DCDCDC" class="fas fa-user-circle fa-2x"></i></center><a href="<?php echo base_url().'new_controller/show_c';?>">Admim</a></li>
      <li><center><i style="color: #DCDCDC"  class="fas fa-laptop fa-2x"></i></center><a href="<?php echo base_url().'new_controller/show_b';?>">อุปกรณ์</a></li>
      <li><center><i style="color: #DCDCDC"  class="fas fa-screwdriver fa-2x"></i></center><a href="<?php echo base_url().'new_controller/show';?>">หน้าแจ้งซ่อม</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="<?php echo base_url().'new_controller/';?>">ออกจากระบบ</a></li>
    </ul>
  </div>
</nav>
