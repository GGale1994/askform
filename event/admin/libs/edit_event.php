<?php
	include_once( 'connection.php' );
	
	if(isset($_POST['add_event']))
	{
		$event_title = trim($_POST['event_title']);
		$event_desc = $_POST['event_desc'];
		$due_on_date = $_POST['due_on_date'];
		$end_date = $_POST['end_date'];
		$from_time = $_POST['from_time'];
		$to_time = $_POST['to_time'];
		$id = $_GET['id'];
		
		if(empty($event_title) || empty($event_desc) || empty($due_on_date) || empty($from_time) ||
		empty($to_time) || empty($end_date))
		{
			$error = 'All fields are required';
		}
		else
		{
			$from_time = str_replace(':','',$from_time);
			$to_time = str_replace(':','',$to_time);
			if($from_time >= $to_time)
			{
				$error = 'From time cannot be greater than to time';
			}
			else
			{
				$break_date = explode('/',$due_on_date);
				$month = $break_date[0];
				$day = $break_date[1];
				$year = $break_date[2];
				$break_end_date = explode('/',$end_date);
				$month_end = $break_end_date[0];
				$day_end = $break_end_date[1];
				$year_end = $break_end_date[2];
				$sql = $db->query("UPDATE calendar_event SET event = '$event_title',
				description = '$event_desc',
				day = '$day',
				month = '$month',
				year = '$year',
				time_from = '$from_time',
				time_until = '$to_time',
				day_end = '$day_end',
				month_end = '$month_end',
				year_end = '$year_end'
				WHERE id = '$id'
				");
				
				$affect = mysqli_affected_rows($db);
				if($affect >= 1)
				{
					$success = 'Event edited successfully';
				}
				else
				{
					$info = 'No changes have been made';
				}
			}
		}
	}
	
	
	
?>