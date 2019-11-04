<!DOCTYPE html>
<html >
  <head>
    <title>F2F Meeting Login Page</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="../../img/favicon.ico">
  </head>
  <body>
    <div class="login">
		<h2 class="login-header">Welcome</h2>
		<div class="login-triangle"></div>
		<h2 class="login-header">F2F Meeting</h2>

		<form class="login-container" method="post" action="../authenticate.php">
			<p><input name="user" type="user" placeholder="Username" required></p>
			<p id="p"><input name="password" type="password" placeholder="Password" required></p>
			<p><input style="font-size:20px" type="submit" value="Log in"></p>
		</form>
		<?php
			$login = $_GET['login'];
			if($login) 
				echo ("<script>
						document.getElementById('p');
						p.innerHTML += '<p style=\"color:red\">Wrong username or password!</p>'
					   </script>");
		?>
	</div>
  </body>
</html>
