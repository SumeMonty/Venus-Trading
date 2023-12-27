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

	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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
				<ul class="main-nav nav navbar-nav navigator">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="">Laptop</a></li>
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
			<div class="row products">

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
					$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img FROM `products` WHERE id = " . rand(1, 30);

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
							?>
							<form action="" method="post" class="box wow animate__fadeInLeft">
								<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
								<input type="hidden" name="name"
									value="<?= $fetch_product['brand']; ?> <?= $fetch_product['shortdesc']; ?>">
								<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
								<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
								<button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
								<a href="quick-view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
								<img src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
								<div class="name">
									<?= $fetch_product['description']; ?>
								</div>
								<div class="flex">
									<div class="price"><span>₹</span>
										<?= $fetch_product['price']; ?><span>/-</span>
									</div>
									<input type="number" name="qty" class="qty" min="1" max="99"
										onkeypress="if(this.value.length == 2) return false;" value="1">
								</div>
								<button type="submit" class="btn" name="buy-now">
									<a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
										target="_blank">Buy
										Now</a>
								</button>
							</form>
							<?php
						}
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>


					<?php
					$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img FROM `products` WHERE id = " . rand(1, 30);

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
							?>
							<form action="" method="post" class="box wow animate__fadeInLeft">
								<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
								<input type="hidden" name="name"
									value="<?= $fetch_product['brand']; ?> <?= $fetch_product['shortdesc']; ?>">
								<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
								<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
								<button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
								<a href="quick-view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
								<img src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
								<div class="name">
									<?= $fetch_product['description']; ?>
								</div>
								<div class="flex">
									<div class="price"><span>₹</span>
										<?= $fetch_product['price']; ?><span>/-</span>
									</div>
									<input type="number" name="qty" class="qty" min="1" max="99"
										onkeypress="if(this.value.length == 2) return false;" value="1">
								</div>
								<button type="submit" class="btn" name="buy-now">
									<a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
										target="_blank">Buy
										Now</a>
								</button>
							</form>
							<?php
						}
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>


					<?php
					$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img FROM `products` WHERE id = " . rand(1, 30);

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
							?>
							<form action="" method="post" class="box wow animate__fadeInRight">
								<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
								<input type="hidden" name="name"
									value="<?= $fetch_product['brand']; ?> <?= $fetch_product['shortdesc']; ?>">
								<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
								<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
								<button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
								<a href="quick-view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
								<img src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
								<div class="name">
									<?= $fetch_product['description']; ?>
								</div>
								<div class="flex">
									<div class="price"><span>₹</span>
										<?= $fetch_product['price']; ?><span>/-</span>
									</div>
									<input type="number" name="qty" class="qty" min="1" max="99"
										onkeypress="if(this.value.length == 2) return false;" value="1">
								</div>
								<button type="submit" class="btn" name="buy-now">
									<a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
										target="_blank">Buy
										Now</a>
								</button>
							</form>
							<?php
						}
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>


					<?php
					$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img FROM `products` WHERE id = " . rand(1, 30);

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
							?>
							<form action="" method="post" class="box wow animate__fadeInRight">
								<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
								<input type="hidden" name="name"
									value="<?= $fetch_product['brand']; ?> <?= $fetch_product['shortdesc']; ?>">
								<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
								<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
								<button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
								<a href="quick-view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
								<img src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
								<div class="name">
									<?= $fetch_product['description']; ?>
								</div>
								<div class="flex">
									<div class="price"><span>₹</span>
										<?= $fetch_product['price']; ?><span>/-</span>
									</div>
									<input type="number" name="qty" class="qty" min="1" max="99"
										onkeypress="if(this.value.length == 2) return false;" value="1">
								</div>
								<button type="submit" class="btn" name="buy-now">
									<a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
										target="_blank">Buy
										Now</a>
								</button>
							</form>
							<?php
						}
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
			<div class="row products">

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
					$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img FROM `products` WHERE id = " . rand(1, 30);

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
							?>
							<form action="" method="post" class="box wow animate__fadeInLeft">
								<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
								<input type="hidden" name="name"
									value="<?= $fetch_product['brand']; ?> <?= $fetch_product['shortdesc']; ?>">
								<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
								<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
								<button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
								<a href="quick-view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
								<img src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
								<div class="name">
									<?= $fetch_product['description']; ?>
								</div>
								<div class="flex">
									<div class="price"><span>₹</span>
										<?= $fetch_product['price']; ?><span>/-</span>
									</div>
									<input type="number" name="qty" class="qty" min="1" max="99"
										onkeypress="if(this.value.length == 2) return false;" value="1">
								</div>
								<button type="submit" class="btn" name="buy-now">
									<a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
										target="_blank">Buy
										Now</a>
								</button>
							</form>
							<?php
						}
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>


					<?php
					$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img FROM `products` WHERE id = " . rand(1, 30);

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
							?>
							<form action="" method="post" class="box wow animate__fadeInUp">
								<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
								<input type="hidden" name="name"
									value="<?= $fetch_product['brand']; ?> <?= $fetch_product['shortdesc']; ?>">
								<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
								<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
								<button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
								<a href="quick-view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
								<img src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
								<div class="name">
									<?= $fetch_product['description']; ?>
								</div>
								<div class="flex">
									<div class="price"><span>₹</span>
										<?= $fetch_product['price']; ?><span>/-</span>
									</div>
									<input type="number" name="qty" class="qty" min="1" max="99"
										onkeypress="if(this.value.length == 2) return false;" value="1">
								</div>
								<button type="submit" class="btn" name="buy-now">
									<a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
										target="_blank">Buy
										Now</a>
								</button>
							</form>
							<?php
						}
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>


					<?php
					$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img FROM `products` WHERE id = " . rand(1, 30);

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
							?>
							<form action="" method="post" class="box wow animate__fadeInLeft">
								<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
								<input type="hidden" name="name"
									value="<?= $fetch_product['brand']; ?> <?= $fetch_product['shortdesc']; ?>">
								<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
								<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
								<button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
								<a href="quick-view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
								<img src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
								<div class="name">
									<?= $fetch_product['description']; ?>
								</div>
								<div class="flex">
									<div class="price"><span>₹</span>
										<?= $fetch_product['price']; ?><span>/-</span>
									</div>
									<input type="number" name="qty" class="qty" min="1" max="99"
										onkeypress="if(this.value.length == 2) return false;" value="1">
								</div>
								<button type="submit" class="btn" name="buy-now">
									<a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
										target="_blank">Buy
										Now</a>
								</button>
							</form>
							<?php
						}
					} else {
						echo '<p class="empty">no products found!</p>';
					}
					?>


					<?php
					$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img FROM `products` WHERE id = " . rand(1, 30);

					$select_products = $conn->prepare($sql_query);
					$select_products->execute();
					if ($select_products->rowCount() > 0) {
						while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
							?>
							<form action="" method="post" class="box wow animate__fadeInUp">
								<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
								<input type="hidden" name="name"
									value="<?= $fetch_product['brand']; ?> <?= $fetch_product['shortdesc']; ?>">
								<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
								<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
								<button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
								<a href="quick-view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
								<img src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
								<div class="name">
									<?= $fetch_product['description']; ?>
								</div>
								<div class="flex">
									<div class="price"><span>₹</span>
										<?= $fetch_product['price']; ?><span>/-</span>
									</div>
									<input type="number" name="qty" class="qty" min="1" max="99"
										onkeypress="if(this.value.length == 2) return false;" value="1">
								</div>
								<button type="submit" class="btn" name="buy-now">
									<a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
										target="_blank">Buy
										Now</a>
								</button>
							</form>
							<?php
						}
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
  <script>
    let wow = new WOW({
      animateClass: 'animate__animated',
    });
    wow.init();
  </script>
	<script src="js/main.js"></script>

</body>

</html>