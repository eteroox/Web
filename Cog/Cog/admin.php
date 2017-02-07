<!DOCTYPE html>
<html>
<head>
<title>Cog admin</title>
<meta charset="UTF-8">
<meta name="description" content="Admin dio">
<meta name="author" content="Denis Alibašić">
<link rel="stylesheet" type="text/css" href="dizajn/dizajn.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
<script src="js/title.js" type="text/javascript"></script>

<style>
form{width:100%;text-align:center;}
input{margin:10px;padding:10px;}
article{width:100%;}
h1{text-align:center;margin-top:20px;text-decoration:underline;color:gray;}
</style>

</head>
<body>

<main>

<section>
	
	<div id="projekti">
	<h1>Projekti Hr dio</h1>
	<?php
		require('php/connect.php');
	?>
	
	<?php
		session_start();
   
		$user_check = $_SESSION['login_user'];
		
		$ses_sql = mysqli_query($db_server,"select username from login where username = '$user_check' ");
   
		$row = mysqli_fetch_array($ses_sql);
   
		$login_session = $row['username'];
   
		if(!isset($_SESSION['login_user'])){
			header("location:login.php");
		}
	?>
	
	
	<?php
		//skriva errore
		error_reporting(0);
		//dio za ispis od najnovijih prema najstarijima
		$query = "select * from projekti where (id%2)<>0 order by id desc;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
	
		
		//dio za brisanje
		if(isset($_POST['delete'])){
			if(isset($_POST['zgradarstvo'])) {
				echo 'Prebacili ste projekt u zgradarstvo';
				$ubacivanjeZgrada = mysqli_query($db_server,"insert into zrealizirani(idGalerija,naziv,path,objekat,lokacija,investitor,vrstaUsluge,vrijemeRadova,opis) select '1',naziv,path,objekt,lokacija,investitor,vrstaUsluge,DATE_FORMAT(NOW(),'%Y'),opis from projekti where id='$_POST[hidden]'");
			} else if(isset($_POST['infrastruktura'])) {
				echo 'Prebacili ste projekt u infrastruktura';
				$ubacivanjeZgrada = mysqli_query($db_server,"insert into irealizirani(idRealizirani,naziv,path,objekt,lokacija,investitor,vrstaUsluge,vrijemeRadova,opis) select '1',naziv,path,objekt,lokacija,investitor,vrstaUsluge,DATE_FORMAT(NOW(),'%Y'),opis from projekti where id='$_POST[hidden]'");
			} else {
				echo 'Brisemo bez prebacivanja';
			}
			$deleteQuery = mysqli_query($db_server,"delete from projekti where id='$_POST[hidden]'");
			//mysqli_query($deleteQuery, $db_server);
		};
		
		$target_dir = "slike/projekti/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		//dio za umetanje
		// Check if image file is a actual image or fake image
		if(isset($_POST["insert"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target_file);
				$insertQuery = mysqli_query($db_server,"insert into projekti (naziv,path,objekt,lokacija,investitor,vrstaUsluge,vrijemeRadova,opis) values('$_POST[naslov]','$target_file','$_POST[objekt]','$_POST[lokacija]','$_POST[investitor]','$_POST[vrstaUsluge]','$_POST[vrijemeRadova]','$_POST[opis]')");
		
			} else {
				echo "File is not an image.";
				$uploadOk = 1;
				$target_file = "slike/pozadina/headerLogo.png";
				$insertQuery = mysqli_query($db_server,"insert into projekti (naziv,path,objekt,lokacija,investitor,vrstaUsluge,vrijemeRadova,opis) values('$_POST[naslov]','$target_file','$_POST[objekt]','$_POST[lokacija]','$_POST[investitor]','$_POST[vrstaUsluge]','$_POST[vrijemeRadova]','$_POST[opis]')");
			}
		}
	
		while($row = mysqli_fetch_array($result))
    {?>
       <article>
				<form action="admin.php" method="post">
				<div class="forme">
				<h2 class="zgradarstvo"><?php echo $row['naziv']?></h2></br>
				<?php echo "<img class=zrealizirani alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";?>
				<div class="content">
				<ul class="a">
					<li class="a"><span class="a">Objekt-></span> <?php echo $row['objekt']?></li>
					<li class="a"><span class="a">Lokacija-></span> <?php echo $row['lokacija']?></li>
					<li class="a"><span class="a">Investitor-></span> <?php echo $row['investitor']?></li>
					<li class="a"><span class="a">Vrsta usluge-></span> <?php echo $row['vrstaUsluge']?></li>
					<li class="a"><span class="a">Vrijeme radova-></span> <?php echo $row['vrijemeRadova']?></li>
					<li class="a"><span class="a">Opis-></span> <?php echo $row['opis']?></li>
					<li class="a"><input type="radio" name="zgradarstvo" value="1" /><label>zgradarstvo</label></li>
					<li class="a"><input type="radio" name="infrastruktura" value="2" /><label>infrastruktura</label></li>
				</ul>
				</div>
				<input type="submit" value="Prebaci i pobrisi" name="delete">
				<input type="hidden" name="hidden" value="<?php echo $row['id']?>">
			<div id="clear"></div>
			<hr></hr>
			</div>
				</form>
        </article>
		</br>
    <?php }?>
			<article>
			<form id="insert" style="background-color:white;" action="admin.php" method="post" enctype="multipart/form-data">
			<div class="forme">
			<h2 class="zgradarstvo"><?php echo "Dio za dodavanje u projekte Hr"?></h2></br>
				<label>Naslov</label><input type="text" name="naslov"></br>
				<label>Slika</label><input type="file" name="fileToUpload" id="fileToUpload"></br>
				<label>Objekt:</label></br>
				<textarea style="width:80%;height:200px;" name="objekt"></textarea></br>
				<label>Lokacija:</label></br>
				<textarea style="width:80%;height:200px;" name="lokacija"></textarea></br>
				<label>Investitor:</label></br>
				<textarea style="width:80%;height:200px;" name="investitor"></textarea></br>
				<label>Vrsta usluge:</label></br>
				<textarea style="width:80%;height:200px;" name="vrstaUsluge"></textarea></br>
				<label>Vrijeme radova:</label></br>
				<textarea style="width:80%;height:200px;" name="vrijemeRadova"></textarea></br>
				<label>Opis:</label></br>
				<textarea style="width:80%;height:200px;" name="opis"></textarea></br>
				<input type="submit" value="Unesi" name="insert">
				</div>
			<form>
			</article>

	
	
	
	<h1>Projekti Eng dio</h1>
	<?php
	//engleski dio
	
		//skriva errore
		error_reporting(0);
		//dio za ispis od najnovijih prema najstarijima
		$query = "select * from projekti where (id%2)=0 order by id desc;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
	
		
		//dio za brisanje
		if(isset($_POST['deleteEng'])){
			if(isset($_POST['zgradarstvoEng'])) {
				echo 'Prebacili ste projekt u zgradarstvo';
				$ubacivanjeZgrada = mysqli_query($db_server,"insert into zrealiziranieng(idGalerija,naziv,path,objekt,lokacija,investitor,vrstaUsluge,vrijemeRadova,opis) select '1',naziv,path,objekt,lokacija,investitor,vrstaUsluge,DATE_FORMAT(NOW(),'%Y'),opis from projekti where id='$_POST[hidden]'");
			} else if(isset($_POST['infrastrukturaEng'])) {
				echo 'Prebacili ste projekt u infrastruktura';
				$ubacivanjeZgrada = mysqli_query($db_server,"insert into irealiziranieng(idRealizirani,naziv,path,objekt,lokacija,investitor,vrstaUsluge,vrijemeRadova,opis) select '1',naziv,path,objekt,lokacija,investitor,vrstaUsluge,DATE_FORMAT(NOW(),'%Y'),opis from projekti where id='$_POST[hidden]'");
			} else {
				echo 'Brisemo bez prebacivanja';
			}
			$deleteQuery = mysqli_query($db_server,"delete from projekti where id='$_POST[hidden]'");
			//mysqli_query($deleteQuery, $db_server);
		};
		
		$target_dir = "slike/projekti/";
		$target_file = $target_dir . basename($_FILES["fileToUploadEng"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		//dio za umetanje
		// Check if image file is a actual image or fake image
		if(isset($_POST["insertEng"])) {
			$check = getimagesize($_FILES["fileToUploadEng"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				move_uploaded_file( $_FILES['fileToUploadEng']['tmp_name'], $target_file);
				$insertQuery = mysqli_query($db_server,"insert into projekti (naziv,path,objekt,lokacija,investitor,vrstaUsluge,vrijemeRadova,opis) values('$_POST[naslovEng]','$target_file','$_POST[objektEng]','$_POST[lokacijaEng]','$_POST[investitorEng]','$_POST[vrstaUslugeEng]','$_POST[vrijemeRadovaEng]','$_POST[opisEng]')");
		
			} else {
				echo "File is not an image.";
				$uploadOk = 1;
				$target_file = "slike/pozadina/headerLogo.png";
				$insertQuery = mysqli_query($db_server,"insert into projekti (naziv,path,objekt,lokacija,investitor,vrstaUsluge,vrijemeRadova,opis) values('$_POST[naslovEng]','$target_file','$_POST[objektEng]','$_POST[lokacijaEng]','$_POST[investitorEng]','$_POST[vrstaUslugeEng]','$_POST[vrijemeRadovaEng]','$_POST[opisEng]')");
			}
		}
	
		while($row = mysqli_fetch_array($result))
    {?>
       <article>
				<form action="admin.php" method="post">
				<div class="forme">
				<h2 class="zgradarstvo"><?php echo $row['naziv']?></h2></br>
				<?php echo "<img class=zrealizirani alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";?>
				<div class="content">
				<ul class="a">
					<li class="a"><span class="a">Object-></span> <?php echo $row['objekt']?></li>
					<li class="a"><span class="a">Location-></span> <?php echo $row['lokacija']?></li>
					<li class="a"><span class="a">Investor-></span> <?php echo $row['investitor']?></li>
					<li class="a"><span class="a">Type of service-></span> <?php echo $row['vrstaUsluge']?></li>
					<li class="a"><span class="a">When-></span> <?php echo $row['vrijemeRadova']?></li>
					<li class="a"><span class="a">Description-></span> <?php echo $row['opis']?></li>
					<li class="a"><input type="radio" name="zgradarstvoEng" value="1" /><label>zgradarstvo</label></li>
					<li class="a"><input type="radio" name="infrastrukturaEng" value="2" /><label>infrastruktura</label></li>
				</ul>
				</div>
				<input type="submit" value="Prebaci i pobrisi" name="deleteEng">
				<input type="hidden" name="hidden" value="<?php echo $row['id']?>">
			<div id="clear"></div>
			<hr></hr>
			</div>
				</form>
        </article>
		</br>
    <?php }?>
			<article>
			<form id="insert" style="background-color:white;" action="admin.php" method="post" enctype="multipart/form-data">
			<div class="forme">
			<h2 class="zgradarstvo"><?php echo "Dio za dodavanje u projekte Hr"?></h2></br>
				<label>Naslov</label><input type="text" name="naslovEng"></br>
				<label>Slika</label><input type="file" name="fileToUploadEng" id="fileToUpload"></br>
				<label>Object:</label></br>
				<textarea style="width:80%;height:200px;" name="objektEng"></textarea></br>
				<label>Location:</label></br>
				<textarea style="width:80%;height:200px;" name="lokacijaEng"></textarea></br>
				<label>Investor:</label></br>
				<textarea style="width:80%;height:200px;" name="investitorEng"></textarea></br>
				<label>Type of service:</label></br>
				<textarea style="width:80%;height:200px;" name="vrstaUslugeEng"></textarea></br>
				<label>Vrijeme radova:</label></br>
				<textarea style="width:80%;height:200px;" name="vrijemeRadovaEng"></textarea></br>
				<label>Description:</label></br>
				<textarea style="width:80%;height:200px;" name="opisEng"></textarea></br>
				<input type="submit" value="Unesi" name="insertEng">
				</div>
			<form>
			</article>

	<?php
		mysqli_close ($db_server);
	?>
	
</section>
</main>
</body>
</html>