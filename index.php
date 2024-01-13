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
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<!-- <link type="text/css" rel="stylesheet" href="css/admin-style.css" /> -->

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
			<div class="accordion" id="accordionExample">
				<div class="accordion-item">
					<h1 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Brand
						</button>
					</h1>
					<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<?php
					        	// $sql_query = "SELECT DISTINCT(brand) FROM products ORDER BY id";
								// $statement = $conn->prepare($sql_query);
								// $statement->execute();
								// $result = $statement->fetchAll();
								// foreach ($result as $row) {
								// 	var_dump	($row);
							?>
							<!-- <div class="list-group-item checkbox">
								<label><input type="checkbox" class="common_selector brand">ASUS</label>
							</div>
							<div class="list-group-item checkbox">
								<label><input type="checkbox" class="common_selector brand">HP</label>
							</div>
							<div class="list-group-item checkbox">
								<label><input type="checkbox" class="common_selector brand">DELL</label>
							</div>
							<div class="list-group-item checkbox">
								<label><input type="checkbox" class="common_selector brand">ACER</label>
							</div> -->
							
							<form action="">
								<ul>
									<li>
										<input type="checkbox">
										<label for="asus">ASUS</label>
									</li>
									<li>
										<input type="checkbox">
										<label for="hp">HP</label>
									</li>
									<li>
										<input type="checkbox">
										<label for="dell">DELL</label>
									</li>
									<li>
										<input type="checkbox">
										<label for="acer">ACER</label>
									</li>
									
								</ul>
							</form>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h1 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							Processor
						</button>
					</h1>
					<div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<form action="">
								<ul>
									<li>
										<input type="checkbox" name="i3-1115G4" id="i3-1115G4">
										<label for="i3-1115G4">Intel®Core™ i3-1115G4</label>
									</li>
									<li>
										<input type="checkbox" name="i3-1215U" id="i3-1215U">
										<label for="i3-1215U">Intel®Core™ i3-1215U</label>
									</li>
									<li>
										<input type="checkbox" name="i3-1315U" id="i3-1315U">
										<label for="i3-1315U">Intel®Core™ i3-1315U</label>
									</li>
									<li>
										<input type="checkbox" name="i3-N305" id="i3-N305">
										<label for="i3-N305">Intel®Core™ i3-N305</label>
									</li>
									<li>
										<input type="checkbox" name="i5-10300H" id="i5-10300H">
										<label for="i5-10300H">Intel®Core™ i5-10300H</label>
									</li>
									<li>
										<input type="checkbox" name="i5-1135G7" id="i5-1135G7">
										<label for="i5-1135G7">Intel®Core™ i5-1135G7</label>
									</li>
									<li>
										<input type="checkbox" name="i5-11400H" id="i5-11400H">
										<label for="i5-11400H">Intel®Core™ i5-11400H</label>
									</li>
									<li>
										<input type="checkbox" name="i5-1235U" id="i5-1235U">
										<label for="i5-1235U">Intel®Core™ i5-1235U</label>
									</li>
									<li>
										<input type="checkbox" name="i5-1240P" id="i5-1240P">
										<label for="i5-1240P">Intel®Core™ i5-1240P</label>
									</li>
									<li>
										<input type="checkbox" name="i5-12450H" id="i5-12450H">
										<label for="i5-12450H">Intel®Core™ i5-12450H</label>
									</li>
									<li>
										<input type="checkbox" name="i5-12500H" id="i5-12500H">
										<label for="i5-12500H">Intel®Core™ i5-12500H</label>
									</li>
									<li>
										<input type="checkbox" name="i5-1340P" id="i5-1340P">
										<label for="i5-1340P">Intel®Core™ i5-1340P</label>
									</li>
									<li>
										<input type="checkbox" name="i7 12700H" id="i7 12700H">
										<label for="i7 12700H">Intel®Core™ i7 12700H</label>
									</li>
									<li>
										<input type="checkbox" name="i7-1355U" id="i7-1355U">
										<label for="i7-1355U">Intel®Core™ i7-1355U</label>
									</li>
									<li>
										<input type="checkbox" name="i7-1360P" id="i7-1360P">
										<label for="i7-1360P">Intel®Core™ i7-1360P</label>
									</li>
									<li>
										<input type="checkbox" name="i9 12900H" id="i9 12900H">
										<label for="i9 12900H">Intel®Core™ i9 12900H</label>
									</li>
									<li>
										<input type="checkbox" name="i9-13900H" id="i9-13900H">
										<label for="i9-13900H">Intel®Core™ i9-13900H</label>
									</li>

								</ul>
							</form>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h1 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							Graphics Card
						</button>
					</h1>
					<div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<form action="">
								<ul>
									<li>
										<input type="checkbox" name="intelUHD" id="intelUHD">
										<label for="intelUHD">Intel® UHD Graphics</label>
									</li>
									<li>
										<input type="checkbox" name="irisXE" id="irisXE">
										<label for="irisXE">Intel Iris Xᵉ Graphics</label>
									</li>
									<li>
										<input type="checkbox" name="radVega7" id="radVega7">
										<label for="radVega7">AMD Radeon™ Vega 7 Graphics</label>
									</li>
									<li>
										<input type="checkbox" name="rtx1650" id="rtx1650">
										<label for="rtx1650">NVIDIA® RTX™ 1650</label>
									</li>
									<li>
										<input type="checkbox" name="rtx2050" id="rtx2050">
										<label for="rtx2050">NVIDIA® RTX™ 2050</label>
									</li>
									<li>
										<input type="checkbox" name="rtx3050" id="rtx3050">
										<label for="rtx3050">NVIDIA® RTX™ 3050</label>
									</li>
									<li>
										<input type="checkbox" name="rtx3050ti" id="rtx3050ti">
										<label for="rtx3050ti">NVIDIA® RTX™ 3050 TI</label>
									</li>
									<li>
										<input type="checkbox" name="rtx4050" id="rtx4050">
										<label for="rtx4050">NVIDIA® RTX™ 4050</label>
									</li>
									<li>
										<input type="checkbox" name="rtx4060" id="rtx4060">
										<label for="rtx4060">NVIDIA® RTX™ 4060</label>
									</li>
									<li>
										<input type="checkbox" name="rtx4070" id="rtx4070">
										<label for="rtx4070">NVIDIA® RTX™ 4070</label>
									</li>
									<li>
										<input type="checkbox" name="rtx4080" id="rtx4080">
										<label for="rtx4080">NVIDIA® RTX™ 4080</label>
									</li>

								</ul>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- <button type="button" class="btn btn-primary responsive-filter" data-toggle="button" aria-pressed="false"
			autocomplete="off" onclick="toggleref()">
			<i class="fa-solid fa-arrow-right"></i>
		</button> -->

		<!-- <div class="andagundu"> -->
		<div class="box-container-user">


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
					if ($ramformselectvalue != 'NULL')
						$sql_query .= " AND ram = '$ramformselectvalue'";
				} else {
					if ($ramformselectvalue != 'NULL')
						$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img, ram, make FROM `products` WHERE ram = '$ramformselectvalue'";
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
					if ($processorformselectvalue != 'NULL')
						$sql_query .= " AND description LIKE = '%$processorformselectvalue%'";
				} else {
					// if($processorformselectvalue != 'NULL')  $sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img, ram, make FROM `products` WHERE processor = '$processorformselectvalue'";
					if ($processorformselectvalue != 'NULL')
						$sql_query = "SELECT id, SUBSTRING(description, 1, 20) AS shortdesc, description, brand, price, img, ram, make FROM `products` WHERE description LIKE = '%$processorformselectvalue%'";
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
								<a href="https://wa.me/9850145588?text=I'm%20interested%20in%20buying%20<?= $fetch_product['brand']; ?>%20<?= $fetch_product['description']; ?>"
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