<?php
  require('connect.php');

	$thumbsup = $_POST['idSadrzaja'];
	$idSadrzajTekst = $_POST['tekst1'];
// Increasing the current value with 1
	session_start();
   
	$user_check = $_SESSION['email'];
	
	$ses_sql = mysqli_query($db_server,"select idSadrzaj from likebutton left join register on likebutton.idRegister=register.id
	left join sadrzaj on likebutton.idSadrzaj=sadrzaj.id where email = '$user_check' and idSadrzaj = '$idSadrzajTekst' ");
	
	$row = mysqli_fetch_array($ses_sql);
	
	$queryzaid = mysqli_query($db_server,"select id from register where email='$user_check'");
	
	$rowid = mysqli_fetch_array($queryzaid);
	
	$userid = $rowid['id'];
	
	if($row['idSadrzaj'] != $idSadrzajTekst){
	
	
	if($thumbsup ==1){
		mysqli_query($db_server,"insert into likebutton (idRegister,idSadrzaj) values ('$userid','$idSadrzajTekst')");
		mysqli_query($db_server,"UPDATE likebutton SET like1 = (like1 + 1) WHERE idSadrzaj='$idSadrzajTekst'");
	}
	
	if($thumbsup ==2){
		mysqli_query($db_server,"insert into likebutton (idRegister,idSadrzaj) values ('$userid','$idSadrzajTekst')");
		mysqli_query($db_server,"UPDATE likebutton SET like2 = (like2 + 1) WHERE idSadrzaj='$idSadrzajTekst'");
	}
	
	}else{}

  mysqli_close($db_server);

  echo 'OK';   ?>