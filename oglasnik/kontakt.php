<?php
	include("config.php");
	error_reporting(0);
	
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	
	mysqli_set_charset($db,"utf8");
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_POST[naslov] == "" || $_POST[email] == "" || $_POST[objasnjenje] == "" )
		{
			echo "prazno";
			exit();
		}
		else{
			$sql = "INSERT INTO kontakti (Naslov, EmailKorisnika, Objasnjenje)
				VALUES ('$_POST[naslov]', '$_POST[email]', '$_POST[objasnjenje]')";
			if ($db->query($sql) === TRUE) {
				echo "dobro";
			exit();
			}
		}
	}

?>

<div style="width: 80%; margin: 0 auto;">
	<h2 style="text-align:center"> Ako imate neki prijedlog ili zamjerku možete nas kontaktirati na sljedećoj formi: </h2>
	<form action = "" method = "post">
		  <div class="form-group row" style = "margin-top:10px">
			<label>Naslov</label>
			<input type="text" class="form-control" name="naslov" id="naslov" placeholder="Unesite naslov">
			<span class="errorRegister" id="naslovError"></span>
		  </div>
		  <div class="form-group row" style = "margin-top:10px">
			<label>Vaš email</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Unesite svoj email">
			<span class="errorRegister" id="emailError"></span>
		  </div>
		  <div class="form-group row" style = "margin-top:10px">
			<label>Objašnjenje</label>
			<textarea class="form-control" rows="10" name="objasnjenje" id="objasnjenje" placeholder="Unesite objašnjenje"></textarea>
			<span class="errorRegister" id="objasnjenjeError"></span>
		  </div>
		  </br>
		  <div class="form-group row" style = "margin-top:10px">
			<button onclick="validateKontakti()" type="button" class="btn btn-primary">Submit</button>
		  </div>
		</div>
	</form>
</div>