<?php
   include("config.php");
   
   error_reporting(0);
   
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	
	mysqli_set_charset($db,"utf8");

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$sql = "INSERT INTO users (Ime, Prezime, Email, Dob, MjestoStanovanja, PostanskiBroj, Password_user)
		VALUES ('$_POST[ime]', '$_POST[prezime]', '$_POST[email]', '$_POST[dob]', '$_POST[mjestostanovanja]',
			'$_POST[postbr]', '$_POST[password]')";

		if ($db->query($sql) === TRUE) {
			header("location: index.php");
		} else {
			echo "Error: " . $sql . "<br>" . $db->error;
		}
	}

	$db->close();
?>
 
<div style="width: 80%; margin: 0 auto;">
	<form method = "post" action="" id="registerForm">
		<div class="form-group row">
			<label for="example-text-input" class="col-2 col-form-label">Ime</label>
			<div class="col-10">
				<input class="form-control" type="text" id="ime" name="ime">
				<span class="registerError"><?php echo $imeErr;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="example-search-input" class="col-2 col-form-label">Prezime</label>
			<div class="col-10">
				<input class="form-control" type="text" id="prezime" name="prezime">
				<span class="registerError"><?php echo $prezimeErr;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="example-email-input" class="col-2 col-form-label">Email</label>
			<div class="col-10">
				<input class="form-control" type="email" id="email" name="email">
				<span class="registerError"><?php echo $emailErr;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="example-url-input" class="col-2 col-form-label">Dob</label>
			<div class="col-10">
				<input class="form-control" type="text" id="dob" name="dob">
				<span class="registerError"><?php echo $dobErr;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="example-tel-input" class="col-2 col-form-label">Mjesto stanovanja</label>
			<div class="col-10">
				<input class="form-control" type="text" id="mjestostanovanja" name="mjestostanovanja">
				<span class="registerError"><?php echo $mjestostanovanjaErr;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="example-number-input" class="col-2 col-form-label">Poštanski broj</label>
			<div class="col-10">
				<input class="form-control" type="text" id="postbr" name="postbr">
				<span class="registerError"><?php echo $postbrErr;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="example-password-input" class="col-2 col-form-label">Lozinka</label>
			<div class="col-10">
				<input class="form-control" type="password" id="password" name="password">
				<span class="registerError"><?php echo $passwordErr;?></span>
			</div>
		</div>
		<div class="form-group row">
			<button onclick="validateRegister()" type="submit" class="btn btn-primary" name="submit">Potvrdi</button>
		</div>
	</form>
</div>