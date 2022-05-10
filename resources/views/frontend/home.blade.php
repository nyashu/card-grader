@extends('frontend.layouts.master')

@section('content')

<section id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h1>Let's Begin Card Grader</h1>
					<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</h2>
					<div class="buttons">
						<a href="{{ route('grade-card.index') }}" class="btn btn-learn">Grade Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scrolldown">
		<a id="scroll" href="#features" class="scroll"></a>
	</div>
</section>
<section id="features">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h2>OUR BEST SERVICES</h2>
					<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-xs-6 col-sm-6">
				<div class="feature-block text-center">
					<div class="icon-box">
						<i class="ion-easel"></i>
					</div>
					<h4 class="wow fadeInUp" data-wow-delay=".3s">Speedy Grading</h4>
					<p class="wow fadeInUp" data-wow-delay=".5s">Using advanced technology and AI behind the scenes, we are able to deliver your card grade results quicker.</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-6 col-sm-6">
				<div class="feature-block text-center">
					<div class="icon-box">
						<i class="ion-paintbucket"></i>
					</div>
					<h4 class="wow fadeInUp" data-wow-delay=".3s">Free Grading</h4>
					<p class="wow fadeInUp" data-wow-delay=".5s">Yes, all the features of this system are totally free!
			
					</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-6 col-sm-6">
				<div class="feature-block text-center">
					<div class="icon-box">
						<i class="ion-paintbrush"></i>
					</div>
					<h4 class="wow fadeInUp" data-wow-delay=".3s">Trusted</h4>
					<p class="wow fadeInUp" data-wow-delay=".5s">With over 10,000 PSA graded card pictures available in our dataset and using AWS machine learning, makes this platform one of the most trusted in the industry.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="contact-form">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>CONTACT US</h2>
				<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
			</div>
			<div class="col-md-6 col">
				<!-- map -->
				<div class="map">
				  <div id="googleMap"></div>
			   </div><!--/map-->

			</div>
			<div class="col-md-6">
				<form>
					<input type="text" class="form-control" placeholder="Name">
					<input type="text" class="form-control" placeholder="Email">
					<textarea class="form-control" rows="3" placeholder="Message"></textarea>
					<button class="btn btn-default" type="submit">SEND</button>
				</form>
			</div>
		</div>
	</div>
</section>
	
@endsection