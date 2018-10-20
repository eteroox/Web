<?php
	include("config.php");
	session_start();
	
	$_SESSION['login_email'] = $_POST['email'];
	$_SESSION['login_name'] = $_POST['name'];
	$_SESSION['login_type'] = "face";
	
	echo $_POST['email'];
	
?>