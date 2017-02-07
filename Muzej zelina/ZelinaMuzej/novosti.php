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
p{color:black;}
p:first-child{color:black;}
h1{width:100%;margin:auto;color:white;text-align:center;text-shadow: 2px 2px black;}
img.naklada{float:left;width:100%;margin:10px;}
#plutanje{width:30%;}
#brojevi{text-align:center;}
@media screen and (max-width: 700px) {
section{width:100%;padding:0;margin:0;}
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
	<?php
		require('connect.php');
	?>
	 <?php
		error_reporting(E_ERROR | E_PARSE);
		
	 $page=$_GET["page"];
	 if($page=="" || $page=="1")
	 {
		 $page1=0;
	 }
	 else{
		 $page1=($page*10)-10;
	 }
	 
	// dio za ispis iz tablice
	$query = "select * from novosti order by id desc limit $page1,10;";
	$result = mysqli_query($db_server,$query);

	if (!$result) die ("Database access failed: " . mysqli_error());
	?>

	<?php
		while($row = mysqli_fetch_array($result))
    {?>
        <article>
				<h2><?php echo $row['h1']?></h2></br>
				<div id="plutanje"><?php if (file_exists($row['path'])) { echo "<img alt='".$row['h1']."' title='".$row['h1']."' class=naklada src='".$row['path']."' />";}else{} ?></div>
				<p><?php echo $row['paragraf']?></p>
				<div id="clear"></div>
        </article>
		<div id="clear"></div>
    <?php }?>
	
	<?php
		$result2 = mysqli_query($db_server,"select * from novosti order by id desc;");
		$cou = mysqli_num_rows($result2);
		
		
		$a=$cou/10;
		$a=ceil($a);
		echo "</br>"; echo "</br>";
		
		echo "<div id=brojevi>";
		for($b=1;$b<=$a;$b++){
			?><a href="novosti.php?page=<?php echo $b; ?>" style="color:white;text-decoration:none;background-color:blue;margin:2px;padding:2px;"><?php echo $b." ";?></a><?php
		}
		echo "</div>";
	?>

	<?php 
		mysqli_close ($db_server);
	?>
</section>
<footer>
	<p> © 2016 Muzej Sveti Ivan Zelina by Denis Alibašić</p>
</footer>
</main>
</body>
</html>