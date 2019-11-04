<?php
	require_once("../db.php");
	$datetime = $_POST['dataAll'];
	
	foreach($datetime as $datetime){
		$temp = explode(",",$datetime);
		$date = $temp[0];
		$time = $temp[1];
		$flag = $temp[2];//Teacher or student

		if($flag && $date){
			//Get id of date
			$result = $db->query("SELECT id FROM $tableDate where date='$date'");
			$id = mysql_fetch_array($result);
			//Delete the time with id of date
			$db->query("DELETE FROM $tableTime where id='$id[0]' and time='$time'");
			//Delete the meeting of selected date and time
			$db->query("DELETE FROM $tableDateTime where date='$date' and time='$time'");
			//If the id of the time is the last,delete the date
			$result = $db->query("SELECT COUNT(id) FROM $tableTime where id='$id[0]'");
			$count = mysql_fetch_array($result);
			if($count[0] == 0) $db->query("DELETE FROM $tableDate where id='$id[0]'");
			echo "1";
		}else if($date){
			//Delete the meeting of selected date and time
			$db->query("DELETE FROM $tableDateTime where date='$date' and time='$time'");
			echo "1";
		}
	}
	$db->close_db();
?>