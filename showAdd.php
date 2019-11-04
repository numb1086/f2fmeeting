<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="js/scripts.min.js"></script>
<head>
<body>
  <center>
	<script>
		if(parent.window.location.pathname=="/f2f/eng/")
			window.location.href="showAddEng.php";	
	</script>
	<table class="table" style="font-size:23px;width:80%">
		<h1><strong style="font-size:32px;background-color:rgba(245,245,245,0.8)">已新增 日期/時間 資料</strong></h1>
		<form method="post" action="showAdd.php">
			<select id="date" name="filter" style="width:130px">
				<option value ="">全部</option>
			</select>
			<script>loadData(0)</script>
			<button class="btn btn-info" type="sumbit" style="margin:0 10px;line-height:1.2">
				<strong style="font-size:20px">查詢日期<strong>
			</button>
		</form>
		<form method="post" action="deleteData.php">
			<button class="btn btn-danger" type="sumbit" style="line-height:1.2">
				<strong style="font-size:20px">移除已勾選項目<strong>
			</button><br><br>
			<thead class="listtitle">
				<th><input onclick='checkAll()' type="checkbox" name="dataAll[]" value=""></th>
				<th>日期</th><th>時間</th>
			</thead>
			<tbody>
				<?php
					require_once("db.php");
				
					if(isset($_GET['date'])){//Initial status
						if(!$_GET['date'])//There is no new date
							echo "<script>alert('請選擇日期!')</script>";
						else if(!$_GET['time']) //There is no new time
							echo "<script>alert('請選擇至少一個時段!');</script>";
					}
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
