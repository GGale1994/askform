<?php

	include_once( 'connection.php' );
	
	$sql = $db->query("SELECT * FROM calendar_event ORDER BY id DESC");
	$row = mysqli_num_rows($sql);
	$output = '';
	if($row >= 1)
	{
		while($result = mysqli_fetch_assoc($sql))
		{
			$date = $result['day'].'/'.$result['month'].'/'.$result['year'].' - '.$result['day_end'].'/'.$result['month_end'].'/'.$result['year_end'];
				$from = str_split($result['time_from'], 2);
				$from_hr = $from[0].' :';
				if($from_hr >= 12) { $dial_from = 'PM'; } else { $dial_from = 'AM'; }
				$from_min = $from[1]." ".$dial_from;

				$to = str_split($result['time_until'], 2);
				$to_hr = $to[0].' :';
				if($to_hr >= 12) { $dial_to = 'PM'; } else { $dial_to = 'AM'; }
				$to_min = $to[1]." ".$dial_to;
		
			$output .= '<tr>
				<td>'.$date.'</td>
				<td>'.$result['event'].'</td>
				<td>'.$result['description'].'</td>
				<td>'.$from_hr.$from_min.'</td>
				<td>'.$to_hr.$to_min.'</td>
				
				<td><span class="tip">
				<a href="edit.php?id='.$result['id'].'">
				<img src="../images/icon_edit.png">
				</a>
				</span>
				<span class="tip">
				<a href="delete.php?id='.$result['id'].'">
				<img src="../images/icon_delete.png">
				</a>
				</span>
				</td>
			</tr>';
		}
	}
?>