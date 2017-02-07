<?php
		require('connect.php');
		?>
		<?php
		$query = "select * from pocetna where id=2;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		while($row = mysqli_fetch_array($result))
		{?>
			<p class="zgradarstvo"><?php echo $row['paragraf']?></p>
		<?php }?>

		<?php 
			mysqli_close ($db_server);
		?>