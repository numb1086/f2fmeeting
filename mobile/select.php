<!DOCTYPE html>
<html style="height:100%">
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<script type="text/javascript" src="../js/scriptsEng.min.js"></script>
</head>
<body>
	<script>
		randomBackGround()
		function addRow(e) {
			var table = document.getElementById('tb')
			var rowIndex = e.rowIndex
			var date = table.rows[rowIndex].cells[0].innerText
			var time = table.rows[rowIndex].cells[1].innerText
			var name = prompt("Please input your name","<?php echo $_COOKIE['name'];?>");
			if (name != null)
				window.location="selectData.php?name="+name+"&date="+date+"&time="+time
				
		}
	</script>
	<div style="background-color:rgba(245,245,245,0.8)">
		<center><h1><strong>F2f&nbsp;Meeting</strong><br><strong>Student</strong></h1>
			<a href="index.php" style="text-decoration:none">
				<button class="btn btn-success" type="sumbit" style="margin-top:10px;width:150px;font-size:20px">
					<strong>Home page<strong>
				</button>
			</a>
		<h2><strong>Unseleted Date/Time</strong></h2></center>
		<table id="tb" class="table" align="center" style="font-size:24px">
			<thead class="listtitle">
				<th>Date</th><th>Time</th>
			</thead>
			<tbody>
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
						if($column2[0]==""){
							echo("<tr onclick='addRow(this)' style='background-color:rgba(60%,60%,80%,0.8)'>
									<td><strong>$column[0]</strong></td>
									<td><strong>$column[1]</strong></td>
								 </tr>
								 ");
						}
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>