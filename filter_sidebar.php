<aside id="filter-sidebar">
	<form method="POST" action="filter.php" class="filter-form">
		<br><button class="loadads" type="submit" name="filter-submit" value="Apply Filter">Apply</button>
		<h3>Price Range</h3>
		<input type="number" name="minprice" placeholder="MININUM"> - <input type="number" name="maxprice" placeholder="MAXIMUM"><br><br>
		<h3>CATEGORY</h3>
		<div id="cat_filter">
			<?php
				$sql = "SELECT 	* FROM category";
				$data = mysqli_query($conn, $sql) or die("error to connect to database");
				while($row = mysqli_fetch_assoc($data)) {
					echo '<label class="container">'.$row['cat_name'].'
						  	<input type="checkbox" name="category[]" value="'.$row['cat_id'].'">
							<span class="checkmark"></span>
							</label>';
				}

			?>
		</div><br>
		<h3>PUBLISHER</h3>
		<div id="cat_filter">
			<?php
				$sql = "SELECT 	* FROM publisher";
				$data = mysqli_query($conn, $sql) or die("error to connect to database");
				while($row = mysqli_fetch_assoc($data)) {
					echo '<label class="container">'.$row['pub_title'].'
						  	<input type="checkbox" name="publisher[]" value="'.$row['pub_id'].'">
							<span class="checkmark"></span>
							</label>';
					
				}

			?>
		</div>

	</form>

</aside>