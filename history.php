<?php
	session_start();
	require_once("Login-session/config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://mis.lib.nu.ac.th/libcrm/form_ask.html -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>History</title>

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

<script language="JavaScript">

function checkdel(id){
	if(confirm('ท่านมั่นใจว่าต้องการลบคำถามนี้ใช่หรือไม่')==true)
	{
		window.location = "deletequest.php?user_id=".concat(id);
	}


}

</script>

</head>
<body id="main_body" class="bg">


	<div id="form_container">
		<div class="col-md-2">
		<br><div class="row"><div class="col-md-1"></div><div class="col-md-5 bg2"><a href="index.php"><font color="blue" size="3"><p style="float:right">ย้อนกลับ</p></font></a></div>
			</div>
		</div>
		<div class="col-md-8 bg2 animated fadeIn" style="padding-top: 25px;">

					<div class="form-group">
					<h3 style="padding-left: 220px; padding-bottom: 25px;"><strong>คำถามที่ได้รับการตอบแล้ว (</strong><strong> Answered Question)</strong></h3>
					<form action="history.php" method="get" accept-charset="utf-8">
					<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<input class="form-control" type="text" name="keyword" value="" placeholder="Search">
					</div>
					<div class="col-md-4">
					<input class="btn btn-default" type="submit" name="submit" value="Submit">
					</div>
					</form>
					</div>
				

		</div>
		<div class="row">
			<div class="col-md-12">
				<table  class="table table-hover">
				<tr class="active"><th>คำถามที่</th><th colspan="4">คำถาม</th><th colspan="2">วันที่ได้รับคำถาม</th><th colspan="2">ชื่อผู้ถาม</th><th colspan="4">คำตอบ</th><th colspan="2">วันที่ได้รับคำตอบ</th><th colspan="1">ชื่อผู้ตอบ</th><th colspan="2">รายละเอียด</th>

			<?php
				if (isset($_GET["page"])) { $page  = $_GET["page"];  } else { $page=1; };
				if (isset($_GET["number"])) { $number  = $_GET["number"];  } else { $number=1; };
				$start_from = ($page-1) * 5;

				$selectquery = "SELECT quest_ans.quest_ans_id,user_info.user_id,quest_ans.question,user_info.fname,user_info.lname,quest_ans.questsub_datetime,quest_ans.anssub_datetime,quest_ans.answer,quest_ans.member_name  FROM quest_ans,user_info WHERE user_info.user_id = quest_ans.user_id_fk and quest_ans.answer IS NOT NULL ORDER BY fname ASC LIMIT $start_from, 5 ";
				$result = $conn->query($selectquery);

				if(isset($_GET['submit']))
				{

					if($_GET['keyword'] == ""){
						echo "<script>alert('โปรดระบุคำค้นหา');</script>";
					      echo "<script>window.location='history.php';</script>";
					}
					else
					{
							$key=$_GET['keyword'];
						$query= "SELECT * FROM user_info,quest_ans WHERE (quest_ans.question LIKE '%".$key."%' or user_info.fname LIKE '%".$key."%' or user_info.lname LIKE '%".$key."%' or quest_ans.answer LIKE '%".$key."%') and user_info.user_id = quest_ans.user_id_fk and quest_ans.answer IS NOT NULL GROUP BY user_info.user_id ORDER BY name ASC LIMIT $start_from, 5";
					    $result = $conn->query($query);
					    $flag=0;
						
					    while($row=mysqli_fetch_array($result))
					    {
					      	$datetime = $row['questsub_datetime'];
							$datetime = new DateTime($datetime);
							$date = $datetime->format('d/m/Y');

							$datetime = $row['anssub_datetime'];
							$datetime = new DateTime($datetime);
							$date2 = $datetime->format('d/m/Y');

							echo '<tr><td>'.$number.'</td><td colspan="4">'
							.$row['question'].'</td><td colspan="2">'
							.$date.'</td><td colspan="2">'
							.$row['fname'].' '.$row['lname'].'</td><td colspan="4">'
							.$row['answer'].'</td><td colspan="2">'
							.$date2.'</td><td colspan="1">'
							.$row['member_name'].'</td><td colspan="2">
							<a href="detail.php?quest_ans_id='.$row['quest_ans_id'].'&user_id='.$row['user_id'].'"><button class="btn btn-default btn-success animated zoomIn" type="button" name="submit">รายละเอียด</button></a></td></tr>';
							$number++;
					      $flag = 1;
					    }

					    if($flag!=1) 
					    {
					      echo "<script>alert('ค้นหาไม่พบ');</script>";
					      echo "<script>window.location='history.php';</script>";
					    }
					}
					
				}
				else
				{

					$selectquery = "SELECT quest_ans.quest_ans_id,user_info.user_id,quest_ans.question,user_info.fname,user_info.lname,quest_ans.questsub_datetime,quest_ans.anssub_datetime,quest_ans.answer,quest_ans.member_name  FROM quest_ans,user_info WHERE user_info.user_id = quest_ans.user_id_fk and quest_ans.answer IS NOT NULL ORDER BY fname ASC LIMIT $start_from, 5 ";
					$result2 = $conn->query($selectquery);
					while ($row = mysqli_fetch_array($result2))
					{
						$datetime = $row['questsub_datetime'];
						$datetime = new DateTime($datetime);
						$date = $datetime->format('d/m/Y');

						$datetime = $row['anssub_datetime'];
						$datetime = new DateTime($datetime);
						$date2 = $datetime->format('d/m/Y');

						echo '<tr><td>'.$number.'</td><td colspan="4">'
						.$row['question'].'</td><td colspan="2">'
						.$date.'</td><td colspan="2">'
						.$row['fname'].' '.$row['lname'].'</td><td colspan="4">'
						.$row['answer'].'</td><td colspan="2">'
						.$date2.'</td><td colspan="1">'
						.$row['member_name'].'</td><td colspan="2">
						<a href="detail.php?quest_ans_id='.$row['quest_ans_id'].'&user_id='.$row['user_id'].'"><button class="btn btn-default btn-success animated zoomIn" type="button" name="submit">รายละเอียด</button></a></td></tr>';
						$number++;
					}
				}	

			 ?>
			 	</table>
			 	<?php 
					$sql = "SELECT COUNT(question) FROM quest_ans"; 
					$rs_result = $conn->query($sql); 
					$row = mysqli_fetch_row($rs_result); 
					$total_records = $row[0]; 
					$total_pages = ceil($total_records / 5); 
					
					?>
					<div class="row">
					<div class="col-md-1" style="padding-top:5px;"><b>หน้าที่</b></div>
					<?php  
					for ($i=1; $i<$total_pages; $i++) { 
					            echo "<a href='history.php?page=".$i."&number=".$number."&total_records=".$total_records."'><button class='btn btn-default' type='button' style='margin-bottom:15px; margin-right:5px;'>".$i."</button></a> "; 
					} 
					?></div>
				</div><div class="col-md-1"></div>
			</div>



		<div id="footer"><span class="style2">
		<div class="alert alert-danger" align="center">
    <p>หากท่านมีปัญหาหรือข้อสงสัยในการใช้บริการ ติดต่อสำนักงานวิทยทรัพยากร จุฬาลงกรณ์มหาวิทยาลัย </p>โทรศัพท์ 0-2218-2929, 0-2218-2918 (งานบริการห้องสมุด) 0-2218-2903 (ฝ่ายบริหาร)
		<p>โทรสาร 0-2215-3617, 0-2218-2907 </p> E-Mail webmaster@car.chula.ac.th
  </div>
		</span></div></div>
	<div class="col-md-2">
		<br><div class="row"><div class="col-md-5"></div><div class="col-md-6 bg2"><a href="Login-session/logout.php"><font color="blue" size="3"><p style="float:right">ออกจากระบบ</p></font></a></div>
		</div>
	</div>
	</div>


</body></html>
