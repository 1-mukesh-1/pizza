<?php
require 'import_a.php';
$_SESSION['page']="Beverages";
require 'header.php';
?>
	<div class="container1">
			<?php
          if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
            echo "<div id='disappear' style='width:100%;'><p style='color:green;float: center;'>Added to cart</p></div>";
             unset($_SESSION['success']);
           }
            ?>
		<?php
		$query = "select * from pizza where type='b'";
		$result = mysqli_query($link, $query);
		while($row=mysqli_fetch_array($result))
		{
		?>
			<form method="POST" action="addtocart.php">
				<div class="flex-items">
					<img style="width: 100%" src="<?php echo $row['src']?>" alt="img not found">
					<h4><?php echo $row['name']?></h4>
					<h4>Price : <?php echo $row['price']?></h4>
					<input type="number" name="quantity"><br><br>
					<button type="submit" name="submit" value="<?php echo $row['id']?>">Add to cart</button><br><br>
				</div>
			</form>
		<?php
		}
		?>
	</div>

</body>
</html>
