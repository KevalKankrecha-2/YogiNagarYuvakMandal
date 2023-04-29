<?php 
include 'connection.php';


$name=$_POST['yname'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$mandal=$_POST['mandal'];
$type=$_POST['type'];
$yuvak_id=$_POST['yuvak_id'];

$query="UPDATE ravisabha_yuvako SET R_yuvak_name = '$name', R_yuvak_mobile_no = '$phone', R_Yuvak_Birthdate = '$age', R_yuvak_type = '$type', R_yuvak_address = '$mandal' WHERE ravisabha_yuvako.R_yuvak_id = '$yuvak_id'";
$execute=mysqli_query($con,$query);

if (isset($execute)) {
	?>
	<script>
		window.location.href = 'RaviSabha_yuvako.php';
	</script>
	<?php
}

?>