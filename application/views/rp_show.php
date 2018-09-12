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

<center>
 <form method="GET" action="<?=base_url()."new_controller/show_b"?>" class="form-inline d-flex">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-success">ค้นหา</button>
    </form>
  </center>

<div class="container">
  <h2>รายละเอียดแจ้งซ่อม</h2>
  <?=anchor("new_controller/add_b","add",array("class"=>"btn btn-primary"));?>            
  <table class="table table-hover">
    <thead>
      <tr class="danger">
        <th>id</th>
        <th>ชื่ออุปกรณ์</th>
        <th>serial</th>
        <th>วัน/เดือน/ปี</th>
        <th>สถานะ</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php foreach($rs as $sh){ ?>
      <tr class="success">
        <td><?=$sh['id'];?></td>
        <td><?=$sh['devicename'];?></td>
        <td><?=$sh['serial_number'];?></td>
        <td><?=$sh['date'];?></td>
        <td><?=$sh['status'];?></td>
        <td><?=anchor ('new_controller/edit_b/'.$sh['id'],"edit",array('class' => 'btn btn-warning'));?></td>
        <td><?=anchor("new_controller/del_rp/".$sh['id'],"del",array("class"=>"btn btn-danger", "onclick"=>"return confirm('Delete ?');"))?></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
