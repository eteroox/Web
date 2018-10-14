<!DOCTYPE html>

<?php
   include('session.php');
?>

<html>
<head>
<meta charset="UTF-8">
<title>Oglasnik</title>

<!--
LightBox credentials:
Licence location: https://raw.githubusercontent.com/lokesh/lightbox2/master/LICENSE
Creator: Lokesh Dhakar
HomePage: https://lokeshdhakar.com/projects/lightbox2/#license
-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="lightbox/lightbox.css" rel="stylesheet">

<script charset="UTF-8">
	$(document).ready(function(){
	document.getElementById("searchOutside").innerHTML = "";
	  $("#signup").click(function(){
		$("#contents").load('register-form.php');
	  });
	});
	
	$(document).ready(function(){
	document.getElementById("searchOutside").innerHTML = "";
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
					document.getElementById("emailLogin").innerHTML  = "Krivi email";
				}
				else if(response === "lospas"){
					document.getElementById("passwordLogin").innerHTML  = "Krivi password!";
				}
				else{
					window.location.replace("/oglasnik/Web/oglasnik/index.php");
				}
			}
		});
		}
		
	$(document).ready(function(){
	document.getElementById("searchOutside").innerHTML = "";
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
	document.getElementById("searchOutside").innerHTML = "";
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
		document.getElementById("searchOutside").innerHTML = "";
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
		document.getElementById("searchOutside").innerHTML = "";
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
				var i = 1;
				document.getElementById("searchOutside").innerHTML = "";
				$.each(JSON.parse(response), function (index, value) {
					console.log(value);
					console.log(value.Gorivo);
					/*document.getElementById('slikaOglasi').src = value.LokacijaSlike;
					document.getElementById("searchResultId").style.display = "block";*/
					
					var iDiv = document.createElement('div');
					iDiv.id = 'block'+i;
					iDiv.className = 'searchResult';
					iDiv.style.padding = '5px';
					iDiv.style.width = '60%';
					iDiv.style.float = 'left';
					document.getElementById("searchOutside").appendChild(iDiv);
					
					var iDiv2 = document.createElement('div');
					iDiv2.id = '2block'+i;
					iDiv2.className = 'searchResult';
					iDiv2.style.padding = '5px';
					iDiv2.style.width = '30%';
					iDiv2.style.float = 'left';
					document.getElementById("searchOutside").appendChild(iDiv2);
					
					var anchor = document.createElement('a');
					anchor.setAttribute("data-lightbox", "slike");
					anchor.href = value.LokacijaSlike;
					anchor.id = 'anchor'+i;
					document.getElementById(iDiv.id).appendChild(anchor);
					
					var elem = document.createElement("img");
					elem.setAttribute("src", value.LokacijaSlike);
					//elem.setAttribute("height", "600px");
					elem.setAttribute("width", "100%");
					elem.setAttribute("alt", value.MarkaAutomobila);
					elem.style.border = '2px solid black';
					elem.style.margin = '5px';
					elem.className = 'slikaSearch';
					elem.style.float = 'left';
					document.getElementById(anchor.id).appendChild(elem);
					
					var infoKontakt = document.createElement("h1");
					infoKontakt.innerHTML = 'Kontakt informacije: ';
					infoKontakt.style.fontWeight = 'bold';
					infoKontakt.style.fontsize = "20px";
					document.getElementById(iDiv.id).appendChild(infoKontakt);
					
					var infoAuto = document.createElement("h1");
					infoAuto.innerHTML = 'Informacije o autu: ';
					infoAuto.style.fontWeight = 'bold';
					infoAuto.style.fontsize = "20px";
					document.getElementById(iDiv2.id).appendChild(infoAuto);
					
					var markaCrveno = document.createElement("span");
					markaCrveno.style.color = "red";
					markaCrveno.innerHTML = 'Marka automobila: ';
					markaCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv2.id).appendChild(markaCrveno);
					
					var markaAutomobila = document.createElement("p");
					markaAutomobila.innerHTML = value.MarkaAutomobila;
					markaAutomobila.style.textTransform = "uppercase";
					markaAutomobila.style.fontFamily = "Lucida Console";
					markaAutomobila.style.fontsize = "15px";
					document.getElementById(iDiv2.id).appendChild(markaAutomobila);
					
					var modelCrveno = document.createElement("span");
					modelCrveno.style.color = "red";
					modelCrveno.innerHTML = 'Model automobila: ';
					modelCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv2.id).appendChild(modelCrveno);
					
					var modelAutomobila = document.createElement("p");
					modelAutomobila.innerHTML = value.ModelAutomobila;
					modelAutomobila.style.textTransform = "uppercase";
					modelAutomobila.style.fontFamily = "Lucida Console";
					modelAutomobila.style.fontsize = "15px";
					document.getElementById(iDiv2.id).appendChild(modelAutomobila);
					
					var gorivoCrveno = document.createElement("span");
					gorivoCrveno.style.color = "red";
					gorivoCrveno.innerHTML = 'Gorivo: ';
					gorivoCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv2.id).appendChild(gorivoCrveno);
					
					var gorivo = document.createElement("p");
					gorivo.innerHTML = value.Gorivo;
					gorivo.style.textTransform = "uppercase";
					gorivo.style.fontFamily = "Lucida Console";
					gorivo.style.fontsize = "15px";
					document.getElementById(iDiv2.id).appendChild(gorivo);
					
					var mjenjacCrveno = document.createElement("span");
					mjenjacCrveno.style.color = "red";
					mjenjacCrveno.innerHTML = 'Mjenjac: ';
					mjenjacCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv2.id).appendChild(mjenjacCrveno);
					
					var mjenjac = document.createElement("p");
					mjenjac.innerHTML = value.Mjenjac;
					mjenjac.style.textTransform = "uppercase";
					mjenjac.style.fontFamily = "Lucida Console";
					mjenjac.style.fontsize = "15px";
					document.getElementById(iDiv2.id).appendChild(mjenjac);
					
					var pogonCrveno = document.createElement("span");
					pogonCrveno.style.color = "red";
					pogonCrveno.innerHTML = 'Pogon: ';
					pogonCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv2.id).appendChild(pogonCrveno);
					
					var pogon = document.createElement("p");
					pogon.innerHTML = value.Pogon;
					pogon.style.textTransform = "uppercase";
					pogon.style.fontFamily = "Lucida Console";
					pogon.style.fontsize = "15px";
					document.getElementById(iDiv2.id).appendChild(pogon);
					
					var bojaCrveno = document.createElement("span");
					bojaCrveno.style.color = "red";
					bojaCrveno.innerHTML = 'Boja: ';
					bojaCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv2.id).appendChild(bojaCrveno);
					
					var boja = document.createElement("p");
					boja.innerHTML = value.Boja;
					boja.style.textTransform = "uppercase";
					boja.style.fontFamily = "Lucida Console";
					boja.style.fontsize = "15px";
					document.getElementById(iDiv2.id).appendChild(boja);
					
					var cijenaCrveno = document.createElement("span");
					cijenaCrveno.style.color = "red";
					cijenaCrveno.innerHTML = 'Cijena: ';
					cijenaCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv2.id).appendChild(cijenaCrveno);
					
					var cijena = document.createElement("p");
					cijena.innerHTML = value.Cijena;
					cijena.style.textTransform = "uppercase";
					cijena.style.fontFamily = "Lucida Console";
					cijena.style.fontsize = "15px";
					document.getElementById(iDiv2.id).appendChild(cijena);
					
					var korisnikCrveno = document.createElement("span");
					korisnikCrveno.style.color = "red";
					korisnikCrveno.innerHTML = 'Kontakt ime: ';
					korisnikCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv.id).appendChild(korisnikCrveno);
					
					var korisnik = document.createElement("p");
					korisnik.innerHTML = value.Korisnik;
					korisnik.style.textTransform = "uppercase";
					korisnik.style.fontFamily = "Lucida Console";
					korisnik.style.fontsize = "15px";
					document.getElementById(iDiv.id).appendChild(korisnik);
					
					var mjestoCrveno = document.createElement("span");
					mjestoCrveno.style.color = "red";
					mjestoCrveno.innerHTML = 'Lokacija vozila: ';
					mjestoCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv.id).appendChild(mjestoCrveno);
					
					var mjesto = document.createElement("p");
					mjesto.innerHTML = value.Mjesto;
					mjesto.style.textTransform = "uppercase";
					mjesto.style.fontFamily = "Lucida Console";
					mjesto.style.fontsize = "15px";
					document.getElementById(iDiv.id).appendChild(mjesto);
					
					var postbrCrveno = document.createElement("span");
					postbrCrveno.style.color = "red";
					postbrCrveno.innerHTML = 'Poštanski broj: ';
					postbrCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv.id).appendChild(postbrCrveno);
					
					var postbr = document.createElement("p");
					postbr.innerHTML = value.Postbr;
					postbr.style.textTransform = "uppercase";
					postbr.style.fontFamily = "Lucida Console";
					postbr.style.fontsize = "15px";
					document.getElementById(iDiv.id).appendChild(postbr);
					
					var emailCrveno = document.createElement("span");
					emailCrveno.style.color = "red";
					emailCrveno.innerHTML = 'Email: ';
					emailCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv.id).appendChild(emailCrveno);
					
					var email = document.createElement("p");
					email.innerHTML = value.Email;
					email.style.textTransform = "uppercase";
					email.style.fontFamily = "Lucida Console";
					email.style.fontsize = "15px";
					document.getElementById(iDiv.id).appendChild(email);
					
					var opisCrveno = document.createElement("span");
					opisCrveno.style.color = "red";
					opisCrveno.innerHTML = 'Opis: ';
					opisCrveno.style.fontSize  = "15px";
					document.getElementById(iDiv2.id).appendChild(opisCrveno);
					
					var opis = document.createElement("p");
					opis.innerHTML = value.Opis;
					opis.style.textTransform = "uppercase";
					opis.style.fontFamily = "Lucida Console";
					opis.style.fontsize = "15px";
					document.getElementById(iDiv2.id).appendChild(opis);
					
					
					var divNONE = document.createElement("div");
					divNONE.style.clear = "both";
					document.getElementById("searchOutside").appendChild(divNONE);
					
					var hr = document.createElement("hr");
					hr.style.border = "2px solid black";
					document.getElementById("searchOutside").appendChild(hr);
					
					i = i+1;
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
#searchOutside{
	background: rgb(255, 255, 255, .9);
}
.searchResult{
	width: 100%;
	margin: 0 auto;
}

@media screen and (max-width: 1000px) {
  img.imageMojiOglasi {
    width: 100%;
  }
  .col-xs-3{
	width: 100% !important;
	}
	.slikaSearch{
		width: 100%;
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
		<div id="searchOutside">
		
		</div>
	</section>
</main>

<script src="lightbox/lightbox.js"></script>
</body>

</html>