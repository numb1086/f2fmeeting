<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<script type="text/javascript" src="js/scripts.min.js"></script>
	<head>
	<body>
	  <center>
		<script>
			if(parent.window.location.pathname=="/f2f/eng/")
				window.location.href="overViewEng.php";
		</script>
		<table class="table" style="font-size:23px;width:80%">
			<h1><strong style="font-size:32px;background-color:rgba(245,245,245,0.8)">總覽</strong></h1>
			<form method="post" action="overView.php">
				<select id="date" name="filter" style="width:130px">
					<option value ="">全部</option>
				</select>
				<script>loadData(0)</script>
				<button class="btn btn-info" type="sumbit" style="margin:10px;line-height:1.2">
					<strong style="font-size:20px">查詢日期<strong>
				</button>
			</form>
			<thead class="listtitle">
				<th>日期</th><th>時間</th><th>姓名</th>
			</thead>
			<tbody>
				<?php
					require_once("db.php");
					
					//Search fileter
					$filter = $_POST['filter'];
					if($filter) $filter = "and a.date='$filter'";
					$result = $db->query("SELECT a.date,b.time 
										  FROM $tableDate a,$tableTime b
										  where a.id=b.id $filter order by a.date,time");
					//show date and time from the same id number
					while($column = mysql_fetch_array($result)){
						$result2 = $db->query("SELECT name FROM $tableDateTime
											  where date='$column[0]' and time='$column[1]'");
						$column2 = mysql_fetch_array($result2);
						if($column2[0]=="") $column2[0] = "Free";
						echo("<tr style='background-color:rgba(60%,80%,60%,0.8)''>
								<td><strong>$column[0]</strong></td>
								<td><strong>$column[1]</strong></td>
								<td><strong>$column2[0]</strong></td>
							  </tr>"
							);
					}
					$db->close_db();
				?>	
			<tbody>
		<table>
	  <center>
	</body>
</html>
