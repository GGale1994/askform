<?php 
	session_start();
	require_once("Login-session/config.php");

	$addans = "UPDATE quest_ans SET member_name = '".$_SESSION['Name']."',anssub_datetime = '".date("Y-m-d h:i:s")."',answer = '".$_POST['answer']."' WHERE quest_ans_id =".$_POST['quest_ans_id']."";

	$conn->query($addans);

	if(isset($_POST['submit'])){
	
	date_default_timezone_set('Asia/Bangkok');
 	require 'PHPMailer/PHPMailerAutoload.php';

 	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = "smtp.live.com";
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "t_tofuz_bbbenz@hotmail.com";
	$mail->Password = "narongrat6";
	$mail->setFrom('t_tofuz_bbbenz@hotmail.com', 'Narongrat Hongatsawin');
	$mail->addAddress($_POST['email'], $_POST['fname'].$_POST['lname']); //user
	$mail->Subject = 'ถามบรรณารักษ์ (CU Library)';
	$mail->CharSet = "utf-8";
    $message = "บรรณารักษ์ได้ตอบคำถามของคุณ:". $_POST['fname'] . " " . $_POST['lname'] .":<br><br><h2>คำถาม:</h2><h3>" . $_POST['question']."</h3><font color="."red"."><br><h2>คำตอบ:</h2><h3>".$_POST['answer']."</h3></font><br><br><h4> รายละเอียด: </h4> คุณ " . $_POST['fname'] . " " . $_POST['lname'] . " <br>E-mail: ".$_POST['email']." เบอร์โทรศัพท์ : ".$_POST['tel']."<br> สถานภาพ : ".$_POST['status']." หน่วยงาน : ".$_POST['institute'];
	$mail->msgHTML($message);

    if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	   ?>
		<script>alert("เพิ่มคำตอบเรียบร้อยแล้ว");</script>
		<script>window.location="ansselect.php";</script>
	
	<?php
	}
     
}


 ?>