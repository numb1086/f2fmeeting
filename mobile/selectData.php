<?php
	require_once("../db.php");
	$name = $_GET['name'];
	$name = preg_replace('/\s(?=)/', '',$name);//Remove blank
	$date = $_GET['date'];
	$time = $_GET['time'];
	$now  = new DateTime();
	$now  = $now->format('Y-m-d H:i:s');
	$new_id = 0;
	
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
	header("Location: index.php");
?>