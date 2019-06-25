<?php
	require "header.php";
	require 'sidebar.php';
	?>

<main>
	
<script type="text/javascript">
	$(document).ready(function(){
	$('.Mybtn').click(function(){
  		$('.MyForm').toggle(500);
  		$('.MyForm1').toggle(500);
  });
});
</script>

	<?php
		if (!isset($_SESSION['USERNAME'])) {
			echo '<p>You should register first in the website to post your Book.</p>
					
					<form method="post" action="includes/login.inc.php" class="login">
								<input type="text" name="uname" placeholder="Username/Email">
								<input type="password" name="pwd" placeholder="Password">
								<input type="submit" name="login-submit" value="Login">
							</form>
							<a href="signup.php"class="inline">Signup</a>

					';
		}
		else{
		$sql = "SELECT seller FROM login_system WHERE uname=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: sell.php?error=failconnection");
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $_SESSION['USERNAME']);
			mysqli_stmt_execute($stmt);
			$stmt = mysqli_stmt_get_result($stmt);
			$result = mysqli_fetch_assoc($stmt);
			if ($result['seller'] == "Yes") {
				echo '
				<button class="Mybtn">CLICK HERE CHANGE BETWEEN NEW TO OLD</button>
				
		<div class="form-style-7 MyForm1">
<h1>POST AD FOR SELL NEW BOOK</h1>
<form method="post" action="includes/newbookad.inc.php" enctype="multipart/form-data" >
	<input type="text" name="nb_title" placeholder="Book Title">&nbsp;&nbsp;&nbsp;
			<input type="text" name="nb_price" placeholder="Book Price">
			<input type="text" name="stock" placeholder="Stock of book you have">&nbsp;&nbsp;&nbsp;
			<input type="text" name="author" placeholder="Author">
			<input type="text" name="nb_details" placeholder="Details about book">
			
			<label>Select Category</label>
			<select name="cat">';
				$sql = "SELECT 	* FROM category";
				$data = mysqli_query($conn, $sql) or die("error to connect to database");
				while($row = mysqli_fetch_assoc($data)) {
					echo '<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
				}
			echo '</select>
			<h3>Select Images</h3>
			<input type="file" name="nb_img1">
			<input type="file" name="nb_img2">
			<input type="file" name="nb_img3">
			<input type="file" name="nb_img4">
			<input type="file" name="nb_img5">
			<input type="submit" name="book-submit" value="Post Ad">
</form>
</div>

	<div class="form-style-7 MyForm">
<h1>POST AD FOR SELL OLD BOOK</h1>
<form method="post" action="includes/oldbookad.inc.php" enctype="multipart/form-data" >
	<input type="text" name="ob_title" placeholder="Book Title">&nbsp;&nbsp;&nbsp;
	<input type="text" name="ob_price" placeholder="Book Price">
	<input type="text" name="ob_details" placeholder="Details of book">&nbsp;&nbsp;&nbsp;
	<input type="text" name="author" placeholder="Author">
	<textarea name="discription" placeholder="A short Discription can help to sell your book first"></textarea>
	<label>Select Category</label>
	<select name="cat">';
		 
		$sql = "SELECT 	* FROM category";
		$data = mysqli_query($conn, $sql) or die("error to connect to database");
		while($row = mysqli_fetch_assoc($data)) {
			echo '<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
		}
	echo '
	</select>
	<h3>SELECT AT LEAST ONE IMAGE</h3>
	<input type="file" name="ob_img1">
	<input type="file" name="ob_img2">
	<input type="file" name="ob_img3">
	<input type="file" name="ob_img4">
	<input type="file" name="ob_img5">
	<input type="submit" name="book-submit" value="Post Ad">
</form>
</div>';

			}
			else if ($result['seller'] == "No") {
				echo '
	<div class="form-style-7">
<h1>POST AD FOR SELL OLD BOOK</h1>
<form method="post" action="includes/oldbookad.inc.php" enctype="multipart/form-data" >
	<input type="text" name="ob_title" placeholder="Book Title">&nbsp;&nbsp;&nbsp;
	<input type="text" name="ob_price" placeholder="Book Price">
	<input type="text" name="ob_details" placeholder="Details of book">&nbsp;&nbsp;&nbsp;
	<input type="text" name="author" placeholder="Author">
	<textarea name="discription" placeholder="A short Discription can help to sell your book first"></textarea>
	<label>Select Category</label>
	<select name="cat">';
		 
		$sql = "SELECT 	* FROM category";
		$data = mysqli_query($conn, $sql) or die("error to connect to database");
		while($row = mysqli_fetch_assoc($data)) {
			echo '<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
		}
	echo '
	</select>
	<h3>SELECT AT LEAST ONE IMAGE</h3>
	<input type="file" name="ob_img1">
	<input type="file" name="ob_img2">
	<input type="file" name="ob_img3">
	<input type="file" name="ob_img4">
	<input type="file" name="ob_img5">
	<input type="submit" name="book-submit" value="Post Ad">
</form>
</div>';
			}
		}
	}
		
	?>
	
	

</main>

<?php
	require "footer.php";
	?>	