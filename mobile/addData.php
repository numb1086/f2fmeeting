<?php
	require_once("../db.php");

	//Get database max id value
	$result = $db->query("SELECT MAX(id) FROM $tableDate");
	$column = mysql_fetch_array($result);
	$date = $_POST['date'];
	$time = $_POST['time'];
	$new_id = 0;
	if($date && $time){
		//Insert date
		if($column[0]=="")
			$db->query("INSERT INTO $tableDate (id,date) VALUES(0,'$date')");
		else{
			$new_id = $column[0]+1;
			$result = $db->query("SELECT id FROM $tableDate where date='$date'");
			$id = mysql_fetch_array($result);
			//If the date does not exist,add the new date
			if($id[0]=="")
				$db->query("INSERT INTO $tableDate (id,date) VALUES($new_id,'$date')");
			else $new_id = $id[0];
		}
		//Insert time
		foreach($time as $time){
			$result = $db->query("SELECT * FROM $tableTime where time='$time' and id='$new_id'");
			$result = mysql_fetch_array($result);
			if($result[0]=="")//If the time and id does not exist,add the new time
				$db->query("INSERT INTO $tableTime (id,time) VALUES($new_id,'$time')");
		}
	}
	$db->close_db();
	header("Location: showAdd.php?&date=$date&time=$time");
?>
