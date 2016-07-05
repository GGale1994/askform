<?php
	session_start();
	require_once("Login-session/config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://mis.lib.nu.ac.th/libcrm/form_ask.html -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Answer Question</title>

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
			<br><div class="row"><div class="col-md-1"></div><div class="col-md-3 bg2 "><a href="ansselect.php"><font color="blue" size="3"><p style="float:right">ย้อนกลับ</p></font></a></div>
				</div>
		</div>
		<div class="col-md-6 bg2 animated fadeIn" style="padding-top: 25px;">
		<form role="form" id="form_163542" class="appnitro" method="post" action="ansadd.php">
					<div class="form-group">
					<h3 style="padding-left: 130px; padding-bottom: 25px;"><strong>ตอบแบบสอบถาม (</strong><strong>Answer Question)</strong></h3>
					
		</div>
		<?php 

			$select = "SELECT * FROM user_info WHERE user_id = ".$_POST['user_id']."";
			$result = $conn->query($select);
			$row = mysqli_fetch_array($result);

			$select2 = "SELECT * FROM quest_ans WHERE quest_ans_id = ".$_POST['quest_ans_id']."";
			$result2 = $conn->query($select2);
			$row2 = mysqli_fetch_array($result2);

		 ?>
			<ul style="margin-left:40px">
				<div class="row">
				<div class="col-md-5">
				<label class="form-group" for="element_1" >ชื่อ (First name)</label>
				<span>
				<p><?php echo $row['fname']; ?></p>
				<br>
				</span></div>


				<div class="col-md-5">
				<label class="form-group" for="element_1">นามสกุล (Last name)</label>
				<p><?php echo $row['lname']; ?></p><br>


		</div></div>

		<div class="row">
		<div class="col-md-5">
		<label class="form-group" for="element_2" >อีเมล (E-mail)</label>
		<div>
			<p><?php echo $row['email']; ?></p><br>
		</div></div>


		<div class="col-md-5">
		<label class="form-group" for="element_3" >โทรศัพท์ (Telephone)</label>

			<p><?php echo $row['tel']; ?></p>	</div></div>

		<label class="form-group" for="element_6">สถานภาพ (Status) </label>
		<span>
			<p><?php echo $row['status']; ?></p>
		</span>
		<br>
		<label class="form-group" for="element_7">หน่วยงาน (Institute) </label>
		<span>
		<p><?php echo $row['institute']; ?></p>
		</span>
		<br><label class="form-group" for="element_4">คำถาม (Question)</label>
		<div class="row">
		<div class="col-md-10">
		<span>
			<p><?php echo $row2['question']; ?></p></span><br>
		</div></div>
			<?php 
				$datetime = $row2['questsub_datetime'];
				$datetime = new DateTime($datetime);
				$date = $datetime->format('d/m/Y');
				$time = $datetime->format('H:i:s');
			 ?>
		<label class="form-group" for="element_4">ได้รับคำถามเมื่อวันที่&nbsp;:&nbsp;</label><?php echo $date ?>
		<label class="form-group" for="element_4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เวลา&nbsp;:&nbsp;</label><?php echo $time ?> น.
		<br> <br>
		
		<label class="form-group" for="element_4">คำตอบ (Answer)</label>
		<div class="row">
		<div class="col-md-10">
			<textarea name="answer" cols="65" rows="5" class="form-control" id="question" required></textarea>
		</div></div>
		<br>
			   <input type="hidden" name="fname" value="<?php echo $row['fname']; ?>">
			   <input type="hidden" name="lname" value="<?php echo $row['lname']; ?>">
			   <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
			   <input type="hidden" name="tel" value="<?php echo $row['tel']; ?>">
			   <input type="hidden" name="status" value="<?php echo $row['status']; ?>">
			   <input type="hidden" name="institute" value="<?php echo $row['institute']; ?>">
			   <input type="hidden" name="question" value="<?php echo $row2['question']; ?>">
			   <input type="hidden" name="quest_ans_id" value="<?php echo $row2['quest_ans_id']; ?>">
			   <input type="submit" class="btn btn-default btn-success" name="submit" value="Submit">
			   <input id="reset" class="btn btn-danger" type="reset" name="reset" value="Reset">
			   <a href="ansselect.php" title=""><button class="btn btn-primary" type="button" name="cancel">Cancel</button></a>
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
	<div class="col-md-3">
		<br><div class="row"><div class="col-md-7"></div><div class="col-md-4 bg2"><a href="Login-session/logout.php"><font color="blue" size="3"><p style="float:right">ออกจากระบบ</p></font></a></div></div>

			</div>
	</div>


</body></html>
