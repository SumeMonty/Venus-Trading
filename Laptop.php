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
	<link rel="stylesheet" href="css/font-awesome.min.css">

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
		<div class="container laptop-top-nav">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
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

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="lap-breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<h3 class="breadcrumb-header">Venus trading</h3>
					<ul class="breadcrumb-tree">
						<li><a href="index.php">Home</a></li>
						<li class="active">Laptop</li>
					</ul>
				</div>
				
			</div>
			<!-- /row -->
			<!-- <div class="logo-navigation">
				<img src="img/asus_logo.png" height="50%" width="10%" alt="">
				<img src="img/hp_logo.png" height="50%" width="10%" alt="">
				<img src="img/acer_logo.png" height="50%" width="10%" alt="">
				<img src="img/dell_logo.png" height="50%" width="10%" alt="">
			</div> -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="products laptops">
		<div class="refinements">
			<div class="brand-refinements">
				<h5>Brand</h5>
				<ul class="list-brand">
					<li>
						<input class="form-check-input me-1" type="checkbox" name="asus" value="" id="asus">
						<label class="form-check-label" for="asus">ASUS</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="hp">
						<label class="form-check-label" for="hp">HP</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="acer">
						<label class="form-check-label" for="acer">ACER</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="dell">
						<label class="form-check-label" for="acer">DELL</label>
					</li>
				</ul>

			</div>
			<div class="ram-size-refinements">
				<h5>RAM</h5>
				<ul class="list-ram-size">
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="4gb">
						<label class="form-check-label" for="4gb">4 GB</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id=" 8gb">
						<label class="form-check-label" for="8gb">8 GB</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="16gb">
						<label class="form-check-label" for="16gb">16 GB</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="32gb">
						<label class="form-check-label" for="32gb">32 GB</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="64gb">
						<label class="form-check-label" for="64gb">64 GB</label>
					</li>
				</ul>

			</div>
			<div class="ram-tech-refinements">
				<h5>RAM Memory Technology</h5>
				<ul class="list-ram-tech">
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="ddr3">
						<label class="form-check-label" for="ddr3">DDR3</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="ddr4">
						<label class="form-check-label" for="ddr4">DDR4</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="ddr5">
						<label class="form-check-label" for="ddr5">DDR5</label>
					</li>
				</ul>

			</div>
			<div class="disk-refinements">
				<h5>Hard Disk Type</h5>
				<ul class="list-ram-tech">
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="hdd">
						<label class="form-check-label" for="hdd">HDD</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="ssd">
						<label class="form-check-label" for="ssd">SSD</label>
					</li>

				</ul>

			</div>
		</div>
		<!-- container -->
		<div class="box-container">


			<?php
			$sql_query = "SELECT * FROM `products`";
			
			if (isset($_POST['search-btn'])) {
				$searchedItem = $_POST['search-value'];
				$selectedBrand = $_POST['brand-select'];
				$sql_query = $sql_query . " WHERE description LIKE '%$searchedItem%'";
				if($selectedBrand != "ALL") {
					$sql_query = $sql_query . " AND brand = '$selectedBrand'";
					// echo $sql_query;
				}
			}
			
			$select_products = $conn->prepare($sql_query);
			$select_products->execute();

			if ($select_products->rowCount() > 0) {
				while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
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
									&nbsp;<?= $fetch_product['description']; ?>
								</a></h3>
							<h4 class="product-price">₹
								<?= $fetch_product['price']; ?>
							</h4>
							<div class="product-btns">
								<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
										wishlist</span></button>
								<button class="add-to-compare"><a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></a></button>
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
				}
			} else {
				echo '<p class="empty">no products found!</p>';
			}
			?>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	</div>
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