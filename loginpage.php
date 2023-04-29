<?php
    session_start(); 
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="SABHA/assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="SABHA/assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    YOGI-NAGAR-YUVA-SABHA
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="Login/css/bootstrap.min.css" rel="stylesheet" />
  <link href="Login/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="Login/demo/demo.css" rel="stylesheet" />
</head>

<body class="register-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom">
          YOGINAGAR YUVA SABHA
        </a>
      </div>
    </div>
  </nav>
 
  <div class="page-header" style="background-image: url('Login/images/login-image.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ml-auto mr-auto">
          <div class="card card-register">
            <h3 class="title mx-auto" style="font-weight: bold;">LoginPage</h3>
          
            <?php
            
              if (isset($_SESSION['errorlogin'])) {
                ?>
                  <p style="font-weight: bold;"><?php echo $_SESSION['errorlogin']; ?></p>
                <?php
                unset($_SESSION['errorlogin']);
              }
            ?>

            <form class="register-form" action="logincheck.php" method="post">
              <label style="font-weight:bold">UserName</label>
              <input type="text" class="form-control" placeholder="Email" name="username">
              <label style="font-weight:bold;">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password">
              <button class="btn btn-danger btn-block btn-round">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer register-footer text-center">
      <h6>©
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="fa fa-heart heart"></i> by Keval Kankrecha</h6>
    </div>
  </div>
  <!--   Core JS Files   Login  <script src="Login/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="Login/js/core/popper.min.js" type="text/javascript"></script>
  <script src="Login/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="Login/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="Login/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="Login/js/plugins/moment.min.js"></script>
  <script src="Login/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="Login/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
</body>

</html>
