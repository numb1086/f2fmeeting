<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="js/scripts.min.js"></script>
<head>
<body>
  <center>
	<table class="table" style="font-size:23px;width:80%">
		<h1><strong style="font-size:32px;background-color:rgba(245,245,245,0.8)">Added date/time</strong></h1>
		<form method="post" action="showAddEng.php">
			<select id="date" name="filter" style="width:130px">
				<option value ="">All</option>
			</select>
			<script>loadData(0)</script>
			<button class="btn btn-info" type="sumbit" style="margin:0 10px;line-height:1.2">
				<strong style="font-size:20px">Search for date<strong>
			</button>
		</form>
		<form method="post" action="deleteData.php">
			<button class="btn btn-danger" type="sumbit" style="line-height:1.2">
				<strong style="font-size:20px">Remove checked item<strong>
			</button><br><br>
			<thead class="listtitle">
			<th><input onclick='checkAll()' type="checkbox" name="dataAll[]" value=""></th>
			<th>Date</th><th>Time</th>
			</thead>
			<tbody>
				<?php
					require_once("db.php");
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
						echo("<tr style='background-color:rgba(152,202,230,0.7)'>
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