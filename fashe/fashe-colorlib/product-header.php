<?php
	require_once('config.php'); 
	$flag_enter = -1;
if(!empty($_SESSION['login']) and !empty($_SESSION['id']) and 1 == $_SESSION['access']) $flag_enter = 1;
if(!empty($_SESSION['login']) and !empty($_SESSION['id']) and 0 == $_SESSION['access']) $flag_enter = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
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
						4U@gmail.com
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

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/shop-background.jpg);">
		<h2 class="l-text2 t-center">
			Wedding
		</h2>
		<p class="m-text13 t-center">
			New Arrivals Wedding Collection 2020
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="product.php" class="s-text13 active1">
									All
								</a>
							</li>

							<li class="p-t-4">
								<a href="product-rings.php" class="s-text13">
									Rings
								</a>
							</li>

							<li class="p-t-4">
								<a href="product-neckleces.php" class="s-text13">
									Neckleces
								</a>
							</li>

							<li class="p-t-4">
								<a href="product-braclets.php" class="s-text13">
									Braclets
								</a>
							</li>

							<li class="p-t-4">
								<a href="product-earrings.php" class="s-text13">
									Earrings
								</a>
							</li>
						</ul>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">