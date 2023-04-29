<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Yuvako</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="../assets/css/Font.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!--Data Table css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap_data_table_1.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap_data_table_2.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!--End DT CSS-->
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com./jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#example').DataTable(function (){
        responsive:true;
      });
    });
  </script>
</head>


<body>
  <!-- Header -->
  <?php
  include_once 'Header.php';
  ?>
  <main id="main">
  <!-- End Header -->
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2>RaviSabha / Yuvako</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->
     <div class="container">
      <div style="display: flex;justify-content: flex-end;" class="mt-3">
        <a href="RaviSabha_Yuvak_AddEditYuvak.php"><button class="btn btn-danger">Add Yuvak</button></a>
    </div>
    <!-- YUVAK DETAILS -->
    <section class="inner-page">
      <div class="container">
        <table id="example" class="table table-striped table-bordered table-responsive" style="width: 100%">
          <thead>
            <tr>
              <th>Ser No.</th>
              <th>Name</th>
              <th>Age</th>
              <th>ContactNo</th>
              <th>EducationDetails</th>
              <th>Pooja</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include_once('../connection.php');
            $query="select * from ravisabha_yuvako";
            $execute=mysqli_query($con,$query);
            $count=1;
            while($row=mysqli_fetch_assoc($execute)){
              ?>
              <tr>
                <td><?php echo $count;$count++;?></td>
                <td><?php echo $row['R_yuvak_name'];?></td>
                <td><?php echo $row['R_Yuvak_Birthdate']?></td>
                <td><?php echo $row['R_yuvak_mobile_no'];?></td>
                <td><?php echo $row['R_yuvak_address'];?></td>
                <td><?php echo $row['R_yuvak_type']; ?></td>
                <td style="display: flex;justify-content: space-around;"><a href="RaviSabha_Yuvak_AddEditYuvak.php?yuvak_id=<?php  echo $row['R_yuvak_id'] ?>" ><i class="text-success bi bi-pencil-square"></i></a><a href="Yuvak_Delete.php?yuvak_id=<?php  echo $row['R_yuvak_id'] ?>" ><i class="bi bi-trash"></i></a></td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>
    <!-- End Yuvak Details -->
   
  </main>
  <!-- End #main -->

  <!-- Footer -->
 <?php
 include_once '../Footer.php';
?>
<!-- End Footer -->



<!-- Vendor JS Files -->
<script src="../assets/vendor/purecounter/purecounter.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!--Data table JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!--End DT JS-->
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>