<?php
	require_once("../db.php");
					
	$result = $db->query("SELECT a.date,b.time 
							FROM $tableDate a,$tableTime b
							where a.id=b.id order by a.date,time");
	//show date and time from the same id number
	while($column = mysql_fetch_array($result))
		echo "$column[0],$column[1] ";
	$db->close_db();
?>
