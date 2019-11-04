<?php
	require_once("../db.php");
	
	//show date,time,name.update time 
	$result = $db->query("SELECT date,time,name FROM $tableDateTime order by date,time");
	while($column = mysql_fetch_array($result))
		echo "$column[0],$column[1],$column[2] ";
	$db->close_db();				
?>	