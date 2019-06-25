<?php 
	session_start();
	require 'includes/dbh.inc.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>BCA PROJECT</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery.min.js"></script>
	<script type="text/javascript">
		function searchp() {
			var searchtxt = $("#search input[name='search']").val();
			$.post("includes/search.inc.php", {
				searchval: searchtxt  
			},
			function(output) {
				$("#output").html(output);
			});
		}
	</script>
</head>
<body>
	<header>
		<a href="index.php"><img src="image/bookmark.png" class="logo"></a>
		<ul id="menu">

			<li><a href="index.php">HOME</a></li>
			<li><a href="newbookads.php">NEW</a></li>
			<li><a href="oldbookads.php">OLD</a></li>
			<li><a href="sell.php">SELL</a></li>
			
		</ul>

		<form action="index.php" method="post" id = "search"><input type="text" name="search" placeholder="Search" onkeyup="searchp();"><input type="submit" id="s-icon" value=""></form>
		<div class="menu-btn">
			<a href="cart.php" class="icon"><img src="image/cart.svg"></a>
			<?php
				$admin ;
				$url = "#";

				if (isset($_SESSION['USERNAME'])) {
					if ($_SESSION['SELLER'] === "Yes") {
						$url = "seller_admin.php";
						$admin = "seller";
					}
					else if ($_SESSION['SELLER'] === "No") {
						$url = "user_admin.php";
						$admin = "user";
					}
						echo '<a href="'.$url.'?profile='.$admin.'&USERNAME='.$_SESSION['USERNAME'].'" class="icon"><img src="image\118705-free-basic-ui-elements\svg\profile.svg" /></a>
							<form method="post" action="includes/logout.inc.php">
								<button type="submit" name="logout-submit" value="Logout">Logout</button>
							</form>';
				}else {
						
						echo '<button id="login">Login</button>
								<div class="login">
									<div class="login-design">

										<form method="post" action="includes/login.inc.php">
										<h1>Login</h1>
											<input type="text" name="uname" placeholder="Username/Email">
											<input type="password" name="pwd" placeholder="Password">
											<input type="submit" name="login-submit" value="Login">
										</form>
										<img src="image/cancel-1.svg" >
									</div>
								</div>
								<a href="signup.php"class="inline"><button id="signup">Signup</button></a>';
				}
			?>
			
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#login').click(function() {
					$('.login').show();
				});
			});
			$('.login-design img').click(function() {
				$('.login').hide();
			});
		</script>
	
	</header>
		<?php
			if (!isset($_SESSION['USERNAME']))
				$_SESSION['USERID'] = null;
		?>