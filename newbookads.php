<?php
	require "header.php";
	require 'filter_sidebar.php';
	?>

<main>
	<div id="output">
		<!--Search output-->
			
		</div>
		<h1 style="background:  #3caea3; color: #fff; padding: 5px;"><center>ALL NEW BOOKS YOU WANT</center></h1>
	
	<script type="text/javascript">
		$(document).ready(function() {
			var ads_count = 10;
			$(".loadads").click(function() {
				ads_count = ads_count + 10;
				$("#book_ads").load("new_load_book_ads.php", {
					new_ads_count: ads_count
				});
			})
		});
	</script>
	<div id="book_ads">
			<?php
				$sql = "SELECT * FROM new_book_ad ORDER BY nb_id DESC LIMIT 10;";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						
				echo '
			<div class="product">
				<a href="newBookDetails.php?id='.$row['nb_id'].'" target = "_blank"><div class="imgbox">
					<label>NEW</label>
					<img src="'.$row['nb_img1'].'">
				</div></a>
				<div class="details">
					<h2>Title: '.$row['nb_title'].'<br><span>Author: '.$row['author'].'</span><br><br>Details: '.$row['nb_details'].'</h2>
					<div class="price">&#x20b9;'.$row['nb_price'].'</div>

					<a href="includes/cart.inc.php?userid='.$_SESSION['USERID'].'&bookid='.$row['nb_id'].'&seller='.$row['uid'].'"> Add To Cart</a>
				</div>
			</div>'	;
					}
				}
				else {
					echo 'There is no books';
				}
			?>	
		</div>
	
	<button class="loadads">Load more...</button>
</main>

<?php
	require "footer.php";
	?>	