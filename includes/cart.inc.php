<?php 
	
	
	if (isset($_GET['userid'])) {
		if ($_GET['userid'] !== '') {
			require 'dbh.inc.php';
			$sql = "INSERT INTO cart(uid, nb_id, quantity, seller_id) values('".$_GET['userid']."', '".$_GET['bookid']."', '1', ".$_GET['seller'].");";
			mysqli_query($conn, $sql) or die("Database Error");
			header("Location: ../");

		}
		else if($_GET['userid'] == '') {
			//user not logged in
			echo "user not logged in";
			header("Location: ../");
		}
	}
	else {
		//illegal access
		echo "illegal access";
	}

?>