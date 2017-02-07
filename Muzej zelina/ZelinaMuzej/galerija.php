<!DOCTYPE html>
<html>
<head>
<title>Muzej Sveti Ivan Zelina</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="slike/favicon.ico" type="image/x-icon">
<link rel="icon" href="slike/favicon.ico" type="image/x-icon">
<meta name="description" content="Novosti i događaji u muzeju Sveti Ivan Zelina">
<meta name="keywords" content="Sveti Ivan Zelina,muzej,Zelingrad,povijest,atrakcija">
<meta name="author" content="Denis Alibašić">
<link rel="stylesheet" type="text/css" href="dizajn/dizajn.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
<script src="js/title.js" type="text/javascript"></script>

<style>
section{width:100%;background-color:#222;margin: auto;margin-top:10px;}
article{width:80%;margin: 0 auto;visibility:visible;background-color:#222;border-radius:20px;}
h2{margin:10px;text-align:center;width:100%;font-weight:bold;text-decoration:underline;font-size:30px;}
p{color:white;}
p:first-letter{color:red;}
h1{width:100%;margin:auto;color:white;text-align:center;text-shadow: 2px 2px black;}
#plutanje{width:30%;}
.galerija img{height: 100px;width:200px;border: 4px solid #555;padding: 1px;margin: 0 10px 10px 0;
 box-shadow:0px 0px 20px #cecece;
 -moz-transform: scale(0.7);
 -moz-transition-duration: 0.6s; 
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.7);
 -ms-transform: scale(0.7);
 -ms-transition-duration: 0.6s;}
 
.galerija img:hover{position:relative;z-index:4;cursor:pointer;border:4px solid white;-moz-transform: scale(1.8);
 -moz-transition-duration: 1.6s;
 -webkit-transition-duration: 1.6s;
 -webkit-transform: scale(1.8);
 -ms-transform: scale(1.8);
 -ms-transition-duration: 1.6s}
.pregled img{width: 800px;padding: 2px;height:400px;}
#toChange{width:600px;height:300px;}

@media screen and (max-width: 700px) {
section{width:100%;padding:0;margin:0;}
article{width:90%;margin: 0 auto;}
.galerija img{width:80%;height:200px;}
.galerija img:hover{-moz-transform: scale(0.8);
 -moz-transition-duration: 0.6s;
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.8);
 -ms-transform: scale(0.8);
 -ms-transition-duration: 0.6s}
artcle{padding:0;margin:0;}
#plutanje{width:95%; margin:0;}
img.naklada{float:none;}
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
<div id="top"><a href="#slikaHeader"><img width="100%" src="slike/top.png"/></a></div>
	<h1>Galerija slika</h1>
	<?php
		require('connect.php');
	?>

	<?php
		$query = "select * from galerija order by id desc;";
		$result = mysqli_query($db_server,$query);
		
		if (!$result) die ("Database access failed: " . mysqli_error());
	echo "<article class=galerija>";
		while($row = mysqli_fetch_array($result))
    {?>
		<?php if (file_exists($row['path'])) { echo "<img class=galerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";}else{} ?>
	<?php }?>
		<div id="clear"></div>
		</article>
	<?php 
		mysqli_close ($db_server);
	?>
</section>
<footer>
	<p style="color:black;"> © 2016 Muzej Sveti Ivan Zelina by Denis Alibašić</p>
</footer>
</main>
</body>
</html>