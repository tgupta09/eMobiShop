@extends('layout')
@section('title','Home')
    
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
						<h2 class="iq-font-white iq-tw-6">4 Columns</h2>
					</div>
				</div>
				<div class="col-lg-4">
					<nav aria-label="breadcrumb" class="text-right">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home-1.html"><i class="ion-android-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">4 Columns</li>
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
		<section class="overview-block-ptb iq-product">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row">
							@foreach ($publishedrecords as $item)
							<div class="col-lg-3 col-md-4 col-sm-12 iq-mb-30">
								<div class="item">
									<div class="iq-productbox">
										<div class="product-image">
											<img class="hover" src="{{ asset('/uploads/products/'.$item->img_name) }}" alt="{{$item->name}}" style="height: 250px; width: 225px;">
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
											{{-- {{URL('/productdetails/'.$item->id)}} --}}
											<h6><a href="{{route('productdetials',['id'=>$item->id])}}">{{$item->name}}</a></h6>
											<p>{{$item->category}}</p>
											<div class="shop-price">
												<del>&#x20B9;130.00</del>&nbsp;&nbsp;<strong>&#x20B9;{{$item->price}}</strong>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row">
							<div class="col-sm-12 text-center shop-pagination">
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center">
										<li class="page-item"><a class="page-link" href="#">Previous</a></li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">Next</a></li>
									</ul>
								</nav>
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