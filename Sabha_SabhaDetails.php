<html>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<head></head>
<body>
	<div class="container">
		<div class="row">
			<?php
			$year=$_POST['year'];
			$month=$_POST['month'];
			include_once 'connection.php';
			$query="SELECT * from sabhadetails where MONTHNAME(sabha_date)='$month' and YEAR(sabha_date)='$year'";
			$execute=mysqli_query($con,$query);
			while($row=mysqli_fetch_assoc($execute)){
				?>
				<div class="col-lg-4 p-1">	
					<div class="card" style="width: 18rem;">
						<img class="img-fluid" src="<?php echo $row['image']?>" style="height:300px">
						<div class="card-body" style="font-weight: bold;">
							<h5 style="font-weight: bold;"><?php echo $row['sabha_date']?></h5>
							<?php 
							$dates=$row['sabha_date'];
							$count="select count(yuvak_id) as 'count' from attendance where yuvak_status=1 and sabha_date='$dates'";
							$execount=mysqli_query($con,$count);
							$countdata=mysqli_fetch_assoc($execount);
							?>
							<p>Thim:<?php echo $row['thim']?></p>
							<p>Pravakta:<?php echo $row['pravakta']?></p>
							<p>Dhun:<?php echo $row['dhun']?></p>
							<p>Prarthana:<?php echo $row['prathana']?></p>
							<p>Patrikavanchan:<?php echo $row['patrikavanchan']?></p>
							<p>Pravachan:<?php echo $row['pravachan']?></p>
							<p>Video:<?php echo $row['video']?></p>
							<p>Aarti:<?php echo $row['aarti']?></p>
							<p>Extra:<?php echo $row['extra']?></p>
							<h4 style="font-weight: bold;">Total Hajari:<?php echo $countdata['count']?></h4>
							<button class="btnattendance btn btn-success" value="<?php  echo $row['sabha_date']?>">Fill Attendance</button>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</body>
</html>