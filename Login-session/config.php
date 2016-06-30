<?php
    $hostname = "localhost";
	$username = "root";
	$password = ""; 
	$database = "ask";
	$conn = new mysqli($hostname, $username, $password,$database);
		mysqli_set_charset($conn,"utf8");

	$intRejectTime = 20; // Minute
	$sql = "UPDATE member SET LoginStatus = '0', LastUpdate = '0001-01-01 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
	$query = $conn->query($sql);

	if(!isset($_SESSION['UserID']))
	{
		echo "Please Login!";
		exit();
	}
	
	//*** Update Last Stay in Login System
	$sql = "UPDATE member SET LastUpdate = NOW() WHERE UserID = '".$_SESSION["UserID"]."' ";
	$query = mysqli_query($conn,$sql);

	//*** Get User Login
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>