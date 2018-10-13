<?php

	include("config.php");
   
	error_reporting(0);
	
	session_start();
   
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	
	mysqli_set_charset($db,"utf8");

	//allowed file types
	$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
	 
	if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
		echo "prazno";
		return;
	}
	 
	if (!file_exists('uploads')) {
		mkdir('uploads', 0777);
	}
	 
	move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
	
	$imageName = $_FILES['file']['name'];
	$imageLocation = 'uploads/' . $_FILES['file']['name'];
	$imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
	$imageSize = $_FILES['file']['size'];
	
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
			if($marka == "" || $model == "" || $gorivo == "" || $mjenjac == "" || $pogon == ""
				|| $boja == "" || $cijena == "" || $opis == "" || $imageName == ""){
				
				echo "prazno";
				exit();
				
			}else{
				$row=mysqli_fetch_array($result);
				$id = $row["id"];
				
				$insertsql = "INSERT INTO auti (MarkaAutomobila, ModelAutomobila, Gorivo, Mjenjac, Pogon, Boja, Cijena, Opis, users_id) 
				VALUES ('$marka', '$model', '$gorivo', '$mjenjac', '$pogon','$boja', '$cijena', '$opis', '$id')";
				
				$db->query($insertsql);
				
				$sql = "SELECT id FROM auti WHERE users_id = '".$id."' order by id desc limit 1";
				$result = mysqli_query($db, $sql);
				$row=mysqli_fetch_array($result);
				$autiid = $row["id"];
				
				$insertToSlike = "INSERT INTO slike (NazivSlike, TipSlike, VelicinaSlike, LokacijaSlike, auti_id, users_id)
					values ('$imageName', '$imageExtension', '$imageSize', '$imageLocation', '$autiid', '$id')";
				
				if ($db->query($insertToSlike) === TRUE) {
					echo "dobro";
					exit();
				}
			}
		}
	}
	$db->close();
?>