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
<body><center>
	<?php require_once("authenticate.php"); ?>
	<script>
		randomBackGround()
		function deleteRow(e) {
			var table = document.getElementById('tb')
			var rowIndex = e.rowIndex
			var date = table.rows[rowIndex].cells[0].innerText
			var time = table.rows[rowIndex].cells[1].innerText
			if(confirm("Remove this date/time?"))
				window.location="deleteData.php?date="+date+"&time="+time
		}
	</script>
	<h2><strong style="background-color:rgba(245,245,245,0.8)">F2F&nbsp;Meeting Time Scheduler</strong></h2>
	<h2><strong style="background-color:rgba(245,245,245,0.8)">Selected&nbsp;List</strong></h2>
	<a href="add.php" style="text-decoration:none">
		<button class="btn btn-info" type="sumbit" style="display:inline;line-height:1.2">
			<strong style="font-size:20px">Teacher</strong>
		</button>
	</a>
	<a href="select.php" style="text-decoration:none">
		<button class="btn btn-success" type="sumbit" style="display:inline;line-height:1.2">
			<strong style="font-size:20px">Student</strong>
		</button>
	</a>
	<table id="tb" align="center" class="table" style="font-size:22px;margin-top:10px">
		<thead class="listtitle">
			<th>Date</th><th>Time</th><th>Name</th>
		</thead>
		<tbody>
			<?php
				/* If you want to handle the warning message~welcome!
				if(isset($_GET['store'])){//Initial status
					if(!$_GET['store'])//There is no new date
						echo "<script>alert('This time slot is selected,please re-select!')</script>";
					else if(!$_GET['name']) //There is no new time
						echo "<script>alert('Please input your name!');</script>";
					else if(!$_GET['date']) //There is no new time
						echo "<script>alert('Please select the date!');</script>";
				}*/
				require_once("../db.php");
				//Search fileter
				$filter = $_POST['filter'];
				if($filter) $filter = "where date='$filter'";
				//show date,time,name.update time 
				$result = $db->query("SELECT * FROM $tableDateTime $filter order by date,time");
				while($column = mysql_fetch_array($result)){								
					echo("<tr onclick='deleteRow(this)' align='center' style='background-color:rgba(60%,80%,60%,0.8)'>
							<td><strong>$column[0]</strong></td>
							<td><strong>$column[1]</strong></td>
							<td><strong>$column[2]</strong></td>
						  </tr>"
						);
				}
				$db->close_db();				
			?>	
		</tbody>
	</table></center>
</body>
</html>