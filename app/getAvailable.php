<?php
	require_once("../db.php");
	
	//Get the date,time with the same id
	$result = $db->query("SELECT a.date,b.time 
						FROM $tableDate a,$tableTime b 
						where a.id=b.id order by a.date,b.time");	
	while($column = mysql_fetch_array($result)){
		//Check if the date and time exist in the tableDateTime
		$result2 = $db->query("SELECT date FROM $tableDateTime 
								where date='$column[0]' and time='$column[1]'");
		$column2 = mysql_fetch_array($result2);					
		if($column2[0]=="") echo "$column[0],$column[1] ";
	}
	$db->close_db();
?>