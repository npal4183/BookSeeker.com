<?php 
	if (isset($_POST['login-submit'])) {
		
		require 'dbh.inc.php';

		$username = $_POST['uname'];
		$password = $_POST['pwd'];

		if (empty($username) || empty($password)) {
			header("Location: ../index.php?error=emptyfield");
			exit();
		}
		else {
			$sql = "SELECT uid, uname, pwd, seller FROM login_system WHERE uname=?;";
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../index.php?error=sqlerror");
			exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				if ($row = mysqli_fetch_assoc($result)) { 
					$pwdcheck = password_verify($password, $row['pwd']);
					if ($pwdcheck == false) {
						header("Location: ../index.php?error=wrongpassword");
						exit();
					}
					else if($pwdcheck == true){
						session_start();
						$_SESSION['USERNAME'] = $row['uname'];
						$_SESSION['SELLER'] = $row['seller'];
						$_SESSION['USERID'] = $row['uid'];
						header("Location: ../index.php?login=success");
						exit();				}
					else {
						header("Location: ../index.php?error=wrongpassword");
						exit();
					}
				}
				else
				{
					header("Lacation: ../index.php?error=nouser");
					exit();
				}
			}
		}
	}
	else {
		header("Location: ../index.php");
		exit();
	}