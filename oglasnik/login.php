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
      
      $sql = "SELECT id FROM users WHERE Email = '$email' and Password_user = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['login_email'] = $email;
         
         header("location: index.php");
      }else {
         $error = "Your Email or Password is invalid";
      }
   }
?>
	
<div class="login" style="margin:0 auto; width: 80%;">
	<form action = "login.php" method = "post" style="margin: 0 auto; width:80%">
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
</div>