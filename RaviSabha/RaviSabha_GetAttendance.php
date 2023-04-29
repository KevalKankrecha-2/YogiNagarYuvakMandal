<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
<!-- Attandance -->
  <section>
    <?php
    include_once 'connection.php';
    $att_date=$_POST['date'];
    if (isset($att_date)) {
      ?>
      <div class="container">
       <table id="example" class="table table-striped table-bordered " style="width:100%!important">
        <thead>
          <tr>
            <th>Name</th>
            <th class="sabhadateforattendance"><?php echo $att_date?></th>
          </tr>
        </thead>
        <tbody>
          <?php
          // it will give present yuvak list
          $cr_date=$att_date;
          $getpresentyuvak="SELECT y.R_yuvak_id,y.R_yuvak_name FROM RaviSabha_yuvako y,ravisabha_attendance a where y.R_yuvak_id=a.R_yuvak_id and a.R_sabha_date='$cr_date'";
          $exec=mysqli_query($con,$getpresentyuvak);
          while($data=mysqli_fetch_assoc($exec)){?>
            <tr>
              <td><?php echo $data['R_yuvak_name']?></td>
              <td>Present..!!</td>
            </tr>
            <?php
          }
          // it will give absent yuvak list
         $abs_data="select R_yuvak_id,R_yuvak_name from RaviSabha_yuvako where R_yuvak_id NOT IN(select y.R_yuvak_id from ravisabha_attendance a,RaviSabha_yuvako y where y.R_yuvak_id=a.R_yuvak_id and a.R_sabha_date='$cr_date');";
          $ex=mysqli_query($con,$abs_data);
          if (mysqli_errno($con)) 
          echo $error=mysqli_error($con);
          while($data1=mysqli_fetch_assoc($ex)){?>
            <tr>
              <td><?php echo $data1['R_yuvak_name']?></td>
              <td><button  type="button" value="<?php echo $data1['R_yuvak_id']?>" class="btn btn-primary btnyes"><i class="bi bi-check-lg"></i></button></td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    <?php
  }
  ?>
  </section>
<!-- End Attendance -->
</body>
</html>