<?php 
		require 'header.php';
		require 'sidebar.php';
		
		?>
<main>	
	<div id="output">
		<!--Search output-->
			
		</div>
		<h1 style="background:  #3caea3; color: #fff; padding: 5px;"><center><i><b>Welcome To BookSeeker</b></i></center></h1>

		<h2>NEW BOOKS</h2>
		<hr><br>
		
		<div id="book_ads">
			<?php
				$sql = "SELECT * FROM new_book_ad ORDER BY RAND() LIMIT 6;";
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

					<a href="includes/cart.inc.php?userid='.$_SESSION['USERID'].'&bookid='.$row['nb_id'].'&seller='.$row['uid'].'" > Add To Cart</a>
				</div>
			</div>'	;
					}
				}
				else {
					echo 'There is no books';
				}
			?>	
		</div>
		<a href="newbookads.php"><button class="loadads">See More...</button></a>
		<h2>OLD BOOKS</h2>
		<hr><br>
		<div id="book_ads">
			<?php
				$sql = "SELECT * FROM old_book_ad ORDER BY RAND() LIMIT 6;";
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
		<a href="oldbookads.php"><button class="loadads">See More...</button></a>
		<h2>Recent Uploads</h2>
		<hr><br>
		<div id="book_ads">
			<?php
				$sql = "SELECT * FROM new_book_ad ORDER BY nb_id DESC LIMIT 3;";
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

					<a href="includes/cart.inc.php?userid='.$_SESSION['USERID'].'&bookid='.$row['nb_id'].'&seller='.$row['uid'].'" > Add To Cart</a>
				</div>
			</div>'	;
					}
				}
				else {
					echo 'There is no books';
				}
			?>	
		</div>
		<div id="book_ads">
			<?php
				$sql = "SELECT * FROM old_book_ad ORDER BY ob_id DESC LIMIT 3;";
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


</main>
<?php
		require 'footer.php';
		?>
	