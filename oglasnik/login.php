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
      
      $sql = "SELECT id FROM users WHERE Email = '$email'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
	  
	  if($_POST['email'] == "" || $_POST['password'] = "" || $count != 1){
		  echo "error";
		  exit();
	  }
	  else{
		  $_SESSION['login_email'] = $email;
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
	  </div>
	  <div class="col-xs-10">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" name="password" class="form-control" id="password" placeholder="Password">
	  </div>
	  </br>
	  <div class="col-xs-10" style = "margin-top:10px">
		<button type="button" onclick="validateLogin()" class="btn btn-primary">Submit</button>
	  </div>
	</form>
</div>