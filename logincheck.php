<?php
	include_once("connection.php");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM admin";
	$flag=0;
	$execute=mysqli_query($con,$query);
	while ($row=mysqli_fetch_assoc($execute)) {
		if ($username==$row['UserName']&&$password==$row['Password']) {
			$flag=1;
		}
	}
	if ($flag==1) {
		$_SESSION['uname']=$username;?>
		
		<script>
		     window.location.href = "index.php";
		</script>
		<?php
	}
	else
	{
		$_SESSION['errorlogin']="UserName OR Password incorrect.!";?>
		<script>
		     window.location.href = "loginpage.php";
		</script>
		<?php
	}
?>