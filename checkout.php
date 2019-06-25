<?php
	require 'header.php';
	require 'sidebar.php';
	?>
	
<main>

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
	//getting products from cart
	if (isset($_GET['amount'])) {
		$sql = 'SELECT * FROM cart WHERE uid = '.$_SESSION['USERID'];
		$result = mysqli_query($conn, $sql) or die("Error In Database");
		$count = mysqli_num_rows($result);
		$tax_id = "dkjzncgfioacesiu";
		if ($count < 1) {
			echo 'You not have selected any item to order';
			header("Location: cart.php");
		}
		while($row = mysqli_fetch_assoc($result)) {
			$sql1 = "INSERT INTO orders values(null, ".$_SESSION['USERID'].", ".$row['nb_id'].", ".$row['quantity'].", '".$tax_id."', 'order placeed', ".$_GET['amount'].", ".$row['seller_id'].");";
			mysqli_query($conn, $sql1) or die("Error in the database");

		}
		echo "<h1>Your order Placed</h1>";

	}
	if (isset($_GET['price'])) {
		$tax_id = "sduxisusnoiuhsdno7ywa";
		$sql1 = "INSERT INTO orders values(null, ".$_SESSION['USERID'].", ".$_GET['bookid'].", 1, '".$tax_id."', 'order placed', ".$_GET['price'].", ".$_GET['seller'].");";
		mysqli_query($conn, $sql1) or die("Error into database");
		echo "<h1>Your order Placed</h1>";
	}
	?>

</main>
<?php
	require 'footer.php';
	?>