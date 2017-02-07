<!DOCTYPE html>
<html>
<head>
<title>Muzej Sveti Ivan Zelina</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="slike/favicon.ico" type="image/x-icon">
<link rel="icon" href="slike/favicon.ico" type="image/x-icon">
<meta name="description" content="Broj , email adresa i mjesto gdje nas možete naći i kontaktirati">
<meta name="keywords" content="Sveti Ivan Zelina,muzej,Zelingrad,povijest,atrakcija">
<meta name="author" content="Denis Alibašić">
<link rel="stylesheet" type="text/css" href="dizajn/dizajn.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
<script src="js/title.js" type="text/javascript"></script>
<style>
section{width:80%;margin:0 auto;background-color:white;margin-top:20px;background-image: url("slike/pozadina/pozadina.jpg");background-repeat: no-repeat;background-position: center center;background-size:100% 100%;}
h2{color:white;font-size:20px;text-align:center;text-decoration:underline;}
p:first-letter{color:black;}
a.dolje{text-decoration:none;}
a.dolje:link,visited{color:blue}
a.dolje:hover,active{color:red}
p:first-letter{color:red}
li{color:white;}

@media screen and (max-width: 700px) {
section{width:100%;}
}
</style>
</head>

<body>

<main>
<header>
	<nav>
		<ul>
			<a href="index.html"><img id="slikaHeader" src="slike/muzejzelina.jpg"/><li></li></a>
			<li>
				<a class="nav" href="index.html">Muzej</a>
				<ul class="dropdown">
					<a class="nav" href="pristup.php" style="width:100%;"><li>Pravo na pristup informacijama</li></a>
					<a class="nav" href="naklade.php" style="width:100%;margin-top:4px;"><li>Naklade</li></a>
					<a class="nav" href="zbirke.php" style="width:100%;margin-top:4px;"><li>Zbirke</li></a>
					<a class="nav" href="galerija.php" style="width:100%;margin-top:4px;"><li>Galerija</li></a>
				</ul></li>
			<a class="nav" href="novosti.php"><li>Novosti</li></a>
			<a class="nav" href="zelingrad.html"><li>Zelingrad</li></a>
			<a class="nav" href="kontakt.php"><li>Kontakt</li></a>
		</ul>
	</nav>
	<div id="clear"></div>
</header>
<section>
	<h2>Gdje se nalazimo ?</h2>
	<div id="top"><a href="#slikaHeader"><img width="100%" src="slike/top.png"/></a></div>
	</br>
	<iframe id="kontakt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.6066050382474!2d16.24046591557409!3d45.959142479109914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4766735ae0e920a5%3A0x46409c9321b16fbf!2sTrg+Ante+Star%C4%8Devi%C4%87a+13%2C+10380%2C+Sveti+Ivan+Zelina!5e0!3m2!1shr!2shr!4v1463774926369" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</br></br>
	<ul>
		<caption>Kontakt:</caption>
			<li>Muzej Sveti Ivan Zelina </li>
			<li>Trg Ante Starčevića 13</li>
			<li>10380 Sveti Ivan Zelina</li>
			<li>Tel: 01/2061-544</li>
			<li>Tel/fax: 01/2013-686</li>
			<li>Mail: muzej@zelina.hr</li>
			<li>Zaposlenici: </li>
		<?php
		require('connect.php');
	?>

	<?php
		$query = "select * from kontakti order by id desc;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		while($row = mysqli_fetch_array($result))
    {?>
        <li>	
			<?php echo $row['zaposlenici']?>
        </li>
    <?php }?>
	<li><?php 
	
		$query = "select radno_vrijeme from kontakti limit 0,1;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		while($row = mysqli_fetch_array($result))
			
		echo "Radno vrijeme muzeja: " . $row['radno_vrijeme'];
	
	?></li>


	<?php 
		mysqli_close ($db_server);
	?>
			
			
	</ul>
		
		<a class="dolje" href="http://www.zelina.hr/portal/" target="_blank"><p>Grad Sveti Ivan Zelina </p></a>
		<a class="dolje" href="http://www.tz-zelina.hr/" target="_blank"><p>TZ Zelina </p></a>
</section>
	
<footer>
	<p> © 2016 Muzej Sveti Ivan Zelina by Denis Alibašić</p>
</footer>
</main>
</body>
</html>