<?php
	if (isset($_POST["signup-submit"])) {
		
		require 'dbh.inc.php'; 
	
		$uname = $_POST['uname'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$pwd = $_POST['pwd'];
		$pwd_repeat = $_POST['pwd_repeat'];
		$email = $_POST['mail'];
		$phone= $_POST['phone'];
		$address = $_POST['address'];
		$seller = $_POST['seller'];

				
		if (empty($uname) || empty($fname) || empty($lname) || empty($pwd) || empty($pwd_repeat) || empty($email) || empty($address) || empty($phone) || empty($seller)) 
		{
			header("Location: ../signup.php?error=emptyfeilds&uname=".$uname."&fname=".$fname."&lname=".$lname."&mail=".$email."&address=".$address);
			exit();
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
			header("Location: ../signup.php?error=emptyfeilds&fname=".$fname."&lname=".$lname."&address=".$address);
			exit();
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../signup.php?error=emptyfeilds&uname=".$uname."&fname=".$fname."&lname=".$lname."&address=".$address);
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
			header("Location: ../signup.php?error=emptyfeilds&mail=".$email."&fname=".$fname."&lname=".$lname."&address=".$address);
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $fname)) {
			header("Location: ../signup.php?error=emptyfeilds&uname=".$uname."&lname=".$lname."&mail=".$email."&address=".$address);
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $lname)) {
			header("Location: ../signup.php?error=emptyfeilds&mail=".$email."&fname=".$fname."&address=".$address);
			exit();
		}
		else if ($pwd !== $pwd_repeat) {
			header("Location: ../signup.php?error=emptyfeilds&uname=".$uname."&fname=".$fname."&lname=".$lname."&mail=".$email."&address=".$address);
			exit();
		}
		else {
			$sql = "SELECT uname FROM login_system WHERE uname=?";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../signup.php?error=sqlerror");
			exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "s", $uname);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultcheck = mysqli_stmt_num_rows($stmt);
				if ($resultcheck > 0) {
					header("Location: ../signup.php?error=userexist&fname=".$fname."&lname=".$lname."&mail=".$email."&address=".$address);
					exit();
				}
				else {
					$sql = "INSERT INTO login_system(uname,pwd,fname,lname,phone,email,address,seller) VALUES(?,?,?,?,?,?,?,?);";
					$stmt = mysqli_stmt_init($conn);	
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("Location: ../signup.php?error=sqlerror");
					exit();
					}
					else {
						$hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt, "ssssssss", $uname, $hashpwd, $fname, $lname, $phone, $email, $address, $seller);
						mysqli_stmt_execute($stmt);
						header("Location: ../signup.php?signup=success");
						exit();
					}

				}

			}
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	else {
		header("Location: ../signup.php");
		exit();
	}