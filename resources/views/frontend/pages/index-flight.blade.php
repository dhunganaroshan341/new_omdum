@extends('frontend.layout.main')

@section('content')
<!-- banner starts -->
<section class="banner overflow-hidden">
<div class="banner-main">
<div class="banner-image" style="background-image:url(images/flights/2.jpg)"></div>
<div class="banner-content">
<h1 class="white mb-2">Cheap And Trusted Travel Agency</h1>
<p class="white mb-4">Enjoy Your Comfortable Trip With Yatriiworld Travel Agency</p>
<a class="per-btn" href="#">
<span class="white">Discover</span><i class="fa fa-arrow-right white"></i>
</a>
</div>
</div>
<div class="overlay"></div>
</section>
<!-- banner ends -->
<!-- about-us starts -->
<section class="about-us">
<div class="container">
<div class="about-image-box">
<div class="row">
<div class="col-lg-6">
<div class="about-content">
<h4 class="mb-1 blue font-weight-normal">Instant Flight Booking</h4>
<h2 class="">Where you would like to go</h2>
<p class="mb-3">Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars. <br/><br/>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
<a class="nir-btn" href="#">View More</a>
</div>
</div>
<div class="col-lg-6">
<!-- form main starts -->
<div class="form-main">
<div class="form-content form-content2 w-100">
<div class="form-content-inner">
<div class="row gy-4">
<div class="col-lg-6">
<div class="form-group">
<label class="text-uppercase">Pick Up Location</label>
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
<div class="col-lg-6">
<div class="form-group">
<label class="text-uppercase">Drop Off Location</label>
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
<div class="col-lg-6">
<div class="form-group">
<label class="text-uppercase">Pick Up Date</label>
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range0" placeholder="Check In" type="text"/>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="text-uppercase">Drop Up Date</label>
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range1" placeholder="Check Out" type="text"/>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="text-uppercase">Number Of Passenger</label>
<div class="input-box">
<i class="fa fa-user"></i>
<select class="niceSelect">
<option value="1">Person</option>
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
<label class="text-uppercase">Vehicle Type</label>
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
<div class="col-12">
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
<!-- explore-deals starts -->
<section class="explore-deals pb-6 bg-grey pt-10">
<div class="container">
<div class="explore-deals-box">
<div class="row d-flex align-items-center">
<div class="col-lg-3 mb-4">
<div class="explore-item box-shadow">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/trending/trending3.jpg') }}"/>
<div class="explore-item-content p-3 bg-white">
<div class="rating-main d-flex align-items-center mb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="mb-1"><a href="#">Paris, France</a></h4>
<p class="price mb-1">Per Person <span class="pink font-weight-bold">$400</span> <del>$500.00</del></p>
<a href="#"><ins>View Detail</ins></a>
</div>
</div>
</div>
<div class="col-lg-6 mb-4">
<div class="explore-item">
<div class="section-title section-title-w text-center">
<h4 class="mb-0 pink">Hot Deals Of The Week </h4>
<h2>Top <span>Explore Rate Deals</span></h2>
<p class="mb-2">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes. <br/><br/>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
<a class="nir-btn-black" href="#">View All Deals</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="explore-item box-shadow">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/trending/trending4.jpg') }}"/>
<div class="explore-item-content p-3 bg-white">
<div class="rating-main d-flex align-items-center mb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="mb-1"><a href="#">Rome, Italy</a></h4>
<p class="price mb-1">Per Person <span class="pink font-weight-bold">$1000</span> <del>$1100.00</del></p>
<a href="#"><ins>View Detail</ins></a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="explore-item box-shadow">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/trending/trending4.jpg') }}"/>
<div class="explore-item-content p-3 bg-white">
<div class="rating-main d-flex align-items-center mb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="mb-1"><a href="#">Toky, Japan</a></h4>
<p class="price mb-1">Per Person <span class="pink font-weight-bold">$1100</span> <del>$1200.00</del></p>
<a href="#"><ins>View Detail</ins></a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="explore-item box-shadow">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/trending/trending5.jpg') }}"/>
<div class="explore-item-content p-3 bg-white">
<div class="rating-main d-flex align-items-center mb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="mb-1"><a href="#">kathmandu, Nepal</a></h4>
<p class="price mb-1">Per Person <span class="pink font-weight-bold">$800</span> <del>$900.00</del></p>
<a href="#"><ins>View Detail</ins></a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="explore-item box-shadow">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/trending/trending6.jpg') }}"/>
<div class="explore-item-content p-3 bg-white">
<div class="rating-main d-flex align-items-center mb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="mb-1"><a href="#">New Delhi, India</a></h4>
<p class="price mb-1">Per Person <span class="pink font-weight-bold">$950</span> <del>$1000.00</del></p>
<a href="#"><ins>View Detail</ins></a>
</div>
</div>
</div>
<div class="col-lg-3 mb-4">
<div class="explore-item box-shadow">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/trending/trending7.jpg') }}"/>
<div class="explore-item-content p-3 bg-white">
<div class="rating-main d-flex align-items-center mb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="mb-1"><a href="#">Istambul, Turkey</a></h4>
<p class="price mb-1">Per Person <span class="pink font-weight-bold">$1300</span> <del>$1400.00</del></p>
<a href="#"><ins>View Detail</ins></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- explore-deals ends -->
<!-- top destination starts -->
<section class="comingsoon bg-navy overflow-hidden pb-9 h-auto" style="min-height: auto !important;">
<div class="container">
<div class="comingsoon-content text-center">
<div class="coming-title mb-3">
<h4 class="mb-0 white">Time Is Running Out</h4>
<h2 class="white m-0">Book <span class="pink">Your Ticket</span></h2>
<p class="white m-0">Travel has helped us to understand the meaning of life and it has helped us become better people. <br/>Each time we travel, we see the world with new eyes.</p>
</div>
<div class="coming-counter" data-date="2025-06-28 00:00:00">
<div class="counter-box"><span class="days"></span> Days</div>
<div class="counter-box"><span class="hours"></span> Hours</div>
<div class="counter-box"><span class="minutes"></span> Minutes</div>
<div class="counter-box"><span class="seconds"></span> Seconds</div>
</div>
</div>
</div>
<div id="particles-js"></div>
</section>
<!-- top destination ends -->
<!-- flight-list starts -->
<section class="flight-list pt-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Find Your <span>Flight Scheduled</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="flight-list">
<div class="flight-navtab text-center">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active white border-0 rounded-0" data-bs-toggle="tab" href="#schedule1">
                            Saturday <span class="d-block">Feb 15, 2025</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link white border-0 rounded-0" data-bs-toggle="tab" href="#schedule1">
                            Sunday <span class="d-block">Feb 16, 2025</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link white border-0 rounded-0" data-bs-toggle="tab" href="#schedule1">
                            Monday <span class="d-block">Feb 17, 2025</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link white border-0 rounded-0" data-bs-toggle="tab" href="#schedule1">
                            Tuesday <span class="d-block">Feb 18, 2025</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link white border-0 rounded-0" data-bs-toggle="tab" href="#schedule1">
                            Wednesday <span class="d-block">Feb 19, 2025</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link white border-0 rounded-0" data-bs-toggle="tab" href="#schedule1">
                            Thursday <span class="d-block">Feb 20, 2025</span>
</a>
</li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane fade show active" id="schedule1">
<div class="flight-full">
<div class="item mb-2">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-3 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_2.png') }}"/>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">18:30</h4>
<h3 class="mb-0 pink">New York</h3>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">02H 45M FLIGHT</p>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">7:30</h4>
<h3 class="mb-0 pink">California</h3>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,345</p>
<a class="nir-btn-black" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-3 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_4.png') }}"/>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">13:30</h4>
<h3 class="mb-0 pink">New Delhi</h3>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">04H 45M FLIGHT</p>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">5:30</h4>
<h3 class="mb-0 pink">Mumbai</h3>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,145</p>
<a class="nir-btn" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-3 col-md-3 col-sm-12">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_5.png') }}"/>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">14:30</h4>
<h3 class="mb-0 pink">Sydney</h3>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">04H 45M FLIGHT</p>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">8:30</h4>
<h3 class="mb-0 pink">Brisbane</h3>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$1,200</p>
<a class="nir-btn-black" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-3 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_4.png') }}"/>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">18:30</h4>
<h3 class="mb-0 pink">LA</h3>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">03H 50M FLIGHT</p>
</div>
</div>
<div class="col-lg-2 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">6:30</h4>
<h3 class="mb-0 pink">London</h3>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,050</p>
<a class="nir-btn-black" href="#">Book Now</a>
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
<!-- flight-list ends -->
<!-- Call to action starts -->
<section class="call-to-action flight-call pb-7">
<div class="call-main">
<div class="container">
<div class="action-content text-center w-75 mx-auto">
<h3 class="white mb-0">Find next place to visit</h3>
<h2 class="white call-name">Make Your Holidays More Happening</h2>
</div>
<div class="video-button text-center">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/flights/flight3.jpg') }}"/>
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
<a class="nir-btn-black" href="#">More About Us</a>
</div>
</div>
<div class="col-lg-6">
<div class="about-image">
<div class="row d-lg-flex align-items-center justify-content-between">
<div class="col-md-6"><img alt="" src="{{ asset('template/yatri_world/main-file/images/new-deal/deal6.jpg') }}"/></div>
<div class="col-md-6 mt-4"><img alt="" src="{{ asset('template/yatri_world/main-file/images/new-deal/deal7.jpg') }}"/></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- about-us ends -->
<!-- testomonial start -->
<section class="testimonial pb-6 border-t pt-9" style="background-image: url(images/testimonial.png)">
<div class="container">
<div class="section-title text-center pb-2 w-50 mx-auto">
<h2 class="m-0">What <span>People Say About Us</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="about-slider w-75 mx-auto">
<div class="item">
<div class="testimonial-item1">
<div class="author-info mb-2">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img1.jpg') }}"/></a>
<div class="author-title">
<h4 class="m-0 pink">Jared Erondu</h4>
<span>Supervisor</span>
</div>
</div>
<div class="details d-flex justify-content-between">
<p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
</div>
<i class="fa fa-quote-right"></i>
</div>
</div>
<div class="item">
<div class="testimonial-item1">
<div class="author-info mb-2">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img2.jpg') }}"/></a>
<div class="author-title">
<h4 class="m-0 yellow">Cadic Vegeta</h4>
<span>Director</span>
</div>
</div>
<div class="details d-flex justify-content-between">
<p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
</div>
<i class="fa fa-quote-right"></i>
</div>
</div>
</div>
</div>
</section>
<!-- testimonial ends -->
<!-- Discount action starts -->
<section class="discount-action p-0">
<div class="call-banner" style="background-image: url(images/bg/bg7.jpg);">
<div class="row d-flex align-items-center">
<div class="col-lg-6 p-0">
<div class="call-banner-inner text-center bg-blue">
<h4 class="white">25% OFF SALE</h4>
<h2 class="white mb-4">Best Holiday Packages For<span class="text-uppercase d-block">Honeymoon</span></h2>
<a class="nir-btn-black" href="#">Book Your Flight Now <i class="fa fa-arrow-right white ps-1"></i></a>
</div>
</div>
<div class="col-lg-6 p-0">
<div class="call-banner-inner text-left p-5">
<h4 class="white">24x7 Service Available</h4>
<h2 class="white mb-4">Call Now And Book Your Flight For Your Next Destination</h2>
<a class="nir-btn" href="#">Call For Booking <i class="fa fa-arrow-right white ps-1"></i></a>
</div>
</div>
</div>
</div>
<div class="overlay"></div>
</section>
<!-- Discount action Ends -->
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
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog9.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tour, Tourism, Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="pb-2 mb-2 border-b"><a href="#">The real voyage does not consist in seeking new landscapes</a></h4>
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
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog8.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tour, Tourism, Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="pb-2 mb-2 border-b"><a href="#">The real voyage does not consist in seeking new landscapes</a></h4>
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
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog7.jpg') }}"/>
</div>
<div class="news-list mt-2 border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Tour, Tourism, Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="pb-2 mb-2 border-b"><a href="#">The real voyage does not consist in seeking new landscapes</a></h4>
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
<!-- partners starts -->
<div class="partners bordernone pt-5 pb-5">
<div class="container">
<div class="dest-partner">
<div class="attract-slider">
<div class="slide mx-2">
<img alt="partners" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_5.png') }}"/>
</div>
<div class="slide mx-2">
<img alt="partners" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_2.png') }}"/>
</div>
<div class="slide mx-2">
<img alt="partners" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_3.png') }}"/>
</div>
<div class="slide mx-2">
<img alt="partners" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_4.png') }}"/>
</div>
<div class="slide mx-2">
<img alt="partners" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_5.png') }}"/>
</div>
<div class="slide mx-2">
<img alt="partners" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_2.png') }}"/>
</div>
<div class="slide mx-2">
<img alt="partners" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_3.png') }}"/>
</div>
<div class="slide mx-2">
<img alt="partners" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_4.png') }}"/>
</div>
<div class="slide mx-2">
<img alt="partners" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_3.png') }}"/>
</div>
</div>
</div>
</div>
</div>
<!-- partners ends -->
@endsection
