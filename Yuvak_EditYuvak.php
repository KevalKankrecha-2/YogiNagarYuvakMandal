<?php 
include 'connection.php';

$name=$_POST['yname'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$study=$_POST['study'];
$puja=$_POST['puja'];
$yuvak_id=$_POST['yuvak_id'];

$query="UPDATE yuvak SET yuvak_name = '$name', age = '$age', contactno = '$phone', eduction_Details = '$study', puja = '$puja' WHERE yuvak.yuvak_id = '$yuvak_id'";
$execute=mysqli_query($con,$query);

if (isset($execute)) {
	?>
	<script>
		window.location.href = 'yuvako.php';
	</script>
	<?php
}

?>