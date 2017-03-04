<?php
	include('connect.php');

	$link->set_charset("utf8");

	$imageID = $_GET["photo"];	

	$myQuery = "SELECT * FROM tbl_gallery WHERE gallery_img = '{$imageID}'";
	$result = mysqli_query($link, $myQuery);
	$row = mysqli_fetch_assoc($result);	

	echo json_encode($row);
?>