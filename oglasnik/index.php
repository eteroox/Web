<!DOCTYPE html>

<?php
   include('session.php');
?>

<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>

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
		});
	});
	
	$(document).ready(function(){
		var values = $(this).serialize();
		$.ajax({
			url: "login.php",
			type: "post",
			data: values ,
			success: function (response) {
				$('#spanLogin').text(' Login');
				$('#dodajOglas').show();
				$('#mojiOglasi').show();               
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}


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
		  <li><a href="#">Kontakt</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		  <li id="signupNav"><a href="#" id="signup"><span class="glyphicon glyphicon-user"> SignUp </span></a></li>
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