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
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li><a href="index.php">Home</a></li>
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

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<h3 class="breadcrumb-header">Venus trading</h3>
					<ul class="breadcrumb-tree">
						<li><a href="/">Home</a></li>
						<li class="active">Laptop</li>
					</ul>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->

	<div class="container">
		<div class="quick-view">

			<h1 class="heading">Quick View</h1>

			<?php
			$pid = $_GET['pid'];
			$select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
			$select_products->execute([$pid]);
			if ($select_products->rowCount() > 0) {
				while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
					?>
					<form action="" method="post" class="box">
						<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
						<input type="hidden" name="description" value="<?= $fetch_product['description']; ?>">
						<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
						<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
						<div class="row">
							<div class="image-container">
								<div class="main-image">
									<img width="20%" height="100%" src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
								</div>
								<!-- <div class="sub-image">
	<img src="img/<?= $fetch_product['image_01']; ?>" alt="">
	<img src="img/<?= $fetch_product['image_02']; ?>" alt="">
	<img src="img/<?= $fetch_product['image_03']; ?>" alt="">
 </div> -->
							</div>
							<div class="content">
								<div class="name">
									<?= $fetch_product['brand']; ?> 
									<?= $fetch_product['make']; ?> 
									<?= $fetch_product['description']; ?>
								</div>
								<div class="flex">
									<div class="price"><span>₹</span>
										<?= $fetch_product['price']; ?><span>/-</span>
									</div>
									<input type="number" name="qty" class="qty" min="1" max="99"
										onkeypress="if(this.value.length == 2) return false;" value="1">
								</div>
								<!-- <div class="details"><?= $fetch_product['details']; ?></div> -->
								<div class="flex-btn">
									<input type="submit" value="Add To Cart" class="btn btn-primary" name="add-to-cart">
									<input class="btn btn-success" type="submit" name="buy-now" value="Buy Now">
								</div>
							</div>
						</div>
					</form>
					<?php
				}
			} else {
				echo '<p class="empty">no products added yet!</p>';
			}
			?>

		</div>
	</div>

	<!-- /SECTION -->

	<!-- FOOTER -->
	<?php
	include 'components/footer.php';
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