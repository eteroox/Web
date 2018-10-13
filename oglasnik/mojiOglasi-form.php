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
	
	$sql = "SELECT LokacijaSlike, MarkaAutomobila, ModelAutomobila, Gorivo, Mjenjac, Pogon, Boja, Cijena, Opis, DatumKreiranja, DatumUpdejta 
		FROM users u
		JOIN slike s ON u.id = s.users_id
		JOIN auti a ON s.auti_id = a.id
		where u.Email = '".$email."'
		ORDER BY a.id DESC";
	$result = mysqli_query($db, $sql);
?>

<div style="width: 80%; margin: 0 auto;">
<?php while ($row = mysqli_fetch_array($result)){ ?>
	<div>
		<img class="imageMojiOglasi" src="<?php echo $row["LokacijaSlike"]; ?>" alt="<?php echo $row["LokacijaSlike"]; ?>"/>
		<label><span class="carMojiSpan">Marka automobila: </span> <?php echo $row["MarkaAutomobila"]; ?> </label></br>
		<label><span class="carMojiSpan">Model automobila: </span> <?php echo $row["ModelAutomobila"]; ?> </label></br>
		<label><span class="carMojiSpan">Gorivo: </span> <?php echo $row["Gorivo"]; ?> </label></br>
		<label><span class="carMojiSpan">Mjenjač: </span> <?php echo $row["Mjenjac"]; ?> </label></br>
		<label><span class="carMojiSpan">Pogon: </span> <?php echo $row["Pogon"]; ?> </label></br>
		<label><span class="carMojiSpan">Boja: </span> <?php echo $row["Boja"]; ?> </label></br>
		<label><span class="carMojiSpan">Opis: </span> <?php echo $row["Opis"]; ?> </label></br>
		<label><span class="carMojiSpan">Cijena: </span> <?php echo $row["Cijena"]; ?> Kn</label></br>
		<label><span class="carMojiSpan">Datum objave: </span> <?php echo $row["DatumKreiranja"]; ?> </label></br>
		<label><span class="carMojiSpan">Datum promjene: </span> <?php echo $row["DatumUpdejta"]; ?> </label></br>
	</div>
	<div style="float:none;clear:both;"></div>
	<hr style="height:1px;border:none;color:#333;background-color:#333;">
<?php } ?>
</div>




















