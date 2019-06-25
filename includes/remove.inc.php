<?php 
	require 'dbh.inc.php';
	if (isset($_GET['c_id'])) {	
	$cart_id = $_GET['c_id'];
	$sql = 'DELETE FROM cart WHERE c_id = "'.$cart_id.'";';
	if(mysqli_query($conn, $sql))
		header("Location: ../cart.php?remove=seccuss");
	else 
		die("Error to Remove Item");
	}
	if (isset($_GET['ob_id'])) {
		$book_id = $_GET['ob_id'];
		$sql = 'DELETE FROM old_book_ad WHERE ob_id = "'.$book_id.'";';
		if (mysqli_query($conn, $sql)) {
			header("Location ../user_admin.php?remove=seccuss");
		}
		else {
			die("Error to Remove ad");
		}
	}
	if (isset($_GET['newadid'])) {
		$book_id = $_GET['newadid'];
		$sql = 'DELETE FROM new_book_ad WHERE nb_id = "'.$book_id.'";';
		if (mysqli_query($conn, $sql)) {
			header("Location ../seller_admin.php?remove=seccuss");
		}
		else {
			die("Error to Remove ad");
		}
	}
	if (isset($_GET['oldadid'])) {
		$book_id = $_GET['oldadid'];
		$sql = 'DELETE FROM old_book_ad WHERE ob_id = "'.$book_id.'";';
		if (mysqli_query($conn, $sql)) {
			header("Location ../seller_admin.php?remove=seccuss");
		}
		else {
			die("Error to Remove ad");
		}
	}

?>