<!DOCTYPE html>
<html style="height:100%">
<head>
	<title>F2F Meeting Time Scheduler(Admin)</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta http-equiv="cache-control" content="no-cache">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<script type="text/javascript" src="js/scripts.min.js"></script>
</head>
<body>
	<?php
		require_once("logout.php");
		require_once("authenticate.php");
		if($_COOKIE['user']!="admin"){
			echo "<script>alert('Permission denial!');
				  window.location='.';</script>";
		}
	?>
	<script>randomBackGround()</script>
	<div class="container">
		<table align="center">
		  <tr>
			<div class="title" align="center">
                <font size="6" color="white" style="line-height:50px">
					<a style="float:left;text-decoration:none;color:white" href="admin.php?logout=1">←Log out</a>
                    <strong>F2F Meeting Time Scheduler(Admin)</strong>
                </font>
        	</div>	
		  </tr>
			<td style="width:50%">
			  <div class="column-border" align="center">
				<iframe id="iframe" src="addUser.php"></iframe>
			  </div>
			</td>
			<td style="width:50%">
			  <div class="column-border" align="center">
				<iframe id="iframe2" src="removeUser.php"></iframe>
			  </div>
			</td>
		  </tr>
		</table>
	</div>
</body>
</html>
