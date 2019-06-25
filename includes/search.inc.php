<?php 
	session_start();
	require 'dbh.inc.php';
	$output = '<h2></h2><h2><u>Search Result</u></h2><h2></h2>';
	if (isset($_POST['searchval'])) {
		$searchp = $_POST['searchval'];
		$searchp = preg_replace("#[^0-9a-z]#i", "", $searchp);

		$sql = "SELECT * FROM new_book_ad WHERE (nb_title LIKE '".$searchp."') OR (author LIKE '".$searchp."');";
		$result = mysqli_query($conn, $sql) or die("Error In Database");
		$count = mysqli_num_rows($result);
		if ($count == 0) {
			$output = 'There was no search result!';
		}
		else {
			while($row = mysqli_fetch_assoc($result)) {

				$output .= '
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
			</div>
				';

			}

			
		}
		$sql = "SELECT * FROM old_book_ad WHERE (ob_title LIKE '".$searchp."') OR (author LIKE '".$searchp."');";
		$result = mysqli_query($conn, $sql) or die("Error In Database");
		$count = mysqli_num_rows($result);
		if ($count == 0) {
			$output = 'There was no search result!';
		}
		else {
			while($row = mysqli_fetch_assoc($result)) {

				$output .= '
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
			</div>
				';

			}

			
		}
		echo $output;
	}
		?>