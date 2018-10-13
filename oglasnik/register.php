<?php
   include("config.php");
   
   error_reporting(0);
   
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	
	mysqli_set_charset($db,"utf8");
	
	$email = $_POST['email'];
	
	$emailsql = "SELECT email FROM users WHERE Email = '".$email."'";
	$emailresult = mysqli_query($db, $emailsql);
	$row=mysqli_fetch_array($emailresult);
	$foundEmail = $row["email"];
	
	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$mjestostanovanja = $_POST['mjestostanovanja'];
	$postbr = $_POST['postbr'];
	$password = $_POST['password'];

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if($foundEmail != ""){
			echo "postoji";
			exit();
		}
		if($ime == "" || $prezime == "" || $email == "" || $dob == "" || $mjestostanovanja == "" 
			|| $postbr == "" || $password == "")
		{
			echo "prazno";
			exit();
		}
		else{
			$sql = "INSERT INTO users (Ime, Prezime, Email, Dob, MjestoStanovanja, PostanskiBroj, Password_user)
				VALUES ('$ime', '$prezime', '$email', '$dob', '$mjestostanovanja','$postbr', '$password')";
			if ($db->query($sql) === TRUE) {
				echo "dobro";
				exit();
			}
		}
	}

	$db->close();
?>