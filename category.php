<?php 
		require 'header.php';
		require 'sidebar.php';
		
		?>
<main>	
	
		<div id="book_ads">
			<?php
				$sql = "SELECT * FROM new_book_ad WHERE cat_id = ".$_GET['id'].";";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						
				echo '
			<div class="product">
				<a href="newBookDetails.php?id='.$row['nb_id'].'" target = "_blank"><div class="imgbox">
					<label>New</label>
					<img src="'.$row['nb_img1'].'">
				</div></a>
				<div class="details">
					<h2>Title: '.$row['nb_title'].'<br><span>Author: '.$row['author'].'</span><br><br>Details: '.$row['nb_details'].'</h2>
					<div class="price">&#x20b9;'.$row['nb_price'].'</div>

					<a href="includes/cart.inc.php?userid='.$_SESSION['USERID'].'&bookid='.$row['nb_id'].'" > Add To Cart</a>
				</div>
			</div>'	;
					}
				}
				else {
					echo 'There is no books';
				}
			?>	
		</div>

	
</main>
<?php
		require 'footer.php';
		?>
	