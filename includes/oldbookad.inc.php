<?php

	session_start();

	if (isset($_POST['book-submit'])) {
		if (isset($_SESSION['USERNAME'])) {
			require 'dbh.inc.php';

			mkdir("../upload_image/".$_SESSION['USERNAME']);
			
			$ob_title = $_POST['ob_title'];
			$ob_price = $_POST['ob_price'];
			$discription = $_POST['discription'];
			$ob_details = $_POST['ob_details'];
			$author = $_POST['author'];
			$cat = $_POST['cat'];
			$target_dir = "../upload_image/".$_SESSION['USERNAME']."/";
			$target_db = "upload_image/".$_SESSION['USERNAME']."/";
			$ob_img1 = $target_dir . basename($_FILES["ob_img1"]["name"]);
			$ob_img2 = $target_dir . basename($_FILES["ob_img2"]["name"]);
			$ob_img3 = $target_dir . basename($_FILES["ob_img3"]["name"]);
			$ob_img4 = $target_dir . basename($_FILES["ob_img4"]["name"]);
			$ob_img5 = $target_dir . basename($_FILES["ob_img5"]["name"]);

			$ob_img01 = $target_db . basename($_FILES["ob_img1"]["name"]);
			$ob_img02 = $target_db . basename($_FILES["ob_img2"]["name"]);
			$ob_img03 = $target_db . basename($_FILES["ob_img3"]["name"]);
			$ob_img04 = $target_db . basename($_FILES["ob_img4"]["name"]);
			$ob_img05 = $target_db . basename($_FILES["ob_img5"]["name"]);

			$sql = "INSERT INTO old_book_ad (ob_title, ob_price, ob_details, ob_description, author, ob_img1, ob_img2, ob_img3, ob_img4, ob_img5, cat_id, uid) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../sell.php?error=sqlerror");
			exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "ssssssssssss", $ob_title, $ob_price, $ob_details, $discription, $author, $ob_img01, $ob_img02, $ob_img03, $ob_img04, $ob_img05, $cat, $_SESSION['USERID']);
				mysqli_stmt_execute($stmt);
				move_uploaded_file($_FILES["ob_img1"]["tmp_name"], $ob_img1);
				move_uploaded_file($_FILES["ob_img2"]["tmp_name"], $ob_img2);
				move_uploaded_file($_FILES["ob_img3"]["tmp_name"], $ob_img3);
				move_uploaded_file($_FILES["ob_img4"]["tmp_name"], $ob_img4);
				move_uploaded_file($_FILES["ob_img5"]["tmp_name"], $ob_img5);
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