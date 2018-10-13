<?php
	include("config.php");
   
	error_reporting(0);
	
	session_start();
	
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	
	$email = $_SESSION['login_email'];
	$audiId = $_POST['idA'];
	$slikeId = $_POST['idS'];
	
	$sql = "delete from slike where auti_id = '".$audiId."' and id = '".$slikeId."' ";
	$db->query($sql);
	
	$sql = "delete from auti where id = '".$audiId."' ";
	$db->query($sql);
	
	$db->close();

?>