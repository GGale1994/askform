<?php
	session_start();
	require_once("Login-session/config.php");

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
		<div class="col-md-6 bg2" style="padding-top: 25px;">
		<form role="form" id="form_163542" class="appnitro" method="post" action="">
					<div class="form-group">
					<h3 style="padding-left: 130px; padding-bottom: 25px;"><strong>ตอบแบบสอบถาม (</strong><strong>Answer Question)</strong></h3>
					
		</div>
			<ul style="margin-left:40px">
				<div class="row">
				<div class="col-md-5">
				<label class="form-group" for="element_1" >ชื่อ (Firstname)</label>
				<span>
				<p><?php echo $_POST['fname'] ?></p>
				<br>
				</span></div>


				<div class="col-md-5">
				<label class="form-group" for="element_1">นามสกุล (Lastname)</label>
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

			<br><label class="form-group" for="element_4">คำตอบ (Answer)</label>
		<div class="row">
		<div class="col-md-10">
		<div>
			<p><?php echo $_POST['answer'] ?></p>
		</div></div>
		</li>
			   <input type="submit" class="btn btn-default" value="Submit">
			   <input id="reset" class="btn btn-danger" type="reset" name="reset" value="Reset">
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
