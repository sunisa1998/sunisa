<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sunisa</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>/style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?=base_url();?>/style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>/style/css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ยินดีต้อนรับ</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">สำหรับลูกค้า</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="col-sm-9">
          <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">ระบบรับแจ้งซ่อม</h1>

          </div>
        </div>
        <div class="col-sm-3" style="background-color:#778899 ; color:#fff ;border-radius:4px;padding:10px">
           <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>login">
            <div class="form-group">
              <label class="control-label col-sm-2" for="username">User:</label>
              <div class="col-sm-10">
       
                <input type="text" class="form-control" id="username" placeholder="Enter email" name="username">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="password">Password:</label>
              <div class="col-sm-10">          
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
       </div>
      </div>
    </header>



    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">กรุณากรอกหมายเลขโทรศัพท์เพื่อดูรายละเอียด</h2>

            <form method="GET" action="<?=base_url()."new_controller/show_Customer"?>" class="form-inline d-flex">

              <input type="text" name="txt_Customer" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="กรุณากรอกหมายเลขโทรศัพท์">
              <button type="submit" class="btn btn-primary mx-auto">ค้นหา</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        วิทยาลัยเทคนิคชัยภูมิ
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url();?>/style/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>/style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url();?>/style/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=base_url();?>/style/js/grayscale.min.js"></script>

  </body>

</html>
