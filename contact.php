<?php

include 'components/connect.php';

session_start();

if(isset($_POST['send'])){

	$name = $_POST['name'];
	// $name = filter_var($name, FILTER_SANITIZE_STRING);
	$address = $_POST['address'];
	// $email = filter_var($email, FILTER_SANITIZE_STRING);
	$msg = $_POST['msg'];
	$msg = filter_var($msg, FILTER_SANITIZE_STRING);
 
	$select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND address = ? AND message = ?");
	$select_message->execute([$name, $address, $msg]);
 
	if($select_message->rowCount() > 0){
	   $message[] = 'already sent message!';
	}else{
 
	   $insert_message = $conn->prepare("INSERT INTO `messages`( name, address, message) VALUES(?,?,?)");
	   $insert_message->execute([$name, $address, $msg]);
 
	   $message[] = 'sent message successfully!';
 
	}
 
 }

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
					<li><a href="/">Home</a></li>
					<!-- <li><a href="Laptop.php">Laptop</a></li> -->
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
						<li><a href="/">Home</a></li>
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
			<!-- <div class="gallery"> -->
				<!-- <img class="goodwill-img" src="img/goodwill1.jpg" alt="">
				<img class="goodwill-img" src="img/goodwill2.jpg" alt="">
				<img class="goodwill-img" src="img/goodwill3.jpg" alt=""> -->


				<div class="row">
					<div class="column">
						<img src="img/goodwill1.jpg" style="height: 100%;" onclick="openModal();currentSlide(1)"
							class="hover-shadow">
					</div>
					<div class="column">
						<img src="img/goodwill2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
					</div>
					<div class="column">
						<img src="img/goodwill3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
					</div>
				</div>

				<!-- The Modal/Lightbox -->
				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
					<div class="modal-content">

						<div class="mySlides">
							<div class="numbertext">1 / 4</div>
							<img src="img/goodwill1.jpg" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">2 / 4</div>
							<img src="img/goodwill2.jpg" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">3 / 4</div>
							<img src="img/goodwill3.jpg" style="width:100%">
						</div>


						<!-- Next/previous controls -->
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>

						<!-- Caption text -->
						<div class="caption-container">
							<p id="caption"></p>
						</div>

						<!-- Thumbnail image controls -->
						<div class="column">
							<img class="demo" src="img/goodwill1.jpg" onclick="currentSlide(1)" alt="With Hon. President[Asus India]">
						</div>

						<div class="column">
							<img class="demo" src="img/goodwill2.jpg" onclick="currentSlide(2)" alt="With Hon. Vice President[Asus India]">
						</div>

						<div class="column">
							<img class="demo" src="img/goodwill3.jpg" onclick="currentSlide(3)" alt="With Core Team[Asus India]">
						</div>

					</div>
				</div>
			<!-- </div> -->
		</div>
	</div>
	<style>
		.row>.column {
			padding: 0 8px;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		/* Create four equal columns that floats next to eachother */
		.column {
			float: left;
			width: 33%; 
			height: 100%;
		}

		/* The Modal (background) */
		.modal {
			display: none;
			position: fixed;
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: black;
		}

		/* Modal Content */
		.modal-content {
			position: relative;
			background-color: #fefefe;
			margin: auto;
			padding: 0;
			width: 90%;
			max-width: 1200px;
		}

		/* The Close Button */
		.close {
			color: white;
			position: absolute;
			top: 10px;
			right: 25px;
			font-size: 35px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #999;
			text-decoration: none;
			cursor: pointer;
		}

		/* Hide the slides by default */
		.mySlides {
			display: none;
		}

		/* Next & previous buttons */
		.prev,
		.next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			width: auto;
			padding: 16px;
			margin-top: -50px;
			color: white;
			font-weight: bold;
			font-size: 20px;
			transition: 0.6s ease;
			border-radius: 0 3px 3px 0;
			user-select: none;
			-webkit-user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover,
		.next:hover {
			background-color: rgba(0, 0, 0, 0.8);
		}

		/* Number text (1/3 etc) */
		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		/* Caption text */
		.caption-container {
			text-align: center;
			background-color: black;
			padding: 2px 16px;
			color: white;
		}

		img.demo {
			opacity: 0.6;
			width: 100%;
		}

		.active,
		.demo:hover {
			opacity: 1;
		}

		img.hover-shadow {
			transition: 0.3s;
			width: 100%;
			border-radius: 15px;
			padding: 1rem;
			cursor: pointer;
		}

		.hover-shadow:hover {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
	</style>
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
			<form action="" method="POST">
				<input type="text" placeholder="Name" name="name" class="contact-form-txt">
				<input type="text" placeholder="Address" name="address" class="contact-form-txt">
				<!-- <input type="checkbox" name="usertype" id="user-type"> -->
				<textarea placeholder="Message" name="msg" class="contact-form-textarea" cols="30" rows="10"></textarea>
				<input type="submit" name="send" class="contact-form-btn">
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
		// Open the Modal
		function openModal() {
			document.getElementById("myModal").style.display = "block";
		}

		// Close the Modal
		function closeModal() {
			document.getElementById("myModal").style.display = "none";
		}

		var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			var captionText = document.getElementById("caption");
			if (n > slides.length) { slideIndex = 1 }
			if (n < 1) { slideIndex = slides.length }
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
			captionText.innerHTML = dots[slideIndex - 1].alt;
		}
	</script>
	<!-- jQuery Plugins -->
	<script src="img/js/jquery.min.js"></script>
	<script src="img/js/bootstrap.min.js"></script>
	<script src="img/js/slick.min.js"></script>
	<script src="img/js/nouislider.min.js"></script>
	<script src="img/js/jquery.zoom.min.js"></script>
	<script src="img/js/main.js"></script>

</body>

</html>