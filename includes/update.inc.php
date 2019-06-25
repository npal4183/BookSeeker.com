<?php 
	session_start();
	require 'dbh.inc.php';
	if (isset($_SESSION['USERNAME'])) {
		if (isset($_POST['update-password'])) {
			if (empty($_POST['pwd'])) {
				header("Location: ../user_admin.php?field=empty");
			}
		else {

			$sql = "UPDATE login_system SET pwd = ? WHERE uid = ".$_SESSION['USERID'].";";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../user_admin.php?error=sqlerror");
			exit();
			}
			else {
				$hashpwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "s", $hashpwd );
				mysqli_stmt_execute($stmt);
				header("Location: ../user_admin.php?passwordupadate=success");
				exit();
			}

		}
		}
		if (isset($_POST['update-address'])) {
			if (empty($_POST['address'])) {
				header("Location: ../user_admin.php?field=empty");
			}
		else {

			$sql = "UPDATE login_system SET address = ? WHERE uid = ".$_SESSION['USERID'].";";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../user_admin.php?error=sqlerror");
			exit();
			}
			else {
				$address = $_POST['address'];
				mysqli_stmt_bind_param($stmt, "s", $address);
				mysqli_stmt_execute($stmt);
				header("Location: ../user_admin.php?addressupadate=success");
				exit();
			}

		}
		}
		if (isset($_POST['update-old-ad'])) {

			mkdir("../upload_image/".$_SESSION['USERNAME']);
			
			$ob_title = $_POST['ob_title'];
			$ob_price = $_POST['ob_price'];
			$discription = $_POST['discription'];
			$ob_details = $_POST['ob_details'];
			$author = $_POST['author'];
			$target_dir = "../upload_image/".$_SESSION['USERNAME']."/";
			$target_db = "upload_image/".$_SESSION['USERNAME']."/";
			$ob_img1 = $target_dir . basename($_FILES["ob_img1"]["name"]);

			$ob_img01 = $target_db . basename($_FILES["ob_img1"]["name"]);

			$sql = "UPDATE old_book_ad SET ob_title = ?, ob_price = ?, discription = ?, ob_details = ?, author = ?, ob_img1 = ? WHERE ob_id = ".$_SESSION['ob_id']." ;";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../sell.php?error=sqlerror");
			exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "ssssss", $ob_title, $ob_price, $ob_details, $discription, $author, $ob_img01);
				mysqli_stmt_execute($stmt);
				move_uploaded_file($_FILES["ob_img1"]["tmp_name"], $ob_img1);
				header("Location: ../sell.php?adpost=seccuss");
				exit();
			}

		}
		if (isset($_POST['update-password1'])) {
			if (empty($_POST['pwd'])) {
				header("Location: ../seller_admin.php?field=empty");
			}
		else {

			$sql = "UPDATE login_system SET pwd = ? WHERE uid = ".$_SESSION['USERID'].";";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../seller_admin.php?error=sqlerror");
			exit();
			}
			else {
				$hashpwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "s", $hashpwd );
				mysqli_stmt_execute($stmt);
				header("Location: ../seller_admin.php?passwordupadate=success");
				exit();
			}

		}
		}
		if (isset($_POST['update-address1'])) {
			if (empty($_POST['address'])) {
				header("Location: ../seller_admin.php?field=empty");
			}
		else {

			$sql = "UPDATE login_system SET address = ? WHERE uid = ".$_SESSION['USERID'].";";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../seller_admin.php?error=sqlerror");
			exit();
			}
			else {
				$address = $_POST['address'];
				mysqli_stmt_bind_param($stmt, "s", $address);
				mysqli_stmt_execute($stmt);
				header("Location: ../seller_admin.php?addressupadate=success");
				exit();
			}

		}
		}
		if (isset($_POST['update-new-ad'])) {

			mkdir("../upload_image/".$_SESSION['USERNAME']);
			
			$nb_title = $_POST['nb_title'];
			$nb_price = $_POST['nb_price'];
			$nb_stock = $_POST['stock'];
			$nb_details = $_POST['nb_details'];
			$author = $_POST['author'];
			$target_dir = "../upload_image/".$_SESSION['USERNAME']."/";
			$target_db = "upload_image/".$_SESSION['USERNAME']."/";
			$nb_img1 = $target_dir . basename($_FILES["nb_img1"]["name"]);

			$nb_img01 = $target_db . basename($_FILES["nb_img1"]["name"]);

			$sql = "UPDATE new_book_ad SET nb_title = ?, nb_price = ?, stock = ?, nb_details = ?, author = ?, nb_img1 = ? WHERE ob_id = ".$_SESSION['nb_id']." ;";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../sell.php?error=sqlerror");
			exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "ssssssssss", $nb_title, $nb_price, $nb_stock, $nb_details, $author, $nb_img01);
				mysqli_stmt_execute($stmt);
				move_uploaded_file($_FILES["nb_img1"]["tmp_name"], $nb_img1);
				header("Location: ../sell.php?newadupdate=seccuss");
				exit();
			}

		}

		}
		
		

	}
	else {
		header("Location: ../index.php?error=illegal");
	}

?>