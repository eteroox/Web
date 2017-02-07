	<?php
		require('connect.php');
	?>
	
	<?php
		$query = "select * from pocetna where id=1;";
		$result = mysqli_query($db_server,$query);

		if (!$result) die ("Database access failed: " . mysqli_error());
		while($row = mysqli_fetch_array($result))
	{?>
			<?php echo "<img id=pocetnaSlika alt='".$row['naslov']."' title='".$row['naslov']."' src='".$row['path']."' />";?>
	<?php }?>
	
	<script>
		$(document).ready(function() { 
		$("#pocetnaSlika").click(function() {

        var src = $('#pocetnaSlika').attr('src');

        //if the current image is picture1.png, change it to picture2.png
        if(src == 'slike/pocetna/105.jpg') {
            $("#pocetnaSlika").attr("src","slike/pocetna/2.jpg");
			$("#pocetnaSlika").fadeToggle("fast");
			$("#pocetnaSlika").fadeToggle(1000);
        //if the current image is picture2.png, change it to picture3.png 
        } else if(src == "slike/pocetna/2.jpg") {
            $("#pocetnaSlika").attr("src","slike/pocetna/3.jpg");
			$("#pocetnaSlika").fadeToggle("fast");
			$("#pocetnaSlika").fadeToggle(1000);
		} else if(src == "slike/pocetna/3.jpg") {
            $("#pocetnaSlika").attr("src","slike/pocetna/4.jpg");
			$("#pocetnaSlika").fadeToggle("fast");
			$("#pocetnaSlika").fadeToggle(1000);
		
        //if the current image is anything else, change it back to picture1.png
        } else {
            $("#pocetnaSlika").attr("src","slike/pocetna/105.jpg");
			$("#pocetnaSlika").fadeToggle("fast");
			$("#pocetnaSlika").fadeToggle(1000);
        }
		}); 
		});
		</script>

	<?php 
		mysqli_close ($db_server);
	?>