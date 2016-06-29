<?php 
	require("config.php");

	$queryadd = "INSERT user_info(fname,lname,email,tel,status,institute) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['tel']."','".$_POST['optradio']."','".$_POST['i_other1']."')";
	
	
	$conn->query($queryadd);

	$queryfind = "SELECT id FROM user_info WHERE fname like ".$_POST['fname']."";
	$id = $conn->query($queryfind);
	$row = mysqli_fetch_row($id); // id cannot add
	print_r($row); exit;
	$queryadd2 = "INSERT comment(id,comment) VALUES ('".$id.",".$_POST['question']."')";
	$conn->query($queryadd2);

 ?>