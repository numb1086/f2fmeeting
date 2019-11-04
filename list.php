<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="js/scripts.min.js"></script>
	<script type="text/javascript" src="js/sorttable.min.js"></script>
<head>
<body>
	<script>
		if(parent.window.location.pathname=="/f2f/eng/")
			window.location.href="listEng.php";
	</script>
	<table align="center" style="margin-top:4%">
	  <tr>
		<td align="center" style="width:35%">
			<button onclick="downloadImage()" class="btn btn-success" type="sumbit" style="width:150px;font-size:20px">
				<strong>下載背景圖<strong>
			</button>
			<h2><strong style="background-color:rgba(245,245,245,0.8);font-size:25px">尚可選擇 日期/時間</strong></h2>
			<table class="table" align="center" style="font-size:24px">
				<thead class="listtitle">
					<th>日期</th><th>時間</th>
				</thead>
				<tbody>
					<?php
						require_once("db.php");							
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
								echo("<tr style='background-color:rgba(60%,60%,80%,0.8)'>
										<td><strong>$column[0]</strong></td>
										<td><strong>$column[1]</strong></td>
									 </tr>
									 ");
							}
						}
					?>
				</tbody>
			</table>
		</td>
		<td align="center" style="width:80%">
		  <h2><strong style="background-color:rgba(245,245,245,0.8);">已選擇 日期/時間/姓名</strong></h2>
			<table align="center" class="sortable table" style="font-size:22px">
				<form method="post" action="list.php">
					<select id="date" name="filter" style="width:130px">
						<option value ="">全部</option>
					</select>
					<script>loadData(0)</script>
					<button class="btn btn-info" type="sumbit" style="margin:0 10px;line-height:1.2">
						<strong style="font-size:20px">查詢日期</strong>
					</button>
				</form>
				<form method="post" action="deleteData.php">
					<button class="btn btn-danger" type="sumbit" style="line-height:1.2">
						<strong style="font-size:20px">移除已勾選項目</strong>
					</button><br><br>
					<thead class="listtitle">
						<th><input onclick='checkAll()' type="checkbox" name="dataAll[]" value=""></th>
						<th>日期</th><th>時間</th><th>姓名</th><th>更新時間</th>
					</thead>
					<tbody>
						<strong>
						<?php
							if(isset($_GET['store'])){//Initial status
								if(!$_GET['store'])//There is no new date
									echo "<script>alert('此時段已有人選擇，請重新選擇時段!')</script>";
								else if(!$_GET['name']) //There is no new time
									echo "<script>alert('請輸入姓名');</script>";
								else if(!$_GET['date']) //There is no new time
									echo "<script>alert('請選擇日期');</script>";
							}
							//Search fileter
							$filter = $_POST['filter'];
							if($filter) $filter = "where date='$filter'";
							//show date,time,name.update time 
							$result = $db->query("SELECT * FROM $tableDateTime $filter order by date,time");
							while($column = mysql_fetch_array($result)){
								echo("<tr align='center' style='background-color:rgba(60%,80%,60%,0.8)'>
										<td><input type='checkbox' name='dataAll[]' value='$column[0],$column[1],0'></td>
										<td><strong>$column[0]</strong></td>
										<td><strong>$column[1]</strong></td>
										<td><strong>$column[2]</strong></td>
										<td><strong>$column[3]</strong></td>
									  </tr>"
									);
							}
							$db->close_db();				
						?>	
						</strong>
					</tbody>
				</form>
			</table>
		</td>
	  </tr>
	  <tr>
		<td align="left">
			<a href="app">
				<img src="img/app.png" width="230" height="100">
			</a>
		</td>
		<td><div id="logo">
			<a style="float:left" href="./slideshow">
				<img src="img/slideshow.png" width="230" height="100">
			</a>
			<a style="float:right" href="http://mit.et.ntust.edu.tw/" target="_blank">
				<img src="img/logo.png" width="230" height="100">
			</a>
		</div></td>
	  </tr>
	</table>
</body>
</html>
