<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Foresight Specialist Clinic and Diagnostic Services | Home</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/all.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">

	<link rel="stylesheet" href="fontawesome-free/css/all.min.css">
	<link href="assets/css/style.css" rel="stylesheet">

	
</head>

<body>

	<!-- ======= Top Bar ======= -->
	<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
		<div class="container d-flex align-items-center justify-content-between">
			<div class="d-flex align-items-center">
				<i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
			</div>
			<div class="d-flex align-items-center">
				<i class="icofont-phone"></i> Call us now +234 (0)7044924324
			</div>
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
			

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="active"><a href="index.php"> <i class="fa fa-home"></i> Home</a></li>
					<li><a href="about.php"><i class="fa fa-question-circle"></i> About</a></li>
					<li><a href="services.php"><i class="fa fa-cogs"></i> Services</a></li>
					<li><a href="doctors.php"><i class="fa fa-users"></i> Doctors</a></li>
					<li><a href="#doctors"><i class="fa fa-comments"></i> Blog</a></li>
					<li><a href="#contact"><i class="fa fa-phone-square"></i> Contact</a></li>

				</ul>
			</nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">

				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
					
				</div>

				<!-- Slide 3 -->
				<div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
				</div>

			</div>

			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>
	</section><!-- End Hero -->

	<main id="main">

		

		<!-- ======= Cta Section ======= -->
		<section id="cta" class="cta">
			<div class="container" data-aos="zoom-in">

				<div class="text-center">
					<h3>In an emergency? Need help now?</h3>
					<p> In Case of An Emergencies.</p>
					<a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
				</div>

			</div>
		</section><!-- End Cta Section -->


		<!-- End Features Section -->
		<!-- ======= Appointment Section ======= -->
		<section id="appointment" class="appointment section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Make an Appointment</h2>
					<p>Please Fill In to Make An Appointment</p>
				</div>

				<form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
					<div class="form-row">
						<div class="col-md-4 form-group">
							<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
							<div class="validate"></div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4 form-group">
							<input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<select name="department" id="department" class="form-control">
								<option value="">Select Department</option>
								<option value="Department 1">Department 1</option>
								<option value="Department 2">Department 2</option>
								<option value="Department 3">Department 3</option>
							</select>
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<select name="doctor" id="doctor" class="form-control">
								<option value="">Select Doctor</option>
								<option value="Doctor 1">Doctor 1</option>
								<option value="Doctor 2">Doctor 2</option>
								<option value="Doctor 3">Doctor 3</option>
							</select>
							<div class="validate"></div>
						</div>
					</div>

					<div class="form-group">
						<textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
						<div class="validate"></div>
					</div>
					<div class="mb-3">
						<div class="loading">Loading</div>
						<div class="error-message"></div>
						<div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
					</div>
					<div class="text-center"><button type="submit">Make an Appointment</button></div>
				</form>

			</div>
		</section><!-- End Appointment Section -->


		<!-- ======= Gallery Section ======= -->
		<section id="gallery" class="gallery">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Gallery</h2>
					<<!-- p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
				</div>

				<div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
					<a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-1.jpg" alt=""></a>
					<a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-2.jpg" alt=""></a>
					<a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-3.jpg" alt=""></a>
					<a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-4.jpg" alt=""></a>
					<a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-5.jpg" alt=""></a>
					<a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-6.jpg" alt=""></a>
					<a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-7.jpg" alt=""></a>
					<a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-8.jpg" alt=""></a>
				</div>

			</div>
		</section><!-- End Gallery Section -->
		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container">

				<div class="section-title">
					<h2>Contact</h2>
					<p>Contact Us At</p>
				</div>

			</div>
			<div class="container">

				<div class="row mt-5">

					<div class="col-lg-6">

						<div class="row">
							<div class="col-md-12">
								<div class="info-box">
									<i class="bx bx-map"></i>
									<h3>Our Address</h3>
									<p>NO.7 THABA TSEKA STREET WUSE 2 ABUJA</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box mt-4">
									<i class="bx bx-envelope"></i>
									<h3>Email Us</h3>
									<p>info@foresightclinics.com<br>contact@foresightclinics.com</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box mt-4">
									<i class="bx bx-phone-call"></i>
									<h3>Call Us</h3>
									<p>+234(0)7044924324<br>+234(0)7044924324</p>
								</div>
							</div>
						</div>
						<p> Closing note: making our client happy by delivering effective and efficient care</p>
					</div>

					<div class="col-lg-6">
						<form action="forms/contact.php" method="post" role="form" class="php-email-form">
							<div class="form-row">
								<div class="col form-group">
									<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
									<div class="validate"></div>
								</div>
								<div class="col form-group">
									<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
									<div class="validate"></div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validate"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validate"></div>
							</div>
							<div class="mb-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Your message has been sent. Thank you!</div>
							</div>
							<div class="text-center"><button type="submit">Send Message</button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->
	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Foresight Specialist Clinics and Diagnostic Services</span></strong>. All Rights Reserved
			</div>
			<div class="credits">

				Designed by <a href="">Ihmami Tech Solution</a>
			</div>
		</div>
	</footer><!-- End Footer -->
	<div id="preloader"></div>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendor/counterup/counterup.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>


	<script src="assets/js/main.js"></script>

</body>

</html>