<?php
		require('connect.php');
	?>
	
	<?php
		$query = "select * from iProjektiranje where id=1;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		
		$sql = "SELECT * FROM iProjektiranje where id=1;";
		$rezultat = mysqli_query($db_server,$sql);
		$naslov = mysqli_fetch_array($rezultat);
		echo "<h2 class=zgradarstvo>";
		echo $naslov['naziv'];
		echo "</h2>";
		
		echo "<div>";
		while($row = mysqli_fetch_array($result))
	{?>

			<?php echo "<img class=zgradarstvo alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";?>
	<?php }echo "</div>"?>
		<?php
		echo "<div id=clear>";
		echo "</div>";
		echo "<p class=zgradarstvo>";
		echo $naslov['paragraf'];
		echo "</p>";
		
		?>
	<?php 
		mysqli_close ($db_server);
	?>