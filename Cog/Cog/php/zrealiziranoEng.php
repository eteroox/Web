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
		
		$query = "select * from zrealiziranieng order by id desc limit $page1,5;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		
		
		$sql = "SELECT * FROM zrealiziranieng";
		$rezultat = mysqli_query($db_server,$sql);
		$naslov = mysqli_fetch_array($rezultat);
		echo "<div id=vrh>";
		while($row = mysqli_fetch_array($result))
	{?>
			<h2 class="zgradarstvo"><?php echo $row['naziv']?></h2></br>
			
			<div style="width:100%;height:60%;">
			<a href ="#" id="<?php echo $row['id']?>" onclick = "document.getElementById('light<?php echo $row['id']?>').style.display='block';document.getElementById('fade<?php echo $row['id']?>').style.display='block'"><?php echo "<img class=zrealizirani alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";?></a>
		<div id="light<?php echo $row['id']?>" class="white_content"><a id="x" href = "#" onclick = "document.getElementById('light<?php echo $row['id']?>').style.display='none';document.getElementById('fade<?php echo $row['id']?>').style.display='none'"><img style="width:30px;float:right;" src="slike/pozadina/x.png"/></a><p style="text-align:center;font-size:30px;font-weight:bold;"><?php echo $row['naziv']?></p>
			<div id="slide<?php echo $row['id']?>">
			<div>
			<?php echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";?>
			</div>
			<?php if (file_exists("../slike/zgradarstvo/realizirano/$row[id]/1.jpg")) {?>
			<div>
			<img class="zrealiziraniGallerija" alt="<?php echo"$row[naziv]";?>" title="<?php echo"$row[naziv]";?>" src="slike/zgradarstvo/realizirano/<?php echo "$row[id]"?>/1.jpg" />
			</div>
			<?php }else{
				echo "<div>";
				echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";
				echo "</div>";
			}?>
			<?php if (file_exists("../slike/zgradarstvo/realizirano/$row[id]/2.jpg")) {?>
			<div>
			<img class="zrealiziraniGallerija" alt="<?php echo"$row[naziv]";?>" title="<?php echo"$row[naziv]";?>" src="slike/zgradarstvo/realizirano/<?php echo "$row[id]"?>/2.jpg" />
			</div>
			<?php }else{
				echo "<div>";
				echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";
				echo "</div>";
			}?>
			<?php if (file_exists("../slike/zgradarstvo/realizirano/$row[id]/3.jpg")) {?>
			<div>
			<img class="zrealiziraniGallerija" alt="<?php echo"$row[naziv]";?>" title="<?php echo"$row[naziv]";?>" src="slike/zgradarstvo/realizirano/<?php echo "$row[id]"?>/3.jpg" />
			</div>
			<?php }else{
				echo "<div>";
				echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";
				echo "</div>";
			}?>
			<?php if (file_exists("../slike/zgradarstvo/realizirano/$row[id]/4.jpg")) {?>
			<div>
			<img class="zrealiziraniGallerija" alt="<?php echo"$row[naziv]";?>" title="<?php echo"$row[naziv]";?>" src="slike/zgradarstvo/realizirano/<?php echo "$row[id]"?>/4.jpg" />
			</div>
			<?php }else{
				echo "<div>";
				echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";
				echo "</div>";
			}?>
			<?php if (file_exists("../slike/zgradarstvo/realizirano/$row[id]/5.jpg")) {?>
			<div>
			<img class="zrealiziraniGallerija" alt="<?php echo"$row[naziv]";?>" title="<?php echo"$row[naziv]";?>" src="slike/zgradarstvo/realizirano/<?php echo "$row[id]"?>/5.jpg" />
			</div>
			<?php }else{
				echo "<div>";
				echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";
				echo "</div>";
			}?>
			<?php if (file_exists("../slike/zgradarstvo/realizirano/$row[id]/6.jpg")) {?>
			<div>
			<img class="zrealiziraniGallerija" alt="<?php echo"$row[naziv]";?>" title="<?php echo"$row[naziv]";?>" src="slike/zgradarstvo/realizirano/<?php echo "$row[id]"?>/6.jpg" />
			</div>
			<?php }else{
				echo "<div>";
				echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";
				echo "</div>";
			}?>
			<?php if (file_exists("../slike/zgradarstvo/realizirano/$row[id]/7.jpg")) {?>
			<div>
			<img class="zrealiziraniGallerija" alt="<?php echo"$row[naziv]";?>" title="<?php echo"$row[naziv]";?>" src="slike/zgradarstvo/realizirano/<?php echo "$row[id]"?>/7.jpg" />
			</div>
			<?php }else{
				echo "<div>";
				echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";
				echo "</div>";
			}?>
			<?php if (file_exists("../slike/zgradarstvo/realizirano/$row[id]/8.jpg")) {?>
			<div>
			<img class="zrealiziraniGallerija" alt="<?php echo"$row[naziv]";?>" title="<?php echo"$row[naziv]";?>" src="slike/zgradarstvo/realizirano/<?php echo "$row[id]"?>/8.jpg" />
			</div>
			<?php }else{
				echo "<div>";
				echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";
				echo "</div>";
			}?>
			<?php if (file_exists("../slike/zgradarstvo/realizirano/$row[id]/9.jpg")) {?>
			<div>
			<img class="zrealiziraniGallerija" alt="<?php echo"$row[naziv]";?>" title="<?php echo"$row[naziv]";?>" src="slike/zgradarstvo/realizirano/<?php echo "$row[id]"?>/9.jpg" />
			</div>
			<?php }else{
				echo "<div>";
				echo "<img class=zrealiziraniGallerija alt='".$row['naziv']."' title='".$row['naziv']."' src='".$row['path']."' />";
				echo "</div>";
			}?>
		</div>
		<div class="content">
			<ul class="a">
			<li class="a"><span class="a">Object-></span> <?php echo $row['objekt']?></li>
			<li class="a"><span class="a">Location-></span> <?php echo $row['lokacija']?></li>
			<li class="a"><span class="a">Investor-></span> <?php echo $row['investitor']?></li>
			<li class="a"><span class="a">Type of service-></span> <?php echo $row['vrstaUsluge']?></li>
			<li class="a"><span class="a">Time of works-></span> <?php echo $row['vrijemeRadova']?></li>
			<li class="a"><span class="a">Description-></span> <?php echo $row['opis']?></li>
			</ul>
			</div>
		</div>
			<div id="fade<?php echo $row['id']?>" class="black_overlay"></div>
			</div>
			
			<script>
		
				$("#slide<?php echo $row['id']?> > div:gt(0)").hide();

				setInterval(function() { 
				$('#slide<?php echo $row['id']?> > div:first')
					.fadeOut(0)
					.next()
					.fadeIn(0)
					.end()
					.appendTo('#slide<?php echo $row['id']?>');
				},  3000);
			</script>
			
			<script>
			$('#<?php echo $row['id']?> img').hover(function() {
				$(this).attr('src', 'slike/zgradarstvo/hover2eng.png');
				}, function() {
				$(this).attr('src', '<?php echo $row['path']?>');
			});
			</script>
			
			<script>
			$("#<?php echo $row['id']?> img").click(function(){
			$("body").css("overflow","hidden");
			});
			</script>
			
			<script>
			$("#x img").click(function(){
			$("body").css("overflow","scroll");
			});
			</script>
			
			<div class="content">
			<ul class="a">
			<li class="a"><span class="a">Object-></span> <?php echo $row['objekt']?></li>
			<li class="a"><span class="a">Location-></span> <?php echo $row['lokacija']?></li>
			<li class="a"><span class="a">Investor-></span> <?php echo $row['investitor']?></li>
			<li class="a"><span class="a">Type of service-></span> <?php echo $row['vrstaUsluge']?></li>
			<li class="a"><span class="a">Time of works-></span> <?php echo $row['vrijemeRadova']?></li>
			<li class="a"><span class="a">Description-></span> <?php echo $row['opis']?></li>
			</ul>
			</div>
			<div id="clear"></div>
			<hr></hr>
			
	<?php }echo "</div>"?>
	
	<?php
		$result2 = mysqli_query($db_server,"select * from zrealiziranieng order by id desc;");
		$cou = mysqli_num_rows($result2);
		
		
		$a=$cou/5;
		$a=ceil($a);
		echo "</br>"; echo "</br>";
		
		echo "<div id=brojevi>";
		for($b=1;$b<=$a;$b++){
			?><a onclick="$('article').load('php/zrealiziranoEng.php?page=<?php echo $b; ?>')" href="#vrh" style="color:white;text-decoration:none;background-color:#80df00;margin:2px;padding:2px;"><?php echo $b." ";?></a><?php
		}
		echo "</div>";
	?>
		
	<?php 
		mysqli_close ($db_server);
	?>