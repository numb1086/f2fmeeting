<?php
	require_once("db.php");
	$name = $_POST['name'];
	$name = preg_replace('/\s(?=)/', '',$name);//Remove blank
	$date = $_POST['date'];
	$time = $_POST['time'];
	$now  = new DateTime();
	$now  = $now->format('Y-m-d H:i:s');
	$new_id = 0;
	$store  = 1; //Store succeed(no one choose the meeting time)
	
	if($name && $date){
		//Check if the date and time are selected
		$result = $db->query("SELECT date FROM $tableDateTime 
							  where date='$date' and time='$time'");
		$result = mysql_fetch_array($result);
		if($result[0]==""){
			$db->query("INSERT INTO $tableDateTime (date,time,name,updatetime) 
						VALUES('$date','$time','$name','$now')");
		}else $store = 0;
	}
	$db->close_db();
	header("Location: list.php?store=$store&name=$name&date=$date");
?>