<?php
session_start();
include_once 'connection.php';
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sabha Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="assets/css/Font.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.ciss/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css?v=1" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- POP-UP Form -->
  <script type="text/javascript" src="assets/js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- End Pop Up CSS-JS -->
  <script src="assets/js/jquery.min.js"></script>
  <style type="text/css">
    select{
      width: 100%;
    }
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      // For Add Sabha Details
      $("#sabhadetailsform").on('submit',(function(e){ 
        $.ajax({
          url: "SabhaPage_InsertSabhaDetails.php",
          type: "POST",
          data: new FormData(this),
          contentType: false, cache: false, processData:false,
          success: function(html){}
        });
        window.location.reload();
      }));
      // For get Months from year
      $("#years").on("change",function(){
        var year=$(this).val();
        $.ajax({
          type:"POST",
          url:"SabhaPage_MonthListOnYear.php",
          data:"Year="+year,
          success:function(html)
          {
            $("#months").html(html);
          }
        });
      });
      //Attandance Table Display
      $('body').on('click','.btnattendance',function(){
        let date=$(this).val();
         $.ajax({
           type:"POST",
           url:"Sabha_Get_Attendance_details.php",
           data:{"date":date},
           success:function(html){
            $(".Attendance_Details").html(html);
           }
         });
      });
      //Fill Attendance
        $('body').on('click','.btnyes',function(){
        var yuvakid = $(this).val();
        var date=$(".sabhadateforattendance").html();
        $.ajax({
          type:"POST",
          url:"SabhaPage_FilleAttendance.php",
          data:{"yuvakid":yuvakid,"date":date},
          success:function(html){
          }
        })
        $(this).parent().html("Present..!!");
      });
        //search yuvak
        $("#searchyuvak").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#attandancetbl tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
      //Get Sabha Details
      $(".btngetsabhadetails").click(function(){
        var years=$("#years").val();
        var months=$("#months").val();
        $.ajax({
          type:"POST",
          url:"Sabha_SabhaDetails.php",
          data:{"year":years,"month":months},
          success:function(html){
            $(".Sabha_Details").html(html);
          }
        });
      })
    })
  </script>
</head>
<body>


  <!-- Header -->
  <?php
  include_once 'Header.php';
  ?>
  <!-- End Header -->
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2>YogiNagar Yuvak Mandal / Sabha Detaills</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- Add Sabha Details Form Pop Up Button.! -->
    <section id="speakers-details">
      <div class="container">
        <div class="section-header">
          <h2>Sabha Details</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
             Add Sabha Details 
           </button>
          </div>
        </div>
      </div>
    </section>
   <!-- End Button for Pop up -->
   <!-- Drop Down -->
   <section class="select">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <select id="years">
            <option>Select Year</option>
            <?php 
            include_once 'connection.php';
            $query_year="SELECT DISTINCT YEAR(sabha_date) as 'year' from sabhadetails;";
            $execute_year=mysqli_query($con,$query_year);
            while($years=mysqli_fetch_assoc($execute_year)){
              ?>
              <option value="<?php echo $years['year'] ?>"><?php echo $years['year']?></option>
              <?php
            }
            ?>  
          </select>
        </div>
        <div class="col-lg-4">
          <select id="months">   
          </select>
        </div>
        <div class="col-lg-4">
         <button class="btngetsabhadetails btn btn-danger">Get Details</button>
       </div>
     </div>
   </section>
   <!-- End Drop Down -->
   <!-- Sabha Details Will be Fill here -->
    <section>
      <div class="Sabha_Details">
      </div>
    </section>
  <!-- end sabha details div -->
  <!-- Attendance -->
  <section>
      <div class="container">
      
      <input type="text" id="searchyuvak">
      </div>
    <div class="Attendance_Details">
    </div>
  </section>
  <!-- End Attendance -->
<!-- Add sabha details form Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sabha Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- add sabha details form -->
        <form  method="post" enctype="multipart/form-data" id="sabhadetailsform">
          <div class="form-group">
            <label>Sabha Date:</label>
            <input type="date" class="form-control" name="sabhadate" >
          </div>
          <div class="form-group">
            <label>Thim:</label>
            <input type="text" class="form-control"  placeholder="Thim" name="thim">
          </div>
          <div class="form-group">
            <label>Pravakta Yuvak:</label>
            <input type="text" class="form-control" placeholder="Pravakta Details" name="pravakta">
          </div>
          <div class="form-group">
            <label for="age">Dhun:</label>
            <input type="text" class="form-control" placeholder="Dhun Details" name="dhun">
          </div>
          <div class="form-group">
            <label for="study">Prathana:</label>
            <input type="text" class="form-control" placeholder="Prathana Details" name="prathana">
          </div>
          <div class="form-group">
            <label for="study">Pravachan:</label>
            <input type="text" class="form-control"  placeholder="Pravachan" name="pravachan">
          </div>
          <div class="form-group">
            <label for="study">Patrika Sar Vanchan:</label>
            <input type="text" class="form-control" placeholder="Patrika Details" name="vanchan">
          </div>
          <div class="form-group">
            <label for="study">Video:</label>
            <input type="text" class="form-control" placeholder="Video Details" name="video">
          </div>
          <div class="form-group">
            <label for="study">Aarti:</label>
            <input type="text" class="form-control" placeholder="Aarti Details" name="arti">
          </div>
          <div class="form-group">
            <label for="study">Extra:</label>
            <input type="text" class="form-control"  placeholder="Extra Details" name="extra">
          </div>
          <div class="form-group">
            <label for="photo">Choose Sabha Photo:</label><br/>
            <input type="file" class="form-control" name="img" id="img" >
          </div>
          <button type="submit" class="btn m-3" style="background-color: #f5593d;border: 1px solid #f5593d;">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Sabha details form -->
</main><!-- End #main -->


<?php
include_once 'Footer.php';
?>
<div class="data"></div>
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
<!--End-->
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>