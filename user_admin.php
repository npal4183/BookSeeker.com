<?php
	require 'header.php';
	require 'sidebar.php';
	?>
	//
<main>

	<?php
	if(!isset($_SESSION['USERNAME']))
		header("Location: index.php");
	?>
	<h2>Order Status</h2>
	<?php
		$sql = "SELECT book_id, qty, p_status FROM orders WHERE user_id = ".$_SESSION['USERID']."";
		$result = mysqli_query($conn, $sql) or die("Database Error");
		echo '<table class="order_status cart-table">
			<tr><th>S No</th><th>Book</th><th>Quantity</th><th>Order Status</th></tr>';
			$sno = 1;
			if(mysqli_num_rows($result) < 1) {
				echo '<tr><td colspan="4">No Order persented</td></tr>';
			}
		while($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>'.$sno.'</td>';
			$sno ++;
			echo '<td>'.$row['book_id'].'</td>';
			echo '<td>'.$row['qty'].'</td>';
			echo '<td>'.$row['p_status'].'</td>';
			echo "</tr>";
		}
		echo "</table>";
	?>
	<div class="form-style-7">
	<h2>Manage Profile</h2>
	<form action="includes/update.inc.php" method="post">
			<label>Change password</label><input type="password" name="pwd" placeholder="Password">
			<input type="submit" name="update-password" value="Update">
	</form>
</div>
	<div class="form-style-7">
	<form action="includes/update.inc.php" method="post">
			<label>Change Address</label><input type="text" name="address" placeholder="Address">
			<input type="submit" name="update-address" value="Update">
	</form>
</div>

	<h2>Manage your ads</h2>
	<h3>Your ads</h3>
	<?php
		$flag = false;
		$sql = "SELECT * FROM old_book_ad WHERE uid = ".$_SESSION['USERID'].";";
		$result = mysqli_query($conn, $sql) or die("Database Error");
		echo '<table class="order_status cart-table">
			<tr><th>AD ID</th><th>Ad Title</th><th>Price</th><th>Details</th><th>description</th><th>Author</th><th>Image</th><th>Action</th></tr>';
			if(mysqli_num_rows($result) < 1) {
				$flag = true;
				echo '<tr><td colspan="7">No Ad Posted, Go and post your first ad</td></tr>';
			}
		while($row = mysqli_fetch_assoc($result)) {
			echo '<tr><td>'.$row['ob_id'].'<td>'.$row['ob_title'].'</td><td>'.$row['ob_price'].'</td><td>'.$row['ob_details'].'</td><td>'.$row['ob_description'].'</td><td>'.$row['author'].'</td><td>'.$row['ob_img1'].'</td>
			<td><a href="includes/remove.inc.php?ob_id='.$row['ob_id'].'"><button>Reomve</button></a></td></tr>';
		}
		echo "</table>";
	?>
	<div class="form-style-7">
	<h2>Edit ads</h2>
	<?php
	 if ($flag == true) {
	 	echo "No ad to edit";
	 }
	 else {
	 	echo '
	 	<form method="post" action="includes/update.inc.php" enctype="multipart/form-data">
			<br>
			<label>Enter Ad Id</label>
			<input type="number" name="ob_id" placeholder="AD ID">
			<input type="text" name="ob_title" placeholder="Book Title"><br>
			<input type="text" name="ob_price" placeholder="Book Price"><br>
			<input type="text" name="ob_details" placeholder="Details of book">
			<textarea name="discription" placeholder="A short Discription can help to sell your book first"></textarea><br>
			<input type="text" name="author" placeholder="Author">
			<h3><i>Select Images</i></h3>
			<input type="file" name="ob_img1"><br>
			<input type="submit" name="update-old-ad" value="UPDATE OLD BOOK AD">

	</form>';
	 }

	  ?>
	</div>
	
</main>
<?php
	require 'footer.php';
	?>