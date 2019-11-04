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
	<script>randomBackGround()</script>
	<div style="background-color:rgba(245,245,245,0.8)">
		<center>
			<h1><strong>F2F&nbsp;Meeting</strong><br><strong>Teacher</strong></h1>
		</center>
		<table>
			<tr>
				<form method="post" action="addData.php">
					<strong style="font-size:22px">Add date：</strong>
					<input type="date" name="date" style="width:50%;margin-bottom:5px;margin-right:8px">
					<button type="sumbit" style="font-size:15px" class="btn btn-primary">Add</button><br>
					<strong style="font-size:22px">Add time：</strong>
					<td align="center" style="font-size:22px">
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
					<td style="font-size:22px">
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
			<a href="showAdd.php" style="text-decoration:none">
				<button class="btn btn-success" type="sumbit" style="margin:5px;width:150px;font-size:20px">
					<strong>Added list<strong>
				</button>
			</a>
			<a href="index.php" style="text-decoration:none">
				<button class="btn btn-success" type="sumbit" style="margin:5px;width:150px;font-size:20px">
					<strong>Home page<strong>
				</button>
			</a>
		</center>
	</div>
</body
</html>