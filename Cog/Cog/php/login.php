<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  
      $myusername = mysqli_real_escape_string($db_server,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db_server,$_POST['password']); 
      
      $sql = "SELECT id FROM login WHERE username = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db_server,$sql);
      $row = mysqli_fetch_array($result);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: admin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Za Cog</title>
<style>
*{margin:0;padding:0;}
section{width:80%;margin:0 auto;min-width:400px;}
form{width:80%;margin:0 auto;margin-top:300px;text-align:center;}
</style>
</head>
<body>
<section>
<form action = "" method = "post">
                  <label>UserName  : </label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  : </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Potvrdi "/><br />
               </form>
</section>
</body>
</html>