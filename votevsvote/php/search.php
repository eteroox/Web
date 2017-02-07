<?php
	require('connect.php');
				$text1 = $_POST['text1'];
				$query = "SELECT *
							FROM sadrzaj 
							WHERE MATCH (naslov) AGAINST ('$text1' IN NATURAL LANGUAGE MODE);";
				$result = mysqli_query($db_server,$query);

				if (!$result) die ("Database access failed: " . mysqli_error());
				$row = mysqli_fetch_array($result);
				$id = $row['id'];
				?>
				
				<article>
				<a href ="#link" onclick = "document.getElementById('light<?php echo $row['naziv1']?>').style.display='block';document.getElementById('fade<?php echo $row['naziv1']?>').style.display='block'"><?php echo "<img id=slike1 class=slike alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path1']."' />";?></a>
				<div id="light<?php echo $row['naziv1']?>" class="white_content"><a id="x" href = "#" onclick = "document.getElementById('light<?php echo $row['naziv1']?>').style.display='none';document.getElementById('fade<?php echo $row['naziv1']?>').style.display='none'"><img style="width:30px;float:right;" src="images/x.png"/></a>
					<h2 class="slike"><?php echo $row['naslov'];?></h2>
					<?php echo"<img class=slikelight alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path1']."' />";?>
					<p class="slike"><?php echo $row['opis1'];?></p>
					<a class="slike" href="<?php if(empty($row['link1'])){echo "https://www.google.hr/#q=".$row['naziv1'];}else{echo $row['link1'];};?>" target="_blank"><?php echo $row['naziv1'];?></a>
				</div>
				<div id="fade<?php echo $row['naziv1']?>" class="black_overlay"></div>
			</article>
			<img id="vs" src="images/vs.png" alt="vote vs vote" title="vote vs vote"/>
			<article>
				<a href ="#link" onclick = "document.getElementById('light<?php echo $row['naziv2']?>').style.display='block';document.getElementById('fade<?php echo $row['naziv2']?>').style.display='block'"><?php echo "<img id=slike2 class=slike alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path2']."' />";?></a>
				<div id="light<?php echo $row['naziv2']?>" class="white_content"><a id="x" href = "#" onclick = "document.getElementById('light<?php echo $row['naziv2']?>').style.display='none';document.getElementById('fade<?php echo $row['naziv2']?>').style.display='none'"><img style="width:30px;float:right;" src="images/x.png"/></a>
					<h2 class="slike"><?php echo $row['naslov'];?></h2>
					<?php echo"<img class=slikelight alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path2']."' />";?>
					<p class="slike"><?php echo $row['opis2'];?></p>
					<a class="slike" href="<?php if(empty($row['link2'])){echo "https://www.google.hr/#q=".$row['naziv2'];}else{echo $row['link2'];};?>" target="_blank"><?php echo $row['naziv2'];?></a>
				</div>
				<div id="fade<?php echo $row['naziv2']?>" class="black_overlay"></div>
			</article>
			
			<div class="likeButton">
				<?php $querylike = mysqli_query($db_server,"SELECT like1,like2 from likebutton where idSadrzaj='$id'");
				$rowlike = mysqli_fetch_array($querylike); ?>
				<p class="likevslike"><?php echo $rowlike['like1']; echo" vs "; echo $rowlike['like2'];?></p>
				<img class="like1" id="like1<?php echo $row['naziv1'];?>" src="images/thumbsup.png" alt="like<?php echo $row['naziv1']; ?>" title="like<?php echo $row['naziv1']; ?>">
				<img class="like2" id="like2<?php echo $row['naziv2'];?>" src="images/thumbsup.png" alt="like<?php echo $row['naziv2']; ?>" title="like<?php echo $row['naziv2']; ?>">
			</div>
			
			<script>
			$(document).ready(function () {
						$('#like1<?php echo $row['naziv1'];?>').click(function(){
						var val1 = "1";
						var tekst1 = "<?php echo $row['id']; ?>";
						$.ajax({
												type: "POST",
												url: "php/like.php",
												data: { idSadrzaja: val1,tekst1: tekst1 },							
												success : function() { 

													alert('Success');
													return;
												}

						});
				});
				});
			</script>
				
			<script>
				$(document).ready(function () {
							$('#like2<?php echo $row['naziv2'];?>').click(function(){
							var val1 = "2";
							var tekst1 = "<?php echo $row['id']; ?>";
							$.ajax({
													type: "POST",
													url: "php/like.php",
													data: { idSadrzaja: val1,tekst1: tekst1 },							
													success : function() { 

														alert('Success');
														return;
													}

							});
					});
					});
				</script>
				<script>
					$(document).ready(function(){
					$('img.like1').hover(function() {
									$(this).attr('src', 'images/thumbsupliked.png');
									}, function() {
									$(this).attr('src', 'images/thumbsup.png');
								});
					$('img.like2').hover(function() {
									$(this).attr('src', 'images/thumbsupliked.png');
									}, function() {
									$(this).attr('src', 'images/thumbsup.png');
								});
					});
				</script>
			
			<div>
				<form method='post'>
				<textarea name="textarea" class="textarea" maxlength="255"></textarea>
				<input class="comment" type='submit' name='SubmitComment<?php echo $id; ?>' value='Submit' /></br>
				</form>
			<?php 
					$queryComment ="select comments.* from comments left join sadrzaj on comments.idSadrzaj=sadrzaj.id where sadrzaj.id='$id' order by comments.id desc limit 10;";
					$resultComment = mysqli_query($db_server,$queryComment);
					
					while($comment = mysqli_fetch_array($resultComment)){
						$idComment = $comment['idRegister'];
						$queryid="select DISTINCT register.* from register left join comments on register.id=comments.idRegister
								left join sadrzaj on comments.idSadrzaj=sadrzaj.id
								where comments.idRegister='$idComment' and sadrzaj.id='$id';";
						$resultid = mysqli_query($db_server,$queryid);
						while($idC=mysqli_fetch_array($resultid)){
					?>
			<div class="divComments"><h3 class="hComments"><?php echo $idC['id'] . $idC['name'] ?></h3><p class="paragrafComments"><?php echo $comment['komentar'] ?></p></div>
						<?php }} ?>
					<?php
					if(isset($_POST['SubmitComment' . $id])){
						if (empty($_POST["textarea"])) {
							echo "empty";
						}else{
							$commentTextarea = $_POST["textarea"];
							$queryidzausera = "select id from register where email = '".$user_check."';";
							$resultuserid = mysqli_query($db_server,$queryidzausera);
							$idusera = mysqli_fetch_array($resultuserid);
							
							$idzausera = $idusera['id'];
	
							$resultComments = mysqli_query($db_server, "insert into comments (komentar,idSadrzaj,idRegister) values ('$commentTextarea','$id','$idzausera')");
						}
					}
			?>
			
			</div>
			
			
			<div id="clear"></div>
			<?php 
			mysqli_close ($db_server);
			?>