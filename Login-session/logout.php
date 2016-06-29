<?php
	session_start();

	require_once("config.php");

	//*** Update Status
	$sql = "UPDATE member SET LoginStatus = '0', LastUpdate = '0001-01-01 00:00:00' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$query = mysqli_query($conn,$sql);

	session_destroy();
	header("location:login.php");
?>
