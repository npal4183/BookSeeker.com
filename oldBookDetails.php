<?php 
require 'header.php';
require 'sidebar.php';
?>
<main>
<?php
	$sql = "SELECT * FROM old_book_ad WHERE ob_id=".$_GET['id'].";";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	echo '<div class="newproductad">
						<img src="'.$row['ob_img1'].'">
						<div id="datadetail">
						<h3><u>TYPE : OLD </u></h3>
						<h2>Title: '.$row['ob_title'].'</h2>
						<h2>Price: '.$row['ob_price'].'</h2>
						<h2>Author: '.$row['author'].'</h2>
						<h2>Details: '.$row['ob_details'].'</h2>
						<h2>Contact No: 1234567890</h2>
						</div>
					</div>';
?>
</main>
<?php
	require 'footer.php';
?>