<?php 
include 'connection.php';

$yuvak_id=$_GET['yuvak_id'];

$query="delete from yuvak where yuvak_id='$yuvak_id'";
$execute=mysqli_query($con,$query);

if (isset($execute)) {
	?>
	<script>
		window.location.href = 'yuvako.php';
	</script>
	<?php
}

?>