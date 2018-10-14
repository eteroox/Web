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
	
	$sql = "SELECT LokacijaSlike, MarkaAutomobila, ModelAutomobila, Gorivo, Mjenjac, Pogon, Boja, Cijena, Opis, DatumKreiranja, DatumUpdejta, 
		s.id as idS, a.id as idA
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
		<form method = "post" action="" id="mojiOglasiForm">
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Marka automobila: </span>
				<input class="form-control" type="text" id="marka" name="marka" value="<?php echo $row["MarkaAutomobila"]; ?>">
			</div>
		</div>
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Model automobila: </span>
				<input class="form-control" type="text" id="model" name="model" value="<?php echo $row["ModelAutomobila"]; ?>">
			</div>
		</div>
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Gorivo: </span>
				<input class="form-control" type="text" id="gorivo" name="gorivo" value="<?php echo $row["Gorivo"]; ?>">
			</div>
		</div>
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Mjenjač: </span>
				<input class="form-control" type="text" id="mjenjac" name="mjenjac" value="<?php echo $row["Mjenjac"]; ?>">
			</div>
		</div>
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Pogon: </span> 
				<input class="form-control" type="text" id="pogon" name="pogon" value="<?php echo $row["Pogon"]; ?>">
			</div>
		</div>
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Boja: </span>
				<input class="form-control" type="text" id="boja" name="boja" value="<?php echo $row["Boja"]; ?>">
			</div>
		</div>
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Cijena: </span>
				<input class="form-control" type="text" id="cijena" name="cijena" value="<?php echo $row["Cijena"]; ?>">
			</div>
		</div>
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Datum objave: </span>
				<input disabled class="form-control" type="text" id="datumkreiranja" name="datumkreiranja" value="<?php echo $row["DatumKreiranja"]; ?>">
			</div>
		</div>
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Datum promjene: </span>
				<input disabled class="form-control" type="text" id="datumupdejt" name="datumupdejt" value="<?php echo $row["DatumUpdejta"]; ?>">
			</div>
		</div>
		<div>
			<div class="col-xs-3">
				<span class="carMojiSpan">Opis: </span>
				<textarea class="form-control" rows="10" id="opis" name="opis"><?php echo $row["Opis"]; ?></textarea>
			</div>
		</div>
			<span style="display:none;" id="idS" name="idS"><?php echo $row["idS"]; ?> </span>
			<span style="display:none;" id="idA" name="idA"><?php echo $row["idA"]; ?> </span>
		<div style="float:none;clear:both;"></div>
		<div class="form-group row">
			<button onClick="funDel()" type="button" class="btn btn-danger" name="obrisi">Obriši</button>
			<button onClick="funUpd()" type="button" class="btn btn-primary" name="promjeni">Promijeni</button>
		</div>
		</form>
	</div>
	<div style="float:none;clear:both;"></div>
	<hr style="height:1px;border:none;color:#333;background-color:#333;">
<?php } ?>
</div>




















