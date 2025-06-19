@extends('frontend.layout.main')

@section('content')
<!-- banner starts -->
<section class="banner overflow-hidden px-4">
<div class="slider slider1">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/11.jpg)"></div>
<div class="swiper-content1 container">
<h4 class="white">Choose The Best Destination</h4>
<h1 class="white mb-4">Make Your Trip Fun And Memorable Where You Want</h1>
<a class="per-btn" href="booking.html">
<span class="white">Book A Room</span>
<i class="fa fa-arrow-right white"></i>
</a>
</div>
<div class="dot-overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/12.jpg)"></div>
<div class="swiper-content1 container">
<h4 class="white">Feel Free To Live</h4>
<h1 class="white mb-4">Discover Your Beautiful <span>Hotel</span> With Us</h1>
<a class="per-btn" href="hotel-booking.html">
<span class="white">Contact Us</span>
<i class="fa fa-arrow-right white"></i>
</a>
</div>
<div class="dot-overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/13.jpg)"></div>
<div class="swiper-content1 container">
<h4 class="white">Hotel For Your Kids</h4>
<h1 class="white mb-4"><span>Sensation Ice Hotel</span> Is Coming For Kids</h1>
<a class="per-btn" href="hotel-booking.htmls">
<span class="white">Read More</span>
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
<!-- form main starts -->
<div class="form-main">
<div class="container">
<div class="form-content w-100">
<h3 class="form-title text-center d-inline white">Find The Best Hotels</h3>
<div class="d-lg-flex align-items-center justify-content-between">
<div class="form-group pe-4 m-0">
<div class="input-box">
<i class="fa fa-map-marker"></i>
<select class="niceSelect">
<option value="1">Your Hotels</option>
<option value="2">Barbary</option>
<option value="3">Franchisco</option>
<option value="4">Hayaatt</option>
<option value="5">Dubrin</option>
</select>
</div>
</div>
<div class="form-group pe-4 m-0">
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range0" placeholder="Check In" type="text"/>
</div>
</div>
<div class="form-group pe-4 m-0">
<div class="input-box">
<i class="fa fa-calendar"></i>
<input id="date-range1" placeholder="Check Out" type="text"/>
</div>
</div>
<div class="form-group pe-4 m-0">
<div class="input-box">
<i class="fa fa-users"></i>
<select class="niceSelect">
<option value="1">Person</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>
<div class="form-group m-0">
<a class="nir-btn w-100" href="#"><i class="fa fa-search"></i> Check Availability</a>
</div>
</div>
</div>
</div>
</div>
<!-- form main ends -->
<!-- about-us starts -->
<section class="about-us">
<div class="container">
<div class="about-image-box pt-9">
<div class="row">
<div class="col-lg-7">
<div class="about-content">
<h4 class="mb-2 font-weight-normal bg-pink white py-2 px-4 d-inline-block">Welcome To Yatriiworld Hotel</h4>
<h2 class="navy">We're Truely Dedicated To Make Your Travel Experience</h2>
<p class="mb-2">Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars. <br/>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
<div class="about-featured mb-0">
<ul>
<li>Safety Hotel System</li>
<li>Budget-Friendly Tour</li>
<li>Expert Hotel Planning</li>
<li>Fast Communication</li>
<li>Right Solution &amp; Guide</li>
<li>24/7 Customer Support</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-5">
<div class="about-image-desti m-0">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination3.jpg') }}"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- about-us ends -->
<!-- top destination starts -->
<section class="top-destination overflow-hidden pt-9">
<div class="container">
<div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
<h4 class="font-weight-normal mb-0 white">Best Hotels</h4>
<h2 class="m-0 white">Choose Your <span>Best Country</span></h2>
</div>
<div class="desti-inner">
<div class="row d-flex align-items-center">
<div class="col-lg-4 col-md-6 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination9.jpg') }}"/>
<div class="desti-content hotel-content d-flex align-items-center justify-content-between bg-white py-2 px-3">
<div class="desti-content-left">
<h4 class="mb-0 navy">Mexico</h4>
<span>11 Jun - 22 Jul</span>
</div>
<div class="desti-content-left">
<h4 class="mb-0 pink">$835</h4>
<span>Per Day</span>
</div>
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
<div class="desti-content hotel-content d-flex align-items-center justify-content-between bg-white py-2 px-3">
<div class="desti-content-left">
<h4 class="mb-0 navy">South Korea</h4>
<span>11 Jun - 22 Jul</span>
</div>
<div class="desti-content-left">
<h4 class="mb-0 pink">$650</h4>
<span>Per Day</span>
</div>
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
<div class="desti-content hotel-content d-flex align-items-center justify-content-between bg-white py-2 px-3">
<div class="desti-content-left">
<h4 class="mb-0 navy">Albania</h4>
<span>11 Jun - 22 Jul</span>
</div>
<div class="desti-content-left">
<h4 class="mb-0 pink">$700</h4>
<span>Per Day</span>
</div>
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
<div class="desti-content hotel-content d-flex align-items-center justify-content-between bg-white py-2 px-3">
<div class="desti-content-left">
<h4 class="mb-0 navy">England</h4>
<span>11 Jun - 22 Jul</span>
</div>
<div class="desti-content-left">
<h4 class="mb-0 pink">$930</h4>
<span>Per Day</span>
</div>
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
<div class="desti-content hotel-content d-flex align-items-center justify-content-between bg-white py-2 px-3">
<div class="desti-content-left">
<h4 class="mb-0 navy">Nepal</h4>
<span>11 Jun - 22 Jul</span>
</div>
<div class="desti-content-left">
<h4 class="mb-0 pink">$480</h4>
<span>Per Day</span>
</div>
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
<div class="desti-content hotel-content d-flex align-items-center justify-content-between bg-white py-2 px-3">
<div class="desti-content-left">
<h4 class="mb-0 navy">Germany</h4>
<span>11 Jun - 22 Jul</span>
</div>
<div class="desti-content-left">
<h4 class="mb-0 pink">$760</h4>
<span>Per Day</span>
</div>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="booking.html">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination9.jpg') }}"/>
<div class="desti-content hotel-content d-flex align-items-center justify-content-between bg-white py-2 px-3">
<div class="desti-content-left">
<h4 class="mb-0 navy">Japan</h4>
<span>11 Jun - 22 Jul</span>
</div>
<div class="desti-content-left">
<h4 class="mb-0 pink">$650</h4>
<span>Per Day</span>
</div>
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
<!-- Fav destination Starts -->
<section class="trending destination pb-6 pt-0">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h4 class="mb-0 font-weight-normal">Rooms</h4>
<h2 class="m-0">Discover Our <span>Best Rooms</span></h2>
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
<a class="nav-link" data-bs-toggle="tab" href="#historical">Holidays</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#weekend">Special Tour</a>
</li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane fade in active" id="historical">
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/rooms/list1.jpg') }}"/>
<div class="deal-item bg-pink py-1 px-2">
<p class="mb-0 white"><i class="fa fa-map-marker me-2"></i> Greater London, United Kingdom</p>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<span class="rating bg-navy px-2 white py-1">4.5/5</span>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="bordernone pt-1"><a href="hotel-detail.html">Empire Prestige Causeway Bay</a></h4>
<p class="mb-2">
                                                From: <span class="font-weight-bold pink">£350.00 </span>/ Night
                                            </p>
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/rooms/list2.jpg') }}"/>
<div class="deal-item bg-pink py-1 px-2">
<p class="mb-0 white"><i class="fa fa-map-marker me-2"></i> Lyuishen Tokya, Japan</p>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<span class="rating bg-navy px-2 white py-1">4.5/5</span>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="bordernone pt-1"><a href="hotel-detail.html">Park Avenue Baker Street</a></h4>
<p class="mb-2">
                                                From: <span class="font-weight-bold pink">£450.00 </span>/ Night
                                            </p>
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/rooms/list3.jpg') }}"/>
<div class="deal-item bg-pink py-1 px-2">
<p class="mb-0 white"><i class="fa fa-map-marker me-2"></i> Baneshwor Kathmandu, Nepal</p>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<span class="rating bg-navy px-2 white py-1">4.5/5</span>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="bordernone pt-1"><a href="hotel-detail.html">New York Marriott Downtown</a></h4>
<p class="mb-2">
                                                From: <span class="font-weight-bold pink">£620.00 </span>/ Night
                                            </p>
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
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
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/rooms/list4.jpg') }}"/>
<div class="deal-item bg-pink py-1 px-2">
<p class="mb-0 white"><i class="fa fa-map-marker me-2"></i> Greater London, United Kingdom</p>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<span class="rating bg-navy px-2 white py-1">4.5/5</span>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="bordernone pt-1"><a href="hotel-detail.html">Empire Prestige Causeway Bay</a></h4>
<p class="mb-2">
                                                From: <span class="font-weight-bold pink">£350.00 </span>/ Night
                                            </p>
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/rooms/list5.jpg') }}"/>
<div class="deal-item bg-pink py-1 px-2">
<p class="mb-0 white"><i class="fa fa-map-marker me-2"></i> Lyuishen Tokya, Japan</p>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<span class="rating bg-navy px-2 white py-1">4.5/5</span>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="bordernone pt-1"><a href="hotel-detail.html">Park Avenue Baker Street</a></h4>
<p class="mb-2">
                                                From: <span class="font-weight-bold pink">£450.00 </span>/ Night
                                            </p>
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/rooms/list6.jpg') }}"/>
<div class="deal-item bg-pink py-1 px-2">
<p class="mb-0 white"><i class="fa fa-map-marker me-2"></i> Baneshwor Kathmandu, Nepal</p>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<span class="rating bg-navy px-2 white py-1">4.5/5</span>
<span class="ms-2">38 Reviews</span>
</div>
<h4 class="bordernone pt-1"><a href="hotel-detail.html">New York Marriott Downtown</a></h4>
<p class="mb-2">
                                                From: <span class="font-weight-bold pink">£620.00 </span>/ Night
                                            </p>
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
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
<section class="call-to-action call-to-action1 pb-6 pt-10" style="background-image:url(images/slider/11.jpg)">
<div class="call-main">
<div class="container">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg-6 mb-4">
<div class="action-content">
<h3 class="white mb-0 text-uppercase">Find next place to visit</h3>
<h2 class="white call-name">EXPLORE THE WORLD</h2>
<p class="white mb-4">There are many variations of passages of. Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look.</p>
<a class="nir-btn" href="hotel-list.html">Go Explore <i class="fa fa-arrow-right"></i></a>
</div>
</div>
<div class="col-lg-6 mb-4">
<div class="video-button">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/slider/12.jpg') }}"/>
<div class="call-button text-center">
<button class="play-btn js-video-button" data-channel="vimeo" data-video-id="152879427" type="button">
<i class="fa fa-play"></i>
</button>
</div>
<div class="video-figure"></div>
</div>
</div>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- testomonial start -->
<section class="testimonial pb-6 pt-9" style="background-image: url(images/testimonial.png)">
<div class="container">
<div class="section-title text-center pb-2 w-50 mx-auto">
<h4 class="font-weight-normal mb-0">Our Testimonials</h4>
<h2 class="m-0">What <span>People Say About Us</span></h2>
</div>
<div class="review-slider1 w-75 mx-auto">
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
<div class="item">
<div class="testimonial-item1">
<div class="author-info mb-2">
<a href="#"><img alt="" src="{{ asset('template/yatri_world/main-file/images/testimonial/img3.jpg') }}"/></a>
<div class="author-title">
<h4 class="m-0 yellow">Roland Shorte</h4>
<span>Chairman</span>
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
<!-- News Starts -->
<section class="news pb-6 bg-grey pt-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h4 class="font-weight-normal mb-0">Blog Posts</h4>
<h2 class="m-0">Our Latest <span>News &amp; Blogs</span></h2>
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
<h4 class="pb-2 mb-2 border-b"><a href="blog-single.html">The Best 17 places you cannot ignore in Paris</a></h4>
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
<h4 class="pb-2 mb-2 border-b"><a href="blog-single.html">Be Careful About This, When You Are In Snow</a></h4>
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
<h4 class="pb-2 mb-2 border-b"><a href="blog-single.html">Things You Must Need To See While You’re In Dubai</a></h4>
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
<!-- cta-horizon starts -->
<div class="cta-horizon bg-blue pt-4 pb-4">
<div class="container d-md-flex align-items-center justify-content-between">
<h4 class="mb-0 white">Didn't find the service suite you! Need a custom service?</h4>
<a class="nir-btn-black" href="contact.html">Let's talk</a>
</div>
</div>
<!-- cta-horizon Ends -->
@endsection
