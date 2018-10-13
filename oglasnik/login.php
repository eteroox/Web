<?php
   include("config.php");
   session_start();
   
   if(isset($_SESSION['login_email'])){
	   $_SESSION = [];
	   session_destroy();
   }
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	  
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
	$emailsql = "SELECT email FROM users WHERE Email = '".$email."' AND Password_user = '".$mypassword."'";
	$emailresult = mysqli_query($db, $emailsql);
	$row=mysqli_fetch_array($emailresult);
	$foundEmail = $row["email"];
	
	if($email == "" || $mypassword = ""){
		echo "error";
		exit();
	}
	elseif($foundEmail == ""){
		echo "kriviEmail";
		exit();
	}
	else{
		$_SESSION['login_email'] = $foundEmail;
		echo "logiran";
		exit();
	}
}
?>
	
<div class="login" style="margin:0 auto; width: 80%;">
	<form action = "login.php" method = "post" style="margin: 0 auto; width:80%">
	  <div class="col-xs-10" style = "margin-top:10px">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
		<span id="emailLogin" class="errorRegister"></span>
	  </div>
	  <div class="col-xs-10">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" name="password" class="form-control" id="password" placeholder="Password">
		<span id="passwordLogin" class="errorRegister"></span>
	  </div>
	  </br>
	  <div class="col-xs-10" style = "margin-top:10px">
		<button type="button" onclick="validateLogin()" class="btn btn-primary">Submit</button>
	  </div>
	</form>
</div>