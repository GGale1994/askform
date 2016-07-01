<?php 
	session_start();
	require_once("Login-session/config.php");

	$addans = "UPDATE quest_ans SET member_name = '".$_SESSION['Name']."',anssub_datetime = '".date("Y-m-d h:i:s")."',answer = '".$_POST['answer']."' WHERE quest_ans_id =".$_POST['quest_ans_id']."";

	$conn->query($addans);

	if($conn)
	{?>
		<script>alert("เพิ่มคำตอบเรียบร้อยแล้ว");</script>
		<script>window.location="ansselect.php";</script>
	
	<?php
	}

 ?>