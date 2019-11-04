<?php 
	require_once("db.php");	

	$login_flag = 0; //If flag is equal 1, request is from login page
	if($_COOKIE['user'] && $_COOKIE['password']){
		$user = $_COOKIE['user'];
		$password = $_COOKIE['password'];
	}else if(isset($_POST['user'])){
		$user = $_POST['user'];
		$password = md5($_POST['password']);
		$login_flag = 1;
	}
	$result = $db->query("SELECT * FROM authenticate where user='$user' and password='$password'");

	if($column=mysql_fetch_array($result)){ //User and password is correct	
		if($login_flag){
			setcookie("user",$user,time()+24*60*60,"/f2f");
			setcookie("password",$password,time()+24*60*60,"/f2f");
			setcookie("name",$column[2],time()+24*60*60,"/f2f");
			if($user=="admin") header("Location: admin.php");
			else header("Location: .");
		}
	}else header("Location: login/index.php?login=$login_flag");
	$db->close_db();
?>