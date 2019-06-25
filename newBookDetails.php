<?php 
require 'header.php';
require 'sidebar.php';
?>
<main>
<?php
	$sql = "SELECT * FROM new_book_ad WHERE nb_id=".$_GET['id'].";";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	echo '<div class="newproductad">
						<img src="'.$row['nb_img1'].'">
						<div id="datadetail">
						<h3><u>TYPE : NEW </u></h3>
						<h2>Title: '.$row['nb_title'].'</h2>
						<h2>Price: '.$row['nb_price'].'</h2>
						<h2>Author: '.$row['author'].'</h2>
						<h2>Details: '.$row['nb_details'].'</h2>
					';
	echo '<h2><a href="includes/cart.inc.php?userid='.$_SESSION['USERID'].'&bookid='.$row['nb_id'].'&seller='.$row['uid'].'" >Add To Cart</a></h2>
		<h2><a href="checkout.php?price='.$row['nb_price'].'&bookid='.$row['nb_id'].'&seller='.$row['uid'].'"><span>BUY NOW</span></a></h2>
		</div></div>';
?>
</main>
<?php
require 'footer.php';
?>