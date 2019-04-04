@extends('frontend.master')


@section('content')

<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Contact Us</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->

<section class="section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Get in <span class="alternate">Touch</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, velit.</p>
				</div>
			</div>
		</div>
		<form action="#" class="row">
			<div class="col-md-6">
				<input type="text" class="form-control main" name="name" id="name" placeholder="Name">
			</div>
			<div class="col-md-6">
				<input type="email" class="form-control main" name="email" id="email" placeholder="Email">
			</div>
			<div class="col-md-12">
				<input type="text" class="form-control main" name="phone" id="phone" placeholder="Phone">
			</div>
			<div class="col-md-12">
				<textarea name="message" id="message" class="form-control main" rows="10" placeholder="Your Message"></textarea>
			</div>
			<div class="col-12 text-center">
				<button type="submit" class="btn btn-main-md">Send Message</button>
			</div>
		</form>
	</div>
</section>

@endsection