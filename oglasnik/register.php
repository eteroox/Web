<?php
   include("config.php");
   
   error_reporting(0);
   
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	
	mysqli_set_charset($db,"utf8");
	
	$email = $_POST[email];
	
	$emailsql = "SELECT email FROM users WHERE Email = '$email'";
	$row_cnt = $emailsql->num_rows;

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_POST[ime] == "" || $_POST[prezime] == "" || $_POST[email] == "" || $_POST[dob] == "" || $_POST[mjestostanovanja] == "" 
			|| $_POST[postbr] == "" || $_POST[password] == "")
		{
			echo "Sva polja se moraju ispuniti";
			exit();
		}
		elseif($row_cnt > 0){
			echo "Email već postoji";
			exit();
		}
		else{
			$sql = "INSERT INTO users (Ime, Prezime, Email, Dob, MjestoStanovanja, PostanskiBroj, Password_user)
				VALUES ('$_POST[ime]', '$_POST[prezime]', '$_POST[email]', '$_POST[dob]', '$_POST[mjestostanovanja]',
				'$_POST[postbr]', '$_POST[password]')";
			echo "Uspješno ste se registrirali te se sada možete prijaviti na stranicu.";
		}
	}

	$db->close();
?>