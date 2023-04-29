<?php

	include_once 'connection.php';

	$yid=$_POST['yuvakid'];
	$date=$_POST['date'];

	$query="INSERT INTO attendance (yuvak_id, yuvak_status, sabha_date) VALUES ('$yid', '1', '$date')";
	$execute=mysqli_query($con,$query);

	echo "Present";

?>