<?php
	include_once( 'connection.php' );
	
	if(isset($_GET['action']) && $_GET['action'] == 'true'){
		$id = $_GET['id'];
		
		$sql = $db->query("DELETE FROM calendar_event WHERE id = '$id' LIMIT 1");
		$row = mysqli_affected_rows($db);
		
		if($row >= 1)
		{
			$success = 'Event deleted successfully <a href="index.php" title="Go Back"> Go Back </a>';
		}
		else
		{
			$error = 'There was an error deleting this event';
		}
	}

?>