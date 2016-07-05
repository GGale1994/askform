<?php
	require("config.php");
	
	if($_POST['optradio']!='Other')
	{
		$status = $_POST['optradio'];
	}
	else
	{
		$status = $_POST['i_other'];

	}

	if($_POST['optradio2']=='Chulalongkorn')
	{
		$institute = "จุฬาลงกรณ์มหาวิทยาลัย ".$_POST['i_other1'];
	}
	else
	{
		$institute = "มหาวิทยาลัย/หน่วยงานอื่น(".$_POST['i_other3'].")";
	}

	$queryadd = "INSERT user_info(fname,lname,email,tel,status,institute) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['tel']."','".$status."','".$institute."')";
	$conn->query($queryadd);

	$queryfind = "SELECT user_id FROM user_info WHERE fname like '".$_POST['fname']."' and lname like '".$_POST['lname']."'";
	$result = $conn->query($queryfind);
    //printf("Error: %s\n", mysqli_error($conn));
	$row = mysqli_fetch_array($result);

	$queryadd2 = "INSERT quest_ans(user_id_fk,question,questsub_datetime) VALUES ('".$row['user_id']."','".$_POST['question']."','".date("Y-m-d h:i:s")."')";
	$conn->query($queryadd2);
	//printf("Error: %s\n", mysqli_error($conn));

	//--------------e-mail------------
	 
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
	$mail->addAddress('t_tofuz_bbbenz@hotmail.com', 'Narongrat Hongatsawin'); //libralian
	$mail->Subject = 'ถามบรรณารักษ์ (CU Library)';
	$mail->CharSet = "utf-8";
    $message = "คุณ " . $_POST['fname'] . " " . $_POST['lname'] . " ได้เขียนคำถามถึงบรรณารักษ์:" . "<br><br><center><h3>" . $_POST['question']."</h3><font color="."red".">**กรุณารอการตอบกลับของบรรณารักษ์ทางอีเมล์นี้**</font></center><br><br><h4> รายละเอียด: </h4> คุณ " . $_POST['fname'] . " " . $_POST['lname'] . " <br>E-mail: ".$_POST['email']." เบอร์โทรศัพท์ : ".$_POST['tel']."<br> สถานภาพ : ".$status." หน่วยงาน : ".$institute;
	$mail->msgHTML($message);

    if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo '<script> alert("ระบบจะส่งการร้องขอไปยังบรรณารักษ์ กรุณารอการตอบรับจากบรรณารักษ์ทางอีเมล์ที่ท่านได้กรอกไป")</script>';
	}
    
    }


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://mis.lib.nu.ac.th/libcrm/form_ask.html -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Ask a Librarian</title>

<script type="text/javascript" src="./ex_files/view.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="ex_files/animate.css">
<style type="text/css">

.style1 {color: #FFFFFF}
.style2 {color: #333333}

.bg {
	background-image: url("./ex_files/P5230085.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;


}

.bg2{
	background-color: rgba(255,255,255,0.8);
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;


}

.center {
	float: center;
}

</style>

</head>
<body id="main_body" class="bg">


	<div id="form_container">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 bg2 animated fadeIn" style="padding-top: 25px;">
		
					<div class="form-group">
					<h3 style="padding-left: 130px; padding-bottom: 5px;"><strong>ถามบรรณารักษ์ (</strong><strong>Ask a Librarian)</strong></h3>
					<h4 style="padding-left: 250px; padding-bottom: 10px;">สรุปรายละเอียด</h4>
		</div>
			<ul style="margin-left:40px">
				<div class="row">
				<div class="col-md-5">
				<label class="form-group" for="element_1" >ชื่อ (First name)</label>
				<span>
				<p><?php echo $_POST['fname'] ?></p>
				<br>
				</span></div>


				<div class="col-md-5">
				<label class="form-group" for="element_1">นามสกุล (Last name)</label>
				<p><?php echo $_POST['lname'] ?></p><br>


		</div></div>

		<div class="row">
		<div class="col-md-5">
		<label class="form-group" for="element_2" >อีเมล (E-mail)</label>
		<div>
			<p><?php echo $_POST['email'] ?></p><br>
		</div></div>


		<div class="col-md-5">
		<label class="form-group" for="element_3" >โทรศัพท์ (Telephone)</label>

			<p><?php echo $_POST['tel'] ?></p>	</div></div>

		<label class="form-group" for="element_6">สถานภาพ (Status) </label>
		<span>
			<p><?php echo $status ?></p>
		</span>
		<br>
		<label class="form-group" for="element_7">หน่วยงาน (Institute) </label>
		<span>
		<p><?php echo $institute ?></p>
		</span>
		<br><label class="form-group" for="element_4">คำถาม (Question)</label>
		<div class="row">
		<div class="col-md-10">
		<div>
			<p><?php echo $_POST['question'] ?></p>
		</div></div>
		</li>

					<div class="row" style="padding-left: 140px; padding-top: 50px;"><strong><font color="red">**ระบบจะส่งการร้องขอไปยังบรรณารักษ์ <br> </div><div class="row" style="padding-left: 70px;">กรุณารอการตอบรับจากบรรณารักษ์ทางอีเมล์ที่ท่านได้กรอกไป** <br></font></strong>
					  <br></div>

			   <a href="askform.html" style="padding-left: 235px;"><button type="button" class="btn btn-default">Close</button></a>
				</tb>
			  </li>
			</ul>
		</form>

		<div id="footer"><span class="style2">
		<div class="alert alert-danger" align="center">
    <p>หากท่านมีปัญหาหรือข้อสงสัยในการใช้บริการ ติดต่อสำนักงานวิทยทรัพยากร จุฬาลงกรณ์มหาวิทยาลัย </p>โทรศัพท์ 0-2218-2929, 0-2218-2918 (งานบริการห้องสมุด) 0-2218-2903 (ฝ่ายบริหาร)
		<p>โทรสาร 0-2215-3617, 0-2218-2907 </p> E-Mail webmaster@car.chula.ac.th
  </div>
		</span></div></div>
	<div class="col-md-3"></div>
	</div>


</body></html>
