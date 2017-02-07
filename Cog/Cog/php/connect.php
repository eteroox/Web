<?php
	$db_username = "root";
	$db_password = "";
	$db_hostname = "127.0.0.1:3307"; 
	$db_database = "cog";

	$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
	
	mysqli_query($db_server,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

	if (!$db_server) die("Unable to connect to mysqli: ". mysqli_error());

	mysqli_select_db($db_server,$db_database) or die ("Unable to select database: " . mysqli_error());

?>