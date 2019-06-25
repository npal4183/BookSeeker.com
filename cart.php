<?php
	require 'header.php';
	require 'sidebar.php';
	?>
	
<main>
	<h1><u>CART</u></h1>
	<?php
		if (isset($_GET['remove'])) {
			echo '<div id = "remove-state">Item Removed Successfully</div>';
		}
	?>
	<!--<script type="text/javascript">
	function remove_item(c_id) {
		var cart_id = c_id;
		$.post("includes/remove.inc.php", cart_id:c_id, function(data) {
		$('#remove-state').html(data)
		});
		}
</script>-->
	<?php
	$t_price = 0;
	if(isset($_SESSION['USERNAME']))
	{
		$sql = "SELECT * FROM cart WHERE uid = ".$_SESSION['USERID'].";";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo '<table class="cart-table">
			<tr><th>Book Title</th><th>Book Price</th><th>Quantity</th><th>Image</th><th>Action</th></tr>';
			while ($row = mysqli_fetch_assoc($result)) {
				$sql = "SELECT nb_title, nb_price, nb_img1 FROM new_book_ad WHERE nb_id = ".$row['nb_id'].";";
				$nbd = mysqli_query($conn, $sql);
				$col = mysqli_fetch_assoc($nbd);
				echo "<tr>";
				echo '<td>'.$col['nb_title'].'</td>';				
				echo '<td>'.$col['nb_price'].'</td>';
				echo '<td>'.$row['quantity'].'</td>';
				echo '<td><img src="'.$col['nb_img1'].'" height=50px width=50px></td>';
				echo '<td><a href="includes/remove.inc.php?c_id='.$row['c_id'].'"><button>Remove</button></a></td>';
				echo '</tr>';
				$t_price += $col['nb_price'];


				//echo '<tr><td>'.$row['uid'].'</td><td>'.$row['nb_id'].'</td><td>'.$row['quantity'].'</td><td><a href="includes/remove.inc.php?c_id='.$row['c_id'].'"><button>Remove</button></a></td></tr>';
			}
			echo '<tr><td colspan="5">Total Price : '.$t_price.'</td></tr>';	
		echo '<tr><td colspan="5"><center><a href="checkout.php?amount='.$t_price.'"><button class="Mybtn"><u>CHECKOUT</button></u></a></center></td></tr>';
			echo '</table>';
		}

		
	}
	else {
		echo '<p>You are not login</p>';




	}
	?>
	
</main>

<?php
	require 'footer.php';
	?>