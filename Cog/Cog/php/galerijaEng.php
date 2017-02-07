<?php
		require('connect.php');
	?>
	
	<?php
	
		$query = "select DISTINCT irealiziranieng.path as ipath,irealiziranieng.naziv as inaziv,zrealiziranieng.path as zpath,zrealiziranieng.naziv as znaziv from zrealiziranieng left outer join galerija on zrealiziranieng.idGalerija=galerija.id left outer join irealiziranieng on galerija.id=irealiziranieng.idGalerija GROUP BY ipath,zpath ORDER BY RAND() limit 1,20;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		
		
		$sql = "SELECT naslov FROM galerija";
		$rezultat = mysqli_query($db_server,$sql);
		$naslov = mysqli_fetch_array($rezultat);
		echo "<div id=1 class=slider>";
		while($row = mysqli_fetch_array($result))
	{?>
			<p class="galerija"><?php echo"$row[inaziv]";?></p>
			<?php if($row['ipath'] ==null){}else{ echo "<img class=mySlides alt='".$row['inaziv']."' title='".$row['inaziv']."' src='".$row['ipath']."' />";} ?>
			<p class="galerija"><?php echo"$row[znaziv]";?></p>
			<?php if($row['ipath'] ==null){}else{ echo "<img class=mySlides alt='".$row['znaziv']."' title='".$row['znaziv']."' src='".$row['zpath']."' />";} ?>
			
	<?php }echo "</div>"?>
	
	<script>
		
		var myIndex = 0;
		carousel();

		function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		var y = document.getElementsByClassName("galerija");
		for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
		y[i].style.display = "none";
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}
		x[myIndex-1].style.display = 'block';
		y[myIndex-1].style.display = 'block';
		setTimeout(carousel, 2000); 
		}
		
	</script>
	
	<script>
	var i=1;

		$('.slider').click(function(){
		var s=$(this).attr('id');
		if(i==2 || i==3)
		{
		i--;
		$('#'+s).animate({'height':'50%','width':'70%'});
		$('#'+s).css({'cursor':'zoom-in'});
		}
		if(i==1)
		{
		i++;
		i++;
		$('#'+s).animate({'height':'100%','width':'100%'});
		$('#'+s).css({'cursor':'zoom-out'});
		}
		});
	</script>
		
	<?php 
		mysqli_close ($db_server);
	?>