<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<script type="text/javascript" src="js/scripts.min.js"></script>
	<head>
	<body class="body" style="margin:20%">
		<table align="center" style="margin-top:5%">
		  <tr>
			<td align="center" style="width:35%">
				<h1><strong style="font-size:30px">Remove users</strong></h1>
				<form method="post" action="removeUser.php">
					<button class="btn btn-danger" type="sumbit" style="line-height:1.2">
							<strong style="font-size:20px">Remove checked item<strong>
					</button><br><br>
				</form>
				<table class="table" align="center" style="font-size:21px">
					<thead class="listtitle">
						<th><input onclick='checkAll()' type="checkbox" name="dataAll[]" value=""></th>
						<th>User</th><th>Name</th>
					</thead>
					<tbody>
						<?php
							require_once("db.php");	
							
							$username = $_POST['dataAll'];
							if($username){
								foreach($username as $username){
									$temp = explode(",",$username);
									$user = $temp[0];
									$name = $temp[1];
									$db->query("DELETE FROM authenticate where user='$user' and name='$name'");
								}
							}
							$result = $db->query("SELECT user,name FROM authenticate");
							while($column = mysql_fetch_array($result)){				
								echo("<tr style='background-color:rgba(60%, 60%, 80%, 0.7)'>
										<td><input type='checkbox' name='dataAll[]' value='$column[0],$column[1]'></td>
										<td><strong>$column[0]</strong></td>
										<td><strong>$column[1]</strong></td>
									  </tr>
									 ");
							}
							$db->close_db();				
						?>	
					</tbody>
				</table>
			</td>
		  </tr>
		</table>
	</body>
</html>