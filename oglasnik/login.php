<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE Email = '$email' and Password_user = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $email and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_email'] = $email;
         
         header("location: index.php");
      }else {
         $error = "Your Email or Password is invalid";
      }
   }
?>
<html>
	<head>
	  <title>Login Page</title>
	  
	  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	  
	  <style type = "text/css">
		 main {
			margin:0 auto;
			width: 80%;
		 }
		 
	  </style>
	  
	</head>
   
	<body>
	
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">Oglasnik</a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Pretraži aute</a></li>
			  <li><a href="#">Dodaj oglas</a></li>
			  <li><a href="#">Kontakt</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		  </div>
		</nav>
	
		<main>
			<form action = "" method = "post" style="margin: 0 auto; width:80%">
			  <div class="col-xs-10" style = "margin-top:10px">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="col-xs-10">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  </br>
			  <div class="col-xs-10" style = "margin-top:10px">
				<button type="submit" class="btn btn-primary">Submit</button>
			  </div>
			  <div class="col-xs-10" style = "font-size:11px; color:#cc0000; margin-top:10px">
				<?php 
				if (isset($error) == true){
					echo $error;
				}
				?>
			</div>
			</form>
		</main>

	</body>
</html>