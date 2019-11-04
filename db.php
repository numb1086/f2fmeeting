<?php
	require_once("db_class.php");
	
	global $_DB;
	$_DB['host'] 	 = "localhost";
	$_DB['user'] 	 = "root";
	$_DB['password'] = "admin";
	$_DB['db_name']	 = "f2fmeeting";
	$tableDate	 	 = "availabledate";
	$tableTime	 	 = "availabletime";
	$tableDateTime 	 = "selectdatetime";
	$db	= new DB($_DB['host'],$_DB['user'],$_DB['password'],$_DB['db_name']);
?>
