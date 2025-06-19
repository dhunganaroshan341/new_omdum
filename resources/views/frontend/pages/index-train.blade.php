@extends('frontend.layout.main')

@section('content')
<!-- banner starts -->
<section class="banner overflow-hidden">
<div class="slider slider3">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/trains/1.jpg)"></div>
<div class="swiper-content1 container">
<h1 class="white mb-0">Drive The Car You Ever Dream</h1>
</div>
<div class="dot-overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/trains/4.jpg)"></div>
<div class="swiper-content1 container">
<h1 class="white mb-0"><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
</div>
<div class="dot-overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/trains/2.jpg)"></div>
<div class="swiper-content1 container">
<h1 class="white mb-0">Discover Your Beautiful <span>Travel</span> With Us</h1>
</div>
<div class="dot-overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/trains/3.jpg)"></div>
<div class="swiper-content1 container">
<h1 class="white mb-0"><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
</div>
<div class="dot-overlay"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- banner ends -->
<!-- form starts -->
<div class="form-main">
<div class="container">
<div class="form-content form-content1 w-100 transparent p-0 shadow-none position-relative">
<div class="form-navtab text-center">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link black" data-bs-toggle="tab" href="#tour"><i class="flaticon-global"></i> Tour</a>
</li>
<li class="nav-item">
<a class="nav-link black" data-bs-toggle="tab" href="#hotel"><i class="flaticon-building"></i> Hotel</a>
</li>
<li class="nav-item">
<a class="nav-link black" data-bs-toggle="tab" href="#flight"><i class="fa fa-plane"></i> Flight</a>
</li>
<li class="nav-item">
<a class="nav-link black" data-bs-toggle="tab" href="#car"><i class="fa fa-car"></i> Car</a>
</li>
<li class="nav-item">
<a class="nav-link black active" data-bs-toggle="tab" href="#train"><i class="fa fa-train"></i> Train</a>
</li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane" id="tour">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg">
<div class="form-group mb-0">
<label>Your Destination</label>
<div class="input-box">
<i class="flaticon-placeholder"></i>
<select class="niceSelect">
<option value="1">Where are you going?</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Check In</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range0" placeholder="yyyy-mm-dd" type="text"/>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Check Out</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range1" placeholder="yyyy-mm-dd" type="text"/>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>No. Of People</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
<select class="niceSelect">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0 mt-3">
<a class="nir-btn w-100" href="#"><i class="fa fa-search me-2"></i> Search Now</a>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="hotel">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg">
<div class="form-group mb-0">
<label>Your Destination</label>
<div class="input-box">
<i class="flaticon-placeholder"></i>
<select class="niceSelect">
<option value="1">Where are you going?</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Reserved Date</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range2" placeholder="yyyy-mm-dd" type="text"/>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Hotel Types</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
<select class="niceSelect">
<option value="1">High Class</option>
<option value="2">Middle Class</option>
<option value="3">Low Class</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Person</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
<select class="niceSelect">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0 mt-3">
<a class="nir-btn w-100" href="#"><i class="fa fa-search me-2"></i> Search Now</a>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="flight">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg">
<div class="form-group mb-0">
<label>Flying From</label>
<div class="input-box">
<i class="flaticon-placeholder"></i>
<select class="niceSelect">
<option value="1">Where are you going?</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Flying To</label>
<div class="input-box">
<i class="flaticon-placeholder"></i>
<select class="niceSelect">
<option value="1">Where are you going?</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Depart Date</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range3" placeholder="yyyy-mm-dd" type="text"/>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>No. of People</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
<select class="niceSelect">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0 mt-3">
<a class="nir-btn w-100" href="#"><i class="fa fa-search me-2"></i> Search Now</a>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="car">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg">
<div class="form-group mb-0">
<label>Car Types</label>
<div class="input-box">
<i class="flaticon-placeholder"></i>
<select class="niceSelect">
<option value="1">Ferrari</option>
<option value="2">BMW</option>
<option value="3">Audi</option>
<option value="4">Honda</option>
<option value="5">Suzuki</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Pick Up</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range4" placeholder="yyyy-mm-dd" type="text"/>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Drop Off</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range5" placeholder="yyyy-mm-dd" type="text"/>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Price Range</label>
<div class="input-box">
<div class="range-slider">
<div aria-disabled="false" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-max="2000" data-max-name="max_price" data-min="0" data-min-name="min_price" data-unit="$">
<span class="min-value">0 $</span>
<span class="max-value">2000 $</span>
<div class="ui-slider-range ui-widget-header ui-corner-all whole" style="left: 0%; width: 100%;"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0 mt-3">
<a class="nir-btn w-100" href="#"><i class="fa fa-search me-2"></i> Search Now</a>
</div>
</div>
</div>
</div>
<div class="tab-pane in active" id="train">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg">
<div class="form-group mb-0">
<label>Pick Up Location</label>
<div class="input-box">
<i class="flaticon-placeholder"></i>
<select class="niceSelect">
<option value="1">Where are you going?</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Depart Date</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range6" placeholder="yyyy-mm-dd" type="text"/>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0">
<label>Train Class</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
<select class="niceSelect">
<option value="1">Economic</option>
<option value="2">Premium</option>
<option value="3">Deluxe</option>
<option value="4">Luxury</option>
</select>
</div>
</div>
</div>
<div class="col-lg">
<div class="form-group mb-0 mt-3">
<a class="nir-btn w-100" href="#"><i class="fa fa-search me-2"></i> Search Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- form ends -->
<!-- about-us starts -->
<section class="about-us pt-6 pb-6">
<div class="container">
<div class="about-image-box">
<div class="about-content w-75 mx-auto text-center mb-4">
<h4 class="mb-1 font-weight-normal pink">Explore Europe Effortlessly By Train</h4>
<h2 class="text-uppercase">Our experts would love to build a custom package just for you!</h2>
<p class="mb-0">Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars. Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="featured-us">
<div class="featured-us-box">
<div class="row">
<div class="col-lg mb-4">
<div class="featured-us-item text-center bg-lgrey box-shadow p-4 border-all">
<div class="featured-us-icon bg-transparent d-inline">
<i class="fa fa-ticket-alt"></i>
</div>
<div class="featured-us-content w-100 mt-2">
<h4 class="mb-2"><a href="#">Last Minute Train Tickets. Split Ticket Are Coming Home</a></h4>
<p class="mb-2">we have received 1532 customer reviews and an average rating of 5 out of 5 stars. Travel has helped us to understand the meaning of life</p>
<a href="#">Find Out More <i class="fa fa-long-arrow-alt-right pink"></i></a>
</div>
</div>
</div>
<div class="col-lg mb-4">
<div class="featured-us-item text-center bg-white box-shadow p-4 border-all">
<div class="featured-us-icon bg-transparent d-inline">
<i class="fa fa-exchange-alt pink"></i>
</div>
<div class="featured-us-content w-100 mt-2">
<h4 class="mb-2"><a href="#">Simple Refund And <br/> Exchange</a></h4>
<p class="mb-2">we have received 1532 customer reviews and an average rating of 5 out of 5 stars. Travel has helped us to understand the meaning of life</p>
<a class="pink" href="#">Find Out More <i class="fa fa-long-arrow-alt-right pink"></i></a>
</div>
</div>
</div>
<div class="col-lg mb-4">
<div class="featured-us-item text-center bg-lgrey box-shadow p-4 border-all">
<div class="featured-us-icon bg-transparent d-inline">
<i class="fa fa-qrcode"></i>
</div>
<div class="featured-us-content w-100 mt-2">
<h4 class="mb-2"><a href="#">Scan QR Code <br/>Mobile Ticketing</a></h4>
<p class="mb-2">we have received 1532 customer reviews and an average rating of 5 out of 5 stars. Travel has helped us to understand the meaning of life</p>
<a href="#">Find Out More <i class="fa fa-long-arrow-alt-right pink"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- about-us ends -->
<!-- about-us starts -->
<section class="about-us pt-0">
<div class="container">
<div class="about-image-box">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg-6">
<div class="about-content">
<h4 class="mb-1 blue font-weight-normal">About Yatriiworld</h4>
<h2>Begin Your Comfortable Journey With Us</h2>
<p class="mb-3">Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars. <br/><br/>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
<a class="nir-btn-black" href="about.html">More About Us</a>
</div>
</div>
<div class="col-lg-6">
<div class="about-image">
<div class="row d-lg-flex align-items-center justify-content-between">
<div class="col-md-6"><img alt="" src="{{ asset('template/yatri_world/main-file/images/new-deal/deal11.jpg') }}"/></div>
<div class="col-md-6 mt-4"><img alt="" src="{{ asset('template/yatri_world/main-file/images/new-deal/deal12.jpg') }}"/></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- about-us ends -->
<!-- Trending Starts -->
<section class="trending destination-b pb-6 pt-4">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h4 class="mb-0 pink">Super Hot Deals</h4>
<h2 class="m-0">Best <span>Deal Of The Day</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="trend-box">
<div class="row d-flex align-items-center">
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending24.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="deal-item">
<span class="bg-white mb-1">Deal Start At $350</span>
<span class="bg-pink white">Average Price $750</span>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="pb-1 mb-1"><a href="train-detail.html">Tokyo Serviced Apartment, Japan </a></h4>
<p>Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy.</p>
<a href="train-booking.html">Book Now <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending25.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="deal-item">
<span class="bg-white mb-1">Deal Start At $350</span>
<span class="bg-pink white">Average Price $750</span>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="pb-1 mb-1"><a href="train-detail.html">Vex Torel Palace In London, England </a></h4>
<p>Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy.</p>
<a href="train-booking.html">Book Now <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending22.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="deal-item">
<span class="bg-white mb-1">Deal Start At $350</span>
<span class="bg-pink white">Average Price $750</span>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="pb-1 mb-1"><a href="train-detail.html">Forlic Around Frieburg, Germany </a></h4>
<p>Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy.</p>
<a href="train-booking.html">Book Now <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending23.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="deal-item">
<span class="bg-white mb-1">Deal Start At $350</span>
<span class="bg-pink white">Average Price $750</span>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="pb-1 mb-1"><a href="train-detail.html">Forlic Around Frieburg, Germany </a></h4>
<p>Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy.</p>
<a href="train-booking.html">Book Now <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending26.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="deal-item">
<span class="bg-white mb-1">Deal Start At $350</span>
<span class="bg-pink white">Average Price $750</span>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="pb-1 mb-1"><a href="train-detail.html">Forlic Around Frieburg, Germany </a></h4>
<p>Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy.</p>
<a href="train-booking.html">Book Now <i class="fa fa-long-arrow-alt-right"></i></a>
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
<section class="comingsoon overflow-hidden h-auto" style="min-height: auto; background:#fbfbfb url(images/testimonial.png);">
<div class="container">
<div class="comingsoon-content text-center">
<div class="coming-title mb-3">
<h4 class="mb-0">Time Is Running Out</h4>
<h2 class="m-0">Book <span class="pink">Your Ticket</span></h2>
<p class="m-0">Travel has helped us to understand the meaning of life and it has helped us become better people. <br/>Each time we travel, we see the world with new eyes.</p>
</div>
<div class="coming-counter" data-date="2025-06-28 00:00:00">
<div class="counter-box navy"><span class="days navy"></span> Days</div>
<div class="counter-box navy"><span class="hours navy"></span> Hours</div>
<div class="counter-box navy"><span class="minutes navy"></span> Minutes</div>
<div class="counter-box navy"><span class="seconds navy"></span> Seconds</div>
</div>
</div>
</div>
<div id="particles-js"></div>
</section>
<!-- top destination ends -->
<!-- Call to action starts -->
<section class="call-to-action1" style="background-image: url(images/trains/1.jpg)">
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
<!-- why us starts -->
<section class="featured-us pb-6">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h4 class="mb-0 pink">How It Works</h4>
<h2 class="m-0">Our Work <span>Process</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="featured-us-box">
<div class="row">
<div class="col-lg-3 col-md-6 mb-4">
<div class="featured-us-item">
<div class="featured-us-icon bg-transparent d-inline" style="height: auto; line-height: inherit;">
<i class="fa fa-map-marker pink"></i>
<span>01. <i class="fa fa-long-arrow-alt-right"></i></span>
</div>
<div class="featured-us-content w-100">
<h4 class="mb-1 text-uppercase"><a href="#">Choose Your Location</a></h4>
<p class="mb-0">Select your car, choose your location, time and pick it up</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="featured-us-item">
<div class="featured-us-icon bg-transparent d-inline" style="height: auto; line-height: inherit;">
<i class="fa fa-calendar-alt pink"></i>
<span>02. <i class="fa fa-long-arrow-alt-right"></i></span>
</div>
<div class="featured-us-content w-100">
<h4 class="mb-1 text-uppercase"><a href="#">Pick Up date</a></h4>
<p class="mb-0">Fill your information into the form and go to next step</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="featured-us-item">
<div class="featured-us-icon bg-transparent d-inline" style="height: auto; line-height: inherit;">
<i class="fa fa-users pink"></i>
<span>03. <i class="fa fa-long-arrow-alt-right"></i></span>
</div>
<div class="featured-us-content w-100">
<h4 class="mb-1 text-uppercase"><a href="#">Number Of Passengers</a></h4>
<p class="mb-0">Select your payment, click ok and It’s all done for you</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="featured-us-item">
<div class="featured-us-icon bg-transparent d-inline" style="height: auto; line-height: inherit;">
<i class="fa fa-train pink"></i>
<span>04.</span>
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
<section class="featured-counter pt-0 pb-0">
<div class="container">
<div class="featured-counter-inner bg-pink pb-2 w-75">
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
</div>
</div>
</section>
<!-- featured counter ends -->
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
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog10.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Travel</a></li>
</ul>
</div>
<div class="news-content mt-2 mb-1">
<h4 class="bordernone mb-0"><a href="blog-single.html">Mountains is Raising Say Express Had Chiefly Detract.</a></h4>
</div>
<a href="blog-single.html"><u>Read More</u></a>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="news-item overflow-hidden">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog9.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tourism</a></li>
</ul>
</div>
<div class="news-content mt-2 mb-1">
<h4 class="bordernone mb-0"><a href="blog-single.html">We have not all those who wander are lost.</a></h4>
</div>
<a href="blog-single.html"><u>Read More</u></a>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="news-item overflow-hidden">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog8.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tour</a></li>
</ul>
</div>
<div class="news-content mt-2 mb-1">
<h4 class="bordernone mb-0"><a href="blog-single.html">Here Our's Life is either a daring adventure.</a></h4>
</div>
<a href="blog-single.html"><u>Read More</u></a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- News Ends -->
<!-- partners starts -->
<section class="partners bordernone pt-5 pb-5">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h4 class="m-0 pink">Partners</h4>
<h2 class="m-0">Our Official <span>Sponsars</span></h2>
</div>
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
</section>
<!-- partners ends -->
<!-- Discount action starts -->
<section class="discount-action p-0">
<div class="call-banner" style="background-image: url(images/trains/4.jpg);">
<div class="row d-flex align-items-center">
<div class="col-lg-6 p-0">
<div class="call-banner-inner text-center bg-blue">
<h4 class="white">25% OFF SALE</h4>
<h2 class="white mb-4">Best Holiday Packages For<span class="text-uppercase d-block">Honeymoon</span></h2>
<a class="nir-btn-black" href="train-booking.html">Book Your Train Now <i class="fa fa-arrow-right white ps-1"></i></a>
</div>
</div>
<div class="col-lg-6 p-0">
<div class="call-banner-inner text-left p-5">
<h4 class="white">24x7 Service Available</h4>
<h2 class="white mb-4">Call Now And Book Your Ride For Your Next Destination</h2>
<a class="nir-btn" href="train-booking.html">Call For Booking <i class="fa fa-arrow-right white ps-1"></i></a>
</div>
</div>
</div>
</div>
<div class="overlay"></div>
</section>
<!-- Discount action Ends -->
@endsection
