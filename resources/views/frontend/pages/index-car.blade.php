@extends('frontend.layout.main')

@section('content')
<!-- banner starts -->
<section class="banner overflow-hidden">
<div class="slider slider1">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/cars/1.jpg)"></div>
<div class="swiper-content container">
<h4 class="white">Instant Car Booking</h4>
<h1 class="white mb-4">Drive The Car You Ever Dream</h1>
<a class="per-btn" href="#">
<span class="white">Discover</span>
<i class="fa fa-arrow-right white"></i>
</a>
</div>
<div class="dot-overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/cars/2.jpg)"></div>
<div class="swiper-content1 container">
<h4 class="white">Feel Free To Travel</h4>
<h1 class="white mb-4">Discover Your Beautiful <span>Travel</span> With Us</h1>
<a class="per-btn" href="#">
<span class="white">Discover</span>
<i class="fa fa-arrow-right white"></i>
</a>
</div>
<div class="dot-overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/cars/3.jpg)"></div>
<div class="swiper-content2 container">
<h4 class="white">Trip For Your Kids</h4>
<h1 class="white mb-4"><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
<a class="per-btn" href="#">
<span class="white">Discover</span>
<i class="fa fa-arrow-right white"></i>
</a>
</div>
<div class="dot-overlay"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- banner ends -->
<!-- about-us starts -->
<section class="about-us" style="background: #1f2e54 url(images/testimonial.png) no-repeat;">
<div class="container">
<div class="about-image-box">
<div class="row d-flex align-items-center">
<div class="col-lg-6">
<div class="about-content">
<h4 class="mb-1 white font-weight-normal">Make Your Booking</h4>
<h2 class="white">Where you would like to go</h2>
<p class="mb-3 white">Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars. <br/><br/>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
</div>
<div class="col-lg-6">
<!-- form main starts -->
<div class="form-main">
<div class="form-content form-content3 w-100">
<div class="form-content-inner">
<div class="row gy-4">
<div class="col-lg-6">
<div class="form-group">
<label class="white text-uppercase">Pick Up Location</label>
<div class="input-box">
<i class="fa fa-map-marker"></i>
<select class="niceSelect">
<option value="1">Pick Up Location</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="white text-uppercase">Drop Off Location</label>
<div class="input-box">
<i class="fa fa-map-marker"></i>
<select class="niceSelect">
<option value="1">Drop Off Location</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="white text-uppercase">Pick Up Date</label>
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range0" placeholder="Pick Up Date" type="text"/>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="white text-uppercase">Drop Off Date</label>
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range1" placeholder="Drop Up Date" type="text"/>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="white text-uppercase">Number Of Passenger</label>
<div class="input-box">
<i class="fa fa-user"></i>
<select class="niceSelect">
<option value="1">Passengers</option>
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
<label class="white text-uppercase">Vehicle Type</label>
<div class="input-box">
<i class="fa fa-clock"></i>
<select class="niceSelect">
<option value="1">Select Your Vehicles</option>
<option value="2">1</option>
<option value="3">2</option>
</select>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group m-0 w-100 text-left">
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
</div>
</section>
<!-- about-us ends -->
<!-- why us starts -->
<section class="featured-us bg-grey pb-6">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h4 class="mb-0 pink">How It Works</h4>
<h2 class="m-0">Our Work <span>Process</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="featured-us-box">
<div class="row">
<div class="col-lg mb-4">
<div class="featured-us-item">
<div class="featured-us-icon bg-transparent d-inline">
<i class="fa fa-map-marker pink"></i>
</div>
<div class="featured-us-content w-100">
<h4 class="mb-1 text-uppercase"><a href="#">Choose Your Location</a></h4>
<p class="mb-0">Select your car, choose your location, time and pick it up</p>
</div>
</div>
</div>
<div class="col-lg mb-4">
<div class="featured-us-item">
<div class="featured-us-icon bg-transparent d-inline">
<i class="fa fa-calendar-alt pink"></i>
</div>
<div class="featured-us-content w-100">
<h4 class="mb-1 text-uppercase"><a href="#">Pick Up date</a></h4>
<p class="mb-0">Fill your information into the form and go to next step</p>
</div>
</div>
</div>
<div class="col-lg mb-4">
<div class="featured-us-item">
<div class="featured-us-icon bg-transparent d-inline">
<i class="fa fa-users pink"></i>
</div>
<div class="featured-us-content w-100">
<h4 class="mb-1 text-uppercase"><a href="#">Number Of Passengers</a></h4>
<p class="mb-0">Select your payment, click ok and It’s all done for you</p>
</div>
</div>
</div>
<div class="col-lg mb-4">
<div class="featured-us-item">
<div class="featured-us-icon bg-transparent d-inline">
<i class="fa fa-car pink"></i>
</div>
<div class="featured-us-content w-100">
<h4 class="mb-1 text-uppercase"><a href="#">Enjoy The Ride!!!</a></h4>
<p class="mb-0">Please Do Not Forget To Rating About Our Services</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- why us ends -->
<!-- featured counter Starts -->
<section class="featured-counter pt-0">
<div class="container">
<div class="featured-counter-inner bg-pink mb-4">
<div class="section-title mb-5">
<h4 class="mb-0 white">Why Choose Us</h4>
<h2 class="m-0 white">Your Comfortable Journey With Us. We Are Trusted By More Than 1500 Clients</h2>
<p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="counter text-center">
<div class="row">
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item">
<h3 class="value mb-0 white">1100</h3>
<p class="m-0 white">Active users</p>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item">
<h3 class="value mb-0 white">50</h3>
<p class="m-0 white">Vehicles Listed</p>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item">
<h3 class="value mb-0 white">3472</h3>
<p class="m-0 white">Planned Trips</p>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="counter-item">
<h3 class="value mb-0 white">523</h3>
<p class="m-0 white">Cars</p>
</div>
</div>
</div>
</div>
<div class="car-image">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/cars/car.png') }}"/>
</div>
</div>
</div>
</section>
<!-- featured counter ends -->
<!-- Trending Starts -->
<section class="trending destination-b pb-6 pt-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h4 class="mb-0 pink">Instant Car Booking</h4>
<h2 class="m-0">Best Selling <span>Drives</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people.</p>
</div>
<div class="trend-box">
<div class="team-slider">
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending16.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between bg-pink">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tachometer-alt"></i> 28.00</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tint"></i> Petrol</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-project-diagram"></i> Auto</p>
</div>
</div>
<div class="trend-content">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="bordernone pb-0 mb-1"><a href="#">Ferrari 458 MM Speciale</a></h4>
<div class="trend-daily d-flex align-items-center mb-1 border-b pb-1">
<span class="me-3">Daily: <strong>$70</strong></span>
<span>Monthly: <strong>$2000</strong></span>
</div>
<a href="#">Book Your Ride <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending15.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between bg-pink">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tachometer-alt"></i> 28.00</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tint"></i> Petrol</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-project-diagram"></i> Auto</p>
</div>
</div>
<div class="trend-content">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="bordernone pb-0 mb-1"><a href="#">Pininfarina Sergio</a></h4>
<div class="trend-daily d-flex align-items-center mb-1 border-b pb-1">
<span class="me-3">Daily: <strong>$100</strong></span>
<span>Monthly: <strong>$2500</strong></span>
</div>
<a href="#">Book Your Ride <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending21.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between bg-pink">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tachometer-alt"></i> 28.00</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tint"></i> Petrol</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-project-diagram"></i> Auto</p>
</div>
</div>
<div class="trend-content">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="bordernone pb-0 mb-1"><a href="#">Ferrari 458 MM Speciale</a></h4>
<div class="trend-daily d-flex align-items-center mb-1 border-b pb-1">
<span class="me-3">Daily: <strong>$70</strong></span>
<span>Monthly: <strong>$2000</strong></span>
</div>
<a href="#">Book Your Ride <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending18.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between bg-pink">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tachometer-alt"></i> 28.00</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tint"></i> Petrol</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-project-diagram"></i> Auto</p>
</div>
</div>
<div class="trend-content">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="bordernone pb-0 mb-1"><a href="#">Ferrari F12 TRS</a></h4>
<div class="trend-daily d-flex align-items-center mb-1 border-b pb-1">
<span class="me-3">Daily: <strong>$120</strong></span>
<span>Monthly: <strong>$3000</strong></span>
</div>
<a href="#">Book Your Ride <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Trending Ends -->
<!-- Trending Starts -->
<section class="trending destination-b pb-6 pt-0">
<div class="container">
<div class="trend-box">
<div class="row d-flex align-items-center">
<div class="col-lg-4 mb-4">
<div class="explore-item">
<div class="section-title section-title-w">
<h4 class="mb-0 pink">Hot Deals Of The Week </h4>
<h2>Explore <span>Rate Cars</span></h2>
<p class="mb-2">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes. Travel has helped us to understand the meaning of life and it has helped us become better people. </p>
<a class="nir-btn-black" href="#">View All Vehicles <i class="fa fa-angle-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending16.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between bg-pink">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tachometer-alt"></i> 28.00</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tint"></i> Petrol</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-project-diagram"></i> Auto</p>
</div>
</div>
<div class="trend-content">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="bordernone pb-0 mb-1"><a href="#">Ferrari 458 MM Speciale</a></h4>
<div class="trend-daily d-flex align-items-center mb-1 border-b pb-1">
<span class="me-3">Daily: <strong>$70</strong></span>
<span>Monthly: <strong>$2000</strong></span>
</div>
<a href="#">Book Your Ride <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending17.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between bg-pink">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tachometer-alt"></i> 28.00</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tint"></i> Petrol</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-project-diagram"></i> Auto</p>
</div>
</div>
<div class="trend-content">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="bordernone pb-0 mb-1"><a href="#">Pininfarina Sergio</a></h4>
<div class="trend-daily d-flex align-items-center mb-1 border-b pb-1">
<span class="me-3">Daily: <strong>$100</strong></span>
<span>Monthly: <strong>$2500</strong></span>
</div>
<a href="#">Book Your Ride <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending18.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between bg-pink">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tachometer-alt"></i> 28.00</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tint"></i> Petrol</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-project-diagram"></i> Auto</p>
</div>
</div>
<div class="trend-content">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="bordernone pb-0 mb-1"><a href="#">Ferrari F12 TRS</a></h4>
<div class="trend-daily d-flex align-items-center mb-1 border-b pb-1">
<span class="me-3">Daily: <strong>$120</strong></span>
<span>Monthly: <strong>$3000</strong></span>
</div>
<a href="#">Book Your Ride <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending19.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between bg-pink">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tachometer-alt"></i> 28.00</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tint"></i> Petrol</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-project-diagram"></i> Auto</p>
</div>
</div>
<div class="trend-content">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="bordernone pb-0 mb-1"><a href="#">Mercedes Benz 2019</a></h4>
<div class="trend-daily d-flex align-items-center mb-1 border-b pb-1">
<span class="me-3">Daily: <strong>$70</strong></span>
<span>Monthly: <strong>$2000</strong></span>
</div>
<a href="#">Book Your Ride <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending15.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between bg-pink">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tachometer-alt"></i> 28.00</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-tint"></i> Petrol</p>
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-project-diagram"></i> Auto</p>
</div>
</div>
<div class="trend-content">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="bordernone pb-0 mb-1"><a href="#">Bentley Contitental</a></h4>
<div class="trend-daily d-flex align-items-center mb-1 border-b pb-1">
<span class="me-3">Daily: <strong>$100</strong></span>
<span>Monthly: <strong>$2500</strong></span>
</div>
<a href="#">Book Your Ride <i class="fa fa-angle-double-right"></i></a>
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
<section class="call-to-action1" style="background-image: url(images/cars/2.jpg)">
<div class="call-main1">
<div class="container">
<div class="action-content text-center w-75 mx-auto">
<h3 class="white mb-0">Find next place to visit</h3>
<h2 class="white call-name">Make Your Holidays More Happening</h2>
</div>
<div class="video-button text-center">
<div class="call-button text-center position-relative">
<button class="play-btn js-video-button" data-channel="vimeo" data-video-id="152879427" type="button">
<i class="fa fa-play bg-blue"></i>
</button>
</div>
<div class="video-figure"></div>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- call to action Ends -->
<!-- testomonial start -->
<section class="testimonial pb-5" style="background-image: url(images/testimonial.png)">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">What <span>People Say About Us</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="review-slider">
<div class="item">
<div class="testimonial-item1 text-center">
<div class="details">
<p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
</div>
<div class="author-info mt-2">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img1.jpg') }}"/></a>
<div class="author-title">
<h4 class="m-0 pink">Jared Erondu</h4>
<span>Supervisor</span>
</div>
</div>
<i class="fa fa-quote-left mb-2"></i>
</div>
</div>
<div class="item">
<div class="testimonial-item1 text-center">
<div class="details">
<p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem  Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
</div>
<div class="author-info mt-2">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img2.jpg') }}"/></a>
<div class="author-title">
<h4 class="m-0 pink">Cadic Vegeta</h4>
<span>Sr. Chef</span>
</div>
</div>
<i class="fa fa-quote-left mb-2"></i>
</div>
</div>
<div class="item">
<div class="testimonial-item1 text-center">
<div class="details">
<p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
</div>
<div class="author-info mt-2">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img3.jpg') }}"/></a>
<div class="author-title">
<h4 class="m-0 pink">Jonathan Beri</h4>
<span>Manager</span>
</div>
</div>
<i class="fa fa-quote-left mb-2"></i>
</div>
</div>
</div>
</div>
</section>
<!-- testimonial ends -->
<!-- News Starts -->
<section class="news pb-5 bg-lgrey">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Latest Some <span>Tips &amp; Articles</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="news-outer">
<div class="row">
<div class="col-lg-4 mb-4">
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
<div class="news-content mt-2 mb-1">
<h4 class="bordernone mb-0"><a href="#">Mountains is Raising Say Express Had Chiefly Detract.</a></h4>
</div>
<a href="#"><u>Read More</u></a>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
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
<div class="news-content mt-2 mb-1">
<h4 class="bordernone mb-0"><a href="#">We have not all those who wander are lost.</a></h4>
</div>
<a href="#"><u>Read More</u></a>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
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
<div class="news-content mt-2 mb-1">
<h4 class="bordernone mb-0"><a href="#">Here Our's Life is either a daring adventure.</a></h4>
</div>
<a href="#"><u>Read More</u></a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- News Ends -->
<!-- Discount action starts -->
<section class="discount-action p-0">
<div class="call-banner" style="background-image: url(images/cars/3.jpg);">
<div class="row d-flex align-items-center">
<div class="col-lg-6 p-0">
<div class="call-banner-inner text-center bg-blue">
<h4 class="white">25% OFF SALE</h4>
<h2 class="white mb-4">Best Holiday Packages For<span class="text-uppercase d-block">Honeymoon</span></h2>
<a class="nir-btn-black" href="#">Book Your Car Now <i class="fa fa-arrow-right white ps-1"></i></a>
</div>
</div>
<div class="col-lg-6 p-0">
<div class="call-banner-inner text-left p-5">
<h4 class="white">24x7 Service Available</h4>
<h2 class="white mb-4">Call Now And Book Your Ride For Your Next Destination</h2>
<a class="nir-btn" href="#">Call For Booking <i class="fa fa-arrow-right white ps-1"></i></a>
</div>
</div>
</div>
</div>
<div class="overlay"></div>
</section>
<!-- Discount action Ends -->
<!-- partners starts -->
<div class="partners bordernone pt-5 pb-5">
<div class="container">
<div class="attract-slider">
<div class="client-logo item">
<a href="#">
<img alt="partner" src="{{ asset('template/yatri_world/main-file/images/clients/logo-01.png') }}"/>
</a>
</div>
<div class="client-logo item">
<a href="#">
<img alt="partner" src="{{ asset('template/yatri_world/main-file/images/clients/logo-02.png') }}"/>
</a>
</div>
<div class="client-logo item">
<a href="#">
<img alt="partner" src="{{ asset('template/yatri_world/main-file/images/clients/logo-03.png') }}"/>
</a>
</div>
<div class="client-logo item">
<a href="#">
<img alt="partner" src="{{ asset('template/yatri_world/main-file/images/clients/logo-04.png') }}"/>
</a>
</div>
<div class="client-logo item">
<a href="#">
<img alt="partner" src="{{ asset('template/yatri_world/main-file/images/clients/logo-02.png') }}"/>
</a>
</div>
<div class="client-logo item">
<a href="#">
<img alt="partner" src="{{ asset('template/yatri_world/main-file/images/clients/logo-03.png') }}"/>
</a>
</div>
<div class="client-logo item">
<a href="#">
<img alt="partner" src="{{ asset('template/yatri_world/main-file/images/clients/logo-04.png') }}"/>
</a>
</div>
<div class="client-logo item">
<a href="#">
<img alt="partner" src="{{ asset('template/yatri_world/main-file/images/clients/logo-01.png') }}"/>
</a>
</div>
<div class="client-logo item">
<a href="#">
<img alt="partner" src="{{ asset('template/yatri_world/main-file/images/clients/logo-02.png') }}"/>
</a>
</div>
</div>
</div>
</div>
<!-- partners ends -->
@endsection
