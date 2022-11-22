<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Foresight Premier Hospitals | Home</title>
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	
</head>

<body>

	<?php include 'inc/header.inc.php'; ?>

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
					<div class="container">
						<h2>Welcome to <span>Foresight Premier Hospitals</span></h2>
						<p>Making our client happy by delivering effective and efficient care</p>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
					<div class="container">
						<h2>Welcome to <span>Foresight Premier Hospitals</span></h2>
						<p>Making our client happy by delivering effective and efficient care</p>
					</div>
				</div>

				<!-- Slide 3 -->
				<div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
					<div class="container">
						<h2>Welcome to <span>Foresight Premier Hospitals</span></h2>
						<p>Making our client happy by delivering effective and efficient care</p>
					</div>
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
					<a class="cta-btn scrollto" href="#appointment"> Book an Appointment</a>
				</div>

			</div>
		</section><!-- End Cta Section -->


		<!-- End Features Section -->
		<!-- ======= Appointment Section ======= -->
		<section id="appointment" class="appointment section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Book an Appointment</h2>
					<p>Please Fill In to Book An Appointment</p>
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
							<input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<select name="department" id="department" class="form-control">
								<option value="">Select Center</option>
								<option value="Abuja">Abuja Center</option>
								<option value="Gombe">Gombe Center</option>
							</select>
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<select name="doctor" id="doctor" class="form-control">
								<option value="">Select Services</option>
								<option value="Clinical Services">Clinical Services</option>
								<option value="Diagnostic Services">Dignostic Services</option>

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
				</div>

				<div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
					<a href="assets/img/gallery/gallery-9.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-9.jpeg" alt=""></a>
					<a href="assets/img/gallery/gallery-10.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-10.jpeg" alt=""></a>
					<a href="assets/img/gallery/1.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/1.jpeg" alt=""></a>
					<a href="assets/img/gallery/2.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/2.jpeg" alt=""></a>
					<a href="assets/img/gallery/3.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/3.jpeg" alt=""></a>
					<a href="assets/img/gallery/4.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/4.jpeg" alt=""></a>
					<a href="assets/img/gallery/5.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/5.jpeg" alt=""></a>
					<a href="assets/img/gallery/6.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/6.jpeg" alt=""></a>
				</div>

			</div>
		</section><!-- End Gallery Section -->
		<!-- ======= Contact Sectio2.jpeg -->
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
									<p>OFF. AJUJI WAZIRI ROAD, BEHIND GOMBE LGA INEC OFFICE FEDERAL LOW COST GOMBE.</p>
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
									<p>+234(0)7044924324(Abuja)<br>+234(0)8029433148(Gombe)</p>
								</div>
							</div>
						</div>
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
		<a href="https://api.whatsapp.com/send?phone=+2348038969767&text=Hello%21%20Mahmud Bakale" class="float" target="_blank">
			<i class="fa fa-whatsapp my-float"></i>
		</a>
		
</main><!-- End #main -->
<?php include 'inc/footer.inc.php'; ?>
<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="smtp.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>


<script src="assets/js/main.js"></script>

<script>

	
</script>

</body>

</html>