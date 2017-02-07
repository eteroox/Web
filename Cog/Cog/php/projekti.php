<?php
		require('connect.php');
	?>
	
	<?php
		
		$query = "select * from projekti where (id%2)<>0 order by id desc;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		
		
		
		echo "<div id=vrh>";
		while($row = mysqli_fetch_array($result))
	{?>
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
			</ul>
			</div>
			<div id="clear"></div>
			<hr></hr>
			
	<?php }echo "</div>"?>
	
		
	<?php 
		mysqli_close ($db_server);
	?>