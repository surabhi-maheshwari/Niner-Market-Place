<?php



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>
<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home Shop 1 | Assyrian</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Google Fonts
		============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,400italic,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font awesome CSS
		============================================ -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- jquery-ui CSS
		============================================ -->
	<link rel="stylesheet" href="css/jquery-ui.css">
	<!-- social-likes_classic CSS
		============================================ -->
	<link rel="stylesheet" href="css/social-likes_classic.css">
	<!-- venobox CSS
		============================================ -->
	<link rel="stylesheet" href="css/venobox.css">
	<!-- owl.carousel CSS
		============================================ -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.transitions.css">
	<!-- nivo slider CSS
		============================================ -->
	<link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
	<!-- animate CSS
		============================================ -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- normalize CSS
		============================================ -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- meanmenu CSS
		============================================ -->
	<link rel="stylesheet" href="css/meanmenu.css">
	<!-- main CSS
		============================================ -->
	<link rel="stylesheet" href="css/main.css">
	<!-- style CSS
		============================================ -->
	<link rel="stylesheet" href="style.css">
	<!-- responsive CSS
		============================================ -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- modernizr JS
		============================================ -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="home">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Add your site or application content here -->
<header>
	<div class="header-container">
		<!--header top start-->
		<div class="container">
			<div class="top-bar">
				<div class="topbar-content">
					<div class="header-email widget">
						<i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:viveklakshmanan@live.com ">viveklakshmanan@live.com </a>
					</div>
					<div class="header-phone widget"><i class="fa  fa-phone"></i><strong>Phone:</strong><a href="tel:+16692924707"> (669) 272-4707</a> </div>
					<div class="top-menu widget">
						<div class="menu-top-menu-container">
							<ul class="nav_menu" id="menu-top-menu">
								<li class="menu-item  first"><a href="my-account.html">My Account</a></li>
								<li class="menu-item"><a href="wishlist.html">My Wishlist</a></li>
								<li class="menu-item"><a href="shopping-cart.html">Shopping Cart</a></li>
								<li class="menu-item"><a href="checkout.html">Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--header top end-->
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<div class="global-table">
							<div class="global-row">
								<div class="global-cell">
									<div class="logo">
										<a href="index.html" title="Market-Place" ><img src="img/logo/logo-1.png" alt="logo image" ></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-9 hidden-sm hidden-xs">
						<div class="horizontal-menu">
							<div class="global-table">
								<div class="global-row">
									<div class="global-cell">
										<div class="visible-large">
											<div class="mega_main mega_main_menu" id="mega_main_menu_first">
												<div class="menu_holder">
													<div class="menu_inner">
														<nav>
															<ul class="mega_main_menu_ul" id="mega_main_menu_ul_first">
																<li class="menu-item active">
																	<a class="item_link" href="index.html">
															<span class="link_content">
																<span class="link_text">Home</span>
															</span>
																	</a>
																</li>
																<li class="menu-item megamenu_list">
																	<a class="item_link" href="shop.html?id=4">
															<span class="link_content">
																<span class="link_text">Shop</span>
															</span>
																	</a>
																</li>
																<li class="menu-item">
																	<a class="item_link" href="blog.html">
															<span class="link_content">
																<span class="link_text">Blog</span>
															</span>
																	</a>
																</li>
																<li class="menu-item">
																	<a class="item_link" href="index.html#">
															<span class="link_content">
																<span class="link_text">Portfolio</span>
															</span>
																	</a>
																</li>
																<li class="menu-item">
																	<a class="item_link" href="index.html#">
															<span class="link_content">
																<span class="link_text">Pages</span>
															</span>
																	</a>
																</li>
																<li class="menu-item">
																	<a class="item_link" href="contact-us.html">
															<span class="link_content">
																<span class="link_text">Contact Us</span>
															</span>
																	</a>
																</li>
															</ul>
														</nav>
													</div>
													<!-- /class="menu_inner" -->
												</div>
												<!-- /class="menu_holder" -->
											</div>
											<!-- /id="mega_main_menu" -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 hidden-md hidden-lg">
						<!-- Main Menu End -->
						<div class='mobile-menu-area'>
							<nav id="mobile-menu">
								<ul>
									<li><a href="index.html">Home</a>
									</li>
									<li><a href="shop.html">Shop</a>

									</li>
									<li><a href="blog.html">Blog</a>

									</li>
									<li><a href="portfolio-detailas.html">Portfolio</a>

									</li>
									<li><a href="index.html#">Pages</a>
									</li>
								</ul>
							</nav>
						</div>
						<!-- Main Menu End -->
					</div>
				</div>
			</div>
			<!--/ container -->
			<div class="nav-container">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="left-category-menu hidden-sm hidden-xs">
								<div class="left-product-cat">
									<div class="category-heading">
										<h2>categories</h2>
									</div>
									<!-- CATEGORY-MENU-LIST START -->
									<div class="category-menu-list" style="display: none;">
										<ul>
											<!--SINGLE MENU START-->
											<li class="arrow-plus">
												<a href="shop.html?id=4"><span class="cat-thumb "><i class="fa fa-laptop"></i></span>Cold stone</a>
											</li>
											<li class="arrow-plus">
												<a href="shop.html?id=6"><span class="cat-thumb "><i class="fa fa-laptop"></i></span>Fashionista</a>
											</li>
											<li class="arrow-plus">
												<a href="shop.html?id=5"><span class="cat-thumb "><i class="fa fa-laptop"></i></span>Home-Decors</a>
											</li>
											<li class="arrow-plus">
												<a href="shop.html?id=3"><span class="cat-thumb "><i class="fa fa-laptop"></i></span>Ice-Modders</a>
											</li>
											<li class="arrow-plus">
												<a href="shop.html?id=2"><span class="cat-thumb "><i class="fa fa-laptop"></i></span>Kadart</a>
											</li>
											<li class="arrow-plus">
												<a href="shop.html?id=1"><span class="cat-thumb "><i class="fa fa-laptop"></i></span>MTV Connect</a>
											</li>
										</ul>
									</div>
									<!-- CATEGORY-MENU-LIST END -->
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="search-cart-list">
								<div class="header-search">
									<div class="cate-toggler">All Categories</div>
									<div class="product-category">
										<ul>
											<li><a href="index.html#">All Categories</a></li>
											<li><a href="index.html#">Accessories</a></li>
											<li><a href="index.html#">Bags</a></li>
                                            <li><a href="index.html#">Shoes</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                        </ul>
									</div>
									<form>
										<div>
											<input type="text" onfocus="if (this.value == 'Search product...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search product...';}" value="Search product..." placeholder="">
											<button type="submit">
												<i class="fa fa-search"></i>
											</button>
										</div>
									</form>
								</div>
								<div class="cart-total">
									<ul>
										<li>
											<a href="shopping-cart.html" class="cart-toggler">
												<span class="cart-no"><i class="fa fa-shopping-cart"></i> My cart : 2  items</span>
											</a>
										</li>
									</ul>
									<div class="mini_cart_inner">
										<ul class="cart_list">
											<li>
												<a class="product-image" href="index.html#">
													<img src="img/product/41.jpg" alt="cart-pro-img">
													<span class="quantity">1</span>
												</a>
												<div class="product-details">
													<a href="index.html#" class="remove" title="Remove this item"><i class="fa fa-times-circle"></i></a>
													<a class="product-name" href="index.html#">Aenean sagittis</a>
													<span class="cart-price-box">
																<span class="amount">$75.00</span>
															</span>
												</div>
											</li>
											<li>
												<a class="product-image" href="index.html#">
													<img src="img/product/44.jpg" alt="cart-pro-img">
													<span class="quantity">2</span>
												</a>
												<div class="product-details">
													<a href="index.html#" class="remove" title="Remove this item"><i class="fa fa-times-circle"></i></a>
													<a class="product-name" href="index.html#">Rafiq sagittis</a>
													<span class="cart-price-box">
																<span class="amount">$120.00</span>
															</span>
												</div>
											</li>
										</ul>
										<!-- end product list -->
										<p class="total">Subtotal: <span class="amount">$315.00</span></p>
										<p class="buttons">
											<a href="index.html#" class="button checkout wc-forward">Checkout</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ container -->
				</div>
			</div>
		</div>
	</div>
</header>
<!--/ Header -->
<!--<div class="clear"></div>-->
<section class="slider-area" >
	<div>
		<div id="ensign-nivoslider" class="slides"> <img src="img/sliders/slider-1/bg-1.png" alt="" title="#slider-direction-1"  /> </div>
		<div id="slider-direction-1" class="t-cn slider-direction slider-one">
			<div class="layer-1-1"> <img style="margin-left: 60px;" src="img/sliders/slider-1/lily.png" alt="" /> </div>
			<div class="layer-1-2">
				<h5 class="title2">The spring collection 2017</h5>
			</div>
			<div class="layer-1-3">
				<h3 class="title3">Exclusive</h3>
			</div>
			<div class="layer-1-4 hidden-sm hidden-xs"> <img src="img/sliders/slider-1/3.png" alt="" /> </div>
			<div class="layer-1-5">
				<h3 class="title5">Deals</h3>
			</div>
			<div class="layer-1-6"> <img src="img/sliders/slider-1/4.png" alt="" /> </div>
			<div class="layer-1-7">
				<h5 class="title7">Sale up to 70% on featured products</h5>
			</div>
		</div>
	</div>
</section>
<div class="main-banner-area">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<div class="banner-content-padding">
					<div class="banner-img"> <a href="#"><img src="img/banners/shoes-collection.jpg" alt="banner picture" /></a> </div>
				</div>
			</div>
			<div class="col-md-7 col-sm-6">
				<div class="banner-content-padding">
					<div class="banner-content">
						<h2>discounts upto <strong style="color:hsla(116,54%,54%,1.00)">70%</strong></h2>
						<h1>Great Deals</h1>
						<p><a href="shop.html" class="button">VIEW COLLECTION</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="new-product-area">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <div class="col-md-12">
                    <h3><span>TOP PRODUCTS</span>
                        <i class="cross-icon"><i></i></i>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="new-product-list">
                <div class="col-md-12 text-center fix">
                    <div class="tab-menu">
                        <!-- Nav tabs -->
                        <ul id="store" class="nav nav-tabs" role="tablist">
                                <li data-input="0" role="presentation" class="active">
                                    <a href="index.php#all" aria-controls="all" role="tab" data-toggle="tab">All</a>
                                </li>
                                <li data-input="4" role="presentation" >
                                    <a href="index.php#cold" aria-controls="cold" role="tab" data-toggle="tab">COLD STONE</a>
                                </li>
                                <li data-input="6" role="presentation">
                                    <a href="index.php#fashion" aria-controls="fashion" role="tab" data-toggle="tab">FASHIONISTA</a>
                                </li>
                                <li data-input="5" role="presentation">
                                    <a href="index.php#home" aria-controls="home" role="tab" data-toggle="tab">HOME DECORS</a>
                                </li>
                                <li data-input="3" role="presentation">
                                    <a href="index.php#ice" aria-controls="ice" role="tab" data-toggle="tab">ICE MODDERS</a>
                                </li>
                                <li data-input="2" role="presentation">
                                    <a href="index.php#kadart" aria-controls="kadart" role="tab" data-toggle="tab">KADART</a>
                                </li>
                                <li data-input="1" role="presentation">
                                    <a href="index.php#mtv" aria-controls="mtv" role="tab" data-toggle="tab">MTV CONNECT</a>
                                </li>
                            </ul>
                    </div>
                </div>

                <!-- Tab panes -->
                <div class="clear"></div>
                <div class="tab-content product-list">
                <div class="tab-pane fade active in" id="all">
            <div class="tabbable">
                <ul class="nav nav-tabs text-center fix">
                    <li role="presentation" class="active">
                        <a href="index.html#all1" aria-controls="all1" role="tab" data-toggle="tab">Most Visited</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#all2" aria-controls="all2" role="tab" data-toggle="tab">Recent</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#all3" aria-controls="all3" role="tab" data-toggle="tab">Top Rated</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#all4" aria-controls="all4" role="tab" data-toggle="tab">Top Commented</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="all1">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $sql = "SELECT * FROM `Product` LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="all2">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                if(isset($_COOKIE['all'])) {
                                    $prod = $_COOKIE['all'];
                                    $prod = stripslashes($prod);    // string is stored with escape double quotes 
                                    $prod = json_decode($prod, true);
                                    $first = $prod['1st'];
                                    $second = $prod['2nd'];
                                    $third = $prod['3rd'];
                                    $fourth = $prod['4th'];
                                    $fifth = $prod['5th'];
                                
                                $sql = "SELECT * FROM `Product` where Productid IN ('" . $first . "','" . $second . "','" . $third . "','" . $fourth . "','" . $fifth . "') LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="all3">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $sql = "SELECT avg(Rating) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId group by A.ProductId order by AVG(Rating) desc Limit 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="all4">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $sql = "Select count(*) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId group by A.ProductId order by count(*) desc  LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade in" id="cold">
            <div class="tabbable">
                <ul class="nav nav-tabs text-center fix">
                    <li role="presentation" class="active">
                        <a href="index.html#cold1" aria-controls="cold1" role="tab" data-toggle="tab">Most Visited</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#cold2" aria-controls="cold2" role="tab" data-toggle="tab">Recent</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#cold3" aria-controls="cold3" role="tab" data-toggle="tab">Top Rated</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#cold4" aria-controls="cold4" role="tab" data-toggle="tab">Top Commented</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="cold1">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 4;
                                $sql = "SELECT * FROM `Product` WHERE ProductId > " . $id*1000 . " and ProductId < ". ($id + 1)*1000 . " LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="cold2">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                if(isset($_COOKIE['cold'])) {
                                    $prod = $_COOKIE['cold'];
                                    $prod = stripslashes($prod);    // string is stored with escape double quotes 
                                    $prod = json_decode($prod, true);
                                    $first = $prod['1st'];
                                    $second = $prod['2nd'];
                                    $third = $prod['3rd'];
                                    $fourth = $prod['4th'];
                                    $fifth = $prod['5th'];
                                
                                $sql = "SELECT * FROM `Product` where Productid IN ('" . $first . "','" . $second . "','" . $third . "','" . $fourth . "','" . $fifth . "') LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="cold3">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 4;
                                $sql = "SELECT avg(Rating) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by AVG(Rating) desc Limit 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="cold4">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 4;
                                $sql = "Select count(*) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by count(*) desc  LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="fashion">
            <div class="tabbable">
                <ul class="nav nav-tabs text-center fix">
                    <li role="presentation" class="active">
                        <a href="index.html#fashion1" aria-controls="fashion1" role="tab" data-toggle="tab">Most Visited</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#fashion2" aria-controls="fashion2" role="tab" data-toggle="tab">Recent</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#fashion3" aria-controls="fashion3" role="tab" data-toggle="tab">Top Rated</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#fashion4" aria-controls="fashion4" role="tab" data-toggle="tab">Top Commented</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="fashion1">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 6;
                                $sql = "SELECT * FROM `Product` WHERE ProductId > " . $id*1000 . " and ProductId < ". ($id + 1)*1000 . " LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ fashioninsta item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="fashion2">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                if(isset($_COOKIE['fashion'])) {
                                    $prod = $_COOKIE['fashion'];
                                    $prod = stripslashes($prod);    // string is stored with escape double quotes 
                                    $prod = json_decode($prod, true);
                                    $first = $prod['1st'];
                                    $second = $prod['2nd'];
                                    $third = $prod['3rd'];
                                    $fourth = $prod['4th'];
                                    $fifth = $prod['5th'];
                                
                                $sql = "SELECT * FROM `Product` where Productid IN ('" . $first . "','" . $second . "','" . $third . "','" . $fourth . "','" . $fifth . "') LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ fashioninsta item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="fashion3">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 6;
                                $sql = "SELECT avg(Rating) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by AVG(Rating) desc Limit 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ fashioninsta item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="fashion4">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 6;
                                $sql = "Select count(*) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by count(*) desc  LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ fashioninsta item End -->
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="home">
            <div class="tabbable">
                <ul class="nav nav-tabs text-center fix">
                    <li role="presentation" class="active">
                        <a href="index.html#home1" aria-controls="home1" role="tab" data-toggle="tab">Most Visited</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#home2" aria-controls="home2" role="tab" data-toggle="tab">Recent</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#home3" aria-controls="home3" role="tab" data-toggle="tab">Top Rated</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#home4" aria-controls="home4" role="tab" data-toggle="tab">Top Commented</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home1">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 5;
                                $sql = "SELECT * FROM `Product` WHERE ProductId > " . $id*1000 . " and ProductId < ". ($id + 1)*1000 . " LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ home decor item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="home2">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                if(isset($_COOKIE['home'])) {
                                    $prod = $_COOKIE['home'];
                                    $prod = stripslashes($prod);    // string is stored with escape double quotes 
                                    $prod = json_decode($prod, true);
                                    $first = $prod['1st'];
                                    $second = $prod['2nd'];
                                    $third = $prod['3rd'];
                                    $fourth = $prod['4th'];
                                    $fifth = $prod['5th'];
                                
                                $sql = "SELECT * FROM `Product` where Productid IN ('" . $first . "','" . $second . "','" . $third . "','" . $fourth . "','" . $fifth . "') LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ home decor item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="home3">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 5;
                                $sql = "SELECT avg(Rating) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by AVG(Rating) desc Limit 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ home decor item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="home4">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 5;
                                $sql = "Select count(*) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by count(*) desc  LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ home decor item End -->
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="ice">
            <div class="tabbable">
                <ul class="nav nav-tabs text-center fix">
                    <li role="presentation" class="active">
                        <a href="index.html#ice1" aria-controls="ice1" role="tab" data-toggle="tab">Most Visited</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#ice2" aria-controls="ice2" role="tab" data-toggle="tab">Recent</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#ice3" aria-controls="ice3" role="tab" data-toggle="tab">Top Rated</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#ice4" aria-controls="ice4" role="tab" data-toggle="tab">Top Commented</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="ice1">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 3;
                                $sql = "SELECT avg(Rating) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by AVG(Rating) desc Limit 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ ice modder item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="ice2">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                if(isset($_COOKIE['ice'])) {
                                    $prod = $_COOKIE['ice'];
                                    $prod = stripslashes($prod);    // string is stored with escape double quotes 
                                    $prod = json_decode($prod, true);
                                    $first = $prod['1st'];
                                    $second = $prod['2nd'];
                                    $third = $prod['3rd'];
                                    $fourth = $prod['4th'];
                                    $fifth = $prod['5th'];
                                
                                $sql = "SELECT * FROM `Product` where Productid IN ('" . $first . "','" . $second . "','" . $third . "','" . $fourth . "','" . $fifth . "') LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ ice modder item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="ice3">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 3;
                                $sql = "SELECT * FROM `Product` WHERE ProductId > " . $id*1000 . " and ProductId < ". ($id + 1)*1000 . " LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ ice modder item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="ice4">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 3;
                                $sql = "Select count(*) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by count(*) desc  LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ ice modder item End -->
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="kadart">
            <div class="tabbable">
                <ul class="nav nav-tabs text-center fix">
                    <li role="presentation" class="active">
                        <a href="index.html#kadart1" aria-controls="kadart1" role="tab" data-toggle="tab">Most Visited</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#kadart2" aria-controls="kadart2" role="tab" data-toggle="tab">Recent</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#kadart3" aria-controls="kadart3" role="tab" data-toggle="tab">Top Rated</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#kadart4" aria-controls="kadart4" role="tab" data-toggle="tab">Top Commented</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="kadart1">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 2;
                                $sql = "SELECT * FROM `Product` WHERE ProductId > " . $id*1000 . " and ProductId < ". ($id + 1)*1000 . " LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ kadart item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="kadart2">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                if(isset($_COOKIE['kadart'])) {
                                    $prod = $_COOKIE['kadart'];
                                    $prod = stripslashes($prod);    // string is stored with escape double quotes 
                                    $prod = json_decode($prod, true);
                                    $first = $prod['1st'];
                                    $second = $prod['2nd'];
                                    $third = $prod['3rd'];
                                    $fourth = $prod['4th'];
                                    $fifth = $prod['5th'];
                                
                                $sql = "SELECT * FROM `Product` where Productid IN ('" . $first . "','" . $second . "','" . $third . "','" . $fourth . "','" . $fifth . "') LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ kadart item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="kadart3">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 2;
                                $sql = "SELECT avg(Rating) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by AVG(Rating) desc Limit 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ kadart item End -->
                    <div role="tabpanel" class="tab-pane fade in " id="kadart4">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 2;
                                $sql = "Select count(*) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by count(*) desc  LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ kadart item End -->
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="mtv">
            <div class="tabbable">
                <ul class="nav nav-tabs text-center fix">
                    <li role="presentation" class="active">
                        <a href="index.html#mtv1" aria-controls="mtv1" role="tab" data-toggle="tab">Most Visited</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#mtv2" aria-controls="mtv2" role="tab" data-toggle="tab">Recent</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#mtv3" aria-controls="mtv3" role="tab" data-toggle="tab">Top Rated</a>
                    </li>
                    <li role="presentation">
                        <a href="index.html#mtv4" aria-controls="mtv4" role="tab" data-toggle="tab">Top Commented</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="mtv1">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 1;
                                $sql = "SELECT * FROM `Product` WHERE ProductId > " . $id*1000 . " and ProductId < ". ($id + 1)*1000 . " LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ mtv item End -->
                     <div role="tabpanel" class="tab-pane fade in " id="mtv2">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                if(isset($_COOKIE['mtv'])) {
                                    $prod = $_COOKIE['mtv'];
                                    $prod = stripslashes($prod);    // string is stored with escape double quotes 
                                    $prod = json_decode($prod, true);
                                    $first = $prod['1st'];
                                    $second = $prod['2nd'];
                                    $third = $prod['3rd'];
                                    $fourth = $prod['4th'];
                                    $fifth = $prod['5th'];
                                
                                $sql = "SELECT * FROM `Product` where Productid IN ('" . $first . "','" . $second . "','" . $third . "','" . $fourth . "','" . $fifth . "') LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ mtv item End -->
                     <div role="tabpanel" class="tab-pane fade in " id="mtv3">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 1;
                                $sql = "SELECT avg(Rating) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by AVG(Rating) desc Limit 5";

                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ mtv item End -->
                     <div role="tabpanel" class="tab-pane fade in " id="mtv4">
                            <div class="product-owl-active  indicator-style">
                                <?php
                                $id = 1;
                                $sql = "Select count(*) , B.* from Review A , Product B WHERE A.ProductId = B.ProductId and B.ProductId > " . $id*1000 . " and B.ProductId < ". ($id + 1)*1000 . " group by A.ProductId order by count(*) desc  LIMIT 5";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
                                                $MRP = (int)$productPrice + 2;
                                                echo '<!-- single group start -->
                                <div class="product-group">
                                    <!-- single item start -->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-item">
                                                <div class="s-product-img">
                                                    <!-- sale - new  -->
                                                    <div class="sticker-icon">
                                                        <span class="sticker-bg"></span>
                                                        <span class="sale sticker-text">sale</span>
                                                    </div>
                                                    <!--/ sale - new -->
                                                    <a href="index.html#">
                                                        <img alt="" src="img/product/' . $productId . '.jpg" class="primary-image">
                                                    </a>
                                                    <div class="price-rate">
                                                        <!-- Single product hover view-->
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="hover-view-content">
                                                                        <a href="index.html#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                                        <div class="ratings">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="star">
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span class="yes"><i class="fa fa-star-o"></i></span>
                                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <p class="special-price"><span class="price">$' . $productPrice . '</span></p>
                                                                            <p class="old-price"> <span class="price"><del>$' . $MRP . '</del></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Single product hover view-->
                                                    </div>
                                                    <div class="pro-action">
                                                        <div class="product-cart-area-list">
                                                            <div class="cart-btn btn-add-to-cart"><a href="index.html#"><i class="fa fa-shopping-cart"></i>ADD TO CART
                                                        </a></div>
                                                            <div class="cart-btn right link-compare"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Wishlist"><i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                            <div class="cart-btn right link-wishlist"><a href="index.html#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add To Compare"><i class="fa fa-retweet"></i>
                                                        </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="index.html#">' . $productName . '</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item end -->
                                </div>';
                                                }
                                }
                        ?>
                                <!-- single group end -->
                            </div>
                    </div>
                        <!--/ mtv item End -->
                </div>
            </div>
        </div>
    </div
            </div>
        </div>
    </div>
</div>
<div class="footer">
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12 col-xs-12 fix">
					<div class="bottom_menu">
						<div class="menu-customer-care-container">
							<nav>
								<ul class="nav_menu">
									<li class="menu-item"> <a href="index.html">Home</a> </li>
									<li class="menu-item"> <a href="shop.html">Shop </a> </li>
									<li class="menu-item"> <a href="about.html">About</a> </li>
									<li class="menu-item"> <a href="news.html">News</a> </li>
									<li class="menu-item"> <a href="contact.html">Contact</a> </li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="copyright-info"> Copyright &copy; 2017 <a href="http://lvivek.com/">Lakshmanan Vivek </a> All Rights Reserved </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- jquery
		============================================ -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
		============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
		============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
		============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- collapse JS
		============================================ -->
<script src="js/jquery.collapse.js"></script>
<!-- mixitup JS
		============================================ -->
<script src="js/jquery.mixitup.js"></script>
<!-- meanmenu JS
		============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
		============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- scrollUp JS
		============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- social-likes JS
		============================================ -->
<script src="js/social-likes.min.js"></script>
<!-- venobox JS
		============================================ -->
<script src="js/venobox.js"></script>
<!-- Nivo slider js
		============================================ -->
<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="lib/home.js" type="text/javascript"></script>
<!-- plugins JS
		============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="js/main.js"></script>
</body>
</html>