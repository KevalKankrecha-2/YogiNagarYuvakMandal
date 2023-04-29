<?php
	$year=$_POST['Year'];
	include_once 'connection.php';

	$query="SELECT DISTINCT MONTHNAME(sabha_date) as 'month' from sabhadetails where YEAR(sabha_date)='$year'";

	$execute=mysqli_query($con,$query);

	while($row=mysqli_fetch_assoc($execute)){
		$data=$row['month'];
		echo "<option value='$data'>$data</option>";
	}
?>