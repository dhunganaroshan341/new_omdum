@extends('frontend.layout.main')

@section('content')
<!-- banner starts -->
<section class="banner overflow-hidden">
<div class="slider">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/1.jpg)"></div>
<div class="swiper-content container">
<h4 class="blue">Amazing Places</h4>
<h1 class="white mb-4">Explore Your Life Travel Where You Want</h1>
<a class="per-btn" href="destination-list.html">
<span class="white">Discover</span>
<i class="fa fa-arrow-right white"></i>
</a>
</div>
<div class="overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/2.jpg)"></div>
<div class="swiper-content container">
<h4 class="blue">Feel Free To Travel</h4>
<h1 class="white mb-4">Make you Free to <span>travel</span> with us</h1>
<a class="per-btn" href="destination-list.html">
<span class="white">Discover</span>
<i class="fa fa-arrow-right white"></i>
</a>
</div>
<div class="overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/3.jpg)"></div>
<div class="swiper-content container">
<h4 class="blue">Trip For Your Kids</h4>
<h1 class="white mb-4"><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
<a class="per-btn" href="destination-list.html">
<span class="white">Discover</span>
<i class="fa fa-arrow-right white"></i>
</a>
</div>
<div class="overlay"></div>
</div>
</div>
</div>
<!-- Add Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</div>
</section>
<!-- banner ends -->
<!-- form main starts -->
<div class="form-main">
<div class="container-fluid">
<div class="form-content">
<h3 class="form-title text-center d-inline white">Find a Places</h3>
<div class="d-lg-flex align-items-center justify-content-between">
<div class="form-group pe-4 m-0">
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
<div class="form-group pe-4 m-0">
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range0" placeholder="Depart Date" type="text"/>
</div>
</div>
<div class="form-group pe-4 m-0">
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range1" placeholder="Return Date" type="text"/>
</div>
</div>
<div class="form-group pe-4 m-0">
<div class="input-box">
<i class="fa fa-clock"></i>
<select class="niceSelect">
<option value="1">Total Duration</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>
<div class="form-group m-0 w-100">
<a class="nir-btn" href="#"><i class="fa fa-search"></i> Check Availability</a>
</div>
</div>
</div>
</div>
</div>
<!-- form main ends -->
<!-- why us starts -->
<section class="featured-us pb-0">
<div class="container">
<div class="featured-us-box pt-9">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="featured-us-item d-md-flex align-items-center justify-content-between">
<div class="featured-us-icon">
<i class="flaticon-price pink"></i>
</div>
<div class="featured-us-content">
<h4 class="mb-1"><a href="#">Competetive Pricing</a></h4>
<p class="mb-0">With 500+ suppliers and the purchasing power of 300 million members</p>
</div>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="featured-us-item d-md-flex align-items-center justify-content-between">
<div class="featured-us-icon">
<i class="flaticon-quality pink"></i>
</div>
<div class="featured-us-content">
<h4 class="mb-1"><a href="#">Award Winning Service</a></h4>
<p class="mb-0">Fabulous Travel worry free knowing that we're here if you need us, 24 hours a day</p>
</div>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="featured-us-item d-md-flex align-items-center justify-content-between">
<div class="featured-us-icon">
<i class="flaticon-global pink"></i>
</div>
<div class="featured-us-content">
<h4 class="mb-1"><a href="#">Worldwide Coverage</a></h4>
<p class="mb-0">1,200,000 hotels in more than 200 countries and regions &amp; flights to over 5,000 citites.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- why us ends -->
<!-- about-us starts -->
<section class="about-us pb-0 pt-6">
<div class="container">
<div class="about-image-box">
<div class="row align-items-center justify-content-between">
<div class="col-lg-6 mb-4">
<div class="about-content">
<h4 class="mb-1 blue font-weight-normal">About Yatriiworld</h4>
<h2>We're truely dedicated to make your travel experience best</h2>
<p class="mb-3">Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars. <br/><br/>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
<div class="about-imagelist">
<ul class="d-flex justify-content-between">
<li class="me-2">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination7.jpg') }}"/>
</li>
<li class="me-2">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination5.jpg') }}"/>
</li>
<li class="me-2">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination6.jpg') }}"/>
</li>
<li class="me-2">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination3.jpg') }}"/>
</li>
<li>
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination4.jpg') }}"/>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6 mb-4">
<div class="about-image">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination12.jpg') }}"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- about-us ends -->
<!-- Trending Starts -->
<section class="trending pb-6 pt-5">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Perfect <span>Tour Packages</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="trend-box">
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending1.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Thailand</h6>
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
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending2.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Germany</h6>
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
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending3.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Denmark</h6>
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
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending4.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Japan</h6>
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
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending5.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Italy</h6>
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
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending6.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Turkey</h6>
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
</div>
</div>
</div>
</div>
</section>
<!-- Trending Ends -->
<!-- top destination starts -->
<section class="top-destination overflow-hidden pb-9">
<div class="container">
<div class="desti-inner">
<div class="row align-items-center">
<div class="col-lg-4 col-md-6 p-1">
<div class="desti-title text-center">
<h2 class="white">Travel <br/>Best Holidays Trips <br/>In The World</h2>
<p class="white mb-0">Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
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
<a class="nir-btn" href="#">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 p-1">
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
<!-- Discount action starts -->
<section class="discount-action pt-0">
<div class="container">
<div class="call-banner">
<div class="row d-flex align-items-center">
<div class="col-lg-6 col-md-6 p-0">
<div class="call-banner-inner text-center bg-navy">
<h4 class="white">SUMMER SPECIAL UPTO 25% OFF</h4>
<h2 class="white mb-4">SPEND THE BEST VACATION WITH US <br/>The nights of Thailand</h2>
<a class="nir-btn" href="destination-single.html">View Details <i class="fa fa-arrow-right white ps-1"></i></a>
</div>
</div>
<div class="col-lg-6 col-md-6 p-0"></div>
</div>
</div>
</div>
</section>
<!-- Discount action Ends -->
<!-- Counter -->
<section class="counter-main pt-0 pb-6">
<div class="container">
<div class="counter text-center">
<div class="row">
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item bg-pink">
<i class="fa fa-users white mb-1"></i>
<h3 class="value mb-0 white">100</h3>
<h4 class="m-0 white">Happy Customers</h4>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item bg-pink">
<i class="fa fa-plane white mb-1"></i>
<h3 class="value mb-0 white">50</h3>
<h4 class="m-0 white">Amazing Tours </h4>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item bg-pink">
<i class="fa fa-chart-bar white mb-1"></i>
<h3 class="value mb-0 white">3472</h3>
<h4 class="m-0 white">In Business</h4>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item bg-pink">
<i class="fa fa-support white mb-1"></i>
<h3 class="value mb-0 white">523</h3>
<h4 class="m-0 white">Support Cases </h4>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- End Counter -->
<!-- Fav destination Starts -->
<section class="trending destination pb-6 pt-9" style="background-image: url(images/bg/bg4.jpg);">
<div class="container">
<div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0 white">Find Your <strong>Favourite Destination</strong></h2>
<p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
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
<div class="col-lg-4 mb-4">
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
<div class="col-lg-4 mb-4">
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
<div class="col-lg-4 mb-4">
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
<div class="col-lg-4 mb-4">
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
<div class="dot-overlay"></div>
</section>
<!-- Fav destination Ends -->
<!-- top deal starts -->
<section class="top-deals bg-grey pt-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Today's <span>Top Deal</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="team-slider">
<div class="slider-item position-relative mx-3">
<div class="slider-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/new-deal/deal1.jpg') }}"/>
</div>
<div class="slider-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> United Kingdom</h6>
<h4><a href="#">Earning Asiana Club Miles</a></h4>
<p>With upto 30% Off, experience Europe your way!</p>
<div class="deal-price">
<p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
</div>
</div>
</div>
<div class="slider-item position-relative mx-3">
<div class="slider-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/new-deal/deal2.jpg') }}"/>
</div>
<div class="slider-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Thailand</h6>
<h4><a href="#">Save big on hotels!</a></h4>
<p>With upto 30% Off, experience Europe your way!</p>
<div class="deal-price">
<p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
</div>
</div>
</div>
<div class="slider-item position-relative mx-3">
<div class="slider-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/new-deal/deal3.jpg') }}"/>
</div>
<div class="slider-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> South Korea</h6>
<h4><a href="#">Experience Europe Your Way</a></h4>
<p>With upto 30% Off, experience Europe your way!</p>
<div class="deal-price">
<p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
</div>
</div>
</div>
<div class="slider-item position-relative mx-3">
<div class="slider-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/new-deal/deal4.jpg') }}"/>
</div>
<div class="slider-content">
<h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Germany</h6>
<h4><a href="#">Earning Asiana Club Miles</a></h4>
<p>With upto 30% Off, experience Europe your way!</p>
<div class="deal-price">
<p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- top deal ends -->
<!-- testomonial start -->
<section class="testimonial pb-10 pt-9" style="background-image: url(images/bg/bg2.jpg);">
<div class="container">
<div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0 white">What <span>People Say About Us</span></h2>
<p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="review-slider1">
<div class="testimonial-item">
<div class="testimonial-content mb-5">
<div class="testimonial-icon">
<i class="fa fa-quote-left"></i>
</div>
<p class="description mb-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
</div>
<div class="author-title d-flex align-items-center">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img1.jpg') }}"/></a>
<div class="author-in ms-3">
<h5 class="m-0 white"> Elison Marks</h5>
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
</div>
</div>
<div class="testimonial-item">
<div class="testimonial-content mb-5">
<div class="testimonial-icon">
<i class="fa fa-quote-left"></i>
</div>
<p class="description mb-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        </p>
</div>
<div class="author-title d-flex align-items-center">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img2.jpg') }}"/></a>
<div class="author-in ms-3">
<h5 class="m-0 white">Jared Erondu</h5>
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
</div>
</div>
<div class="testimonial-item">
<div class="testimonial-content mb-5">
<div class="testimonial-icon">
<i class="fa fa-quote-left"></i>
</div>
<p class="description mb-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
</div>
<div class="author-title d-flex align-items-center">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img3.jpg') }}"/></a>
<div class="author-in ms-3">
<h5 class="m-0 white">Kelson Kelly</h5>
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="overlay"></div>
</section>
<!-- testimonial ends -->
<!-- Instagram starts -->
<section class="insta-main p-0">
<div class="insta-inner">
<div class="follow-button">
<h5 class="m-0"><a href="#" title="">Follow on Instagram</a></h5>
</div>
<div class="attract-slider">
<div class="insta-image">
<a href="#"><img alt="insta" src="{{ asset('template/yatri_world/main-file/images/insta/ins-3.jpg') }}"/></a>
</div>
<div class="insta-image">
<a href="#"><img alt="insta" src="{{ asset('template/yatri_world/main-file/images/insta/ins-4.jpg') }}"/></a>
</div>
<div class="insta-image">
<a href="#"><img alt="insta" src="{{ asset('template/yatri_world/main-file/images/insta/ins-5.jpg') }}"/></a>
</div>
<div class="insta-image">
<a href="#"><img alt="insta" src="{{ asset('template/yatri_world/main-file/images/insta/ins-1.jpg') }}"/></a>
</div>
<div class="insta-image">
<a href="#"><img alt="insta" src="{{ asset('template/yatri_world/main-file/images/insta/ins-7.jpg') }}"/></a>
</div>
<div class="insta-image">
<a href="#"><img alt="insta" src="{{ asset('template/yatri_world/main-file/images/insta/ins-8.jpg') }}"/></a>
</div>
<div class="insta-image">
<a href="#"><img alt="insta" src="{{ asset('template/yatri_world/main-file/images/insta/ins-2.jpg') }}"/></a>
</div>
<div class="insta-image">
<a href="#"><img alt="insta" src="{{ asset('template/yatri_world/main-file/images/insta/ins-6.jpg') }}"/></a>
</div>
<div class="insta-image">
<a href="#"><img alt="insta" src="{{ asset('template/yatri_world/main-file/images/insta/ins-9.jpg') }}"/></a>
</div>
</div>
</div>
</section>
<!-- Instagram ends -->
<!-- News Starts -->
<section class="news pb-3 pt-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0"><span>Articles &amp; Travel</span> Guidings</h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="news-outer">
<div class="row">
<div class="col-lg-5 mb-4">
<div class="news-item overflow-hidden">
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
<p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy. <br/><br/>One of the programs is Save Our I have personally in many of the programs mentioned on this site.</p>
<div class="author-img">
<img alt="Demo Image" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/>
<span>By - Jack Well Fardez</span>
</div>
</div>
</div>
</div>
<div class="col-lg-7">
<div class="row">
<div class="col-md-6 mb-4">
<div class="news-item overflow-hidden">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog2.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="bordernone mb-0"><a href="blog-single.html">Mountains is always right destination.</a></h4>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="news-item overflow-hidden">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog3.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tourism</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="bordernone mb-0"><a href="blog-single.html">We have not all those who wander are lost.</a></h4>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="news-item overflow-hidden">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog4.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tour</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="bordernone mb-0"><a href="blog-single.html">Here Our's Life is either a daring adventure.</a></h4>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="news-item overflow-hidden">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog5.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="bordernone mb-0"><a href="blog-single.html">Take only memories, leave only footprints.</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- News Ends -->
<!-- cta-horizon starts -->
<div class="cta-horizon bg-blue pt-4 pb-2">
<div class="container d-md-flex align-items-center justify-content-between">
<h4 class="mb-2 white">Didn't find the service suite you! Need a custom service?</h4>
<a class="nir-btn-black" href="contact.html">Let's talk</a>
</div>
</div>
<!-- cta-horizon Ends -->
@endsection
