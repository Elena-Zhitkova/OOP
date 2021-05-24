<?php
$flag_enter = -1;
if(!empty($_SESSION['login']) and !empty($_SESSION['id']) and 1 == $_SESSION['access']) $flag_enter = 1;
if(!empty($_SESSION['login']) and !empty($_SESSION['id']) and 0 == $_SESSION['access']) $flag_enter = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="https://www.facebook.com/" class="topbar-social-item fa fa-facebook"></a>
					<a href="https://www.instagram.com/" class="topbar-social-item fa fa-instagram"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over $50
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						4u@gmail.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
						<?php
							if ($flag_enter == 1) {
								echo "<li>
								<a href='index.php'>Admin</a>
							</li>";
								}else
								if ($flag_enter == 0) {
									echo "<li>
									<a href='index.php'>User</a>
								</li>";
									}else
									if ($flag_enter == -1) {
										echo "<li>
										<a href='index.php'>You</a>
									</li>";
										}
							?>

							<li>
								<a href="index.php">Main</a>
							</li>
							<li>
								<a href="product.php">Shop</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="account.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<a href="cart.php" class="header-wrapicon1 dis-block">
							<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						</a>						
					</div>
				</div>
			</div>
		</div>
		
	</header>


	