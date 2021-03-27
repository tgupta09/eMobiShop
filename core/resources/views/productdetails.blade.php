@extends('layout')

@section('title','Product Detail')

@section('content')
    <!-- search -->
	<div class="search">
		<button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>
		<form class="search__form">
			<input class="search__input" name="search" type="search" placeholder="Qwilo Search" autocomplete="off" autocapitalize="off" spellcheck="false">
			<span class="search__info">Hit enter to search or ESC to close</span>
		</form>
		<div class="search__related">
			<div class="search__suggestion iq-font-white">
				<h3 class="iq-font-white iq-tw-6">May We Suggest?</h3>
				<p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green</p>
			</div>
			<div class="search__suggestion iq-font-white">
				<h3 class="iq-font-white iq-tw-6">Is It This?</h3>
				<p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost</p>
			</div>
			<div class="search__suggestion iq-font-white">
				<h3 class="iq-font-white iq-tw-6">Where Art Thou?</h3>
				<p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
			</div>
		</div>
	</div>
	<!-- /search END -->
	<!--======= Breadcrumb Left With BG Image =======-->
	<div class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/08.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8">
					<div class="iq-mb-0">
						<div class="iq-font-white iq-tw-6">Shop</div>
						<h2 class="iq-font-white iq-tw-6">Shop Detail</h2>
					</div>
				</div>
				<div class="col-lg-4">
					<nav aria-label="breadcrumb" class="text-right">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home-1.html"><i class="ion-android-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Shop Detail</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--======= Breadcrumb Left With BG Image =======-->
	<!--=================================
Main Content -->
	<div class="main-content">
		<section class="overview-block-pt" data-twttr-rendered="true" data-spy="scroll" data-target=".bs-docs-sidebar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-5 col-sm-12">
						<div class="iq-slick">
							<div class="slider slider-for">
								<div><img class="img-fluid" alt="#" src="{{ asset('/assets/images/shop/thumb/01.jpg') }}"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/02.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/03.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/04.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/05.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/01.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/02.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/03.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/04.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/05.jpg"></div>
							</div>
							<div class="slider slider-nav">
								<div><img class="img-fluid" alt="" src="images/shop/thumb/01.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/02.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/03.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/04.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/05.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/01.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/02.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/03.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/04.jpg"></div>
								<div><img class="img-fluid" alt="" src="images/shop/thumb/05.jpg"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-5 col-sm-12">
						<div class="iq-shopdetail indc">
							<h3 class="iq-tw-6">{{$particularrecord[0]->name}}</h3>
							<div class="iq-rating">
								<ul class="list-inline float-left">
									<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="shop-price w-100 d-inline-block">
								<del>&#x20B9;130.00</del>&nbsp;&nbsp;<strong>&#x20B9;{{$particularrecord[0]->price}}</strong>
							</div>
							<div class="iq-pt-15"><b>Product Detail:</b></div>
							<p>
								{{$particularrecord[0]->description}}
							</p>
							<div class="product_meta iq-pt-15">
								<div> <b>SKU:</b> {{$particularrecord[0]->sku}}</div>
								<div> <b>Category:</b> <a class="a-dark" href="#">{{$particularrecord[0]->category}}</a></div>
							</div>
							<!--Quantity -->
							<ul class="align-items-center selection-box">
								<li class="brd">
									<div><b>Quantity:</b></div>
									<form class="shop-input" id="shopform" method="POST" action="#">
										<input type="button" value="-" class="decrement">
										<input type="text" name="quantity" value="1" class="input-box">
										<input type="button" value="+" class="increment">
									</form>
								</li>
								<!-- color -->
								<li>
									<div class="color-select">
										<div class="d-inline-block"><b>Color:</b></div>
									</div>
									<div class="list-inline iq-widget-menu">
										<ul class="iq-pl-0 iq-color-box">
											<li class="d-inline-block list-item-size">
												<a title="Purple" style="background-color:#9966ff;" href=""></a>
											</li>
											<li class="d-inline-block list-item-size">
												<a title="Blue" style="background-color:#3333cc;" href=""></a>
											</li>
											<li class="d-inline-block list-item-size">
												<a title="Maroon" style="background-color:#800000;" href=""></a>
											</li>
											<li class="d-inline-block list-item-size">
												<a title="Green" style="background-color:#28a745" href=""></a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<!-- button -->
							<div class="all-button iq-mtb-15">
								<a class="button grey" href="#">Add To Cart</a>
								<a class="button" href="#">Buy</a>
							</div>
							<!-- share -->
							<div class="d-inline-block text-uppercase"><b>Share:</b></div>
							<div class="share-box d-inline-block">
								<ul>
									<li class="d-inline-block"><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li class="d-inline-block"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li class="d-inline-block"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="d-inline-block"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="d-inline-block"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row iq-detailleft">
					<div class="col-sm-12">
						<div class="tab-box">
							<ul class="nav nav-tabs  justify-content-center" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true" aria-selected="true">Description</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Parameter</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact-tab" aria-selected="false">Review</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane active show" id="home" role="tabpanel" aria-labelledby="home-tab">
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem
										Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. </p>
									<ul class="listing-mark iq-mtb-30 iq-tw-6 iq-font-black">
										<li>Simply dummy text of the Lorem Ipsum is printing and type setting.</li>
										<li>Dummy text of the printing and typesetting industry.</li>
										<li>Text of the printing and typesetting industry Lorem Ipsum has been.</li>
										<li>Ipsum has been the industry's standard dummy since the 1500s,</li>
									</ul>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
										here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
										Various versions have evolved over the years. </p>
								</div>
								<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<table class="table">
										<tbody>
											<tr>
												<th scope="row">Weight</th>
												<td>0.15 kg</td>
											</tr>
											<tr>
												<th scope="row">Total Coins</th>
												<td>1, 2, 3, 4, 5</td>
											</tr>
											<tr>
												<th scope="row">Price &amp; Volatility</th>
												<td>US$0.30, US$32, US$2</td>
											</tr>
											<tr>
												<th scope="row">Wallets</th>
												<td>w1, w2 &amp; w3</td>
											</tr>
											<tr>
												<th scope="row">Tax</th>
												<td>US$32</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
									<div class="media btn-brd">
										<div class="media-body">
											<div class="row">
												<div class="col-lg-8">
													<h6 class="iq-tw-6">Excellent</h6>
												</div>
												<div class="col-lg-4">
													<div class="iq-rating">
														<ul class="list-inline">
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="review-text">
												<div>Awesome product!</div>
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div class="media">
													<img class="mr-3" src="images/shop/review/01.jpg" alt="Generic placeholder image">
													<div class="media-body align-self-center">
														<div class="all-text">
															<span class="review-name">JD Scort</span>
															<span>14 July, 2018</span>
															<span><a href=""><i class="fa fa-check-circle" aria-hidden="true"></i></a> Certified Buyer</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="media btn-brd">
										<div class="media-body">
											<div class="row">
												<div class="col-lg-8">
													<h6 class="iq-tw-6">Nice</h6>
												</div>
												<div class="col-lg-4">
													<div class="iq-rating">
														<ul class="list-inline">
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="review-text">
												<div>Awesome product!</div>
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div class="media">
													<img class="mr-3" src="images/shop/review/02.jpg" alt="Generic placeholder image">
													<div class="media-body align-self-center">
														<div class="all-text">
															<span class="review-name">Rinks Cooper</span>
															<span>14 July, 2018</span>
															<span><a href=""><i class="fa fa-check-circle" aria-hidden="true"></i></a> Certified Buyer</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="media btn-brd">
										<div class="media-body">
											<div class="row">
												<div class="col-lg-8">
													<h6 class="iq-tw-6">Good</h6>
												</div>
												<div class="col-lg-4">
													<div class="iq-rating">
														<ul class="list-inline">
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="review-text">
												<div>Awesome product!</div>
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div class="media">
													<img class="mr-3" src="images/shop/review/03.jpg" alt="Generic placeholder image">
													<div class="media-body align-self-center">
														<div class="all-text">
															<span class="review-name">Harish Morgan</span>
															<span>14 July, 2018</span>
															<span><a href=""><i class="fa fa-check-circle" aria-hidden="true"></i></a> Certified Buyer</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="media btn-brd">
										<div class="media-body">
											<div class="row">
												<div class="col-lg-8">
													<h6 class="iq-tw-6">Awesome</h6>
												</div>
												<div class="col-lg-4">
													<div class="iq-rating">
														<ul class="list-inline">
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="review-text">
												<div>Awesome product!</div>
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div class="media">
													<img class="mr-3" src="images/shop/review/04.jpg" alt="Generic placeholder image">
													<div class="media-body align-self-center">
														<div class="all-text">
															<span class="review-name">Kinj Mesel</span>
															<span>14 July, 2018</span>
															<span><a href=""><i class="fa fa-check-circle" aria-hidden="true"></i></a> Certified Buyer</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="media btn-brd">
										<div class="media-body">
											<div class="row">
												<div class="col-lg-8">
													<h6 class="iq-tw-6">Beautiful</h6>
												</div>
												<div class="col-lg-4">
													<div class="iq-rating">
														<ul class="list-inline">
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="review-text">
												<div>Awesome product!</div>
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div class="media">
													<img class="mr-3" src="images/shop/review/01.jpg" alt="Generic placeholder image">
													<div class="media-body align-self-center">
														<div class="all-text">
															<span class="review-name">Nik Jordan</span>
															<span>14 July, 2018</span>
															<span><a href=""><i class="fa fa-check-circle" aria-hidden="true"></i></a> Certified Buyer</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="review-input">
										<form>
											<h6>Your Review:</h6>
											<div class="form-group">
												<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
											</div>
											<div class="form-group">
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Comment"></textarea>
											</div>
											<a class="button" href="#">Submit</a>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="overview-block-ptb iq-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Popular Products</h3>
							<span>Clothes</span>
						</div>
						<div class="owl-carousel arrow-4 popup-gallery" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="4" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-margin="15">
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/01.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/02.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/03.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/04.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/05.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/06.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--=================================
Main Content -->
@endsection