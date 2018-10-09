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

<script>
	$(document).ready(function(){
	  $("#signup").click(function(){
		$("#contents").load('register.php');
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
		if (ime=="" || prezime=="" || email=="" || dob=="" || mjestostanovanja=="" || postbr=="" || password=="")
		{
			alert("Sva su polja obavezna pri registraciji");
			return false;
		}
		else{
			$.ajax({
				type: 'POST',  
				url: 'register.php', 
				data: { ime: $('#ime').val(), prezime: $('#prezime').val(), email: $('#email').val(), dob: $('#dob').val(),
					mjestostanovanja: $('#mjestostanovanja').val(), postbr: $('#postbr').val(), password: $('#password').val()},
				success: function(response) {
					alert("Uspješno ste se registrirali. Možete se prijaviti sa novim računom.");
					content.html(response);
				}
			});
		}
		}
		
		$(document).ready(function(){
		  $("#kontakt").click(function(){
			$("#contents").load('kontakt.php');
		  });
		});
	
</script>

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