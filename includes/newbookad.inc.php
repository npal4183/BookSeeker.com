<?php

	session_start();

	if (isset($_POST['book-submit'])) {
		if (isset($_SESSION['USERNAME'])) {
			require 'dbh.inc.php';

			mkdir("../upload_image/".$_SESSION['USERNAME']);
			
			$nb_title = $_POST['nb_title'];
			$nb_price = $_POST['nb_price'];
			$nb_stock = $_POST['stock'];
			$nb_details = $_POST['nb_details'];
			$author = $_POST['author'];
			$cat = $_POST['cat'];
			$target_dir = "../upload_image/".$_SESSION['USERNAME']."/";
			$target_db = "upload_image/".$_SESSION['USERNAME']."/";
			$nb_img1 = $target_dir . basename($_FILES["nb_img1"]["name"]);
			$nb_img2 = $target_dir . basename($_FILES["nb_img2"]["name"]);
			$nb_img3 = $target_dir . basename($_FILES["nb_img3"]["name"]);
			$nb_img4 = $target_dir . basename($_FILES["nb_img4"]["name"]);
			$nb_img5 = $target_dir . basename($_FILES["nb_img5"]["name"]);

			$nb_img01 = $target_db . basename($_FILES["nb_img1"]["name"]);
			$nb_img02 = $target_db . basename($_FILES["nb_img2"]["name"]);
			$nb_img03 = $target_db . basename($_FILES["nb_img3"]["name"]);
			$nb_img04 = $target_db . basename($_FILES["nb_img4"]["name"]);
			$nb_img05 = $target_db . basename($_FILES["nb_img5"]["name"]);

			$sql = "INSERT INTO new_book_ad (nb_title, nb_price, stock, nb_details, author, nb_img1, nb_img2, nb_img3, nb_img4, nb_img5, cat_id, uid) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../sell.php?error=sqlerror");
			exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "ssssssssssss", $nb_title, $nb_price, $nb_stock, $nb_details, $author, $nb_img01, $nb_img02, $nb_img03, $nb_img04, $nb_img05, $cat, $_SESSION['USERID']);
				mysqli_stmt_execute($stmt);
				move_uploaded_file($_FILES["nb_img1"]["tmp_name"], $nb_img1);
				move_uploaded_file($_FILES["nb_img2"]["tmp_name"], $nb_img2);
				move_uploaded_file($_FILES["nb_img3"]["tmp_name"], $nb_img3);
				move_uploaded_file($_FILES["nb_img4"]["tmp_name"], $nb_img4);
				move_uploaded_file($_FILES["nb_img5"]["tmp_name"], $nb_img5);
				header("Location: ../sell.php?adpost=seccuss");
				exit();
			}

		}
		else {
			header("Location: ../sell.php?error=notloggedin");
			exit();
		}
	}
	else {
		header("Location: ../sell.php");
		exit();
	}