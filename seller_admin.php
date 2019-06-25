<?php
	require 'header.php';
	require 'sidebar.php';
	?>
	
<main>
	<h1 style="background:  #3caea3; color: #fff; padding: 5px;"><center><u>SELLER ADMIN PANEL</u></center></h1>
	<?php
	if(!isset($_SESSION['USERNAME']))
	{
		echo '<p>You should register first in the website to post your Book.</p>
			<form method="post" action="includes/login.inc.php" class="login">
					<input type="text" name="uname" placeholder="Username/Email">
					<input type="password" name="pwd" placeholder="Password">
					<input type="submit" name="login-submit" value="Login">
				</form>
				<a href="signup.php"class="inline">Signup</a>';
	}
	?>
	<h1>Maange Order </h1>
		<?php
		$flag = false;
		$sql = "SELECT * FROM orders WHERE seller_id = ".$_SESSION['USERID'].";";
		$result = mysqli_query($conn, $sql) or die("Database Error");
		echo '<table class="order_status cart-table">
			<tr><th>ORDER ID</th><th>BOOK ID</th><th>QUANTITY</th><th>TRANS NO</th><th>AMOUNT</th><th>ORDER STATUS</th></tr>';
			if(mysqli_num_rows($result) < 1) {
				$flag = true;
				echo '<tr><td colspan="6">YOU HAVE NO ORDER</td></tr>';
			}
		while($row = mysqli_fetch_assoc($result)) {
			echo '<tr><td>'.$row['order_id'].'<td>'.$row['book_id'].'</td><td>'.$row['qty'].'</td><td>'.$row['tax_id'].'</td><td>'.$row['amount'].'</td><td>'.$row['p_status'].'</td></tr>
			';
		}
		echo "</table>";
	?>
	<div class="form-style-7">
	<h2>Process orders</h2>
	<form method="post">
		<label>Enter Order Id</label><input type="text" name="order-id">
		<label>Select Order Status</label>
		<select name="order-status">
			<option selected value="ORDER PLACED">ORDER PLACED</option>
			<option value="ORDER DISPACHED">ORDER DISPACHED</option>
			<option value="OUT FOR DELIVERY">OUT FOR DELIVERY</option>
			<option value="DELIVERY COMPLETE">DELIVERY COMPLETE</option>
		</select>
		<input type="submit" name="order-process" value="Process">
	</form>
</div>
	<?php
		if (isset($_POST['order-process'])) {
			$sql = "UPDATE orders SET p_status = '".$_POST['order-status']."' WHERE order_id = ".$_POST['order-id'].";";
			mysqli_query($conn, $sql) or die("Databse has error");
			echo "Order Processed";
		}
	?>

	<div class="form-style-7">
	<h2>Manage Profile</h2>
	<form action="includes/update.inc.php" method="post">
			<label>Change password</label><input type="password" name="pwd" placeholder="Password">
			<input type="submit" name="update-password1" value="Update">
	</form>
	<form action="includes/update.inc.php" method="post">
			<label>Change Address</label><input type="text" name="address" placeholder="Address">
			<input type="submit" name="update-address1" value="Update">
	</form>
	</div>
	<h3>Your ads</h3>
	<h3>New Book ads</h3>
	<?php
		$flag = false;
		$sql = "SELECT * FROM new_book_ad WHERE uid = ".$_SESSION['USERID'].";";
		$result = mysqli_query($conn, $sql) or die("Database Error");
		echo '<table class="order_status cart-table">
			<tr><th>AD ID</th><th>Ad Title</th><th>Price</th><th>Stock</th><th>Details</th><th>Author</th><th>Image</th><th>Action</th></tr>';
			if(mysqli_num_rows($result) < 1) {
				$flag = true;
				echo '<tr><td colspan="7">No Ad Posted, Go and post your first ad</td></tr>';
			}
		while($row = mysqli_fetch_assoc($result)) {
			echo '<tr><td>'.$row['nb_id'].'<td>'.$row['nb_title'].'</td><td>'.$row['nb_price'].'</td><td>'.$row['stock'].'</td><td>'.$row['nb_details'].'</td><td>'.$row['author'].'</td><td>'.$row['nb_img1'].'</td><td><a href="includes/remove.inc.php?newadid='.$row['nb_id'].'"><button>Reomve</button></a></td></tr>
			';
		}
		echo "</table>";
	?>
	<h3>Old Book ads</h3>
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
			echo '<tr><td>'.$row['ob_id'].'<td>'.$row['ob_title'].'</td><td>'.$row['ob_price'].'</td><td>'.$row['ob_details'].'</td><td>'.$row['ob_description'].'</td><td>'.$row['author'].'</td><td>'.$row['ob_img1'].'</td><td><a href="includes/remove.inc.php?oldadid='.$row['ob_id'].'"><button>Reomve</button></a></td></tr>
			';
		}
		echo "</table>";
	?>
	<h2>Edit ads</h2>
	<div class="form-style-7">
	<h3>New Books</h3>
	<?php
	 if ($flag == true) {
	 	echo "No ad to edit";
	 }
	 else {
	 	echo '
	 		<form method="post" action="includes/update.inc.php" enctype="multipart/form-data">
			<label>Enter Ad Id</label>
			<input type="number" name="nb_id" placeholder="AD ID">
			<input type="text" name="nb_title" placeholder="Book Title"><br><br>
			<input type="text" name="nb_price" placeholder="Book Price"><br><br>
			<input type="text" name="stock" placeholder="Stock of book you have"><br><br>
			<input type="text" name="author" placeholder="Author">
			<input type="text" name="nb_details" placeholder="Details about book"><br><br>
			
			<h3><i>Select Images</i></h3>
			<input type="file" name="nb_img1"><br><br>
			<input type="submit" name="update-new-ad" value="UPDATE NEW BOOK AD">
		</fieldset>

	</form>
	 	';
	 }

	  ?>
	</div>
	<div class="form-style-7">
	<h3>Old Books</h3>
	<?php
	 if ($flag == true) {
	 	echo "No ad to edit";
	 }
	 else {
	 	echo '
	 	<form method="post" action="includes/update.inc.php" enctype="multipart/form-data">
			<br>
			<label>Enter Ad Id</label>
			<input type="number" name="nb_id" placeholder="AD ID">
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