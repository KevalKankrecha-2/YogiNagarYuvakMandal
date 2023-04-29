<?php

	include_once 'connection.php';

	$yid=$_POST['yuvakid'];
	$date=$_POST['date'];

	$query="INSERT INTO ravisabha_attendance (R_yuvak_id, R_yuvak_status, R_sabha_date) VALUES ('$yid', '1', '$date')";
	$execute=mysqli_query($con,$query);

	echo "Present";

?>