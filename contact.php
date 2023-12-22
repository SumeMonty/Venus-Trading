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

	<!-- Custom font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">

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
					<li><a href="Laptop.php">Laptop</a></li>
					<li class="active"><a href="">Contact</a></li>

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
						<li><a href="index.php">Home</a></li>
						<li class="active">Contact</li>
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
		<div class="goodwill">
			<h2>Goodwill Earned</h2>
			<div class="gallery">
				<img class="goodwill-img" src="img/goodwill1.jpg" alt="">
				<img class="goodwill-img" src="img/goodwill2.jpg" alt="">
				<img class="goodwill-img" src="img/goodwill3.jpg" alt="">
			</div>
		</div>
	</div>
	<!-- <div class="container"> -->
	<div class="contact-in">
		<div class="contact-map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15068.242372850462!2d73.12990724458817!3d19.236190836070474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7941569a23ddd%3A0x54cbe0fababc84dd!2sVenus%20Trading%20Co.!5e0!3m2!1sen!2sin!4v1702472177903!5m2!1sen!2sin"
				width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="contact-form">
			<h1>Contact Us</h1>
			<form action="">
				<input type="text" placeholder="Name" class="contact-form-txt">
				<input type="text" placeholder="Address" class="contact-form-txt">
				<textarea placeholder="Message" class="contact-form-textarea" cols="30" rows="10"></textarea>
				<input type="submit" name="Submit" class="contact-form-btn">
			</form>
		</div>
	</div>
	<!-- </div> -->
	<!-- /SECTION -->

	<!-- FOOTER -->
	<?php
	include 'components/footer.php'
		?>
	<!-- /FOOTER -->

	<script>
		/*
		var i = 0;
		var goodImg = document.querySelector('.goodwill-img');
		var time = 2000;
		var imgArray = [];

		imgArray[0] = 'img/goodwill1.jpg';
		imgArray[1] = 'img/goodwill2.jpg';
		//imgArray[2] = 'img/goodwill3.jpg';


		function changeImg() {
			goodImg.attributes.src.value = imgArray[i];

			if(i < imgArray.length) {
				i++;
			} else {
				i = 0;
			}

			setTimeout("changeImg()", 2000);
		}*/

	</script>
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>