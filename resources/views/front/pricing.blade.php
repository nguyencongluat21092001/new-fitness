@extends('front.layout.app')
@section('body')
    
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/img_bg_5.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>service</h1>
							<h2>We always have promotions and prices for exercise packages, ensuring the needs and time are suitable for each customer.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-pricing">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Pricing Plan</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="pricing">
					@foreach ($packs as $post)
						
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">{{$post->post_category}}</h2>
							<div class="price"><sup class="currency">$</sup>{{$post->post_price}}<small>/{{$post->post_month}}</small></div>
							<ul class="classes">
								<li>{{$post->post_cardio}}</li>
								<li class="color">{{$post->post_swimming}}</li>
								<li>{{$post->post_yoga}}</li>
								<li class="color">{{$post->post_zumba}}</li>
								<li>{{$post->post_massage}}</li>
								<li class="color">{{$post->post_boxing}}</li>
								<li>{{$post->post_category}}</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	

	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(frontend/images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span> Discount</span></h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Become a Member</a></p>
				</div>
			</div>
		</div>
	</div>


	@endsection