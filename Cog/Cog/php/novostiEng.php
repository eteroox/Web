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
				$page1=($page*5)-5;
			}
	
	
		$query = "SELECT * from novostihr where (id%2) = 0 order by id desc limit $page1,5;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		echo "<div id=vrh >";
		while($row = mysqli_fetch_array($result))
	{?>
		<div class="novosti">
			<h2 class="zgradarstvo"><?php echo $row['naslov']; ?></h2>
			<?php if ($row['path'] ==null){} else{ echo "<img class=novosti alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path']."' />";}?>
			<p class="zgradarstvo"><?php echo $row['paragraf']; ?></p>
		</div>
	<?php }echo "</div>";?>
	
	<?php
		$result2 = mysqli_query($db_server,"SELECT * from novostihr where (id%2) = 0 order by id desc;");
		$cou = mysqli_num_rows($result2);
		
		
		$a=$cou/5;
		$a=ceil($a);
		echo "</br>"; echo "</br>";
		
		echo "<div id=brojevi>";
		for($b=1;$b<=$a;$b++){
			?><a onclick="$('article').load('php/novostiHr.php?page=<?php echo $b; ?>')" href="#vrh" style="color:white;text-decoration:none;background-color:#80df00;margin:2px;padding:2px;"><?php echo $b." ";?></a><?php
		}
		echo "</div>";
	?>
		
	<?php 
		mysqli_close ($db_server);
	?>