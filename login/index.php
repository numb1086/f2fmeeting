<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<title>F2F Meeting登入頁面</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="../img/favicon.ico">
</head>
<body>
	<div class="login">
		<h2 class="login-header">歡迎使用</h2>
		<div class="login-triangle"></div>
		<h2 class="login-header">F2F Meeting</h2>
		
		<form class="login-container" method="post" action="../authenticate.php">
			<p><input name="user" type="user" placeholder="使用者名稱" required></p>
			<p id="p"><input name="password" type="Password" placeholder="請輸入密碼" required></p>
			<p><input style="font-size:20px" type="submit" value="登入"></p>
		</form>
		<font size="6" color="white" style="line-height:100px">
			<center><a style="text-decoration:none;color:white" href="../eng/login">English version▼</a></center>
		</font>
		<?php
			$login = $_GET['login'];
			if($login) 
				echo ("<script>
						document.getElementById('p');
						p.innerHTML += '<p style=\"color:red\">使用者名稱或密碼錯誤!</p>'
					   </script>");
		?>
	</div>
</body>
</html>
