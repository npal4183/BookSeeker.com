<?php
	require "header.php";
	require 'filter_sidebar.php';
	?>

<main>
	<h1 style="background:  #3caea3; color: #fff; padding: 5px;"><center>OLD BOOK AT BEST PRICE FOR ALL</center></h1>
	<script type="text/javascript">
		$(document).ready(function() {
			var ads_count = 10;
			$(".loadads").click(function() {
				ads_count = ads_count + 10;
				$("#book_ads").load("old_load_book_ads.php", {
					old_ads_count: ads_count
				});
			})
		});
	</script>
	<div id="book_ads">
			<?php
				$sql = "SELECT * FROM old_book_ad ORDER BY ob_id DESC LIMIT 10;";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						
				echo '
			<div class="product">
				<a href="oldBookDetails.php?id='.$row['ob_id'].'" target = "_blank"><div class="imgbox">
					<label>OLD</label>
					<img src="'.$row['ob_img1'].'">
				</div></a>
				<div class="details">
					<h2>Title: '.$row['ob_title'].'<br><span>Author: '.$row['author'].'</span><br><br>Details: '.$row['ob_details'].'</h2>
					<div class="price">&#x20b9;'.$row['ob_price'].'</div>

					<a href="#">Contact : 0987654321</a>
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