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
				if(response === "postoji"){
					document.getElementById("emailRegister").innerHTML  = "Email se već koristi";
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
					document.getElementById("emailLogin").innerHTML  = "Email je obavezan";
					document.getElementById("passwordLogin").innerHTML  = "Password je obavezan";
				}
				else if(response === "kriviEmail"){
					document.getElementById("emailLogin").innerHTML  = "Email se već koristi";
				}
				else{
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
	
	function validateDodajOglas(event){	
		var file_data = $('.image').prop('files')[0];
		var form_data = new FormData();                  
        form_data.append('marka', $('#marka').val());
		form_data.append('model', $('#model').val());
		form_data.append('gorivo', $('#gorivo').val());
		form_data.append('mjenjac', $('#mjenjac').val());
		form_data.append('pogon', $('#pogon').val());
		form_data.append('boja', $('#boja').val());
		form_data.append('cijena', $('#cijena').val());
		form_data.append('opis', $('#opis').val());
		form_data.append('file', file_data);
		
		$.ajax({
			type: 'post',  
			url: 'dodajOglas.php',
			processData: false,
			contentType: false,
			cache: false,
			data: form_data,
			success: function(response) {
				if(response === "prazno"){
					document.getElementById("markaOglas").innerHTML  = "Marka je obavezna";
					document.getElementById("modelOglas").innerHTML  = "Model je obavezan";
					document.getElementById("gorivoOglas").innerHTML  = "Gorivo je obavezano";
					document.getElementById("mjenjacOglas").innerHTML  = "Mjenjac je obavezan";
					document.getElementById("pogonOglas").innerHTML  = "Pogon je obavezan";
					document.getElementById("bojaOglas").innerHTML  = "Boja je obavezna";
					document.getElementById("cijenaOglas").innerHTML  = "Cijena je obavezna";
					document.getElementById("opisOglas").innerHTML  = "Opis je obavezan";
				}
				else{
					alert("Oglas uspješno napravljen");
					window.location.replace("/oglasnik/Web/oglasnik/index.php");
				}
			}
		});
		}
		
		$(document).ready(function(){
		  $("#mojiOglasi").click(function(){
			$("#contents").load('mojiOglasi-form.php');
		  });
		});
		
		function funDel(){
			idS = document.getElementById('idS').innerHTML;
			idA = document.getElementById('idA').innerHTML;
			$.ajax({
			type: 'post',  
			url: 'obrisiOglas.php',
			cache: false,
			data: {idS: idS, idA: idA},
			success: function(response) {
				alert("Oglas uspješno obrisan");
				window.location.replace("/oglasnik/Web/oglasnik/index.php");
			}
		});
		}
		
		function funUpd(){
		var form_data = new FormData();
		idS = document.getElementById('idS').innerHTML;
		idA = document.getElementById('idA').innerHTML;
        form_data.append('marka', $('#marka').val());
		form_data.append('model', $('#model').val());
		form_data.append('gorivo', $('#gorivo').val());
		form_data.append('mjenjac', $('#mjenjac').val());
		form_data.append('pogon', $('#pogon').val());
		form_data.append('boja', $('#boja').val());
		form_data.append('cijena', $('#cijena').val());
		form_data.append('opis', $('#opis').val());
		form_data.append('idS', idS);
		form_data.append('idA', idA);
		
		$.ajax({
			type: 'post',  
			url: 'promjeniOglas.php',
			processData: false,
			contentType: false,
			cache: false,
			data: form_data,
			success: function(response) {
				alert("Oglas uspješno promjenjen!");
				window.location.replace("/oglasnik/Web/oglasnik/index.php");
			}
		});
		}
		
		$(document).ready(function(){
		  $("#pretraziOglase").click(function(){
			$("#contents").load('search-form.php');
		  });
		});
		
		function searchOglasi(){	
			marka = $('#marka').val();
			model = $('#model').val();
			gorivo = $('#gorivo').val();
			mjenjac = $('#mjenjac').val();
			pogon = $('#pogon').val();
			boja = $('#boja').val();
			cijenaOd = $('#cijenaOd').val();
			cijenaDo = $('#cijenaDo').val();
			
		$.ajax({
			type: 'post',  
			url: 'search.php',
			data: {marka: marka, model: model, gorivo: gorivo, mjenjac: mjenjac, pogon: pogon, boja: boja, cijenaOd: cijenaOd,
				cijenaDo: cijenaDo},
			success: function(response) {
				$.each(JSON.parse(response), function (index, value) {
					console.log(value);
					console.log(value.Gorivo);
					document.getElementById('slikaOglasi').src = value.LokacijaSlike;
					document.getElementById("searchResultId").style.display = "block";
				});
			}
		});
		}
</script>

<style>
body {
	background-image: url('slike/vitara.png');
	background-attachment: fixed;
	background-repeat: no-repeat;
}
div.contentWrapper{
	background: rgb(255, 255, 255, .9);
}
span.errorRegister{
	color:red;
}
span.carMojiSpan{
	color:red;
}
img.imageMojiOglasi{
	width:50%; 
	float:left;
}
.searchResult{
	display: none;
}

@media screen and (max-width: 1000px) {
  img.imageMojiOglasi {
    width: 100%;
  }
  .col-xs-3{
	width: 100% !important;
	}
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
		  <li id="pretraziOglase" class="active"><a href="#">Pretraži aute</a></li>
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
		<div class="contentWrapper" id="contents">
			<div style="width:50%; margin:0 auto"><p style="font-size: 50px;">OGLASNIK</p></div>
		</div>
		<div class="searchResult" id="searchResultId">
			<img id="slikaOglasi" src="//:0"/>
		</div>
	</section>
</main>
</body>

</html>