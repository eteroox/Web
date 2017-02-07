<!DOCTYPE HTML>
<html>
<head>
<title>Vote vs vote</title>
<meta charset="UTF-8">
<meta name="description" content="Vote vs vote is website where your vote picks the winner">
<meta name="keywords" content="vote, vs, vote vs vote">
<meta name="author" content="Denis Alibašić">
<link rel="stylesheet" type="text/css" href="css/dizajn.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>

<meta property="og:url" content="http://www.votevsvote.com" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Vote vs Vote" />
<meta property="og:description" content="Cast your vote and decide the winner" />
<meta property="og:image" content="images/vs.png" />


<script>
$(document).ready(function(){
	$( "#searchForm" ).keypress(function(e) {
		if(e.which == 13) {
			var val1 = $('#search').val();
			e.preventDefault();
			$.ajax({
				type: 'POST',
                url: 'php/search.php',
				data: { text1: val1 },
                error: function(){
                    // error handler
                },
                success: function(response){
                    if(response != null) $('section').html(response);
                }
            });
		}
});
});
</script>

</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>


<?php
		require('php/connect.php');
		session_set_cookie_params(2592000,"/");
		session_start();
   
		$user_check = $_SESSION['email'];
		
		$ses_sql = mysqli_query($db_server,"select email from register where email = '$user_check' ");
   
		$row = mysqli_fetch_array($ses_sql);
   
		$login_session = $row['email'];
   
		if(!isset($_SESSION['email'])){
			header("location:php/register.php");
		}
	?>

	<main>
	<a id="link"></a>
	<div id="headerColor">
		<header>
			<div id="user"><img onclick="window.location.href='php/stop.php'" id="userLogout" src="images/logout.png"/><p id="user"><?php echo $_SESSION['email'] ?></p></div>
			<div id="clear"></div>
			<a id="news" href="index.php"><img id="header" src="images/header.png" alt="vote vs vote" title="vote vs vote"/></a>
			<form id="searchForm" action="" method="POST">
				<input id="search" type="text" name="search" placeholder="Search.."/>
				<input type="submit" id="submit" name="submit" style="position: absolute; left: -9999px"/>
			</form>
			<div id="keysearch"></div>
		</header>
	</div>
		<section>
			<?php
	require('php/connect.php');
				$query = "SELECT *
							FROM sadrzaj
							order by time desc
							limit 0,10;";
				$result = mysqli_query($db_server,$query);
				

				if (!$result) die ("Database access failed: " . mysqli_error());
				echo "<p class=news>New:</p>";
				while($row = mysqli_fetch_array($result)){
					$id = $row['id'];
				?>
				<p class="expand"><?php echo $row['naslov'];?></p>
		<div class="expand">
				<article>
				<a href ="#link" onclick = "document.getElementById('light<?php echo $row['naziv1']?>').style.display='block';document.getElementById('fade<?php echo $row['naziv1']?>').style.display='block'"><?php echo "<img class=slike alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path1']."' />";?></a>
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
				<a href ="#link" onclick = "document.getElementById('light<?php echo $row['naziv2']?>').style.display='block';document.getElementById('fade<?php echo $row['naziv2']?>').style.display='block'"><?php echo "<img class=slike alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path2']."' />";?></a>
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
						var tekst1 = "<?php echo $row['id'];?>";
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
		</div>
			<div id="clear"></div>
				<?php } ?>
				
			<script>
			$(document).ready(function(){
				$("div.expand").hide();
				$("p.expand").click(function(){
				$(this).next('div.expand').slideToggle();
				});
			});
			</script>
			
			<?php 
			mysqli_close ($db_server);
			?>
		</section>
			
			<script>
			$(".slike").click(function(){
			$("body").css("overflow","hidden");
			});
			</script>
			
			<script>
			$("#x img").click(function(){
			$("body").css("overflow","scroll");
			});
			</script>
			
			<script>  
			 $(document).ready(function(){  
				  $('#search').keyup(function(){  
					   var txt = $(this).val();  
					   if(txt != '')  
					   {  
							$.ajax({  
								 url:"php/fetch.php",  
								 method:"post",  
								 data:{search:txt},  
								 dataType:"text",  
								 success:function(data)  
								 {  
									  $('#keysearch').html(data);  
								 }  
							});  
					   }  
					   else  
					   {  
							$('#keysearch').html('');                 
					   }  
				  });  
			 });  
			</script>  
			
			<script>
				$(document).on("click",".keysearch",function(event){
				$("#search").val($(".keysearch").text());
			});
			</script>
	<footer>
	<p id="footer">©Denis Alibašić</p>
	<div class="fb-share-button" data-href="https://www.votevsvote.com" data-layout="button" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.votevsvote.com%2F&amp;src=sdkpreparse">Share</a></div>
	<div class="twitter"><a class="twitter-share-button" href="https://twitter.com/intent/tweet"> Tweet</a></div>
	<div class="linkedin"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script><script type="IN/Share" data-url="http://www.votevsvote.com"></script></div>
	<div id="clear"></div>
	</footer>
	</main>
</body>
</html>