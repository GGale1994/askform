<?php
	session_start();
	require_once("Login-session/config.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://mis.lib.nu.ac.th/libcrm/form_ask.html -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Welcome</title>

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

.bgwelcome1{
	background-color: rgba(51, 204, 51,0.8);
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;
	width: 200px;
	margin: auto;
}

.bgwelcome2{
	background-color: rgba(102,153,255,0.8);
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;
	width: 210px;
	margin: auto;
}

.bgwelcome3{
	background-color: rgba(255, 153, 51,0.8);
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;
	width: 170px;
	margin: auto;
}

.bgwelcome4{
	background-color: rgba(26, 140, 255,0.8);
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;
	width: 170px;
	margin: auto;
}

.bgwelcome5{
	background-color: rgba(150, 150, 150,0.8);
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;
	width: 250px;
	margin: auto;
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
		<div class="col-md-6 " style="padding-top: 130px;"><div class="row bg2">
		<form role="form" id="form_163542" class="appnitro" method="post" action="summary.php">
					<div class="form-group">
					<div class="bgwelcome1"><h3 style="padding-top: 5px; padding-left: 35px; padding-right: 10px;padding-bottom: 10px;"><font color="white"><strong>ยินดีต้อนรับ</strong></font></h3></div>

          <div class="bgwelcome5"><h4 style="padding-top: 5px; padding-left: 25px; padding-right: 10px;padding-bottom: 10px;"><font color="white">คุณ &nbsp;&nbsp;&nbsp;&nbsp;
          		<?php echo $_SESSION["Name"]; ?></font></h4></div>

          <div class="bgwelcome2"><h4 style="padding-top: 5px; padding-left: 10px; padding-right: 10px;padding-bottom: 10px;"><font color="white">โปรดเลือกเมนูการทำงาน</font></h4></div>
			
		<div class="row">
          <div class="col-md-2"></div>
					<div class="col-md-3"><a href="history.php"><img src="ex_files/answer_icon.png" class="img-circle" width="170px" height="170px" style=""><br><br>
					<div class="bgwelcome3"><h5 style="padding-bottom: 5px; padding-top: 5px;"><font color="white" style="padding-left: 10px;">คำถามที่ได้รับการตอบแล้ว</font></h5></a></div><br><br></div>
		
          <div class="col-md-2"></div>
          <div class="col-md-3"><a href="ansselect.php"><img src="ex_files/question_icon.png" class="img-circle" width="170px" height="170px"><br><br>
					<div class="bgwelcome4"><h5 style="padding-bottom: 5px; padding-top: 5px;"><font color="white" style="padding-left: 10px;">คำถามที่กำลังรอการตอบ</strong></font></h5></div></a><br><br></div>
					<div class="col-md-1"></div>
          <br>
		</form>
		</div> <!-- row -->
		<div id="footer"><span class="style2">

		</span></div></div>
		
		</div>
	</div><div class="col-md-3">
			<br><div class="row"><div class="col-md-7"></div><div class="col-md-4 bg2"><a href="Login-session/logout.php"><font color="blue" size="3"><p style="float:right">ออกจากระบบ</p></font></a></div>
		</div>
</div></div>


</body></html>
