<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Themelight</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/owl.transitions.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/lightbox.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/preloader.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/image.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/icon.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">

	</head>
	<body id="top">
	

        <header id="navigation" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<h1 href="#body"><div height="40" width="164" class="text-danger">CARD GRADER</div></h1>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><button type="button" class="btn btn-danger navbar-custom"><a href="{{ route('grade-card.index') }}">Grade Your Card</a></button></li>
                        <li><a href="#blog">Services</a></li>
                        <li><a href="#testimonial">About us</a></li>
                        <li><a href="#contact-form">Contact us</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>


	<div class="wrapper">
            @yield('content')
		<footer >
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<a href="#"><h1 class="text-danger">CARD GRADER</h1>
							<p>All rights reserved © 2022</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

		<!-- load Js -->
		<script src="{{ asset('frontend/js/jquery-1.11.3.min.js')}}"></script>
		<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
		<script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
		<script src="{{ asset('frontend/js/lightbox.js')}}"></script>
		<script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
		<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('frontend/js/html5lightbox.js')}}"></script>
		<script src="{{ asset('frontend/js/jquery.mixitup.js')}}"></script>
		<script src="{{ asset('frontend/js/wow.min.js')}}"></script>
		<script src="{{ asset('frontend/js/jquery.scrollUp.js')}}"></script>
		<script src="{{ asset('frontend/js/jquery.sticky.js')}}"></script>
		<script src="{{ asset('frontend/js/jquery.nav.js')}}"></script>
		<script src="{{ asset('frontend/js/main.js')}}"></script>
	</body>
</html>