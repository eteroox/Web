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
section{width:80%;margin: auto;margin-top:10px;}
article{margin-bottom:5px;box-shadow: 0px 0px 10px white;visibility:visible;background-color:white;border-radius:20px;}
h2{margin:10px;text-align:center;width:100%;font-weight:bold;text-decoration:underline;font-size:30px;}
p{color:white;}
p:first-child{color:white;}
h1{width:100%;margin:auto;color:white;text-align:center;text-shadow: 2px 2px black;}
img.naklada{float:left;width:100px;margin:10px;}
a.pdf:link,a.pdf:visited{line-height:90px;color:blue;text-decoration:none;}
a.pdf:hover,a.pdf:active{color:brown;}
hr{width:80%;margin:0 auto;}
#plutanje{width:30%;margin:0 auto;}
@media screen and (max-width: 700px) {
section{width:100%;padding:0;margin:0;}
artcle{padding:0;margin:0;}
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
	<h1>Naklade</h1>
	<?php
		require('connect.php');
	?>

	<?php
		$query = "select * from pristupi order by id desc;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		echo "<article>	";
		while($row = mysqli_fetch_array($result))
    {?>
        
				<h2><?php echo $row['h1']?></h2></br>
				<div id="plutanje"><?php if (file_exists($row['path'])) { echo "<img class=naklada src=slike/pristup/pdf.jpg />";}else{} ?>
				<?php echo "<a class=pdf target=_blank href='".$row['path']."'>" . $row['h1'] . "</a>" ?></br>
				</div>
				<div id="clear"></div>
				<hr></hr>
        
		<div id="clear"></div>
    <?php } echo "</article>	";?>


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