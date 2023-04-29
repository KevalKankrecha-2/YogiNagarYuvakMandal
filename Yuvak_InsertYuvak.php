<?php 
include 'connection.php';

$name=$_POST['yname'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$study=$_POST['study'];
$puja=$_POST['puja'];

$query="INSERT INTO yuvak (yuvak_id, yuvak_name, age, contactno, eduction_Details, puja) VALUES (NULL, '$name', '$age', '$phone', '$study', '$puja')";
$execute=mysqli_query($con,$query);

if (isset($execute)) {
	?>
	<script>
		window.location.href = 'yuvako.php';
	</script>
	<?php
}

?>