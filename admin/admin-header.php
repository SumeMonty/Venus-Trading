
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Venus Trading</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
	<!-- <link type="text/css" rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" /> -->

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="../css/slick.css" />
	<link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>
	<!-- HEADER -->
<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<marquee behavior="" direction="">+91 9850145588 | venustrading@gmail.com | HO - Office No. 14, 1st Floor, Babu Building, Opp. Police Station, Lamington Rd, Mumbai - 400 007</marquee>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<!-- <div class="container"> -->
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-lg-3 col-md-12 col-12">
						<div class="header-logo">
							<a href="#" class="logo">
								<img height="20%" width="49%" src="../img/venus-black-filled.png" alt="Venus Trading">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-lg-6 col-md-12 col-12">
						<div class="header-search">
							<form method="POST">
								<select name="brand-select" class="brand-select">
									<option value="ALL">All Brands</option>
									<option value="ASUS">ASUS</option>
									<option value="HP">HP</option>
									<option value="ACER">ACER</option>
									<option value="DELL">DELL</option>
								</select>
								<input class="input" name="search-value" placeholder="Search here"
									value="<?php echo isset($_POST['search-value']) ? htmlspecialchars($_POST['search-value'], ENT_QUOTES) : ''; ?>">
								<input type="submit" name="search-btn" class="search-btn" value="Search">
								<!-- <button  class="search-btn">Search</button> -->
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-lg-3 col-md-12 col-12">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div class="mt-4">
								<a href="../admin/admin-login.php">
									<!-- <i class="fa-solid fa-heart fa-lg"></i> -->
									<i class="fa fa-user fa-lg"></i>
									<!-- <span>Your Wishlist</span> -->
									<!-- <div class="qty">2</div> -->
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="mt-4">
								<a href="">
									<i class="fa fa-shopping-cart fa-lg"></i>
									
									<!-- <span>Your Cart</span> -->
									<!-- <div class="qty">3</div> -->
								</a>
								
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars fa-lg"></i>
									<!-- <span>Menu</span> -->
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			<!-- </div> -->
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->
</body>