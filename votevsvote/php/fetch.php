<?php  
require('connect.php');

$text = $_POST["search"];
$query = "SELECT * FROM sadrzaj WHERE MATCH (naslov) AGAINST ('$text' IN NATURAL LANGUAGE MODE);";
// $sql = "SELECT * FROM tbl_customer WHERE CustomerName LIKE '%".$_POST["search"]."%'";  
 $result = mysqli_query($db_server, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  

      while($row = mysqli_fetch_array($result))  
      {  ?>
			<p class="keysearch">
				<?php echo $row['naslov']; ?>
			</p>
           
      <?php }  
 }  
 else  
 {  ?>
	<p class="keysearch">
      <?php echo 'Data Not Found'; ?>
	</p>
<?php }  
 ?>  