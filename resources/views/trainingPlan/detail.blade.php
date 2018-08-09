@extends('base')
@section('content')
<div class="main-wrapper">
	@include('layouts.navbar')
	<!-- Start Main Content Part -->
	<div class="s-pagetitle">
		<img src="/img/backgrounds/pagetitle-img_classes.jpg" class="s-pagetitle-img" alt="About page title image">
		<div class="container flexbox">
			<h1 class="clr-white title-decor">Planes</h1>
		</div>
	</div>
	<!-- /.s-pagetitle -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul>
						<li><a href="{{ url('/') }}">Inicio</a></li>
						<li><a href="{{ url('/trainingPlan') }}">Planes y precios</a></li>
						<li><span> {{ $trainingPlan->name }}</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-md-12">
					<div class="product-page">
						<h3>{{ $trainingPlan->name }}</h3>
						<div class="row">
							<div class="col-md-7">
								<div class="product-img">
									<div class="product-img-big">
										@if($trainingPlan->discount != 100)  
										<div class="product-label">
											<span class="label-sale">
											SALE
											</span>
										</div>
										@endif
										<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item" src="{{ $trainingPlan->video_url }}" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="product-desc">
									<div class="price-box">
										@if($trainingPlan->discount == 100)
										<span class="price">${{ $trainingPlan->price }}</span>
										@else
										<span class="price">${{ $trainingPlan->price - $trainingPlan->price*($trainingPlan->discount/100) }}</span>
										<span class="old-price price-crossed">${{ $trainingPlan->price }}</span>
										@endif
									</div>
									<form action="" class="form-buying">
										<div class="byu-btn">
											<button class="button button-bg button-buying"><i class="icon icon-shopping-cart"></i>Comprar</button>
										</div>
									</form>
								</div>
								<p> {{ $trainingPlan->short_description }}</p>
								{{-- TAGS y CATEGORIAS
								<div class="product-meta">
									<span>Category: <a href="#">Accesories</a></span>
									<span>Tag: <a href="#">Higher</a></span>
								</div>
								--}}
							</div>
						</div>
						<div class="tabs-box">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#description">Descripción</a></li>
								{{-- REVIEWS 
								<li><a data-toggle="tab" href="#reviews">Reviews (3)</a></li>
								--}}
							</ul>
							<div class="tabs-content">
								<div class="tab-content">
									<div id="description" class="tab-pane fade in active">
										<p style="white-space: pre-line"> 
											{{ $trainingPlan->description }}
										</p>
									</div>
									{{-- REVIEWS 
									<div id="reviews" class="tab-pane fade">
										<div class="comments-box">
											<div class="comments-box-title">
												<h4>Reviews (3)</h4>
											</div>
											<div class="comment-item">
												<div class="row">
													<div class="col-sm-2">
														<div class="img-circle">
															<img src="img/users/avatar_2.jpg" alt="User comment 2">
														</div>
													</div>
													<div class="col-sm-10">
														<div class="comment-title">
															<h6>Robert White</h6>
															<div class="comment-date">
																<i class="icon-clock"></i>
																<span>July 22, 2015 (10:58 am)</span>
															</div>
														</div>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. </p>
													</div>
												</div>
											</div>
											<div class="comment-item">
												<div class="row">
													<div class="col-sm-2">
														<div class="img-circle">
															<img src="img/users/avatar_3.jpg" alt="User comment 3">
														</div>
													</div>
													<div class="col-sm-10">
														<div class="comment-title">
															<h6>Gerald Floyd</h6>
															<div class="comment-date">
																<i class="icon-clock"></i>
																<span>July 22, 2015 (10:58 am)</span>
															</div>
														</div>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. </p>
													</div>
												</div>
											</div>
											<div class="comment-form">
												<h4>Leave a review</h4>
												<form action="">
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label for="message"> Your message *</label>
																<textarea name="message" id="message"></textarea>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="comments-name">Your name *</label>
																<input type="text" id="comments-name" name="name">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="comments-email">Your E-mail *</label>
																<input type="text" id="comments-email" name="email">
															</div>
														</div>
														<div class="col-md-4">
															<input type="submit" value="Send comment" class="button button-bg va-bottom">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									--}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- 
			<div class="col-md-12">
				<div class="info-banner">
					<div class="row">
						<div class="col-md-7 nopadding-right">
							<div class="info-banner-img">
								<img src="{{ $trainingPlan->image_url }}" alt="Classes banner">
							</div>
						</div>
						<div class="col-md-5">
							<div class="product-desc">
								<div class="price-box">
									<span class="price">${{ $trainingPlan->price*($trainingPlan->discount/100) }}</span>
									<span class="old-price price-crossed">${{ $trainingPlan->price }}</span>
								</div>
								<form action="" class="form-buying">
									<div class="byu-btn">
										<button class="button button-bg button-buying"><i class="icon icon-shopping-cart"></i>Add to cart</button>
									</div>
								</form>
							</div>
							<p> {{ $trainingPlan->short_description }}</p>
							<div class="product-meta">
								<span>Category: <a href="#">Accesories</a></span>
								<span>Tag: <a href="#">Higher</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-box">
				<h3>Descripción</h3>
				<p>{{ $trainingPlan->description }}</p>
				<div class="classes_footer">
					<div class="classes_footer-item">
						<span class="clr-dark">Precio:
						<span class="clr-lighther">${{ $trainingPlan->price }}</span>
						</span>
					</div>
					<div class="classes_footer-item">
						<span class="clr-dark">Descuento:
						<span class="clr-lighther">{{ $trainingPlan->discount }}</span>
						</span>
					</div>
				</div>
			</div>
		</div>
		--}}
	</div>
</div>
<!-- /.main-wrapper -->
@endsection