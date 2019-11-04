<?php
	if($_GET['logout']){
		setcookie("user","",time()-24*60*60,"/f2f");
		setcookie("password","",time()-24*60*60,"/f2f");
		setcookie("name","",time()-24*60*60,"/f2f");
		header("Location: .");
	}
?>