<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Fonswa Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Fonswa shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="styles/shop_responsive.css">

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
																echo '<li><a class="clc" href="#">'.$obj->Category_Name.'</a></li>';
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

	<!-- Shop -->
	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
								<div class="sidebar_section">
									<div class="sidebar_title">Category</div>
									<ul class="sidebar_categories">
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
							<div class="sidebar_section">
								<div class="sidebar_subtitle brands_subtitle">Brand</div>
								<ul class="brands_list">
									<?php
									//current URL of the Page. cart_update.php redirects back to this URL
									$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
									$results = $mysqli->query("SELECT * FROM product ORDER BY Product_ID ASC");
									if ($results) {

										while($obj = $results->fetch_object())
										{
											echo '<li><a class="clc" href="#"></a></li>';
											echo '<li class="brand"><a href="#">'.$obj->Model.'</a></li>';
										}
									}
								?>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-9">

					<!-- Shop Content -->
					<div class="shop_content">
						<div class="shop_bar clearfix">
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							<?php
								//current URL of the Page. cart_update.php redirects back to this URL
								$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
								$results = $mysqli->query("SELECT * FROM product ORDER BY Product_ID ASC");
								if ($results) {

									//Product Item
									while($obj = $results->fetch_object())
									{
										echo '<div class="product_item is_new">';
										echo '<div class="product_border"></div>';
										echo '<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.php?product='.$obj->productName.'"><img src="images/'.$obj->Picture.'"></a></div>';
										echo '<div class="product_content">';
										echo '<div class="product_price">'.$currency.$obj->Price.'</div>';
										echo '<div class="product_name"><div><a tabindex="0" href="product.php?product='.$obj->productName.'">'.$obj->productName.'</a></div></div>';
										echo '</div>';
										echo '<div class="product_fav"><i class="fas fa-heart"></i></div>';
										echo '<ul class="product_marks">';
										echo '</ul>';
										echo '</div>';
									}
								}
							?>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/shop_custom.js"></script>
</body>

</html>
