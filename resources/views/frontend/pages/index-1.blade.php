@extends('frontend.layout.main')

@section('content')
<!-- banner starts -->
<section class="banner overflow-hidden">
<div class="slider video-slider">
<div class="banner-outer">
<div class="video-banner">
<video autoplay="" id="vid" loop="" muted="">
<source src="images/tour.mp4" type="video/mp4"/>
</video>
<div class="overlay"></div>
</div>
<div class="swiper-content">
<h4 class="white">Amazing Places</h4>
<h1 class="white mb-4">Explore Your Life Travel Where You Want</h1>
<a class="per-btn" href="destination-list.html">
<span class="white">Discover</span>
<i class="fa fa-arrow-right white"></i>
</a>
</div>
</div>
</div>
</section>
<!-- banner ends -->
<!-- form starts -->
<section class="about-us p-0">
<div class="container">
<div class="about-image-box">
<div class="row">
<div class="col-lg-7">
<div class="about-content pt-9">
<h4 class="mb-1 blue font-weight-normal">About Yatriiworld</h4>
<h2>We're Truely Dedicated To Make Your Travel Experience As Much As Simple And Fun As Possible</h2>
<p class="mb-0">Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars. <br/><br/>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
</div>
<div class="col-lg-5">
<!-- form main starts -->
<div class="form-main">
<div class="form-content w-100 p-0">
<h3 class="form-title text-center m-0 p-3 white">Find a Places</h3>
<div class="form-content-inner p-4">
<div class="row gy-3">
<div class="col-lg-12">
<div class="form-group">
<div class="input-box">
<i class="fa fa-map-marker"></i>
<select class="niceSelect">
<option value="1">Your Destination</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range0" placeholder="Check In" type="text"/>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range1" placeholder="Check Out" type="text"/>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<div class="input-box">
<i class="fa fa-user"></i>
<select class="niceSelect">
<option value="1">Adult</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<div class="input-box">
<i class="fa fa-user"></i>
<select class="niceSelect">
<option value="1">Children</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<div class="input-box">
<i class="fa fa-clock"></i>
<select class="niceSelect">
<option value="1">Packages</option>
<option value="2">1 Day/ Night</option>
<option value="3">2 Days/ 1 Night</option>
</select>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group m-0 w-100 text-center">
<a class="nir-btn" href="#"><i class="fa fa-search"></i> Check Availability</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- form main ends -->
</div>
</div>
</div>
<!-- Counter -->
<div class="counter-main pt-6">
<div class="counter text-center">
<div class="row">
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item bg-navy">
<i class="fa fa-users white mb-1"></i>
<h3 class="value mb-0 white d-inline ms-2">100</h3>
<h4 class="m-0 white">Happy Customers</h4>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item bg-navy">
<i class="fa fa-plane white mb-1"></i>
<h3 class="value mb-0 white d-inline ms-2">50</h3>
<h4 class="m-0 white">Amazing Tours </h4>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item bg-navy">
<i class="fa fa-chart-bar white mb-1"></i>
<h3 class="value mb-0 white d-inline ms-2">372</h3>
<h4 class="m-0 white">In Business</h4>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item bg-navy">
<i class="fa fa-support white mb-1"></i>
<h3 class="value mb-0 white d-inline ms-2">523</h3>
<h4 class="m-0 white">Support Cases </h4>
</div>
</div>
</div>
</div>
</div>
<!-- End Counter -->
</div>
</section>
<!-- form ends -->
<!-- Fav destination Starts -->
<section class="trending destination pb-6 pt-5">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Find Your <span>Favourite Destination</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="trend-box">
<div class="price-navtab text-center mb-4">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#historical">Historical</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#weekend">Weekend</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#holidays">Holidays</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#special">Special Tour</a>
</li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane fade in active" id="historical">
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending8.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4><a href="destination-single.html">Nepal Special Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Nepal.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending11.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4><a href="destination-single.html">Canada New Year Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 615 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Canada.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending12.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">25 Reviews</span>
</div>
<h4><a href="destination-single.html">America Christmas Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 926 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> America.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="weekend">
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending14.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4><a href="destination-single.html">Nepal Weekend Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Nepal.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending13.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4><a href="destination-single.html">Canada Weekend Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 615 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Canada.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending7.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">25 Reviews</span>
</div>
<h4><a href="destination-single.html">America Weekend Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 926 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> America.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="holidays">
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending2.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4><a href="destination-single.html">Nepal Holidays Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Nepal.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending3.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4><a href="destination-single.html">Canada Holidays Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 615 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Canada.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending4.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">25 Reviews</span>
</div>
<h4><a href="destination-single.html">America Holidays Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 926 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> America.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="special">
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending6.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4><a href="destination-single.html">Nepal Special Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Nepal.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending5.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4><a href="destination-single.html">Canada Special Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 615 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Canada.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending9.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">25 Reviews</span>
</div>
<h4><a href="destination-single.html">America Special Tour</a></h4>
<p class="mb-0"><i class="fa fa-eye me-1"></i> 926 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> America.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white d-flex align-items-center"><img alt="" class="d-author me-2" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/> Thu Astudillo</p>
<div class="trend-price">
<p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Fav destination Ends -->
<!-- top destination starts -->
<section class="top-destination overflow-hidden bg-navy pt-9">
<div class="container">
<div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0 white"><span>Best Holidays Trips</span> In The World</h2>
<p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="desti-inner">
<div class="row d-flex align-items-center">
<div class="col-lg-4 col-md-6 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination9.jpg') }}"/>
<div class="desti-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="white mb-0">New York Tour</h4>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="booking.html">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination3.jpg') }}"/>
<div class="desti-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="white mb-0">New York Tour</h4>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="booking.html">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination4.jpg') }}"/>
<div class="desti-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="white mb-0">Armania Tour</h4>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="booking.html">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination5.jpg') }}"/>
<div class="desti-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="white mb-0">Manchester Tour</h4>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="booking.html">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination7.jpg') }}"/>
<div class="desti-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="white mb-0">kathmandu Tour</h4>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="booking.html">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination8.jpg') }}"/>
<div class="desti-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="white mb-0">Tokyo Tour</h4>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="booking.html">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-12 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination9.jpg') }}"/>
<div class="desti-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="white mb-0">Norwich Tour</h4>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="booking.html">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="particles-js"></div>
</section>
<!-- top destination ends -->
<!-- Trending Starts -->
<section class="trending destination-b pb-6 pt-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Perfect <span>Tour Packages</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="trend-box">
<div class="team-slider">
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending1.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> Thailand</h6>
<h4><a href="destination-single.html">Stonehenge, Windsor Castle, and Bath from London</a></h4>
<div class="rating-main d-flex align-items-center">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending2.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> Germany</h6>
<h4><a href="destination-single.html">Here We Bosphorus and Black Sea Cruise from Istanbul</a></h4>
<div class="rating-main d-flex align-items-center">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending3.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> Denmark</h6>
<h4><a href="destination-single.html">NYC One World Observatory Skip-the-Line Ticket</a></h4>
<div class="rating-main d-flex align-items-center">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending4.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> Japan</h6>
<h4><a href="destination-single.html">Stonehenge, Windsor Castle, and Bath from London</a></h4>
<div class="rating-main d-flex align-items-center">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Trending Ends -->
<!-- Call to action starts -->
<section class="call-to-action pb-8">
<div class="call-main">
<div class="container">
<div class="action-content text-center">
<h3 class="white mb-0">Find next place to visit</h3>
<h2 class="white call-name">EXPLORE THE WORLD</h2>
</div>
<div class="video-button text-center">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/trending/trending3.jpg') }}"/>
<div class="call-button text-center">
<button class="play-btn js-video-button" data-channel="vimeo" data-video-id="76979871" type="button">
<i class="fa fa-play"></i>
</button>
</div>
<div class="video-figure"></div>
</div>
</div>
</div>
</section>
<!-- call to action Ends -->
<!-- Trending Starts -->
<section class="latest-tour pb-5 pt-0">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Amamzing <span>Latest Tour</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="tour-box">
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
<div class="tour-item">
<div class="tour-image">
<img alt="Image" src="{{ asset('template/yatri_world/main-file/images/destination/destination4.jpg') }}"/>
</div>
<div class="tour-content">
<div class="rating-main d-flex align-items-center mb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2 white">38 Reviews</span>
</div>
<h3 class="mb-1"><a class="white" href="destination-single.html">Hills and Beach Tour</a></h3>
<div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
<p class="white mb-0 me-"><i class="fa fa-clock white me-1"></i> 5 days</p>
<p class="white mb-0"><i class="fa fa-user-plus white me-1"></i> 51</p>
</div>
<p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
<a class="nir-btn" href="tour-detail.html" tabindex="0">View More</a>
</div>
<div class="tour-tag">
<span class="old-price white">$1449</span>
<span class="new-price white"> $900</span>
</div>
<div class="color-overlay"></div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="tour-item">
<div class="tour-image">
<img alt="Image" src="{{ asset('template/yatri_world/main-file/images/destination/destination5.jpg') }}"/>
</div>
<div class="tour-content">
<div class="rating-main d-flex align-items-center mb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2 white">18 Reviews</span>
</div>
<h3 class="mb-1"><a class="white" href="destination-single.html">Special Asia Tour</a></h3>
<div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
<p class="white mb-0 me-"><i class="fa fa-clock white me-1"></i> 5 days</p>
<p class="white mb-0"><i class="fa fa-user-plus white me-1"></i> 51</p>
</div>
<p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
<a class="nir-btn" href="tour-detail.html" tabindex="0">View More</a>
</div>
<div class="tour-tag">
<span class="new-price white"> $800</span>
</div>
<div class="color-overlay"></div>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="tour-item">
<div class="tour-image">
<img alt="Image" src="{{ asset('template/yatri_world/main-file/images/destination/destination8.jpg') }}"/>
</div>
<div class="tour-content">
<div class="rating-main d-flex align-items-center mb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2 white">21 Reviews</span>
</div>
<h3 class="mb-1"><a class="white" href="destination-single.html">Couple &amp; Holidays Tour</a></h3>
<div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
<p class="white mb-0 me-"><i class="fa fa-clock white me-1"></i> 5 days</p>
<p class="white mb-0"><i class="fa fa-user-plus white me-1"></i> 51</p>
</div>
<p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
<a class="nir-btn" href="tour-detail.html" tabindex="0">View More</a>
</div>
<div class="tour-tag">
<span class="old-price white">$549</span>
<span class="new-price white"> $400</span>
</div>
<div class="color-overlay"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Trending Ends -->
<!-- testomonial start -->
<section class="testimonial pt-0 pb-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">What <span>People Say About Us</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="about-slider w-75 mx-auto">
<div class="testimonial-item text-center">
<div class="details">
<i class="fa fa-quote-left mb-2"></i>
<p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
</div>
<div class="author-info mt-2">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img1.jpg') }}"/></a>
<div class="author-title">
<h4 class="m-0 yellow">Jared Erondu</h4>
<span>Supervisor</span>
</div>
</div>
</div>
<div class="testimonial-item text-center">
<div class="details">
<i class="fa fa-quote-left mb-2"></i>
<p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem  Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
</div>
<div class="author-info mt-2">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img2.jpg') }}"/></a>
<div class="author-title">
<h4 class="m-0 yellow">Cadic Vegeta</h4>
<span>Sr. Chef</span>
</div>
</div>
</div>
<div class="testimonial-item text-center">
<div class="details">
<i class="fa fa-quote-left mb-2"></i>
<p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
</div>
<div class="author-info mt-2">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img3.jpg') }}"/></a>
<div class="author-title">
<h4 class="m-0 yellow">Jonathan Beri</h4>
<span>Manager</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- testimonial ends -->
<!-- News Starts -->
<section class="news pb-6 bg-grey pt-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Latest Some <span>Tips &amp; Articles</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="news-outer">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="news-item overflow-hidden bg-white p-4">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog1.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tour, Tourism, Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="pb-2 mb-2 border-b"><a href="blog-single.html">The real voyage does not consist in seeking new landscapes</a></h4>
<p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked being court hopes.</p>
<div class="author-img">
<img alt="Demo Image" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/>
<span>By - Jack Well Fardez</span>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="news-item overflow-hidden bg-white p-4">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog2.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tour, Tourism, Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="pb-2 mb-2 border-b"><a href="blog-single.html">The real voyage does not consist in seeking new landscapes</a></h4>
<p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked being court hopes.</p>
<div class="author-img">
<img alt="Demo Image" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/>
<span>By - Jack Well Fardez</span>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="news-item overflow-hidden bg-white p-4">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog3.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tour, Tourism, Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="pb-2 mb-2 border-b"><a href="blog-single.html">The real voyage does not consist in seeking new landscapes</a></h4>
<p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked being court hopes.</p>
<div class="author-img">
<img alt="Demo Image" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/>
<span>By - Jack Well Fardez</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- News Ends -->
<!-- Discount action starts -->
<section class="discount-action p-0">
<div class="call-banner" style="background-image: url(images/bg/bg7.jpg);">
<div class="row d-flex align-items-center">
<div class="col-lg-6 p-0">
<div class="call-banner-inner text-center bg-blue">
<h4 class="white">25% OFF SALE</h4>
<h2 class="white mb-4">Best Holiday Packages For<span class="text-uppercase d-block">Honeymoon</span></h2>
<a class="nir-btn-black" href="flight-booking.html">Book Your Flight Now <i class="fa fa-arrow-right white ps-1"></i></a>
</div>
</div>
<div class="col-lg-6 p-0">
<div class="call-banner-inner text-left p-5 text-center text-lg-start">
<h4 class="white">24x7 Service Available</h4>
<h2 class="white mb-4">Call Now And Book Your Flight For Your Next Destination</h2>
<a class="nir-btn" href="flight-booking.html">Call For Booking <i class="fa fa-arrow-right white ps-1"></i></a>
</div>
</div>
</div>
</div>
<div class="overlay"></div>
</section>
<!-- Discount action Ends -->
@endsection
