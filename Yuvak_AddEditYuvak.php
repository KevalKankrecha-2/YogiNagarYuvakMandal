<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Yuvako</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="assets/css/Font.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!--Data Table css-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap_data_table_1.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap_data_table_2.css">
  <!--End DT CSS-->
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets.js/jquery.min.js"></script>
  <script type="text/javascript">

  </script>
</head>
<body>
  <!-- Header -->
  <?php
  include_once 'Header.php';
  ?>
  <main id="main">
    <!-- End Header -->
    <!-- Edit Yuvak Form -->
    <?php
    if (isset($_GET['yuvak_id'])) {
      $yuvak_id=$_GET['yuvak_id'];
      include_once 'connection.php';
      $query="select * from yuvak where yuvak_id='$yuvak_id'";
      $execute=mysqli_query($con,$query);
      $row=mysqli_fetch_assoc($execute);
      ?>
      <div class="container">
        <div class="modal-body">
          <form  method="post" enctype="multipart/form-data" id="yuvakform" action="Yuvak_EditYuvak.php">
            <input type="hidden" id="yuvak_id" name="yuvak_id" value="<?php echo $row['yuvak_id']; ?>">
            <div class="form-group">
              <label for="name">Yuvak Full Name:</label>
              <input type="text" class="form-control" id="yuvakname" placeholder="Enter Yuvak Name"  name="yname" required="required" value="<?php echo $row['yuvak_name']; ?>">
            </div>
            <div class="form-group">
              <label for="phone">ContactNumber:</label>
              <input type="number" class="form-control"  id="yuvakphone" placeholder="Enter ContactNumber"  name="phone"  required="required" value="<?php echo $row['contactno']; ?>">
            </div>
            <div class="form-group">
              <label for="age">age:</label>
              <input type="date" class="form-control"  id="yuvakbirthdate" placeholder="Enter age"  name="age" required="required" value="<?php echo $row['age']; ?>">
            </div>
            <div class="form-group">
              <label for="study">Current Education:</label>
              <input type="text" class="form-control"  id="yuvakeducation" placeholder="Enter Education Details"  name="study" required="required" value="<?php echo $row['eduction_Details']; ?>">
            </div>

            <div class="form-group">
              <label for="puja">Puja:</label>
              <input type="radio"  id="phone" name="puja" value="yes" checked="checked">yes
              <input type="radio"  id="phone" name="puja" value="no">no
            </div>
            <button id="btnsubmit" type="submit" class="btn btn-danger" style="border:1px solid #f5593d;font-weight: bold;">Edit Yuvak</button><br><br>
          </form>
        </div>
      </div>
      <?php
    }
    else{
      ?>
      <!-- End Edit Yuvak Form -->
      <!-- Add Yuvak Form -->
      <div class="container">
        <div class="modal-body">
          <form  method="post" enctype="multipart/form-data" id="yuvakform" action="Yuvak_InsertYuvak.php">
            <input type="hidden" id="yuvak_id" name="yuvak_id">
            <div class="form-group">
              <label for="name">Yuvak Full Name:</label>
              <input type="text" class="form-control" id="yuvakname" placeholder="Enter Yuvak Name"  name="yname" required="required" >
            </div>
            <div class="form-group">
              <label for="phone">ContactNumber:</label>
              <input type="number" class="form-control"  id="yuvakphone" placeholder="Enter ContactNumber"  name="phone"  required="required" >
            </div>
            <div class="form-group">
              <label for="age">age:</label>
              <input type="date" class="form-control"  id="yuvakbirthdate" placeholder="Enter age"  name="age" required="required" >
            </div>
            <div class="form-group">
              <label for="study">Current Education:</label>
              <input type="text" class="form-control"  id="yuvakeducation" placeholder="Enter Education Details"  name="study" required="required" >
            </div>

            <div class="form-group">
              <label for="puja">Puja:</label>
              <input type="radio"  id="phone" name="puja" value="yes" checked="checked">yes
              <input type="radio"  id="phone" name="puja" value="no">no
            </div>
            <button id="btnsubmit" type="submit" class="btn btn-danger" style="border:1px solid #f5593d;font-weight: bold;">Add Yuvak</button><br><br>
          </form>
        </div>
      </div>
      <!-- end Add Yuvak Form -->
      <?php
    }
    ?>
    

    <!-- Footer -->
    <?php
    include_once 'Footer.php';
    ?>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!--Data table JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <!--End DT JS-->
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>

  </html>