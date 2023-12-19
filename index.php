<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
} else {
	$user_id = '';
}
;


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Venus Trading</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<?php
		include 'components/header.php';
	?>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="">Home</a></li>
					<li><a href="Laptop.php">Laptop</a></li>
					<li><a href="contact.php">Contact</a></li>

				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->

	<!-- SECTION -->
	<div class="section new-products">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">New Products</h3>
						<!-- <div class="section-nav">
							<ul class="section-tab-nav tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
								<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
								<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
								<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
							</ul>
						</div> -->
					</div>
				</div>
				<!-- /section title -->


				<!-- Products tab & slick -->
				<div class="box-container">
					<?php
					$sql_query = "SELECT * FROM `products` WHERE brand = 'HP'";

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						$fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)
							?>
						<!-- product -->
						<div class="product" data-brand="<?= $fetch_product['brand']; ?>">
							<p hidden class="product-brand">
								<?= $fetch_product['brand']; ?>
							</p>
							<div class="product-img">
								<img width="100%" height="50%" src="./img/<?= $fetch_product['img']; ?>.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">
										<?= $fetch_product['brand']; ?>
										&nbsp;
										<?= $fetch_product['description']; ?>
									</a></h3>
								<h4 class="product-price">₹
									<?= $fetch_product['price']; ?>
								</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
											to
											wishlist</span></button>
									<button class="add-to-compare"><a
											href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"><i
												class="fa fa-shopping-cart"></i><span class="tooltipp">Buy
												Now</span></a></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
											view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<!-- /product -->
						<?php
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>
					<?php
					$sql_query = "SELECT * FROM `products` WHERE brand = 'ACER'";

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						$fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)
							?>
						<!-- product -->
						<div class="product" data-brand="<?= $fetch_product['brand']; ?>">
							<p hidden class="product-brand">
								<?= $fetch_product['brand']; ?>
							</p>
							<div class="product-img">
								<img width="100%" height="50%" src="./img/<?= $fetch_product['img']; ?>.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">
										<?= $fetch_product['brand']; ?>
										&nbsp;
										<?= $fetch_product['description']; ?>
									</a></h3>
								<h4 class="product-price">₹
									<?= $fetch_product['price']; ?>
								</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
											to
											wishlist</span></button>
									<button class="add-to-compare"><a
											href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"><i
												class="fa fa-shopping-cart"></i><span class="tooltipp">Buy
												Now</span></a></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
											view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<!-- /product -->
						<?php
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>
					<?php
					$sql_query = "SELECT * FROM `products` WHERE brand = 'HP'";

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						$fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)
							?>
						<!-- product -->
						<div class="product" data-brand="<?= $fetch_product['brand']; ?>">
							<p hidden class="product-brand">
								<?= $fetch_product['brand']; ?>
							</p>
							<div class="product-img">
								<img width="100%" height="50%" src="./img/<?= $fetch_product['img']; ?>.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">
										<?= $fetch_product['brand']; ?>
										&nbsp;
										<?= $fetch_product['description']; ?>
									</a></h3>
								<h4 class="product-price">₹
									<?= $fetch_product['price']; ?>
								</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
											to
											wishlist</span></button>
									<button class="add-to-compare"><a
											href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"><i
												class="fa fa-shopping-cart"></i><span class="tooltipp">Buy
												Now</span></a></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
											view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<!-- /product -->
						<?php
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>
					<?php
					$sql_query = "SELECT * FROM `products` WHERE brand = 'ACER'";

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						$fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)
							?>
						<!-- product -->
						<div class="product" data-brand="<?= $fetch_product['brand']; ?>">
							<p hidden class="product-brand">
								<?= $fetch_product['brand']; ?>
							</p>
							<div class="product-img">
								<img width="100%" height="50%" src="./img/<?= $fetch_product['img']; ?>.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">
										<?= $fetch_product['brand']; ?>
										&nbsp;
										<?= $fetch_product['description']; ?>
									</a></h3>
								<h4 class="product-price">₹
									<?= $fetch_product['price']; ?>
								</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
											to
											wishlist</span></button>
									<button class="add-to-compare"><a
											href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"><i
												class="fa fa-shopping-cart"></i><span class="tooltipp">Buy
												Now</span></a></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
											view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<!-- /product -->
						<?php
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>

				</div>
				<!-- Products tab & slick -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- HOT DEAL SECTION -->
	<div id="hot-deal" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="hot-deal">
						<!-- <ul class="hot-deal-countdown">
							<li>
								<div>
									<h3>02</h3>
									<span>Days</span>
								</div>
							</li>
							<li>
								<div>
									<h3>10</h3>
									<span>Hours</span>
								</div>
							</li>
							<li>
								<div>
									<h3>34</h3>
									<span>Mins</span>
								</div>
							</li>
							<li>
								<div>
									<h3>60</h3>
									<span>Secs</span>
								</div>
							</li>
						</ul> -->
						<h2 class="text-uppercase">hot deal this week</h2>
						<p>New Collection Up to 50% OFF</p>
						<a class="primary-btn cta-btn" href="#">Shop now</a>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOT DEAL SECTION -->

	<!-- SECTION -->
	<div class="section top-selling">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Top Selling</h3>
					</div>
				</div>
				<!-- /section title -->


				<!-- Products tab & slick -->
				<div class="box-container">
					<?php
					$sql_query = "SELECT * FROM `products` WHERE brand = 'HP'";

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						$fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)
							?>
						<!-- product -->
						<div class="product" data-brand="<?= $fetch_product['brand']; ?>">
							<p hidden class="product-brand">
								<?= $fetch_product['brand']; ?>
							</p>
							<div class="product-img">
								<img width="100%" height="50%" src="./img/<?= $fetch_product['img']; ?>.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">
										<?= $fetch_product['brand']; ?>
										&nbsp;
										<?= $fetch_product['description']; ?>
									</a></h3>
								<h4 class="product-price">₹
									<?= $fetch_product['price']; ?>
								</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
											to
											wishlist</span></button>
									<button class="add-to-compare"><a
											href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"><i
												class="fa fa-shopping-cart"></i><span class="tooltipp">Buy
												Now</span></a></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
											view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<!-- /product -->
						<?php
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>
					<?php
					$sql_query = "SELECT * FROM `products` WHERE brand = 'ACER'";

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						$fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)
							?>
						<!-- product -->
						<div class="product" data-brand="<?= $fetch_product['brand']; ?>">
							<p hidden class="product-brand">
								<?= $fetch_product['brand']; ?>
							</p>
							<div class="product-img">
								<img width="100%" height="50%" src="./img/<?= $fetch_product['img']; ?>.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">
										<?= $fetch_product['brand']; ?>
										&nbsp;
										<?= $fetch_product['description']; ?>
									</a></h3>
								<h4 class="product-price">₹
									<?= $fetch_product['price']; ?>
								</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
											to
											wishlist</span></button>
									<button class="add-to-compare"><a
											href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"><i
												class="fa fa-shopping-cart"></i><span class="tooltipp">Buy
												Now</span></a></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
											view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<!-- /product -->
						<?php
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>
					<?php
					$sql_query = "SELECT * FROM `products` WHERE brand = 'HP'";

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						$fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)
							?>
						<!-- product -->
						<div class="product" data-brand="<?= $fetch_product['brand']; ?>">
							<p hidden class="product-brand">
								<?= $fetch_product['brand']; ?>
							</p>
							<div class="product-img">
								<img width="100%" height="50%" src="./img/<?= $fetch_product['img']; ?>.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">
										<?= $fetch_product['brand']; ?>
										&nbsp;
										<?= $fetch_product['description']; ?>
									</a></h3>
								<h4 class="product-price">₹
									<?= $fetch_product['price']; ?>
								</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
											to
											wishlist</span></button>
									<button class="add-to-compare"><a
											href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"><i
												class="fa fa-shopping-cart"></i><span class="tooltipp">Buy
												Now</span></a></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
											view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<!-- /product -->
						<?php
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>
					<?php
					$sql_query = "SELECT * FROM `products` WHERE brand = 'ACER'";

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						$fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)
							?>
						<!-- product -->
						<div class="product" data-brand="<?= $fetch_product['brand']; ?>">
							<p hidden class="product-brand">
								<?= $fetch_product['brand']; ?>
							</p>
							<div class="product-img">
								<img width="100%" height="50%" src="./img/<?= $fetch_product['img']; ?>.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">
										<?= $fetch_product['brand']; ?>
										&nbsp;
										<?= $fetch_product['description']; ?>
									</a></h3>
								<h4 class="product-price">₹
									<?= $fetch_product['price']; ?>
								</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
											to
											wishlist</span></button>
									<button class="add-to-compare"><a
											href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"><i
												class="fa fa-shopping-cart"></i><span class="tooltipp">Buy
												Now</span></a></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
											view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<!-- /product -->
						<?php
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>

				</div>
				<!-- Products tab & slick -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->

	<!-- /SECTION -->

	<!-- FOOTER -->
	<?php
	include 'components/footer.php'
	?>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>