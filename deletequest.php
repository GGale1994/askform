<?php 
	session_start();
	require_once("Login-session/config.php");

	$deletesql = "DELETE FROM quest_ans WHERE user_id_fk =".$_GET['user_id']."";
	$conn->query($deletesql);

	if($conn)
	{?>
		<script>alert("ลบคำถามเรียบร้อยแล้ว");</script>
		<script>window.location="ansselect.php";</script>
	
	<?php
	}
	
 ?>