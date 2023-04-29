<?php
//DB Connection 
include 'connection.php';

$sdate=$_POST['sabhadate'];
$sthim=$_POST['thim'];
$spravakta=$_POST['pravakta'];
$sdhun=$_POST['dhun'];
$sprathana=$_POST['prathana'];
$spravachan=$_POST['pravachan'];
$spatrika=$_POST['vanchan'];
$svideo=$_POST['video'];
$sarti=$_POST['arti'];
$sextra=$_POST['extra'];

//image uploading
if($_FILES['img']['name']){

	move_uploaded_file($_FILES['img']['tmp_name'], "image/".$_FILES['img']['name']);

	$img = "image/".$_FILES['img']['name'];

}

// $sql="INSERT INTO user(name, uname, email, password, img) VALUES ('$name', '$uname', '$email', '$pass', '$img')";

$query="INSERT INTO sabhadetails (sabha_id, sabha_date, thim, pravakta, dhun, prathana, pravachan, patrikavanchan, video, aarti, extra, image) VALUES (NULL, '$sdate', '$sthim', '$spravakta', '$sdhun', '$sprathana', '$spravachan', '$spatrika', '$svideo', '$sarti', '$sextra', '$img')";

mysqli_query($con, $query);
?>
