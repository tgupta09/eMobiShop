<!doctype html>
<html lang="en">

<head>
	<title>@yield('title') - ECommerce</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" />
	<!-- bootstrap -->
	<link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- font awesome -->
	<link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- ionicons icon -->
	<link href="{{ asset('/assets/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- mega menu -->
	<link href="{{ asset('/assets/css/mega-menu/mega_menu.css') }}" rel="stylesheet" type="text/css" />
	<!-- owl-carousel -->
	<link href="{{ asset('/assets/css/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
	<!-- magnific popup -->
	<link href="{{ asset('/assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
	<!-- animate -->
	<link href="{{ asset('/assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
	<!-- media element player -->
	<link href="{{ asset('/assets/css/mediaelementplayer.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- REVOLUTION STYLE SHEETS -->
	<link href="{{ asset('/assets/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
	<!-- ADD-ONS CSS FILES -->
	<link href="{{ asset('/assets/revolution/css/revolution.addon.particles.css') }}" rel="stylesheet" type="text/css">
	<!-- shortcodes -->
	<link href="{{ asset('/assets/css/shortcodes.css') }}" rel="stylesheet" type="text/css" />
	<!-- main style -->
	<link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
	<!-- shop style -->
	<link href="{{ asset('/assets/css/shop.css') }}" rel="stylesheet" type="text/css" />
	<!-- responsive -->
	<link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<!-- custom -->
	<link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
	<script>
		var base_url = {!! json_encode(url('/')) !!}
	</script>
</head>

<body>
	<!-- loading -->
	<div id="loading">
		<div id="loading-center">
			<img src="{{ asset('/assets/images/loader.png') }}" alt="loder">
		</div>
	</div>
	<!-- loading End -->
	<!-- HEADER  -->
	<header class="header-01 white re-none">
		<div class="topbar">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="topbar-left">
							<ul class="list-inline">
								<li class="list-inline-item"><i class="fa fa-phone text-blue"></i> +0123 456 789</li>
								<li class="list-inline-item"><i class="fa fa-envelope-o"> </i> support@Qwilo.com</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="topbar-right text-right">
							<ul class="list-inline">
								<li class="list-inline-item">
									<ul class="list-inline iq-left">
										<li class="list-inline-item"><a href="#" data-toggle="modal" data-target=".iq-login-from" data-whatever="@mdo"><i class="fa fa-lock"></i>Login</a></li>
										<li class="list-inline-item"><a href="#" data-toggle="modal" data-target=".iq-register-from" data-whatever="@fat"><i class="fa fa-user"></i>Register</a></li>
									</ul>
								</li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-comments-o"></i>Free Consulting</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- menu start -->
		<nav id="menu-1" class="mega-menu">
			<!-- menu list items container -->
			<section class="menu-list-items">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<!-- menu logo -->
							<ul class="menu-logo">
								<li>
									<a href="{{route('index')}}">
										<img id="logo_img" src="{{ asset('/assets/images/logo-black.png') }}" alt="logo">
									</a>
								</li>
							</ul>
							<ul class="menu-sidebar pull-right">
								<li>
									<a href="#" id="btn-search"><i class="fa fa-search" aria-hidden="true"></i></a>
								</li>
								<li class="shop-cart">
									<div class="iq-pos-r">
										<a href="#" class="iq-cart iq-pos-r" id="cart"><i class="fa fa-shopping-cart"></i><span class="cart-count">2</span></a>
										<!-- Shopping Cart -->
										<div class="cart-box">
											<div class="cart-header">
												<div class="iq-font-black">Shopping Cart</div>
											</div>
											<div class="cart-product">
												<div class="cart-image">
													<img class="img-fluid" src="{{ asset('/assets/images/shop/01.jpg') }}" alt="">
												</div>
												<div class="cart-title clearfix">
													<a href="#">Product name <strong>x2</strong> </a>
													<div class="cart-price">
														<del>$15.99</del>
														<ins>$10.49</ins>
													</div>
												</div>
												<div class="cart-close">
													<a href="#"> <i class="fa fa-trash"></i> </a>
												</div>
											</div>
											<div class="cart-product">
												<div class="cart-image">
													<img class="img-fluid" src="{{ asset('/assets/images/shop/01.jpg') }}" alt="">
												</div>
												<div class="cart-title clearfix">
													<a href="#">Product name <strong>x2</strong> </a>
													<div class="cart-price">
														<del>$15.99</del>
														<ins>$10.49</ins>
													</div>
												</div>
												<div class="cart-close">
													<a href="#"> <i class="fa fa-trash"></i> </a>
												</div>
											</div>
										</div>
										<!-- / Shopping Cart END -->
									</div>
								</li>
								<li class="iq-share">
									<div class="slideouticons">
										<input type="checkbox" id="togglebox" />
										<label for="togglebox" class="mainlabel"><i class="fa fa-share-alt"></i></label>
										<div class="iconswrapper">
											<ul>
												<li><a href="#"><i class="fa fa-facebook" title="Facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus" title="Google Plus"></i></a></li>
												<li><a href="#"><i class="fa fa-pinterest-p" title="Pinterest"></i></a></li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
							<!-- menu links -->
							<ul class="menu-links">
								<!-- active class -->
								<li>
									<a href="javascript:void(0)">Home</a>
									<!-- drop down full width -->
									<div class="drop-down grid-col-12">
										<!--grid row-->
										<div class="grid-row row-eq-height">
											<!--grid column 2-->
											<div class="grid-col-2">
												<h3>Multi Purpose</h3>
												<ul>
													<li><a href="../qwilo/index.html">Qwilo Main</a></li>
													<li><a href="../qwilo/home-1.html"> Awesome Home 1 </a></li>
													<li><a href="../qwilo/home-2.html"> Awesome Home 2 </a></li>
													<li><a href="../qwilo/home-3.html"> Awesome Home 3 </a></li>
													<li><a href="../qwilo/home-4.html"> Awesome Home 4 </a></li>
													<li><a href="../qwilo/creative-1.html">Creative 1</a></li>
													<li><a href="../qwilo/creative-2.html">Creative 2</a></li>
													<li><a href="../qwilo/classic-1.html">classic 1</a></li>
													<li><a href="../qwilo/classic-2.html">classic 2</a></li>
													<li><a href="../qwilo/business-1.html">Business 1</a></li>
													<li><a href="../qwilo/business-2.html">Business 2</a></li>
													<li><a href="../qwilo/business-3.html">Business 3</a></li>
												</ul>
											</div>
											<!--grid column 2-->
											<div class="grid-col-2">
												<h3>Multi Purpose</h3>
												<ul>
													<li><a href="../qwilo/corporate-1.html">Corporate 1</a></li>
													<li><a href="../qwilo/corporate-2.html">Corporate 2</a></li>
													<li><a href="../qwilo/finance.html">Finance</a></li>
													<li><a href="../qwilo/creative-agency.html">Creative Agency</a></li>
													<li><a href="../qwilo/digital-agency.html">Digital Agency</a></li>
													<li><a href="../qwilo/app-landing.html">App Landing</a></li>
													<li><a href="../qwilo/law.html">Law</a></li>
													<li><a href="../qwilo/loan.html">Loan</a></li>
													<li><a href="../qwilo/consultant.html">Consultant</a></li>
													<li><a href="../qwilo/event.html">Event</a></li>
													<li><a href="../qwilo/freelancer.html">Freelancer</a></li>
												</ul>
											</div>
											<!--grid column 2-->
											<div class="grid-col-2">
												<h3>One Page</h3>
												<ul>
													<li><a href="../qwilo-one-page/business-1.html">Business 1</a></li>
													<li><a href="../qwilo-one-page/business-2.html">Business 2</a></li>
													<li><a href="../qwilo-one-page/classic-1.html">classic 1</a></li>
													<li><a href="../qwilo-one-page/classic-2.html">classic 2</a></li>
													<li><a href="../qwilo-one-page/creative-1.html">Creative 1</a></li>
													<li><a href="../qwilo-one-page/creative-2.html">Creative 2</a></li>
													<li><a href="../qwilo-one-page/finance.html">Finance</a></li>
													<li><a href="../qwilo-one-page/law.html">Law</a></li>
													<li><a href="../qwilo-one-page/loan.html">Loan</a></li>
													<li><a href="../qwilo-one-page/parallax.html">Parallax</a></li>
												</ul>
											</div>
											<!--grid column 2-->
											<div class="grid-col-2">
												<h3>Shop</h3>
												<ul>
													<li><a href="shop-fashion.html">Fashion</a></li>
													<li><a href="shop-electronic.html">Electronics</a></li>
													<li><a href="shop-sunglasses.html">Sunglasses</a></li>
													<li><a href="shop-jewellery.html">Jewellery</a></li>
													<li><a href="shop-watch.html">Watch</a></li>
													<li><a href="shop-book.html">Book</a></li>
													<li><a href="shop-bicycle.html">Cycle</a></li>
													<li><a href="shop-vegetable.html">Vegetables</a></li>
													<li><a href="shop-shoes.html">Shoes</a></li>
												</ul>
											</div>
											<!--grid column 4-->
											<div class="grid-col-4" style="background-image: url('images/bg/shop-bg1.jpg'); background-position: center left; background-repeat: no-repeat; background-size: cover;">
											</div>
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:void(0)">Pages</a>
									<!-- drop down multilevel  -->
									<ul class="drop-down-multilevel">
										<li>
											<a href="javascript:void(0)">Header Style<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li>
													<a href="javascript:void(0)">Header Style 1 <i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/header1-dark-bg.html">With Dark BG</a></li>
														<li><a href="../qwilo/header1-white-bg.html">With White BG</a></li>
														<li><a href="../qwilo/header1-transparent-dark.html">Transparent Dark</a></li>
														<li><a href="../qwilo/header1-transparent-white.html">Transparent White</a></li>
														<li><a href="../qwilo/header1-dark-border.html">Dark Border</a></li>
														<li><a href="../qwilo/header1-white-border.html">White Border</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Header Style 2 <i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/header2-dark-bg.html">With Dark BG</a></li>
														<li><a href="../qwilo/header2-white-bg.html">With White BG</a></li>
														<li><a href="../qwilo/header2-transparent.html">Transparent</a></li>
														<li><a href="../qwilo/header2-transparent-dark.html">Transparent Dark</a></li>
														<li><a href="../qwilo/header2-transparent-white.html">Transparent White</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Header Style 3 <i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/header3-dark-bg.html">With Dark BG</a></li>
														<li><a href="../qwilo/header3-white-bg.html">With White BG</a></li>
														<li><a href="../qwilo/header3-white-green-bg.html">With White Green BG</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Header Style 4 <i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/header4-dark-bg.html">With Dark BG</a></li>
														<li><a href="../qwilo/header4-white-bg.html">With White BG</a></li>
														<li><a href="../qwilo/header4-transparent-dark.html">Transparent Dark</a></li>
														<li><a href="../qwilo/header4-transparent-white.html">Transparent White</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Header Style 5 <i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/header5-dark-bg.html">With Dark BG</a></li>
														<li><a href="../qwilo/header5-white-bg.html">With White BG</a></li>
														<li><a href="../qwilo/header5-transparent-dark.html">Transparent Dark</a></li>
														<li><a href="../qwilo/header5-transparent-white.html">Transparent White</a></li>
														<li><a href="../qwilo/header5-color-bg.html">Color BG</a></li>
														<li><a href="../qwilo/header5-image-bg.html">Image BG</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Header Style 6 <i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/header6-dark-bg.html">With Dark BG</a></li>
														<li><a href="../qwilo/header6-white-bg.html">With White BG</a></li>
														<li><a href="../qwilo/header6-transparent.html">Transparent</a></li>
														<li><a href="../qwilo/header6-transparent-dark.html">Transparent Dark</a></li>
														<li><a href="../qwilo/header6-transparent-white.html">Transparent White</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Header Style 7 <i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/header7-dark-bg.html">With Dark BG</a></li>
														<li><a href="../qwilo/header7-white-bg.html">With White BG</a></li>
														<li><a href="../qwilo/header7-transparent-dark.html">Transparent Dark</a></li>
														<li><a href="../qwilo/header7-transparent-white.html">Transparent White</a></li>
														<li><a href="../qwilo/header7-color-bg.html">Color BG</a></li>
														<li><a href="../qwilo/header7-image-bg.html">Image BG</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)">Footer Style<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li>
													<a href="javascript:void(0)">Footer Color BG<i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/footers-color-bg-1.html">Footer 1</a></li>
														<li><a href="../qwilo/footers-color-bg-2.html">Footer 2</a></li>
														<li><a href="../qwilo/footers-color-bg-3.html">Footer 3</a></li>
														<li><a href="../qwilo/footers-color-bg-4.html">Footer 4</a></li>
														<li><a href="../qwilo/footers-color-bg-5.html">Footer 5</a></li>
														<li><a href="../qwilo/footers-color-bg-6.html">Footer 6</a></li>
														<li><a href="../qwilo/footers-color-bg-7.html">Footer 7</a></li>
														<li><a href="../qwilo/footers-color-bg-8.html">Footer 8</a></li>
														<li><a href="../qwilo/footers-color-bg-9.html">Footer 9</a></li>
														<li><a href="../qwilo/footers-color-bg-10.html">Footer 10</a></li>
														<li><a href="../qwilo/footers-color-bg-11.html">Footer 11</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Footer White<i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/footers-white-1.html">Footer 1</a></li>
														<li><a href="../qwilo/footers-white-2.html">Footer 2</a></li>
														<li><a href="../qwilo/footers-white-3.html">Footer 3</a></li>
														<li><a href="../qwilo/footers-white-4.html">Footer 4</a></li>
														<li><a href="../qwilo/footers-white-5.html">Footer 5</a></li>
														<li><a href="../qwilo/footers-white-6.html">Footer 6</a></li>
														<li><a href="../qwilo/footers-white-7.html">Footer 7</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Footer Image BG<i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/footers-image-bg-1.html">Footer 1</a></li>
														<li><a href="../qwilo/footers-image-bg-2.html">Footer 2</a></li>
														<li><a href="../qwilo/footers-image-bg-3.html">Footer 3</a></li>
														<li><a href="../qwilo/footers-image-bg-4.html">Footer 4</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)">About<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li><a href="../qwilo/about-us-1.html">About Us 1</a></li>
												<li><a href="../qwilo/about-us-2.html">About Us 2</a></li>
												<li><a href="../qwilo/about-us-3.html">About Us 3</a></li>
												<li><a href="../qwilo/about-me-1.html">About Me 1</a></li>
												<li><a href="../qwilo/about-me-2.html">About Me 2</a></li>
												<li><a href="../qwilo/about-me-3.html">About Me 3</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)">Other Pages<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li>
													<a href="javascript:void(0)">Coming Soon <i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/coming-soon-1.html">Coming Soon 1</a></li>
														<li><a href="../qwilo/coming-soon-2.html">Coming Soon 2</a></li>
														<li><a href="../qwilo/coming-soon-3.html">Coming Soon 3</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Error <i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/error-404-1.html">Error 404 1</a></li>
														<li><a href="../qwilo/error-404-2.html">Error 404 2</a></li>
														<li><a href="../qwilo/error-404-3.html">Error 404 3</a></li>
														<li><a href="../qwilo/error-500-1.html">Error 500 1</a></li>
														<li><a href="../qwilo/error-500-2.html">Error 500 2</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Thank You<i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/thank-you-1.html">Thank You 1</a></li>
														<li><a href="../qwilo/thank-you-2.html">Thank You 2</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)"> Under Construction-1<i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/under-construction-1.html">Under Construction 1</a></li>
														<li><a href="../qwilo/under-construction-2.html">Under Construction 2</a></li>
													</ul>
												</li>
												<li>
													<a href="javascript:void(0)">Clients<i class="fa fa-angle-right fa-indicator"></i></a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel">
														<li><a href="../qwilo/clients-1.html">Clients 1</a></li>
														<li><a href="../qwilo/clients-2.html">Clients 2</a></li>
													</ul>
												</li>
												<li><a href="../qwilo/our-office.html">Our Office</a></li>
												<li><a href="../qwilo/appointment.html">Appointment</a></li>
												<li><a href="../qwilo/blogtextual.html">Blogtextual</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)">Services<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li><a href="../qwilo/services-1.html">services 1</a></li>
												<li><a href="../qwilo/services-2.html">services 2</a></li>
												<li><a href="../qwilo/services-3.html">services 3</a></li>
												<li><a href="../qwilo/services-details-1.html">Services Details 1</a></li>
												<li><a href="../qwilo/services-details-2.html">Services Details 2</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)">Team<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li><a href="../qwilo/team-1.html">Team 1</a></li>
												<li><a href="../qwilo/team-2.html">Team 2</a></li>
												<li><a href="../qwilo/team-3.html">Team 3</a></li>
												<li><a href="../qwilo/team-4.html">Team 4</a></li>
												<li><a href="../qwilo/team-5.html">Team 5</a></li>
												<li><a href="../qwilo/team-6.html">Team 6</a></li>
												<li><a href="../qwilo/team-7.html">Team 7</a></li>
												<li><a href="../qwilo/team-details-1.html">Team Details 1</a></li>
												<li><a href="../qwilo/team-details-2.html">Team Details 2</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)">Pricing Table<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li><a href="../qwilo/pricing-1.html">Pricing 1</a></li>
												<li><a href="../qwilo/pricing-2.html">Pricing 2</a></li>
												<li><a href="../qwilo/pricing-3.html">Pricing 3</a></li>
												<li><a href="../qwilo/pricing-4.html">Pricing 4</a></li>
												<li><a href="../qwilo/pricing-5.html">Pricing 5</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)">Faq's<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li><a href="../qwilo/faq-1.html">Faq's 1</a></li>
												<li><a href="../qwilo/faq-2.html">Faq's 2</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)">Login Register<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li><a href="../qwilo/login-1.html">Login 1</a></li>
												<li><a href="../qwilo/login-2.html">Login 2</a></li>
												<li><a href="../qwilo/register-1.html">Register 1</a></li>
												<li><a href="../qwilo/register-2.html">Register 2</a></li>
												<li><a href="../qwilo/login-register-1.html">Login Register 1</a></li>
												<li><a href="../qwilo/login-register-2.html">Login Register 2</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)">Contact Us<i class="fa fa-angle-right fa-indicator"></i> </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel">
												<li><a href="../qwilo/contact-us-1.html">Contact Us 1</a></li>
												<li><a href="../qwilo/contact-us-2.html">Contact Us 2</a></li>
												<li><a href="../qwilo/contact-us-3.html">Contact Us 3</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)">Elements</a>
									<!-- drop down full width -->
									<div class="drop-down grid-col-12">
										<!--grid row-->
										<div class="grid-row">
											<!--grid column 3-->
											<div class="grid-col-3">
												<ul>
													<li><a href="../qwilo/elements-accordions.html"><i class="fa fa-list-ul"></i> Accordions </a></li>
													<li><a href="../qwilo/elements-action-box.html"><i class="fa fa-square"></i> Action Box </a></li>
													<li><a href="../qwilo/elements-carousel-slider.html"><i class="fa fa-sliders iq-lead"></i> Carousel Slider </a></li>
													<li><a href="../qwilo/elements-clients.html"><i class="fa fa-user"></i> Clients </a></li>
													<li><a href="../qwilo/elements-testimonial.html"><i class="fa fa-quote-left"></i> Testimonial </a></li>
												</ul>
											</div>
											<!--grid column 3-->
											<div class="grid-col-3">
												<ul>
													<li><a href="../qwilo/elements-counters.html"><i class="fa fa-sort-numeric-asc"></i> Counters </a></li>
													<li><a href="../qwilo/elements-features.html"><i class="fa fa-th-large"></i> Features </a></li>
													<li><a href="../qwilo/elements-pricing-boxes.html"><i class="fa fa-columns"></i> Pricing Boxes </a></li>
													<li><a href="../qwilo/elements-skill.html"><i class="fa fa-tasks"></i> Skill </a></li>
													<li><a href="../qwilo/elements-content-box.html"><i class="fa fa-image"></i> Image Content Box </a></li>
												</ul>
											</div>
											<!--grid column 3-->
											<div class="grid-col-3">
												<ul>
													<li><a href="../qwilo/elements-tab.html"><i class="fa fa-star"></i> Tab </a></li>
													<li><a href="../qwilo/elements-team.html"><i class="fa fa-users"></i> Team </a></li>
													<li><a href="../qwilo/elements-alerts.html"><i class="fa fa-exclamation-triangle"></i> Alerts </a></li>
													<li><a href="../qwilo/elements-tables.html"><i class="fa fa-table"></i> Tables </a></li>
													<li><a href="../qwilo/elements-lists-style.html"><i class="fa fa-th-list"></i>Lists Style </a></li>
												</ul>
											</div>
											<!--grid column 3-->
											<div class="grid-col-3">
												<ul>
													<li><a href="../qwilo/elements-typography.html"><i class="fa fa-italic"></i> Typography </a></li>
													<li><a href="../qwilo/breadcrum-1.html"><i class="fa fa-align-center"></i> Breadcrum 1 </a></li>
													<li><a href="../qwilo/breadcrum-2.html"><i class="fa fa-align-center"></i> Breadcrum 2 </a></li>
													<li><a href="../qwilo/breadcrum-3.html"><i class="fa fa-align-center"></i> Breadcrum 3 </a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:void(0)">Blog</a>
									<!-- drop down full width -->
									<div class="drop-down grid-col-12">
										<!--grid row-->
										<div class="grid-row">
											<!--grid column 3-->
											<div class="grid-col-3">
												<h3>Blog Classic</h3>
												<ul>
													<li><a href="../qwilo/blog-classic-left-sidebar.html">Blog Classic Left Sidebar</a></li>
													<li><a href="../qwilo/blog-classic-right-sidebar.html">Blog Classic Right Sidebar </a></li>
													<li><a href="../qwilo/blog-classic-fullwidth.html">Blog Classic Fullwidth </a></li>
												</ul>
											</div>
											<!--grid column 3-->
											<div class="grid-col-3">
												<h3>Blog Grid</h3>
												<ul>
													<li><a href="../qwilo/blog-grid-2-column-left-sidebar.html">Blog Grid left Sidebar</a></li>
													<li><a href="../qwilo/blog-grid-2-column-right-sidebar.html">Blog Grid Right Sidebar </a></li>
													<li><a href="../qwilo/blog-grid-2-column.html">Blog Grid 2 column</a></li>
													<li><a href="../qwilo/blog-grid-3-column.html">Blog Grid 3 column</a></li>
												</ul>
											</div>
											<!--grid column 3-->
											<div class="grid-col-3">
												<h3>Blog Masonry</h3>
												<ul>
													<li><a href="../qwilo/blog-masonry-2-columns-left-sidebar.html">Blog Masonry left Sidebar</a></li>
													<li><a href="../qwilo/blog-masonry-2-columns-right-sidebar.html">Blog Masonry Right Sidebar </a></li>
													<li><a href="../qwilo/blog-masonry-2-columns.html">Blog Masonry 2 column</a></li>
													<li><a href="../qwilo/blog-masonry-3-columns.html">Blog Masonry 3 column</a></li>
												</ul>
											</div>
											<!--grid column 3-->
											<div class="grid-col-3">
												<h3>Blog Single</h3>
												<ul>
													<li><a href="../qwilo/blog-single-audio-post.html">Blog Single Audio Post</a></li>
													<li><a href="../qwilo/blog-single-image-post.html">Blog Single Image Post</a></li>
													<li><a href="../qwilo/blog-single-image-silder.html">Blog Single Image Silder Post</a></li>
													<li><a href="../qwilo/blog-single-video-post.html">Blog Single Video Post</a></li>
													<li><a href="../qwilo/blog-single-vimeo-post.html">Blog Single Vimeo Post</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:void(0)">Portfolio</a>
									<!-- drop down multilevel  -->
									<ul class="drop-down-multilevel">
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i> Masonry Portfolio </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel left-side">
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 2 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/masonry-2-portfolio.html">2 Columns</a></li>
														<li><a href="../qwilo/masonry-2-portfolio-no-space.html">2 Columns No Space</a></li>
														<li><a href="../qwilo/full-masonry-2-portfolio.html">Full 2 Columns</a></li>
														<li><a href="../qwilo/full-masonry-2-portfolio-no-space.html">Full 2 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 3 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/masonry-3-portfolio.html">2 Columns</a></li>
														<li><a href="../qwilo/masonry-3-portfolio-no-space.html">3 Columns No Space</a></li>
														<li><a href="../qwilo/full-masonry-3-portfolio.html">Full 3 Columns</a></li>
														<li><a href="../qwilo/full-masonry-3-portfolio-no-space.html">Full 3 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 4 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/masonry-4-portfolio.html">4 Columns</a></li>
														<li><a href="../qwilo/masonry-4-portfolio-no-space.html">4 Columns No Space</a></li>
														<li><a href="../qwilo/full-masonry-4-portfolio.html">Full 4 Columns</a></li>
														<li><a href="../qwilo/full-masonry-4-portfolio-no-space.html">Full 4 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 5 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/full-masonry-5-portfolio.html">Full 5 Columns</a></li>
														<li><a href="../qwilo/full-masonry-5-portfolio-no-space.html">Full 5 Columns No Space</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i> Gallery Portfolio </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel left-side">
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 2 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/gallery-2-portfolio.html">2 Columns</a></li>
														<li><a href="../qwilo/gallery-2-portfolio-no-space.html">2 Columns No Space</a></li>
														<li><a href="../qwilo/full-gallery-2-portfolio.html">Full 2 Columns</a></li>
														<li><a href="../qwilo/full-gallery-2-portfolio-no-space.html">Full 2 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 3 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/gallery-3-portfolio.html">3 Columns</a></li>
														<li><a href="../qwilo/gallery-3-portfolio-no-space.html">3 Columns No Space</a></li>
														<li><a href="../qwilo/full-gallery-3-portfolio.html">Full 3 Columns</a></li>
														<li><a href="../qwilo/full-gallery-3-portfolio-no-space.html">Full 3 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 4 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/gallery-4-portfolio.html">4 Columns</a></li>
														<li><a href="../qwilo/gallery-4-portfolio-no-space.html">4 Columns No Space</a></li>
														<li><a href="../qwilo/full-gallery-4-portfolio.html">Full 4 Columns</a></li>
														<li><a href="../qwilo/full-gallery-4-portfolio-no-space.html">Full 4 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 5 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/full-gallery-5-portfolio.html">Full 5 Columns</a></li>
														<li><a href="../qwilo/full-gallery-5-portfolio-no-space.html">Full 5 Columns No Space</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i> Grid Portfolio</a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel left-side">
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 2 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/grid-2-portfolio.html">2 Columns</a></li>
														<li><a href="../qwilo/grid-2-portfolio-no-space.html">2 Columns No Space</a></li>
														<li><a href="../qwilo/full-grid-2-portfolio.html">2 Columns</a></li>
														<li><a href="../qwilo/full-grid-2-portfolio-no-space.html">2 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 3 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/grid-3-portfolio.html">3 Columns</a></li>
														<li><a href="../qwilo/grid-3-portfolio-no-space.html">3 Columns No Space</a></li>
														<li><a href="../qwilo/full-grid-3-portfolio.html">3 Columns</a></li>
														<li><a href="../qwilo/full-grid-3-portfolio-no-space.html">3 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 4 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/grid-4-portfolio.html">4 Columns</a></li>
														<li><a href="../qwilo/grid-4-portfolio-no-space.html">4 Columns No Space</a></li>
														<li><a href="../qwilo/full-grid-4-portfolio.html">4 Columns</a></li>
														<li><a href="../qwilo/full-grid-4-portfolio-no-space.html">4 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 5 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/full-grid-5-portfolio.html">5 Columns</a></li>
														<li><a href="../qwilo/full-grid-5-portfolio-no-space.html">5 Columns No Space</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i> Classic Portfolio </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel left-side">
												<li><a href="../qwilo/classic-portfolio.html">Left Side Bar</a></li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 2 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/classic-2-portfolio.html">2 Columns </a></li>
														<li><a href="../qwilo/classic-2-portfolio-no-space.html">2 Columns No Space</a></li>
														<li><a href="../qwilo/full-classic-2-portfolio.html">Full 2 Columns</a></li>
														<li><a href="../qwilo/full-classic-2-portfolio-no-space.html">Full 2 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 3 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/classic-3-portfolio.html">3 Columns </a></li>
														<li><a href="../qwilo/classic-3-portfolio-no-space.html">3 Columns No Space</a></li>
														<li><a href="../qwilo/full-classic-3-portfolio.html">Full 3 Columns</a></li>
														<li><a href="../qwilo/full-classic-3-portfolio-no-space.html">Full 3 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 4 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/classic-4-portfolio.html">4 Columns </a></li>
														<li><a href="../qwilo/classic-4-portfolio-no-space.html">4 Columns No Space</a></li>
														<li><a href="../qwilo/full-classic-4-portfolio.html">Full 4 Columns</a></li>
														<li><a href="../qwilo/full-classic-4-portfolio-no-space.html">Full 4 Columns No Space</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i> Classic Masonry</a>
											<ul class="drop-down-multilevel left-side">
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 2 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/classic-masonry-2-portfolio.html">2 Columns</a></li>
														<li><a href="../qwilo/classic-masonry-2-portfolio-no-space.html">2 Columns No Space</a></li>
														<li><a href="../qwilo/full-classic-masonry-2-portfolio.html">Full 2 Columns</a></li>
														<li><a href="../qwilo/full-classic-masonry-2-portfolio-no-space.html">Full 2 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 3 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/classic-masonry-3-portfolio.html">3 Columns</a></li>
														<li><a href="../qwilo/classic-masonry-3-portfolio-no-space.html">3 Columns No Space</a></li>
														<li><a href="../qwilo/full-classic-masonry-3-portfolio.html">Full 3 Columns</a></li>
														<li><a href="../qwilo/full-classic-masonry-3-portfolio-no-space.html">Full 3 Columns No Space</a></li>
													</ul>
												</li>
												<li>
													<a href="#"><i class="fa fa-angle-left fa-indicator"></i> 4 Columns</a>
													<!-- drop down third level -->
													<ul class="drop-down-multilevel left-side">
														<li><a href="../qwilo/classic-masonry-4-portfolio.html">4 Columns</a></li>
														<li><a href="../qwilo/classic-masonry-4-portfolio-no-space.html">4 Columns No Space</a></li>
														<li><a href="../qwilo/full-classic-masonry-4-portfolio.html">Full 4 Columns</a></li>
														<li><a href="../qwilo/full-classic-masonry-4-portfolio-no-space.html">Full 4 Columns No Space</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="../qwilo/portfolio-single-1.html">Portfolio Single 1</a> </li>
										<li><a href="../qwilo/portfolio-single-2.html">Portfolio Single 2</a> </li>
									</ul>
								</li>
								<li class="active">
									<a href="javascript:void(0)">Shop</a>
									<!-- drop down multilevel  -->
									<ul class="drop-down-multilevel">
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i> Product Detail </a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel left-side">
												<li><a href="shop-detail.html">Default</a></li>
												<li><a href="shop-detail-left-sidebar.html">Left Sidebar</a></li>
												<li><a href="shop-detail-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i>Grid 2 Columns</a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel left-side">
												<li><a href="shop-grid-2columns.html">2 Columns</a></li>
												<li><a href="shop-grid-2columns-left-sidebar.html">2 Columns Left Sidebar</a></li>
												<li><a href="shop-grid-2columns-right-sidebar.html">2 Columns Right Sidebar</a></li>
												<li><a href="shop-grid-2columns-sidebar-both.html">2 Columns Sidebar Both</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i>Grid 3 Columns</a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel left-side">
												<li><a href="shop-grid-3columns.html">3 Columns</a></li>
												<li><a href="shop-grid-3columns-left-sidebar.html">3 Columns Left Sidebar</a></li>
												<li><a href="shop-grid-4columns-right-sidebar.html">3 Columns Right Sidebar</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i>Grid 4 Columns</a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel left-side">
												<li><a href="shop-grid-4columns.html">4 Columns</a></li>
												<li><a href="shop-grid-4columns-left-sidebar.html">4 Columns Left Sidebar</a></li>
												<li><a href="shop-grid-4columns-right-sidebar.html">4 Columns Right Sidebar</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fa fa-angle-left fa-indicator"></i>Product Listing</a>
											<!-- drop down second level -->
											<ul class="drop-down-multilevel left-side">
												<li><a href="shop-listing.html">Default</a></li>
												<li><a href="shop-listing-left-sidebar.html">Left Sidebar</a></li>
												<li><a href="shop-listing-right-sidebar.html">Right Sidebar</a></li>
												<li><a href="shop-listing-sidebar-both.html">Sidebar Both</a></li>
											</ul>
										</li>
										<li><a href="shop-full-width.html">Product Full Width</a></li>
										<li class="active"><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</nav>
	</header>
	<!-- HEADER End -->
    <!-- MAIN CONTENT -->
    <div class="container-fluid">
        @yield('content')
    </div>
    <!-- /MAIN CONTENT -->

    <!--=================================
   Footer-18 -->
	<footer class="shop-footer">
		<div class="container">
			<div class="row overview-block-ptb2">
				<div class="col-lg-3 col-md-12 col-sm-12 iq-mtb-15">
					<div class="logo">
						<img id="footer_logo_img" class="img-fluid" src="{{ asset('/assets/images/logo-black.png') }}" alt="#">
						<ul class="iq-contact">
							<li><span class="iq-tw-8 iq-font-black iq-lead"><i class="fa fa-home" aria-hidden="true"></i> +0123 456 789</span></li>
							<li><span class="iq-tw-8 iq-font-black iq-lead"><i class="fa fa-phone" aria-hidden="true"></i> mail@qwilo.com</span>
							</li>
							<li>
								<span>1234 North Luke Lane, South Bend, IN 360001</span>
							</li>
						</ul>
						<ul class="iq-media-blog text-left">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
							<li><a href="#"><i class="fa fa-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 iq-mtb-15">
							<h6 class="iq-tw-6">Category</h6>
							<ul class="menu">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="#">Portfolio</a></li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 iq-mtb-15">
							<h6 class="iq-tw-6">Company</h6>
							<ul class="menu">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="#">Portfolio</a></li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 iq-mtb-15">
							<h6 class="iq-tw-6">Legal</h6>
							<ul class="link">
								<li class="d-inline-block"><a href="#">Term and Condition</a></li>
								<li class="d-inline-block"><a href="#"> Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 iq-mtb-15">
					<div class="newsletter">
						<h6 class="iq-tw-6">Newsletter</h6>
						<form class="newsletter-form">
							<div class="input-group">
								<input type="email" class="form-control placeholder" placeholder="Enter your Email">
								<a class="button" href="contact-us-1.html" role="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<hr>
			<div class="row overview-block-ptb2 align-items-center">
				<div class="col-lg-6 col-md-6 col-sm-12 iq-mtb-10">
					<div class="iq-paysys text-left">
						<ul class="iq-paybox">
							<li>
								<a href="#"><img class="img-fluid" src="{{ asset('/assets/images/shop/paysys/01.png') }}" alt="#"></a>
							</li>
							<li>
								<a href="#"><img class="img-fluid" src="{{ asset('/assets/images/shop/paysys/02.png') }}" alt="#"></a>
							</li>
							<li>
								<a href="#"><img class="img-fluid" src="{{ asset('/assets/images/shop/paysys/03.png') }}" alt="#"></a>
							</li>
							<li>
								<a href="#"><img class="img-fluid" src="{{ asset('/assets/images/shop/paysys/04.png') }}" alt="#"></a>
							</li>
							<li>
								<a href="#"><img class="img-fluid" src="{{ asset('/assets/images/shop/paysys/05.png') }}" alt="#"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 iq-mtb-10">
					<div class="iq-copyright text-right">
						Copyright <a href="#">Qwilo</a> All Rights Reserved
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--=================================
Footer-18 -->
	<!--=================================
   Login -->
	<div class="modal fade iq-login-from" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title iq-tw-5">Login</h4>
					<a class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times; </span>
					</a>
				</div>
				<div class="modal-body">
					<div id="loginerror"></div>
					<div id="loginfielderrors"></div>
					<form>
						@csrf
						<div class="form-group">
							<input type="text" class="form-control" id="recipient-emaillogin" placeholder="Enter Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="recipient-password" placeholder="Password">
						</div>
						<a class="button iq-mtb-10" href="javascript:void(0)" id="loginbtnid">Sign In</a>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-check">
									<label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">Remember Me</label>
								</div>
							</div>
							<div class="col-sm-6 text-right">
								<a href="#">Forgot Password</a>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer text-center">
					<div> Don't Have an Account? <a href="#" class="iq-font-yellow">Register Now</a></div>
					<ul class="iq-media-blog iq-mt-20">
						<li><a href="# "><i class="fa fa-twitter "></i></a></li>
						<li><a href="# "><i class="fa fa-facebook "></i></a></li>
						<li><a href="# "><i class="fa fa-google "></i></a></li>
						<li><a href="{{route('redirectGithub')}}"><i class="fa fa-github "></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--=================================
      Login -->
	<!--=================================
      Register -->
	<div class="modal fade iq-register-from" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title iq-tw-5">Register</h4>
					<a class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</a>
				</div>
				<div class="modal-body">
					<!-- Alert on Calling Success function of Ajax -->
					<div id="successalert"></div>
					<div id= "erroralertdiv"></div>
					<form>
						@csrf
						<div class="form-group">
							<input type="text" class="form-control" id="recipient-username" placeholder="User Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="recipient-email" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
						<div class="form-check">
							<label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="enablebtnid">I Agree to the Terms and Conditions</label>
						</div>
						<p>Qwailo galley of type and scrambled it to make a type specimen book.</p>
						<a class="button iq-mtb-10" href="javascript:void(0)" id="signupid">Sign Up</a>
					</form>
				</div>
				<div class="modal-footer text-center">
					<div> Already Have an Account? <a href="#" class="iq-font-yellow">Login</a></div>
					<ul class="iq-media-blog iq-mt-20">
						<li><a href="# "><i class="fa fa-twitter "></i></a></li>
						<li><a href="# "><i class="fa fa-facebook "></i></a></li>
						<li><a href="# "><i class="fa fa-google "></i></a></li>
						<li><a href="{{route('redirectGithub')}}"><i class="fa fa-github "></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--=================================
         Register -->
	<!-- back-to-top -->
	<div id="back-to-top">
		<a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
	</div>
	<!-- back-to-top End -->
	<!--================ Jquery =================-->
	<!-- Jquery  -->
	<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
	<!-- Google captcha code Js -->
	<script src="{{ asset('/assets/https://www.google.com/recaptcha/api.js') }}"></script>
	<!-- Mega Menu -->
	<script src="{{ asset('/assets/js/mega-menu/mega_menu.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('/assets/js/main.js') }}"></script>
	<!-- Custom -->
	<script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>

</html>