<?php

include('components/connect.php');

session_start();



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

	<!-- Title Logo -->
	<link rel="icon" href="img/venus-black-filled.png">

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
					<h3 class="breadcrumb-header"><span>Venus</span> Trading Co.</h3>
					<!-- <ul class="breadcrumb-tree">
						<li><a href="index.php">Home</a></li>
						<li class="active">Laptop</li>
					</ul> -->
				</div>

			</div>
		</div>

	</div>
	<!-- /BREADCRUMB -->
	<?php

		include 'testindex.php';

	?>

	</div>
	
	<!-- FOOTER -->
	<?php
	include 'components/footer.php'
		?>
	<!-- /FOOTER -->


	<script>
// 		$(document).ready(function () {

// filter_data();

// function filter_data() {
// 	$('.filter_data').html('<div id="loading" style="" ></div>');
// 	var action = 'fetch_data';
// 	var minimum_price = $('#hidden_minimum_price').val();
// 	var maximum_price = $('#hidden_maximum_price').val();
// 	var brand = get_filter('brand');
// 	var ram = get_filter('ram');
// 	var storage = get_filter('storage');
// 	$.ajax({
// 		url: "fetch_data.php",
// 		method: "POST",
// 		data: { action: action, minimum_price: minimum_price, maximum_price: maximum_price, brand: brand, ram: ram, storage: storage },
// 		success: function (data) {
// 			$('.filter_data').html(data);
// 		}
// 	});
// }

// function get_filter(class_name) {
// 	var filter = [];
// 	$('.' + class_name + ':checked').each(function () {
// 		filter.push($(this).val());
// 	});
// 	return filter;
// }

// $('.common_selector').click(function () {
// 	filter_data();
// });

// $('#price_range').slider({
// 	range: true,
// 	min: 1000,
// 	max: 65000,
// 	values: [1000, 65000],
// 	step: 500,
// 	stop: function (event, ui) {
// 		$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
// 		$('#hidden_minimum_price').val(ui.values[0]);
// 		$('#hidden_maximum_price').val(ui.values[1]);
// 		filter_data();
// 	}
// });

// });
	</script>


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

	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link href="css/jquery-ui.css" rel="stylesheet">

</body>

</html>