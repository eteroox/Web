<?php
		require('connect.php');
	?>
	
	<?php
		$query = "select * from zgradarstvo where id=2;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		while($row = mysqli_fetch_array($result))
	{?>
			<h2 class="zgradarstvo"><?php echo $row['naslov'] ?></h2>
			<?php echo "<img class=zgradarstvo alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path']."' />";?>
	<?php }?>

	<?php 
		mysqli_close ($db_server);
	?>