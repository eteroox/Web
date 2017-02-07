<!DOCTYPE html>
<html>
<title>Centar za organizaciju građenja</title>
<head>
<meta charset="UTF-8">
<meta name="description" content="Centar za organizaciju građenja je jedna od vodećih kompanija na području vođenja projekata, konzaltinga, projektiranja, stručnog nadzora i energetskog certificiranja">
<meta name="keywords" content="cog,Centar za organizaciju građenja,vođenje projekata,konzalting, projektiranje, stručn nadzor , energetsk certificiranje">
<meta name="author" content="Denis Alibašić">
<link rel="stylesheet" type="text/css" href="dizajn/dizajn.css">
<link href='https://fonts.googleapis.com/css?family=Quantico:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Teko:600' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
<script src="js/title.js" type="text/javascript"></script>
<link rel="shortcut icon" href="slike/pozadina/favicon.ico" type="image/x-icon">
<link rel="icon" href="slike/pozadina/favicon.ico" type="image/x-icon">

<script>
$(function(){

$('#MainMenu > li').click(function(e) {
        e.stopPropagation();
        var $el = $('ul',this);
        $('#MainMenu > li > ul').not($el).slideUp();
        $el.stop(true, true).slideToggle(100);
    });
        $('#MainMenu > li > ul').click(function(e) {
        e.stopImmediatePropagation();
    });
	
});
</script>
<style>
@media screen and (max-width: 960px) {
#footer{line-height:20px;}
}
</style>

</head>
<body>

<header>
	<nav>
		<div id="lijevo">
		<a href="indexHr.php"><img class="zastava" src="slike/pozadina/hr.jpg"/></a>
		<a href="indexEng.php"><img class="zastava" src="slike/pozadina/en.jpg"/></a>
		<a href="indexHr.php"><img id="headerSlika" src="slike/pozadina/headerLogo.png"/></a>
		</div>
		<div id="desno">
		<img id="headerNaslov" src="slike/pozadina/header2.jpg"/>
		<div id="header">
			<div>
			<img class="header" alt="Centar za organizaciju građenja" title="Centar za organizaciju građenja" src="slike/header/nema.png"/>
			</div>
			<div>
			<img class="header" alt="Centar za organizaciju građenja" title="Centar za organizaciju građenja" src="slike/header/nema2.png"/>
			</div>
			<div>
			<img class="header" alt="Centar za organizaciju građenja" title="Centar za organizaciju građenja" src="slike/header/nema3.png"/>
			</div>
		</div>
		</div>
		<script>
		
		$("#header > div:gt(0)").hide();

		setInterval(function() { 
		$('#header > div:first')
			.fadeOut(0)
			.next()
			.fadeIn(0)
			.end()
			.appendTo('#header');
		},  3000);
		</script>
		</script>
		<div id="clear"></div>
	</nav>
</header>
<div id="gradijent"></div>

<main>
<section>
	<aside>
		<ul id="MainMenu">
			<a class="lista" href="#" onclick="$('article').load('php/pocetna.php')"><li>Početna</li></a>
			<a class="lista" href="#" onclick="$('article').load('php/onama.php')"><li>O nama</li></a>
			<a class="lista" href="#" onclick="$('article').load('php/novostiHr.php')"><li>Novosti</li></a>
			<li><a class="lista" href="#" onclick="$('article').load('php/zgradarstvo.php')">Zgradarstvo</a>
			<ul class="dropdown">
				<a class="lista" href="#" onclick="$('article').load('php/upravljanje.php')"><li>Upravljanje projektima</li></a>
				<a class="lista" href="#" onclick="$('article').load('php/zprojektiranje.php')"><li>Projektiranje</li></a>
				<a class="lista" href="#" onclick="$('article').load('php/vjestacenja.php')"><li>Vještačenje</li></a>
				<a class="lista" href="#" onclick="$('article').load('php/znadzor.php')"><li>Nadzor</li></a>
				<a class="lista" href="#" onclick="$('article').load('php/energetsko.php')"><li>Energetsko certificiranje</li></a>
				<a class="lista" href="#" onclick="$('article').load('php/zrealizirano.php')"><li>Realizirani projekti</li></a>
			</ul></li>
			<li><a class="lista" href="#" onclick="$('article').load('php/infrastruktura.php')">Infrastruktura</a>
			
			<ul class="dropdown">
				<a class="lista" href="#" onclick="$('article').load('php/iprojektiranje.php')"><li>Projektiranje</li></a>
				<a class="lista" href="#" onclick="$('article').load('php/inadzor.php')"><li>Nadzor</li></a>
				<a class="lista" href="#" onclick="$('article').load('php/irealizirani.php')"><li>Realizirani projekti</li></a>
			</ul></li>
			<a class="lista" href="#" onclick="$('article').load('php/galerija.php')"><li>Galerija projekata</li></a>
			<a class="lista" href="#" onclick="$('article').load('php/projekti.php')"><li>Projekti u tijeku</li></a>
			<a class="lista" href="#" onclick="$('article').load('php/kontakt.php')"><li>Kontakt</li></a>
		</ul>
	</aside>
	
	<hr id="smanjeno"></hr>
	
	<article>
		<?php
		require('php/connect.php');
		?>
		<?php
		$query = "select * from pocetna where id=1;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		while($row = mysqli_fetch_array($result))
		{?>
			<?php echo "<img id=pocetnaSlika alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path']."' />";?>
		<?php }?>
		
		<script>
		$(document).ready(function() { 
		$("#pocetnaSlika").click(function() {

        var src = $('#pocetnaSlika').attr('src');

        //if the current image is picture1.png, change it to picture2.png
        if(src == 'slike/pocetna/105.jpg') {
            $("#pocetnaSlika").attr("src","slike/pocetna/2.jpg");
			$("#pocetnaSlika").fadeToggle("fast");
			$("#pocetnaSlika").fadeToggle(1000);
        //if the current image is picture2.png, change it to picture3.png 
        } else if(src == "slike/pocetna/2.jpg") {
            $("#pocetnaSlika").attr("src","slike/pocetna/3.jpg");
			$("#pocetnaSlika").fadeToggle("fast");
			$("#pocetnaSlika").fadeToggle(1000);
		} else if(src == "slike/pocetna/3.jpg") {
            $("#pocetnaSlika").attr("src","slike/pocetna/4.jpg");
			$("#pocetnaSlika").fadeToggle("fast");
			$("#pocetnaSlika").fadeToggle(1000);
		
        //if the current image is anything else, change it back to picture1.png
        } else {
            $("#pocetnaSlika").attr("src","slike/pocetna/105.jpg");
			$("#pocetnaSlika").fadeToggle("fast");
			$("#pocetnaSlika").fadeToggle(1000);
        }
		}); 
		});
		</script>

		<?php 
			mysqli_close ($db_server);
		?>
	</article>
	<div id="clear"></div>

</section>
</main>

<div id="gradijentFooter"></div>
<footer>
<p id="footer">tel/fax: 01/3843 825, 01/4646 710, Gračanska cesta 49, 10000 Zagreb, OIB: 5623596964486</p>
</footer>

</body>
</html>