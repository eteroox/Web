<?php

	include("config.php");
   
	error_reporting(0);
	
	session_start();
   
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	
	mysqli_set_charset($db,"utf8");
	
	$email = $_SESSION['login_email'];
	
	$sql = "SELECT id FROM users WHERE Email = '".$email."'";
	$result = mysqli_query($db, $sql);
	
	$marka = $_POST['marka'];
	$model = $_POST['model'];
	$gorivo = $_POST['gorivo'];
	$mjenjac = $_POST['mjenjac'];
	$pogon = $_POST['pogon'];
	$boja = $_POST['boja'];
	$cijena = $_POST['cijena'];
	$opis = $_POST['opis'];
	
	if ( $result === false ) {
	  echo "error";
	  exit();
	}
	else {
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if($_POST['marka'] == "" || $_POST['model'] = "" || $_POST['gorivo'] = "" || $_POST['mjenjac'] = "" || $_POST['pogon'] = ""
				|| $_POST['boja'] = "" || $_POST['cijena'] = "" || $_POST['opis'] = ""){
				
				echo "prazno";
				exit();
				
			}else{
				$row=mysqli_fetch_array($result);
				$id = $row["id"];
				
				$insertsql = "INSERT INTO auti (MarkaAutomobila, ModelAutomobila, Gorivo, Mjenjac, Pogon, Boja, Cijena, Opis, users_id) 
				VALUES ('$marka', '$model', '$gorivo', '$mjenjac', '$pogon','$boja', '$cijena', '$opis', '$id')";
				if ($db->query($insertsql) === TRUE) {
					echo "dobro";
					exit();
				}
			}
		}
	}
	$db->close();
?>