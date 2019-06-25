<aside id="filter-sidebar">
	<br>
	<h3>Catagories</h3>
	<div id="cat_filter">
		
		<ul>
			<?php
				$sql = "SELECT 	* FROM category";
				$data = mysqli_query($conn, $sql) or die("error to connect to database");
				while($row = mysqli_fetch_assoc($data)) {
					echo '<li><a href="category.php?id='.$row['cat_id'].'">'.$row['cat_name'].'</a></li>';
				}

			?>
		</ul>
	</div>
	<br>
	<h3>Recent Ads</h3>
	<div id="cat_filter">
		
		<ul>
			<?php
				$sql = "SELECT nb_id, nb_title FROM new_book_ad ORDER BY nb_id DESC LIMIT 10";
				$data = mysqli_query($conn, $sql) or die("error to connect to database");
				while($row = mysqli_fetch_assoc($data)) {
					echo '<li><a href="newBookDetails.php?id='.$row['nb_id'].'" target = "_blank">'.$row['nb_title'].'</a></li>';
				}
			?>
		</ul>
	</div>
	<br>
	<h3>Popular Ads</h3>
	<div id="cat_filter">
		
		<ul>
			<?php
				$sql = "SELECT nb_id, nb_title FROM new_book_ad ORDER BY nb_title DESC LIMIT 10";
				$data = mysqli_query($conn, $sql) or die("error to connect to database");
				while($row = mysqli_fetch_assoc($data)) {
					echo '<li><a href="newBookDetails.php?id='.$row['nb_id'].'" target = "_blank">'.$row['nb_title'].'</a></li>';
				}
			?>
		</ul>
	</div>
</aside>