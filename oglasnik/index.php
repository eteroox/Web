<!DOCTYPE html>

<?php
   include('session.php');
?>

<html>
<head>
<meta charset="UTF-8">
<title>Oglasnik</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script charset="UTF-8">
	$(document).ready(function(){
	  $("#signup").click(function(){
		$("#contents").load('register-form.php');
	  });
	});
	
	$(document).ready(function(){
		$("#login").click(function(){
			$("#contents").load('login.php');
			$('#spanLogin').text(' Login');
			$('#dodajOglas').hide();
			$('#mojiOglasi').hide();
			$('#signupNav').show();
		});
	});
	
	function validateRegister(){
		ime = document.getElementById('ime').value;
		prezime = document.getElementById('prezime').value;
		email = document.getElementById('email').value;
		dob = document.getElementById('dob').value;
		mjestostanovanja = document.getElementById('mjestostanovanja').value;
		postbr = document.getElementById('postbr').value;
		password = document.getElementById('password').value;
		
		$.ajax({
			type: 'post',  
			url: 'register.php', 
			data: { ime: $('#ime').val(), prezime: $('#prezime').val(), email: $('#email').val(), dob: $('#dob').val(),
				mjestostanovanja: $('#mjestostanovanja').val(), postbr: $('#postbr').val(), password: $('#password').val()},
			success: function(response) {
				if(response === "prazno" ){
					alert("Sva polja se moraju ispuniti");
					document.getElementById("imeRegister").innerHTML  = "Ime je obavezno";
					document.getElementById("prezimeRegister").innerHTML  = "Prezime je obavezno";
					document.getElementById("emailRegister").innerHTML  = "Email je obavezan";
					document.getElementById("dobRegister").innerHTML  = "Dob je obavezno";
					document.getElementById("mjestostanovanjaRegister").innerHTML  = "Mjesto stanovanja je obavezno";
					document.getElementById("postbrRegister").innerHTML  = "Poštanski broj je obavezan";
					document.getElementById("passwordRegister").innerHTML  = "Password je obavezan";
				}
				if(response === "dobro"){
					alert("Uspješno ste se registrirali te se sada možete prijaviti na stranicu.");
					window.location.replace("/oglasnik/Web/oglasnik/index.php");
				}
			}
		});
		};
		
	function validateLogin(){
		email = document.getElementById('email').value;
		password = document.getElementById('password').value;
		$.ajax({
			type: 'post',  
			url: 'login.php', 
			data: { email: $('#email').val(), password: $('#password').val()},
			success: function(response) {
				if(response === "error"){
					alert("Prazna polja ili email već postoji");
				}else{
					window.location.replace("/oglasnik/Web/oglasnik/index.php");
				}
			}
		});
		}
		
	$(document).ready(function(){
	  $("#kontakt").click(function(){
		$("#contents").load('kontakt.php');
	  });
	});
	
	function validateKontakti(){
		naslov = document.getElementById('naslov').value;
		email = document.getElementById('email').value;
		objasnjenje = document.getElementById('objasnjenje').value;
		$.ajax({
			type: 'post',  
			url: 'kontakt.php', 
			data: { naslov: $('#naslov').val(), email: $('#email').val(), objasnjenje: $('#objasnjenje').val()},
			success: function(response) {
				if(response === "prazno"){
					alert("Prazna polja se moraju popuniti");
					document.getElementById("naslovError").innerHTML  = "Naslov je obavezan";
					document.getElementById("emailError").innerHTML  = "Email je obavezan";
					document.getElementById("objasnjenjeError").innerHTML  = "Objašnjenje je obavezno";
				}else{
					alert("Poruka je uspješno poslana");
					window.location.replace("/oglasnik/Web/oglasnik/index.php");
				}
			}
		});
		}
	
	$(document).ready(function(){
	  $("#dodajOglas").click(function(){
		$("#contents").load('dodajOglas-form.php');
	  });
	});
	
	function validateDodajOglas(){
		$.ajax({
			type: 'post',  
			url: 'dodajOglas.php',
			data: { marka: $('#marka').val(), model: $('#model').val(), gorivo: $('#gorivo').val() , mjenjac: $('#mjenjac').val()
				, pogon: $('#pogon').val() , boja: $('#boja').val() , cijena: $('#cijena').val() , opis: $('#opis').val()},
			success: function(response) {
				alert(response);
			}
		});
		}
</script>

<style>
span.errorRegister{
	color:red;
}
</style>

</head>

<body>
<main>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="index.php">Oglasnik</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="active"><a href="index.php">Pretraži aute</a></li>
		  <li id="dodajOglas" <?php if (!isset($_SESSION['login_email'])){?> style="display:none"<?php } ?> ><a href="#">Dodaj oglas</a></li>
		  <li id="mojiOglasi" <?php if (!isset($_SESSION['login_email'])){?> style="display:none"<?php } ?> ><a href="#">Moji oglasi</a></li>
		  <li><a href="#" id="kontakt">Kontakt</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		  <li id="signupNav" <?php if (isset($_SESSION['login_email'])){?> style="display:none"<?php } ?> ><a href="#" id="signup"><span class="glyphicon glyphicon-user"> SignUp </span></a></li>
		  <li><a href="#" id="login"><span class="glyphicon glyphicon-log-in" id="spanLogin">
			<?php 
				if(isset($_SESSION['login_email'])){
					echo $_SESSION['login_email'] . " - Logout";
				}
				else{
					echo "Login";
				}
			?>
			</span></a></li>
		</ul>
	  </div>
	</nav>
	
	<section>
		<div class="contentWrapper" id="contents"></div>
	</section>
</main>
</body>

</html>