<!DOCTYPE html>
<html style="height:100%">
<head>
	<title>F2F Meeting Time Scheduler</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<script type="text/javascript" src="../js/scriptsEng.min.js"></script>
<head>
<body>
  <center>
	<script>randomBackGround()</script>
	<h1><strong style="background-color:rgba(245,245,245,0.8)">F2F&nbsp;Meeting</strong></h1>
	<table class="table" style="font-size:23px">
		<h2><strong style="background-color:rgba(245,245,245,0.8)">Selected date/time</strong></h2>
		<form method="post" action="showAdd.php">
			<select onchange="this.form.submit()" id="date" name="filter" style="width:100px">
				<option value ="">All</option>
			</select>
			<script>loadData(0)</script>
		</form>
		<a href="add.php" style="text-decoration:none">
			<button class="btn btn-info" type="sumbit" style="margin:0 10px;line-height:1.2">
				<strong style="font-size:20px">Back<strong>
			</button>
		</a>
		<form method="post" action="deleteData.php">
			<button class="btn btn-danger" type="sumbit" style="line-height:1.2">
				<strong style="font-size:20px">Remove<strong>
			</button><br><br>
			<thead class="listtitle">
			<th><input onclick='checkAll()' type="checkbox" name="dataAll[]" value=""></th>
			<th>Date</th><th>Time</th>
			</thead>
			<tbody>
				<?php
					require_once("../db.php");
					/* If you want to handle the warning message~welcome!
					if(isset($_GET['date'])){//Initial status
						if(!$_GET['date'])//There is no new date
							echo "<script>alert('Please select date!')</script>";
						else if(!$_GET['time']) //There is no new time
							echo "<script>alert('Please select one time slot at least !');</script>";
					}*/
					//Search fileter
					$filter = $_POST['filter'];
					if($filter) $filter = "and a.date='$filter'";
					$result = $db->query("SELECT a.date,b.time 
										  FROM $tableDate a,$tableTime b
										  where a.id=b.id $filter order by a.date,time");
					//show date and time from the same id number
					while($column = mysql_fetch_array($result)){						
						echo("<tr style='background-color:rgba(152,202,230,0.8)'>
								<td><input type='checkbox' name='dataAll[]' value='$column[0],$column[1],1'></td>
								<td><strong>$column[0]</strong></td>
								<td><strong>$column[1]</strong></td>
							  </tr>"
							);
					}
					$db->close_db();
				?>	
			<tbody>
		</form>
	<table>
  <center>
</body>
</html>