<?php
	class DB
	{		
		var $db_link;

		function __construct($host,$user,$pwd,$db_name)
		{
			$this->connect_db($host,$user,$pwd,$db_name);
		}

		function connect_db($host,$user,$pwd,$db_name)
		{
			$db_link = mysql_connect($host,$user,$pwd)
			or die("MySql connect error: " . mysql_error());
			if($db_name != ""){
				mysql_select_db($db_name,$db_link)
				or die("MySql database select error: " . mysql_error());
			}
			mysql_query("SET NAMES 'UTF8'");
			mysql_query("SET CHARACTER_SET_CLIENT 'utf8'");
			mysql_query("SET CHARACTER_SET_RESULTS 'utf8'");
			$this->db_link = $db_link;
		}
		function query($sql)
		{
			$result = mysql_query($sql,$this->db_link)
			or die ("MySQL query error: ". mysql_error());
			
			return $result;
		}
		
		function close_db()
		{
			mysql_close($this->_db);
		}
	}
?>