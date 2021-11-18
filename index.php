<?php
	ini_set('display_errors', '1');
	require __DIR__ . '/src/app.php';
?>

<!DOCTYPE html>
<html lang=''>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

  	<!-- Mano css failas -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Burgeris -->
	<script src="https://kit.fontawesome.com/adaa5eca50.js" crossorigin="anonymous"></script> 
</head>
<body>

	<header class="site-header"> 
		<div class="container flex-container">
			<div class="logo">
				<a href="#"><img src="images/logo_03.png" alt="kriss"></a>
			</div>
			<nav class="main-nav">
				<ul class=""> 
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>

			<!-- mobilusis meniu -->
            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
		</div>
	</header>

	<section class="hero">
		<div class="container">

			<!-- social media kairėje -->
			<div class="social-menu">
				<div class="social-icons">
					<a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
	  				<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
	  				<a href="https://www.behance.net" target="_blank"><i class="fab fa-behance"></i></a>
				</div>
			</div>

			<!-- judantys elementai -->
			<div class="mouse-move">
				<img src="images/leaf_01.png" id="img1" class="mouse" value="3">
				<img src="images/dots_05.png" id="img4" class="mouse" value="5">
			</div>
			<div class="mouse-move">
				<img src="images/dots_03.png" id="img2" class="mouse" value="-5">
			</div>

			<h1>Hi! I'm<br>Anastasija<br>UX designer</h1>
		</div>
	</section>

	<section class="know-more">
		<div class="container">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<a href="#">Know more</a>
		</div>
	</section>

	<!-- portfolio -->
	<section class="portfolio">
		<div class="container">
			<div class="section-heading">
				<h2>Portfolio</h2>
			</div>

			<div class="portfolio-content flex-container">
				<div class="big portfolio-img">
					<img src="images/img_60.png" alt=""/>
					<div class="image-overlay">
						<a class="img-btn" href="">View Project</a>
					</div>
				</div>

				<div class="portfolio-img">
					<img src="images/img_65.png" alt="" />
					<div class="image-overlay">
						<a class="img-btn" href="">View Project</a>
					</div>
				</div>
				<div class="portfolio-img">
					<img src="images/img_62.png" alt=""/>
					<div class="image-overlay">
						<a class="img-btn" href="">View Project</a>
					</div>
				</div>
				<div class="portfolio-img">
					<img src="images/img_64.png" alt=""/>
					<div class="image-overlay">
						<a class="img-btn" href="">View Project</a>
					</div>
				</div>
				<div class="portfolio-img">
					<img src="images/img_69.png" alt=""/>
					<div class="image-overlay">
						<a class="img-btn" href="">View Project</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-form">
		<div class="container">
			<div class="contact-form-heading">
				<h2>Contact Info</h2>
			</div>

			<form class="form" method="post">
	            <h3>Contact Form</h3>
	            <div class="form-group">
	            	<input type="text" name="name" class="form-control" value="" placeholder="Full Name" id="contact-name" required autofocus/>
	            	<label class="input-field-icon icon-user" for="login-name"></label>
	            </div>

	            <div class="form-group">
	            	<input type="email" name="email" class="form-control" value="" placeholder="Email Address" id="contact-email" required/>
	            	<label class="input-field-icon icon-email" for="login-email"></label>
	            </div>
	            
	            <div class="form-group">
	            	<textarea class="form-control" name="message" value="" placeholder="Type Message Here" id="contact-message" rows="1" required></textarea>
	            </div>

	            <button type="submit" name="submit" id="contact-submit" class="btn btn-primary btn-lg btn-block">Send</button>
          </form>
		</div>
	</section>

	<!-- footeris -->
	<footer class="footer">
        <div class="container">
        	<div class="footer-content flex-container">
        		<div class="contact">
        			<p>Email</p>
        			<h4><a href="mailto:anastasija.zidovlenkova@gmail.com">anastasija.zidovlenkova@gmail.com</a></h4>
        		</div>
        		<div class="phone">
        			<p>Phone</p>
        			<h4><a href="tel:+37067784257">+370 6 778 4257</a></h4>
        		</div>
        		<div class="address">
        			<p>Address</p>
        			<h4><a href="https://goo.gl/maps/44aK61SM4qj6XS2x9" target="_blank">Giedraičių g. 59<br>08212, Vilnius</a></h4>
        		</div>
        	</div>
        	<hr class="solid" />
        	<p>All rights reserved &copy2021</p>
        </div>
    </footer>

    <script src="js/custom.js"></script>
</body>
</html>