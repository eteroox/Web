<?php
   include('config.php');
   session_start();
   
   if(isset($_SESSION['login_email'])){
	   $user_check = $_SESSION['login_email'];
	   
	   $ses_sql = mysqli_query($db,"select email from users where email = '$user_check' ");
	   
	   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	   
	   $login_session = $row['email'];
   }
?>