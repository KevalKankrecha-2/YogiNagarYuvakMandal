<?php 
include_once 'connection.php';

$name=$_POST['yname'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$mandal=$_POST['mandal'];
$type=$_POST['type'];

$query="INSERT INTO ravisabha_yuvako (R_yuvak_id, R_yuvak_name, R_yuvak_mobile_no, R_Yuvak_Birthdate, R_yuvak_type, R_yuvak_address) VALUES (NULL, '$name', '$phone', '$age', '$type', '$mandal');";
$execute=mysqli_query($con,$query);

if (isset($execute)) {
	?>
	<script>
		window.location.href = 'RaviSabha_yuvako.php';
	</script>
	<?php
}

?>