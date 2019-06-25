<?php
			require 'includes/dbh.inc.php';
			
			$old_ads_count =  $_POST['old_ads_count'];

			$sql = "SELECT * FROM old_book_ad ORDER BY ob_id DESC LIMIT $old_ads_count;";
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
		