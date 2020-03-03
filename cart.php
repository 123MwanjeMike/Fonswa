<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Fonswa Order</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Fonswa Electricals & Electronics shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">

</head>

<body>

<div class="super_container">
	 <!-- Header -->
	<header class="header">
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown"></ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								<div><a href="register.php">Register</a></div>
								<div><a href="Sign In.php">Sign in</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Main -->
		<div class="header_main">
			<div class="container">
				<div class="row">
					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="index.php">Fonswa</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="product.php" method="get" class="header_search_form clearfix">
										<input type="search" name="product" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<?php
														//current URL of the Page. cart_update.php redirects back to this URL
														$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
														$results = $mysqli->query("SELECT * FROM category ORDER BY Category_ID ASC");
														if ($results) {

															while($obj = $results->fetch_object())
															{
																echo '<li><a class="clc" href="category.php?category='.$obj->Category_Name.'">'.$obj->Category_Name.'</a></li>';
															}
														}
													?>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		 <!-- Main Navigation -->
		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									<?php
										//current URL of the Page. cart_update.php redirects back to this URL
										$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
										$results = $mysqli->query("SELECT * FROM category ORDER BY Category_ID ASC");
										if ($results) {

											while($obj = $results->fetch_object())
											{
												echo '<li><a href="category.php?category='.$obj->Category_Name.'">'.$obj->Category_Name.'<i class="fas fa-chevron-right ml-auto"></i></a></li>';

											}
										}
									?>
								</ul>
							</div>

							<!-- Main Nav Menu -->
							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="shop.php">SHOP NOW<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">More</a>
										<ul>
											<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="contact.php">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
								</ul>
							</div>		<!-- Menu Trigger -->
									<div class="menu_trigger_container ml-auto">
										<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
											<div class="menu_burger">
												<div class="menu_trigger_text">menu</div>
												<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>

				<!-- Menu -->
				<div class="page_menu">
					<div class="container">
						<div class="row">
							<div class="col">

								<div class="page_menu_content">

									<div class="page_menu_search">
										<form action="#">
											<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
										</form>
									</div>
									<ul class="page_menu_nav">
										<li class="page_menu_item"><a href="index.php">Home<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item"><a href="shop.php">Shop Now<i class="fa fa-angle-down"></i></a></li>
		                <li class="page_menu_item"><a href="cart.php">Cart<i class="fa fa-angle-down"></i></a></li>
		                <li class="page_menu_item"><a href="contact.php">Contact<i class="fa fa-angle-down"></i></a></li>
									</ul>
									<ul>
										<div class="top_bar_user">
											<div class="user_icon"><img src="images/user.svg" alt=""></div>
											<div><a href="register.php">Register</a></div>
											<div><a href="Sign In.php">Sign in</a></div>
										</div>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

	<!-- Cart -->
	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Order</div>
						<div class="cart_items">
							<ul class="cart_list">
								<?php
									//current URL of the Page. cart_update.php redirects back to this URL
									$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
									$results = $mysqli->query("SELECT * FROM product ORDER BY Product_ID ASC");
									
									if ($results) {

										//Slider items
										while($obj = $results->fetch_object())
										{
											echo '<li class="cart_item clearfix">';
											echo '<div class="cart_item_image"><img src="images/'.$obj->Picture.'"></div>';
											echo '<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">';
											echo '<div class="cart_item_name cart_info_col">';
											echo '<div class="cart_item_title">Name</div>';
											echo '<div class="cart_item_text">'.$obj->productName.'</div>';
											echo '</div>';
											echo '<div class="cart_item_price cart_info_col">';
											echo '<div class="cart_item_title">Details</div>';
											echo '<div class="cart_item_text">'.$obj->Description.'</div>';
											echo '</div>';
											echo '<div class="cart_item_total cart_info_col">';
											echo '<div class="cart_item_title">Price</div>';
											echo '<div class="cart_item_text">'.$currency.$obj->Price.'</div>';
											echo '</div>';
											echo '</div>';
											echo '</li>';
											//break;
										}
									}
								?>
							</ul>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_checkout">Order now</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


		<div class="brands">
			<div class="container">
				<div class="row">
					<div class="col">
						<p>
							<font size="+2"><i>The only Electronic and Electricals online shop you can trust, around campus</i></font>
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 footer_col">
						<div class="footer_column footer_contact">
							<div class="logo_container">
								<div class="logo"><a href="index.php">Fonswa</a></div>
							</div>
							<div class="footer_title">Got Question? Call/WhatsApp Us</div>
							<div class="footer_phone">+256 786 795390/+256 756 872607 </div>
							<div class="footer_contact_text">
								<p>Sir Apollo Kaggwa Road, Wandegeya</p>
								<p>Makerere University Wandegeya, Kampala</p>
							</div>
						</div>
					</div>

					<div class="col-lg-2 offset-lg-2">
						<div class="footer_column">
							<div class="footer_title">Find it Fast</div>
							<ul class="footer_list">
								<?php
									//current URL of the Page. cart_update.php redirects back to this URL
									$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
									$results = $mysqli->query("SELECT * FROM category ORDER BY Category_ID ASC");
									if ($results) {

										while($obj = $results->fetch_object())
										{
											echo '<li><a href="category.php?category='.$obj->Category_Name.'">'.$obj->Category_Name.'</a></li>';
										}
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Copyright -->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
							<div class="copyright_content">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/cart_custom.js"></script>
</body>

</html>
