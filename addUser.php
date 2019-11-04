<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
	<head>
	<body class="body">
		<?php
			require_once("db.php");
					
			$user = $_POST['user'];
			$password = md5($_POST['password']);
			$name = $_POST['name'];
		
			$result = $db->query("SELECT * FROM authenticate where user='$user'");
			$column = mysql_fetch_array($result);
			if($column[0]==""){
				if($user && $password && $name){
					$result = $db->query("INSERT INTO authenticate values ('$user','$password','$name')");
					if($result){
						echo "<script>alert('Succeed!');
							  parent.document.getElementById('iframe2').src='removeUser.php';
							  </script>";
					}else echo "<script>alert('Fail!')</script>";
				}
			}else{
				echo "<script>
						alert('This user has been added, please change it!');
					  </script>";
			}
			$db->close_db();
		?>
		<div class="module">
			<form class="form" method="post" action="addUser.php">
				<center>
					<strong style="margin-top:10%;font-size:32px">Create new user</strong>
				</center><br>
				<input type="text" name="user" placeholder="User" class="textbox" required/>
				<input type="password" name="password" placeholder="Password" class="textbox" required/>
				<input type="text" name="name" placeholder="Name" class="textbox"  required/>
				<button type="sumbit" class="button">Create</button>
			</form>
		</div>
	</body>
</html>
