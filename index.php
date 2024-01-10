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
	<!-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" /> -->
	<link type="text/css" rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

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
		<div class="container laptop-container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav nav-pills navigator">
					<li class="nav-item active"><a href="">Home</a></li>
					<!-- <li class="nav-item"><a href="Laptop.php">Laptop</a></li> -->
					<li class="nav-item"><a href="contact.php">Contact</a></li>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
			<!-- responsive-nav -->
			<div id="responsive-nav-brand">
				<!-- NAV -->
				<form method="POST">

					<input type="submit" value="asus" id="asus-btn" name="asus-btn" style="display:none;">
					<label for="asus-btn" style="cursor: pointer;">
						<img src="img/asus_logo.png" width="75px" alt="">
					</label>
					<input type="submit" value="hp" id="hp-btn" name="hp-btn" style="display:none;">
					<label for="hp-btn" style="cursor: pointer;">
						<img src="img/hp_logo.png" width="75px" alt="">
					</label>
					<input type="submit" value="acer" id="acer-btn" name="acer-btn" style="display:none;">
					<label for="acer-btn" style="cursor: pointer;">
						<img src="img/acer_logo.png" width="70px" alt="">
					</label>
					<input type="submit" value="dell" id="dell-btn" name="dell-btn" style="display:none;">
					<label for="dell-btn" style="cursor: pointer;">
						<img src="img/dell_logo.png" width="50px" style="margin-left: 10px;" alt="">
					</label>
				</form>

				<!-- /NAV -->
				<!-- </div> -->
				<!-- /responsive-nav -->
			</div>
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->


	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="lap-breadcrumb" class="section">

		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h3 class="breadcrumb-header">Venus trading</h3>
					<!-- <ul class="breadcrumb-tree">
						<li><a href="index.php">Home</a></li>
						<li class="active">Laptop</li>
					</ul> -->
				</div>

			</div>
		</div>

	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="products laptops">
		<div class="refinements">
			<h5 id="clearFilters" style="display: none; margin-top: 2rem; cursor: pointer;">Clear
				Filters</h5>
			<div class="brand-refinements">
				<h3>Brand</h3>
				<form action="">
					<ul class="list-brand">
						<li>
							<input class="form-check-input me-1" type="checkbox" name="asus-ref" value="" id="asusRef"
								onchange="brand_ref_check()">
							<label class="form-check-label" for="asus">ASUS</label>
						</li>
						<li>
							<input class="form-check-input me-1" type="checkbox" value="" name="hp-ref" id="hpRef"
								onchange="brand_ref_check()">
							<label class="form-check-label" for="hp">HP</label>
						</li>
						<li>
							<input class="form-check-input me-1" type="checkbox" value="" name="acer-ref" id="acerRef"
								onchange="brand_ref_check()">
							<label class="form-check-label" for="acer">ACER</label>
						</li>
						<li>
							<input class="form-check-input me-1" type="checkbox" value="" name="dell-ref" id="dellRef"
								onchange="brand_ref_check()">
							<label class="form-check-label" for="acer">DELL</label>
						</li>
						<!-- <li>
							<label class="form-check-label" id="clearBrand"
								style="display: none; cursor: pointer;">Clear All</label>
						</li> -->
					</ul>
				</form>

			</div>
			<div class="price-range-refinements">
				<h3>Price Range</h3>
				<form>
					<div class="row">
						<div class="col">
							<input type="number" name="min-price" class="form-control min-price" placeholder="Min"
								value="<?php echo isset($_GET['min-price']) ? htmlspecialchars($_GET['min-price'], ENT_QUOTES) : ''; ?>">
						</div>
						<div class="col">
							<input type="number" name="max-price" class="form-control max-price" placeholder="Max"
								value="<?php echo isset($_GET['min-price']) ? htmlspecialchars($_GET['max-price'], ENT_QUOTES) : ''; ?>">
						</div>
						<div class="col">
							<input type="submit" class="btn btn-primary" value="Go"></input>
						</div>
					</div>
				</form>

			</div>
			<div class="ram-size-refinements">
				<h3>RAM</h3>
				<!-- <div class="d-flex"> -->

				<!-- <div class="btn-group">
						<button type="button" class="btn btn-info">Ram</button>
						<button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
							data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
							<span class="visually-hidden">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Separated link</a></li>
						</ul>
					</div> -->
				<form name="ramform">
					<select name="ramformselect" onchange="ramformsubmit()" class="form-select col-md-10">
						<option value="NULL" selected><?php echo isset($_GET['ramformselect']) ? htmlspecialchars($_GET['ramformselect'], ENT_QUOTES) : 'Choose Ram Size'; ?></option>
						<option onclick="" value="4gb">4 GB</option>
						<option onclick="" value="8gb">8 GB</option>
						<option onclick="" value="16gb">16 GB</option>
						<option onclick="" value="32gb">32 GB</option>
						<option onclick="" value="64gb">64 GB</option>
					</select>
				</form>
				
				<!-- </div> -->
				<!-- <ul class="list-ram-size">
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="fourGBRef"
							onchange="ram_ref_check()">
						<label class="form-check-label" for="4gb">4 GB</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="eightGBRef"
							onchange="ram_ref_check()">
						<label class="form-check-label" for="8gb">8 GB</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="steenGBRef"
							onchange="ram_ref_check()">
						<label class="form-check-label" for="16gb">16 GB</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="ttwoGBRef"
							onchange="ram_ref_check()">
						<label class="form-check-label" for="32gb">32 GB</label>
					</li>
					<li>
						<input class="form-check-input me-1" type="checkbox" value="" id="sfourGBRef"
							onchange="ram_ref_check()">
						<label class="form-check-label" for="64gb">64 GB</label>
					</li>
				<li>
						<label class="form-check-label" id="clearRam" style="display: none; cursor: pointer;">Clear
							All</label>
					</li>
				</ul> -->


			</div>


			<div class="processor-refinements">
				<h3>Processor</h3>
				<form name="processorform">
					<select name="processorformselect" onchange="processorformsubmit()" class="form-select col-md-10">
						<option value="NULL" selected><?php echo isset($_GET['processorformselect']) ? htmlspecialchars($_GET['processorformselect'], ENT_QUOTES) : 'Choose Processor'; ?></option>
						<option onclick="" value="amd">AMD</option>
						<option onclick="" value="intel">INTEL</option>
					</select>
				</form>
			</div>
		</div>
		<button type="button" class="btn btn-primary responsive-filter" data-toggle="button" aria-pressed="false"
			autocomplete="off" onclick="toggleref()">
			<i class="fa-solid fa-arrow-right"></i>
		</button>

		<!-- <div class="andagundu"> -->
		<div class="box-container">


			<?php
			$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img, ram, make FROM `products`";
			if (isset($_GET['min-price']) && $_GET['min-price'] != null) {
				$min_price = $_GET['min-price'];
				if (isset($_GET['max-price']) && $_GET['max-price'] != null) {
					$max_price = $_GET['max-price'];
					$sql_query .= " WHERE price BETWEEN $min_price AND $max_price";
				} else
					$sql_query .= " WHERE price > $min_price";


			} else if (isset($_GET['max-price']) && $_GET['max-price'] != null) {
				$max_price = $_GET['max-price'];
				$sql_query .= " WHERE price < $max_price";
			}

			// Refinements Start
			$brand_string = '';
			$ram_string = '';
			if (isset($_GET['brand'])) {
				$brand_string = implode(',', $_GET['brand']);
				// if ($ram_string != '') {
				// 	$sql_query .= ' AND brand IN($brand_string)';

				// } else {
					$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img, ram, make FROM `products` WHERE brand IN($brand_string)";
				// }
				// echo $sql_query;
				// run_my_query($conn, $sql_query);
			} else {
				// echo 'URL parameter does not exist';
				// run_my_query($conn, $sql_query);
			}



			if (isset($_GET['ramformselect'])) {
				$ramformselectvalue = $_GET['ramformselect'];

				if ($brand_string != '') {
					if($ramformselectvalue != 'NULL') $sql_query .= " AND ram = '$ramformselectvalue'";
				} else {
					if($ramformselectvalue != 'NULL')  $sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img, ram, make FROM `products` WHERE ram = '$ramformselectvalue'";
				}
				// run_my_query($conn, $sql_query);
			// } else {
				// echo 'URL parameter does not exist';
				// run_my_query($conn, $sql_query);
			}
			
			if (isset($_GET['processorformselect'])) {
				$processorformselectvalue = $_GET['processorformselect'];

				if ($brand_string != '') {
					// if($processorformselectvalue != 'NULL') $sql_query .= " AND processor = '$processorformselectvalue'";
					if($processorformselectvalue != 'NULL') $sql_query .= " AND description LIKE = '%$processorformselectvalue%'";
				} else {
					// if($processorformselectvalue != 'NULL')  $sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img, ram, make FROM `products` WHERE processor = '$processorformselectvalue'";
					if($processorformselectvalue != 'NULL')  $sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img, ram, make FROM `products` WHERE description LIKE = '%$processorformselectvalue%'";
				}
				// run_my_query($conn, $sql_query);
			// } else {
				// echo 'URL parameter does not exist';
				// run_my_query($conn, $sql_query);
			}
			// Refinements End
			
			// Brand Filters Start
			if (isset($_POST['asus-btn'])) {
				// echo $_POST['asus-btn']	;
				$sql_query = $sql_query . "WHERE brand IN('ASUS')";
				run_my_query($conn, $sql_query);
			}
			if (isset($_POST['hp-btn'])) {
				// echo $_POST['hp-btn']	;
				$sql_query = $sql_query . "WHERE brand IN('HP')";
				run_my_query($conn, $sql_query);
			}
			if (isset($_POST['acer-btn'])) {
				// echo $_POST['acer-btn']	;
				$sql_query = $sql_query . "WHERE brand IN('ACER')";
				run_my_query($conn, $sql_query);
			}
			if (isset($_POST['dell-btn'])) {
				$sql_query = $sql_query . "WHERE brand IN('DELL')";
				run_my_query($conn, $sql_query);
			}
			// Brnd Filters End
			


			if (isset($_POST['search-btn'])) {
				$searchedItem = $_POST['search-value'];
				$selectedBrand = $_POST['brand-select'];
				$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img, ram, make FROM `products` WHERE description LIKE '%$searchedItem%' OR make LIKE '$searchedItem%' OR make LIKE '%$searchedItem' OR brand = '$searchedItem'";
				if ($selectedBrand != "ALL") {
					$sql_query = $sql_query . " AND brand = '$selectedBrand'";
					// echo $sql_query;
				}
				// run_my_query($conn, $sql_query);
			}

			// echo "Query: " . $sql_query;
			
			run_my_query($conn, $sql_query);

			function run_my_query($conn, $sql_query)
			{
				$select_products = $conn->prepare($sql_query);
				$select_products->execute();
				if ($select_products->rowCount() > 0) {
					while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
						?>
						<form action="" method="post" class="box">
							<input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
							<input type="hidden" name="name"
								value="<?= $fetch_product['brand']; ?> <?= $fetch_product['shortdesc']; ?>">
							<input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
							<input type="hidden" name="image" value="<?= $fetch_product['img']; ?>">
							<button class="laptop-series" name="laptop-series">
								<?= $fetch_product['make']; ?>
							</button>
							<!-- <button class="brand-label" name="brand-label">HP</button> -->

							<img onclick="window.location.href='quick-view.php?pid=<?= $fetch_product['id']; ?>'"
								src="img/<?= $fetch_product['img']; ?>.jpg" alt="">
							<a class="link brand" href="#">
								<?= $fetch_product['brand']; ?>
							</a>
							<div class="name" onclick="window.location.href='quick-view.php?pid=<?= $fetch_product['id']; ?>'">
								<?= $fetch_product['brand']; ?>
								<?= $fetch_product['make']; ?>
								<?= $fetch_product['img']; ?>
								<?= $fetch_product['description']; ?>
							</div>
							<div class="flex">
								<div class="price"><span>₹</span>
									<?= $fetch_product['price']; ?><span>/-</span>
								</div>
								<input type="number" name="qty" class="qty" min="1" max="99"
									onkeypress="if(this.value.length == 2) return false;" value="1">
							</div>
							<button type="submit" class="buy-now-btn btn btn-primary" name="buy-now">
								<a href="https://wa.me/9137503778?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
									target="_blank">Buy
									Now</a>
							</button>
							<button type="submit" class="add-to-cart-btn btn btn-success" name="buy-now">
								<a href="" target="_blank">Add To Cart</a>
							</button>
						</form>
						<?php
					}
				} else {
					echo '<p class="empty">No Products Found!</p>';
				}
			}
			?>

		</div>
		<!-- </div> -->
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>