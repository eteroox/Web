<!DOCTYPE html>
<html>
<head>
<title>Muzej Sveti Ivan Zelina</title>
<meta charset="UTF-8">
<meta name="description" content="Novosti i događaji u muzeju Sveti Ivan Zelina">
<meta name="keywords" content="Sveti Ivan Zelina,muzej,Zelingrad,povijest,atrakcija">
<meta name="author" content="Denis Alibašić">
<link rel="stylesheet" type="text/css" href="dizajn/dizajn.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
<script src="js/title.js" type="text/javascript"></script>

<style>
section{width:80%;margin: auto;margin-top:10px;}
article{visibility:visible;background-color:white;border-radius:20px;}
h2{margin:10px;}
p{margin-left:10px;float:left;}
p.id{width:100%;text-align:center;}
form{width:100%;}
img{float:left;width:200px;}
input{margin:10px;}
iframe{width:100%;height:300px;}
#insert{width:100%;text-align:center;}
#novosti{background-color:blue;border:4px solid blue;margin-bottom:5px;}
#naklade{background-color:green;border:4px solid green;margin-bottom:5px;}
#pristupi{background-color:orange;border:4px solid orange;margin-bottom:5px;}
#kontakt{background-color:red;border:4px solid orange;margin-bottom:5px;}
#galerija{background-color:purple;border:4px solid orange;margin-bottom:5px;}
@media screen and (max-width: 700px) {
section{width:100%;}
p{margin-left:0px;}
}
@media screen and (max-width: 400px) {
img{float:none;}
p{margin-left:20%;}
}
</style>

</head>
<body>

<main>

<section>
	
	<div id="novosti">
	<h1>Novosti</h1>
	<?php
		require('connect.php');
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
		//dio za ispis od najnovijih prema najstarijima
		$query = "select * from novosti order by id desc";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
	
		
		//dio za brisanje
		if(isset($_POST['delete'])){
			$deleteQuery = mysqli_query($db_server,"delete from novosti where id='$_POST[hidden]'");
			//mysqli_query($deleteQuery, $db_server);
		};
		
		$target_dir = "slike/novosti/";
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
				$insertQuery = mysqli_query($db_server,"insert into novosti (h1,path,paragraf) values('$_POST[h1]','$target_file','$_POST[paragraf]')");
		
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
				$insertQuery = mysqli_query($db_server,"insert into novosti (h1,paragraf) values('$_POST[h1]','$_POST[paragraf]')");
			}
		}
	
		while($row = mysqli_fetch_array($result))
    {?>
       <article>
				<form action="admin.php" method="post">
				<p class="id">Novosti id <?php echo $row['id']?></p>
				<h2><?php echo $row['h1']?></h2></br>
				<?php echo "<img src='".$row['path']."' />"; ?>
				<p><?php echo $row['paragraf']?></p>
				<div id="clear"></div>
				<input type="submit" value="Obrisi" name="delete">
				<input type="hidden" name="hidden" value="<?php echo $row['id']?>">
				</br>
				<div id="clear"></div>
				</br>
				</form>
        </article>
		</br>
    <?php }?>
			<form id="insert" style="background-color:white;" action="admin.php" method="post" enctype="multipart/form-data">
				<label>Naslov</label><input type="text" name="h1"></br>
				<label>Slika</label><input type="file" name="fileToUpload" id="fileToUpload"></br>
				<label>Paragraf:</label></br>
				<textarea style="width:80%;height:200px;" name="paragraf"></textarea></br>
				<input type="submit" value="Unesi" name="insert">
			<form>

	<?php
		mysqli_close ($db_server);
	?>
	</div>
	
	
	
	
	
	<div id="naklade">
	<h1>Naklade</h1>
	
	<?php
		require('connect.php');
	?>
	
	<?php
	//dio za ispis iz naklade od najnovijih prema najstarijima
	$query = "select * from naklade order by id desc";
	$result = mysqli_query($db_server,$query);

	if (!$result) die ("Database access failed: " . mysqli_error());
	
	//za brisanje iz naklada
	if(isset($_POST['deleteNaklade'])){
			$deleteQuery = mysqli_query($db_server,"delete from naklade where id='$_POST[hidden]'");
			//mysqli_query($deleteQuery, $db_server);
		};
		
		$target_dir = "slike/naklada/";
		$target_file = $target_dir . basename($_FILES["fileToUploadNaklade"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		//za dodavanje u naklade
		// Check if image file is a actual image or fake image
		if(isset($_POST["insertNaklade"])) {
			$check = getimagesize($_FILES["fileToUploadNaklade"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				move_uploaded_file( $_FILES['fileToUploadNaklade']['tmp_name'], $target_file);
				$insertQuery = mysqli_query($db_server,"insert into naklade (h1,path,paragraf) values('$_POST[h1]','$target_file','$_POST[paragraf]')");
		
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
				$insertQuery = mysqli_query($db_server,"insert into naklade (h1,paragraf) values('$_POST[h1]','$_POST[paragraf]')");
			}
		}
	
		while($row = mysqli_fetch_array($result))
    {?>
       <article>
				<form action="admin.php" method="post">
				<p class="id">Naklade id <?php echo $row['id']?></p>
				<h2><?php echo $row['h1']?></h2></br>
				<?php echo "<img src='".$row['path']."' />"; ?>
				<p><?php echo $row['paragraf']?></p>
				<div id="clear"></div>
				<input type="submit" value="Obrisi" name="deleteNaklade">
				<input type="hidden" name="hidden" value="<?php echo $row['id']?>">
				</br>
				<div id="clear"></div>
				</br>
				</form>
        </article>
		</br>
    <?php }?>
			<form id="insert" style="background-color:white;" action="admin.php" method="post" enctype="multipart/form-data">
				<label>Naslov</label><input type="text" name="h1"></br>
				<label>Slika</label><input type="file" name="fileToUploadNaklade" id="fileToUploadNaklade"></br>
				<label>Paragraf:</label></br>
				<textarea style="width:80%;height:200px;" name="paragraf"></textarea></br>
				<input type="submit" value="Unesi" name="insertNaklade">
			<form>

	<?php
		mysqli_close ($db_server);
	?>
	</div>
	
	
	
	<div id="pristupi">
	<h1>Pravo na pristup informacijama</h1>
	<?php
		require('connect.php');
	?>
	
	<?php
	//dio za ispis od najnovijih do najstarijih
	$query = "select * from pristupi order by id desc";
	$result = mysqli_query($db_server,$query);

	if (!$result) die ("Database access failed: " . mysqli_error());
	
	//za brisanje iz pristupa
	if(isset($_POST['deletePristupi'])){
			$deleteQuery = mysqli_query($db_server,"delete from pristupi where id='$_POST[hidden]'");
			//mysqli_query($deleteQuery, $db_server);
		};
		
		$target_dir = "slike/pristup/";
		$target_file = $target_dir . basename($_FILES["fileToUploadPristup"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		//za dodavanje u pristupe
		// Check if image file is a actual image or fake image
		if(isset($_POST["insertPristupi"])) {
			$check = getimagesize($_FILES["fileToUploadPristup"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				move_uploaded_file( $_FILES['fileToUploadPristup']['tmp_name'], $target_file);
				$insertQuery = mysqli_query($db_server,"insert into pristupi (h1,path) values('$_POST[h1]','$target_file')");
	
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
				move_uploaded_file( $_FILES['fileToUploadPristup']['tmp_name'], $target_file);
				$insertQuery = mysqli_query($db_server,"insert into pristupi (h1,path) values('$_POST[h1]','$target_file')");
	
	
			}
		}
	
		while($row = mysqli_fetch_array($result))
    {?>
       <article>
				<form action="admin.php" method="post">
				<p class="id">Pristup id <?php echo $row['id']?></p>
				<h2><?php echo $row['h1']?></h2></br>
				<?php echo "<iframe src='".$row['path']."'></iframe>"; ?></br>
				<div id="clear"></div>
				<input type="submit" value="Obrisi" name="deletePristupi">
				<input type="hidden" name="hidden" value="<?php echo $row['id']?>">
				</br>
				<div id="clear"></div>
				</br>
				</form>
        </article>
		</br>
    <?php }?>
			<form id="insert" style="background-color:white;" action="admin.php" method="post" enctype="multipart/form-data">
				<label>Naslov</label><input type="text" name="h1"></br>
				<label>Dokument</label><input type="file" name="fileToUploadPristup" id="fileToUploadPristup"></br>
				<input type="submit" value="Unesi" name="insertPristupi">
			<form>

	<?php
		mysqli_close ($db_server);
	?>
	</div>
	
	
	
	<div id="kontakt">
	<h1>Kontakt</h1>
	<?php
		require('connect.php');
	?>
	
	<?php
	//dio za ispis od najnovijih do najstarijih
	$query = "select * from kontakti order by id desc";
	$result = mysqli_query($db_server,$query);

	if (!$result) die ("Database access failed: " . mysqli_error());
	
	//za brisanje iz pristupa
	if(isset($_POST['deleteKontakti'])){
			$deleteQuery = mysqli_query($db_server,"delete from kontakti where id='$_POST[hidden]'");
			//mysqli_query($deleteQuery, $db_server);
		};
		
		
		//za dodavanje u pristupe
		// Check if image file is a actual image or fake image
		if(isset($_POST["insertKontakti"])) {
				$insertQuery = mysqli_query($db_server,"insert into kontakti (zaposlenici,radno_vrijeme) values('$_POST[zaposlenici]','$_POST[radno_vrijeme]')");
		}
	
		while($row = mysqli_fetch_array($result))
    {?>
			<article>
				<form action="admin.php" method="post">
				<p class="id">Kontakt id <?php echo $row['id']?></p>
				<h2><?php echo "Zaposlenici: " . $row['zaposlenici']?></h2></br>
				<h2><?php echo "Radno vrijeme muzeja: " . $row['radno_vrijeme']?></h2></br>
				<div id="clear"></div>
				<input type="submit" value="Obrisi" name="deleteKontakti">
				<input type="hidden" name="hidden" value="<?php echo $row['id']?>">
				</br>
				</form>
			</article>
		</br>
    <?php }?>
			<form id="insert" style="background-color:white;" action="admin.php" method="post" enctype="multipart/form-data">
				<label>Zaposlenik: </label><input type="text" name="zaposlenici"></br>
				<label>Radno vrijeme muzeja: </label><input type="text" name="radno_vrijeme" id="radno_vrijeme"></br>
				<input type="submit" value="Unesi" name="insertKontakti">
			<form>

	<?php
		mysqli_close ($db_server);
	?>
	</div>
	
	<div id="galerija">
	<h1>Galerija</h1>
	<?php
		require('connect.php');
	?>
	<?php
	//dio za ispis od najnovijih do najstarijih
	$query = "select * from galerija order by id desc";
	$result = mysqli_query($db_server,$query);

	if (!$result) die ("Database access failed: " . mysqli_error());
	
	//za brisanje iz pristupa
	if(isset($_POST['deleteGalerija'])){
			$deleteQuery = mysqli_query($db_server,"delete from galerija where id='$_POST[hidden]'");
			//mysqli_query($deleteQuery, $db_server);
		};
		
		$target_dir = "slike/galerija/";
		$target_file = $target_dir . basename($_FILES["fileToUploadGalerija"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		//za dodavanje u pristupe
		// Check if image file is a actual image or fake image
		if(isset($_POST["insertGalerija"])) {
			$check = getimagesize($_FILES["fileToUploadGalerija"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				move_uploaded_file( $_FILES['fileToUploadGalerija']['tmp_name'], $target_file);
				$insertQuery = mysqli_query($db_server,"insert into galerija (naziv,path) values('$_POST[h1]','$target_file')");
	
			} else {
			
		}
		}
		
		echo "<article>";
	
		while($row = mysqli_fetch_array($result))
    {?>
				<form action="admin.php" method="post">
				<p class="id">Pristup id <?php echo $row['id']?></p>
				<h2><?php echo $row['naziv']?></h2></br>
				<?php echo "<img src='".$row['path']."' />"; ?>
				<div id="clear"></div>
				<input type="submit" value="Obrisi" name="deleteGalerija">
				<input type="hidden" name="hidden" value="<?php echo $row['id']?>">
				</br>
				<div id="clear"></div>
				</br>
				</form>
		</br>
    <?php }echo "</article>";?>
			<form id="insert" style="background-color:white;" action="admin.php" method="post" enctype="multipart/form-data">
				<label>Naziv</label><input type="text" name="h1"></br>
				<label>Dokument</label><input type="file" name="fileToUploadGalerija" id="fileToUploadGalerija"></br>
				<input type="submit" value="Unesi" name="insertGalerija">
			<form>

	<?php
		mysqli_close ($db_server);
	?>
	</div>
	
	
</section>
<footer>
	<p> © 2016 Denis Alibašić</p>
</footer>
</main>
</body>
</html>