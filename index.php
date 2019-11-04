<!DOCTYPE html>
<html style="height:100%">
<head>
	<title>F2F Meeting Time Scheduler</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta http-equiv="cache-control" content="no-cache">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<script type="text/javascript" src="js/scripts.min.js"></script>
	<script>
        var url = location.search;
        if(url.indexOf("?") == -1){
			if(navigator.userAgent.match(/Android|iPhone|iPad|Windows Phone|SymbianOS/i))
				window.location = "/f2f/mobile";
        }
	</script>
</head>
<body>
	<?php
		require_once("logout.php");
		require_once("authenticate.php");
	?>
	<script>randomBackGround()</script>
	<div class="container">
		<table align="center">
		  <tr>
			<div class="title" align="center">
                <font size="6" color="white" style="line-height:50px">
					<a style="float:left;text-decoration:none;color:white" href=".?logout=1">←登出</a>
                    <a style="text-decoration:none;color:white" href="overView.php" target="display">
						<strong style="margin-left:10%">F2F Meeting Time Scheduler</strong>
					</a>
					<a style="float:right;text-decoration:none;color:white" href="eng">English version→</a>
                </font>
        	</div>	
		  </tr>
		  <tr>
		    <td style="width:20%">
			  <div class="left-border">
				<h2 align="center"><strong>老師請選</strong></h2>
				<table >
				  <tr >
					<form method="post" action="addData.php" target="display">
						<strong>新增日期：</strong>
						<input type="date" name="date" style="margin-bottom:5px;margin-right:8px">
						<button type="sumbit" style="font-size:15px" class="btn btn-primary">新增</button><br>
						<strong>新增時段：</strong>
						<td align="center" style="font-size:18px">
						  <div class="checkbox">
							<label><input type="checkbox" name="time[]" value="09:00~09:30"><strong>09:00~09:30<strong></label>
							<label><input type="checkbox" name="time[]" value="09:30~10:00"><strong>09:30~10:00<strong></label>
							<label><input type="checkbox" name="time[]" value="10:00~10:30"><strong>10:00~10:30<strong></label>
							<label><input type="checkbox" name="time[]" value="10:30~11:00"><strong>10:30~11:00<strong></label>
							<label><input type="checkbox" name="time[]" value="11:00~11:30"><strong>11:00~11:30<strong></label>
							<label><input type="checkbox" name="time[]" value="11:30~12:00"><strong>11:30~12:00<strong></label>
							<label><input type="checkbox" name="time[]" value="12:00~12:30"><strong>12:00~12:30<strong></label>
							<label><input type="checkbox" name="time[]" value="12:30~13:00"><strong>12:30~13:00<strong></label>
							<label><input type="checkbox" name="time[]" value="13:00~13:30"><strong>13:00~13:30<strong></label>
						  </div>
						</td>
						<td style="font-size:18px">
						  <div class="checkbox">
							<label><input type="checkbox" name="time[]" value="13:30~14:00"><strong>13:30~14:00<strong></label>
							<label><input type="checkbox" name="time[]" value="14:00~14:30"><strong>14:00~14:30<strong></label>
							<label><input type="checkbox" name="time[]" value="14:30~15:00"><strong>14:30~15:00<strong></label>
							<label><input type="checkbox" name="time[]" value="15:00~15:30"><strong>15:00~15:30<strong></label>
							<label><input type="checkbox" name="time[]" value="15:30~16:00"><strong>15:30~16:00<strong></label>
							<label><input type="checkbox" name="time[]" value="16:00~16:30"><strong>16:00~16:30<strong></label>
							<label><input type="checkbox" name="time[]" value="16:30~17:00"><strong>16:30~17:00<strong></label>
							<label><input type="checkbox" name="time[]" value="17:00~17:30"><strong>17:00~17:30<strong></label>
							<label><input type="checkbox" name="time[]" value="17:30~18:00"><strong>17:30~18:00<strong></label>
						  </div>
						</td>
					</form>		
				  </tr>	
				</table>
				<center>
					<form action="showAdd.php" target="display">
						<button class="btn btn-success" type="sumbit" style="margin-bottom:10px;width:150px;font-size:17px">
							<strong>已新增列表<strong>
						</button>
					</form>
					<form action="list.php" target="display">
						<button class="btn btn-success" type="sumbit" style="width:150px;font-size:17px">
							<strong>時間表首頁<strong>
						</button>
					</form>
				</center>
			  </div>
			  <div class="left-border">
				<h2 align="center"><strong>學生請選</strong></h2>
				<form style="margin-bottom:5px" method="post" action="selectData.php" target="display">
					<strong>輸入姓名：</strong>
					<input name="name" style="width:140px;margin-bottom:10px" value="<?php echo $_COOKIE['name'];?>"><br>
					<strong>選擇日期：</strong>
					<select onchange="loadData(1)" id="date" name="date" style="width:145px;margin-bottom:5px">
						<option value ="" selected style="display:none">請選擇</option>
					</select><br>
					<script>loadData(0)</script>
					<strong>選擇時段：</strong>
					<select id="time" name="time" style="width:145px;margin-right:10px">	
						<option value ="" selected style="display:none">請選擇</option>
					</select>
					<button class="btn btn-primary" type="sumbit" style="font-size:15px">新增</button>
				</form>
				<strong>最近新增：<strong>
				<table class="table" style="font-size:17px;margin-top:5px">
					<thead class="listtitle"><th>日期</th><th>時間</th><th>姓名</th></thead>
					<tbody id="tbody"></tbody>
					<script>loadData(2)</script>
				</table>
			  </div>
			</td>
		    <td style="width:80%">
			  <div class="right-border" align="center">
				<iframe id="iframe" src="list.php" name="display"></iframe>
			  </div>
		    </td>
		  </tr>
		</table>
	</div>
</body>
</html>
