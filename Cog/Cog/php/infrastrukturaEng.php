<?php
		require('connect.php');
	?>
	
	<?php
		$query = "select * from infrastruktura where id=2;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		while($row = mysqli_fetch_array($result))
	{?>
			<h2 class="zgradarstvo"><?php echo $row['naziv'] ?></h2>
			<?php echo "<img class=zgradarstvo alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";?>
	<?php }?>

	<?php 
		mysqli_close ($db_server);
	?>