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
	$marka = $_POST['marka'];
	$model = $_POST['model'];
	$gorivo = $_POST['gorivo'];
	$mjenjac = $_POST['mjenjac'];
	$pogon = $_POST['pogon'];
	$boja = $_POST['boja'];
	$cijena = $_POST['cijena'];
	$opis = $_POST['opis'];
	$datumkreiranja = $_POST['datumkreiranja'];
	$datumupdejt = $_POST['datumupdejt'];
	$audiId = $_POST['idA'];
	$slikeId = $_POST['idS'];
	
	$sql = "update auti
		set MarkaAutomobila = '$marka', ModelAutomobila = '$model', Gorivo = '$gorivo', Mjenjac = '$mjenjac', Pogon = '$pogon',
		Boja = '$boja', Cijena = '$cijena', Opis = '$opis', DatumUpdejta = NOW()
		where id = '$audiId'";
	$db->query($sql);
	
	echo "dobro";
	
	$db->close();
?>












