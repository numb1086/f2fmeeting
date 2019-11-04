<?php
	require_once("db.php");
	
	if(isset($_GET['date'])){
		//Get date from availabledate table
		$result = $db->query("SELECT * FROM  $tableDate order by date");
		while($column=mysql_fetch_array($result))
			echo("<option id='$column[0]' value ='$column[1]'>$column[1]</option>");
	}else if(isset($_GET['dateId'])){
		$id = $_GET['dateId'];
		//Get date from availabledate table
		$result = $db->query("SELECT date FROM  $tableDate where id=$id");
		$date = mysql_fetch_array($result);
		//Get time from availabledate table
		$result = $db->query("SELECT time FROM $tableTime where id=$id order by time");
		while($column=mysql_fetch_array($result)){
			//Check if the date and time exist in selecteddatetime
			$result2 = $db->query("SELECT time FROM $tableDateTime where date='$date[0]' and time='$column[0]'");
			$check = mysql_fetch_array($result2);
			if($check[0]=="") echo("<option value ='$column[0]'>$column[0]</option>");
		}
	}else{
		$result = $db->query("SELECT * FROM $tableDateTime order by updatetime desc");
		$count=0;
		while($column = mysql_fetch_array($result)){
			echo("<tr>
					<td>$column[0]</td>
					<td>$column[1]</td>
					<td>$column[2]</td>
				 </tr>"
				);
			if($count==4) break;
			$count++;
		}		
	}
	$db->close_db();
?>