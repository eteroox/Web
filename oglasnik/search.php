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
	$cijenaOd = $_POST['cijenaOd'];
	$cijenaDo = $_POST['cijenaDo'];
	
	$sql = "SELECT LokacijaSlike, MarkaAutomobila, ModelAutomobila, Gorivo, Mjenjac, Pogon, Boja, Cijena, Opis, 
			CONCAT(ime, ' ',prezime) AS Korisnik,
			MjestoStanovanja AS Mjesto,
			PostanskiBroj AS Postbr,
			u.Email as Email FROM users u
			JOIN slike s ON u.id = s.users_id
			JOIN auti a ON s.auti_id = a.id
			where MarkaAutomobila like '%{$marka}%'
			and ModelAutomobila like '%{$model}%'
			and Gorivo like '%{$model}%'
			and Mjenjac like '%{$model}%'
			and Pogon like '%{$model}%'
			and Boja like '%{$model}%'
			and Cijena between ({$cijenaOd}) and ({$cijenaDo})
			ORDER BY a.id DESC";
			
	$result = mysqli_query($db, $sql);
	
	$array = null;
	$auti = null;

	while($row = mysqli_fetch_array($result)){
		$array = array(
                'MarkaAutomobila' => $row["MarkaAutomobila"],
				'ModelAutomobila' => $row["ModelAutomobila"],
				'LokacijaSlike' => $row["LokacijaSlike"],
				'Gorivo' => $row["Gorivo"],
				'Mjenjac' => $row["Mjenjac"],
				'Pogon' => $row["Pogon"],
				'Boja' => $row["Boja"],
				'Cijena' => $row["Cijena"],
				'Opis' => $row["Opis"],
				'Korisnik' => $row["Korisnik"],
				'Mjesto' => $row["Mjesto"],
				'Postbr' => $row["Postbr"],
				'Email' => $row["Email"],
                );
		$auti[] = $array;
	}
	
	echo json_encode($auti);
	
	exit();

?>

<!--$variable = <<<XYZ
<html>
<body>

</body>
</html>
XYZ;
echo $variable;-->