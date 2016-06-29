<?php
	session_start();

	require_once("config.php");
	
	$strUsername = mysqli_real_escape_string($conn,$_POST['txtUsername']);
	$strPassword = mysqli_real_escape_string($conn,$_POST['txtPassword']);

	$strSQL = "SELECT * FROM member WHERE Username = '".$strUsername."' 
	and Password = '".$strPassword."'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "Username and Password Incorrect!";
		exit();
	}
	else
	{
		if($objResult["LoginStatus"] == "1")
		{
			echo "'".$strUsername."' Exists login!";
			exit();
		}
		else
		{
			//*** Update Status Login
			$sql = "UPDATE member SET LoginStatus = '1' , LastUpdate = NOW() WHERE UserID = '".$objResult["UserID"]."' ";
			$query = mysqli_query($conn,$sql);

			//*** Session
			$_SESSION["UserID"] = $objResult["UserID"];
			session_write_close();

			//*** Go to Main page
			header("location:../ansform.php");
		}
			
	}
	mysqli_close($conn);
?>
