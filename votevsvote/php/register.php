<html>
<head>
<title>Vote vs vote</title>
<meta charset="UTF-8">
<meta name="description" content="Vote vs vote is website where your vote picks the winner">
<meta name="keywords" content="vote, vs, vote vs vote">
<meta name="author" content="Denis Alibašić">
<link rel="stylesheet" type="text/css" href="../css/dizajn.css">
</head>
<body>
<main>
<div id="registerDiv">

	<form id='login' action='register.php' method='post' accept-charset='UTF-8'>
		<fieldset>
			<legend>Login</legend>
			<label class="register" for='email' >Email Address*:</label></br>
			<input class="register" type='text' name='email1' id='email1' maxlength="50" /></br>
			<label class="register" for='password' >Password*:</label></br>
			<input class="register" type='password' name='password1' id='password1' maxlength="20" /></br>
			<input class="register" type='submit' name='Submit1' value='Submit' /></br>
		</fieldset>
	</form>
	
	<form id='register' action='register.php' method='post'
    accept-charset='UTF-8'>
		<fieldset>
			<legend>Register</legend>
			<input class="register" type='hidden' name='submitted' id='submitted' value='1'/></br>
			<label class="register" for='name' >Name*: </label></br>
			<input class="register" type='text' name='name' id='name' maxlength="50" /></br>
			<label class="register" for='surname' >Surname*: </label></br>
			<input class="register" type='text' name='surname' id='surname' maxlength="50" /></br>
			<label class="register" for='email' >Email Address*:</label></br>
			<input class="register" type='text' name='email' id='email' maxlength="50" /></br>
 
			<label class="register" for='password' >Password*:</label></br>
			<input class="register" type='password' name='password' id='password' maxlength="20" /></br>
			<input class="register" type='submit' name='Submit' value='Submit' /></br>
 
		</fieldset>
	</form>
</div>	

<?php
	require('connect.php');
	
		session_start();
		
		$nameErr = $emailErr = $surnameErr = $usernameErr = $passwordErr = $passwordErr = "";
		
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$surname = isset($_POST['surname']) ? $_POST['surname'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';

		
		$query = "select email from register where email='$email';";
		$result = mysqli_query($db_server,$query) or die (mysqli_error($db_server));
		if (!$result) die ("Database access failed: " . mysqli_error());
		
	if(isset($_POST['Submit'])){
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["name"])) {
			$nameErr = "Name is required , maximum length : 50 characters";
			echo "<p class=error>" . $nameErr ."</p>";
		  } else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			  $nameErr = "Only English letters allowed in name"; 
			  echo "<p class=error>" . $nameErr ."</p>";
			}else{$name = $_POST['name'];}
		  }
		}
		  
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["surname"])) {
			$surnameErr = "Surname is required , maximum length : 50 characters";
			echo "<p class=error>" . $surnameErr ."</p>";
		  } else {
			$surname = test_input($_POST["surname"]);
			// check if surname only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
				$surnameErr = "Only English letters allowed in surname";
				echo "<p class=error>" . $surnameErr ."</p>";			  
			}else{$surname = $_POST['surname'];}
		  }
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["email"])) {
			$emailErr = "Email is required , maximum length : 50 characters";
			echo "<p class=error>" . $emailErr ."</p>";
		  } else {
			// check if e-mail address is well-formed
			if ((filter_var($email, FILTER_VALIDATE_EMAIL) == false) or (mysqli_num_rows($result)!=0)) {
			  $emailErr = "Invalid email format or email already in use";
			  echo "<p class=error>" . $emailErr ."</p>";
			}else{$email = $_POST['email'];}
		  }
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["password"])) {
			$passwordErr = "Password is required , maximum length : 20 characters";
			echo "<p class=error>" . $passwordErr ."</p>";
		  } else {
			$password = test_input($_POST["password"]);
			// check if password only contains letters and numbers
			if (!preg_match("/^[a-z0-9 .\-]+$/i",$password)) {
			  $passwordErr = "Only English letters and numbers are allowed in password"; 
			  echo "<p class=error>" . $passwordErr ."</p>";
			}else{$password = $_POST['password'];}
		  }
		}
		
		// A higher "cost" is more secure but consumes more processing power
		$cost = 10;

		// Create a random salt
		$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

		// Prefix information about the hash so PHP knows how to verify it later.
		// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
		$salt = sprintf("$2a$%02d$", $cost) . $salt;


		// Hash the password with the salt
		$hash = crypt($password, $salt);
		
		if($password!=null && $email!=null && $surname!=null && $name!=null){
		mysqli_query($db_server, "insert into register (name,surname,email,password) values('$name','$surname','$email','$hash') ;");
		echo "You have successfully registered";
		}
	}
		 
		 
		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		
	if(isset($_POST['Submit1'])){
		
		$mailTest = $_POST['email1'];
		$passwordTest = $_POST['password1'];
		
		$queryTest="
		  SELECT
			password
		  FROM register
		  WHERE
			email = '".$mailTest."'
		  LIMIT 1
		  ;";
		  
		  $test1234 = mysqli_query($db_server,$queryTest);
			$test12 = mysqli_fetch_array($test1234);
		  if(password_verify($passwordTest,$test12['password'])){
			  echo "<p class=error>password is valid</p>";
				$_SESSION['email'] = $mailTest;
				header("location: ../index.php");
			}else{
				echo "<p class=error>password is invalid</p>";
				}
		
	}
?>

<?php 
	mysqli_close ($db_server);
?>
</main>
</body>
</html>