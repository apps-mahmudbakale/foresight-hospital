<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Foresight Premier Hospital | Home</title>
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

	@include('partials.header')

	

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Blog Page</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>Blog Page</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs Section -->
    
        <section class="inner-page">
            @foreach ($posts as $post)
          <div class="container">
            <div class="card mb-4">
              <a href="#!"><img class="card-img-top" src="/storage/captions/{{$post->caption}}" alt="" /></a>
              <div class="card-body">
                <div class="small text-muted">{{$post->created_at->diffForHumans()}}</div>
                <h2 class="card-title">{{$post->title}}</h2>
                <p class="card-text">{{ Str::of($post->body)->words(60, '....') }}</p>
                <a href="{{route('show-blog', $post->slug)}}" class="btn btn-primary" href="#!">Read more ???</a>
              </div>
            </div>
          </div>
          @endforeach
        </section>
        <a href="https://api.whatsapp.com/send?phone=+2348038969767&text=Hello%21%20Mahmud Bakale" class="float" target="_blank">
          <i class="fa fa-whatsapp my-float"></i>
        </a>
      </main><!-- End #main -->
@include('partials.footer')
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