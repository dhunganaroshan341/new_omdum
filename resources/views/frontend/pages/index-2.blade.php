@extends('frontend.layout.main')

@section('content')
<!-- banner starts -->
<section class="banner overflow-hidden">
<div class="slider slider1">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/4.jpg)"></div>
<div class="swiper-content1 container">
<h4 class="white">Choose The Best Destination</h4>
<h1 class="white mb-4">Make Your Trip Fun And Memorable Where You Want</h1>
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
<div class="slide-image" style="background-image:url(images/slider/5.jpg)"></div>
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
<div class="slide-image" style="background-image:url(images/slider/9.jpg)"></div>
<div class="swiper-content1 container">
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
<!-- form main starts -->
<div class="form-main">
<div class="container">
<div class="form-content w-100">
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
<div class="form-group m-0">
<a class="nir-btn w-100" href="#"><i class="fa fa-search"></i> Check Availability</a>
</div>
</div>
</div>
</div>
</div>
<!-- form main ends -->
<!-- why us starts -->
<section class="why-us pt-10 pb-6">
<div class="container">
<div class="why-us-box pt-9">
<div class="row">
<div class="col-lg-3 col-md-6 mb-4">
<div class="why-us-item text-center">
<div class="why-us-icon mb-2">
<i class="flaticon-call pink"></i>
</div>
<div class="why-us-content">
<h4><a href="#">Advice &amp; Support</a></h4>
<p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours a day</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="why-us-item text-center">
<div class="why-us-icon mb-2">
<i class="flaticon-global pink"></i>
</div>
<div class="why-us-content">
<h4><a href="#">Air Ticketing</a></h4>
<p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours a day</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="why-us-item text-center">
<div class="why-us-icon mb-2">
<i class="flaticon-building pink"></i>
</div>
<div class="why-us-content">
<h4><a href="#">Hotel Services</a></h4>
<p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours a day</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="why-us-item text-center">
<div class="why-us-icon mb-2">
<i class="flaticon-location-pin pink"></i>
</div>
<div class="why-us-content">
<h4><a href="#">Tour Packages</a></h4>
<p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours a day</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- why us ends -->
<!-- about-us starts -->
<section class="about-us pb-0" style="background-image: url(images/bg/bg5.jpg);">
<div class="container">
<div class="about-image-box">
<div class="row">
<div class="col-lg-7">
<div class="about-content">
<h4 class="mb-1 white font-weight-normal">About Yatriiworld</h4>
<h2 class="white">We're Truely Dedicated To Make Your Travel Experience</h2>
<p class="mb-2 white">Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars. <br/>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
<div class="about-featured mb-0">
<ul>
<li class="white">Safety Travel System</li>
<li class="white">Budget-Friendly Tour</li>
<li class="white">Expert Trip Planning</li>
<li class="white">Fast Communication</li>
<li class="white">Right Solution &amp; Guide</li>
<li class="white">24/7 Customer Support</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-5">
<div class="about-image-desti mt-5">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination5.jpg') }}"/>
</div>
</div>
</div>
</div>
</div>
<div class="overlay"></div>
</section>
<!-- about-us ends -->
<!-- Fav destination Starts -->
<section class="trending destination pb-6 bg-grey pt-9">
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
<h4><a href="#">Nepal Special Tour</a></h4>
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
<h4><a href="#">Canada New Year Tour</a></h4>
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
<h4><a href="#">America Christmas Tour</a></h4>
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
<h4><a href="#">Nepal Weekend Tour</a></h4>
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
<h4><a href="#">Canada Weekend Tour</a></h4>
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
<h4><a href="#">America Weekend Tour</a></h4>
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
<h4><a href="#">Nepal Holidays Tour</a></h4>
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
<h4><a href="#">Canada Holidays Tour</a></h4>
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
<h4><a href="#">America Holidays Tour</a></h4>
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
<h4><a href="#">Nepal Special Tour</a></h4>
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
<h4><a href="#">Canada Special Tour</a></h4>
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
<h4><a href="#">America Special Tour</a></h4>
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
<section class="top-destination overflow-hidden bg-navy p-0">
<div class="container-fluid">
<div class="desti-inner">
<div class="row d-flex align-items-center">
<div class="col-lg-4 col-md-6 p-0">
<div class="desti-image bordernone">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination10.jpg') }}"/>
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
<a class="nir-btn" href="#">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 p-0">
<div class="desti-image bordernone">
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
<a class="nir-btn" href="#">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 p-0">
<div class="desti-image bordernone">
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
<a class="nir-btn" href="#">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 p-0">
<div class="desti-image bordernone">
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
<a class="nir-btn" href="#">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 p-0">
<div class="desti-image bordernone">
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
<a class="nir-btn" href="#">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 p-0">
<div class="desti-image bordernone">
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
<div class="col-lg-3 p-0">
<div class="desti-image bordernone">
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
<a class="nir-btn" href="#">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- top destination ends -->
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
<!-- Trending Starts -->
<section class="latest-tour pb-6 bg-lgrey pt-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Special <span>Offers</span> &amp; <span>Discount</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="tour-box">
<div class="team-slider">
<div class="tour-item mx-3">
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
<h3 class="mb-1"><a class="white" href="#">Hills and Beach Tour</a></h3>
<div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
<p class="white mb-0 me-"><i class="fa fa-clock white me-1"></i> 5 days</p>
<p class="white mb-0"><i class="fa fa-user-plus white me-1"></i> 51</p>
</div>
<p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
<a class="nir-btn" href="#" tabindex="0">View More</a>
</div>
<div class="tour-tag">
<span class="old-price white">$1449</span>
<span class="new-price white"> $900</span>
</div>
<div class="color-overlay"></div>
</div>
<div class="tour-item mx-3">
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
<h3 class="mb-1"><a class="white" href="#">Special Asia Tour</a></h3>
<div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
<p class="white mb-0 me-"><i class="fa fa-clock white me-1"></i> 5 days</p>
<p class="white mb-0"><i class="fa fa-user-plus white me-1"></i> 51</p>
</div>
<p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
<a class="nir-btn" href="#" tabindex="0">View More</a>
</div>
<div class="tour-tag">
<span class="new-price white"> $800</span>
</div>
<div class="color-overlay"></div>
</div>
<div class="tour-item mx-3">
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
<h3 class="mb-1"><a class="white" href="#">Couple &amp; Holidays Tour</a></h3>
<div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
<p class="white mb-0 me-"><i class="fa fa-clock white me-1"></i> 5 days</p>
<p class="white mb-0"><i class="fa fa-user-plus white me-1"></i> 51</p>
</div>
<p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
<a class="nir-btn" href="#" tabindex="0">View More</a>
</div>
<div class="tour-tag">
<span class="old-price white">$549</span>
<span class="new-price white"> $400</span>
</div>
<div class="color-overlay"></div>
</div>
<div class="tour-item mx-3">
<div class="tour-image">
<img alt="Image" src="{{ asset('template/yatri_world/main-file/images/destination/destination6.jpg') }}"/>
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
<span class="ms-2 white">26 Reviews</span>
</div>
<h3 class="mb-1"><a class="white" href="#">Hills and Beach Tour</a></h3>
<div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
<p class="white mb-0 me-"><i class="fa fa-clock white me-1"></i> 5 days</p>
<p class="white mb-0"><i class="fa fa-user-plus white me-1"></i> 51</p>
</div>
<p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
<a class="nir-btn" href="#" tabindex="0">View More</a>
</div>
<div class="tour-tag">
<span class="old-price white">$1449</span>
<span class="new-price white"> $900</span>
</div>
<div class="color-overlay"></div>
</div>
</div>
</div>
</div>
</section>
<!-- Trending Ends -->
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
<!-- News Starts -->
<section class="news pb-9 bg-lgrey pt-9">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0">Latest <span>Tips</span> &amp; <span>Articles</span></h2>
<p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="news-outer">
<div class="item-slider">
<div class="news-item mx-3">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/destination/destination6.jpg') }}"/>
<div class="color-overlay"></div>
</div>
<div class="news-content-over">
<div class="news-list border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="bordernone"><a class="" href="#">Take only memories, leave only footprints.</a></h4>
<a class="news-btn pink" href="#">Read More <i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="news-item mx-3 z-0">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/destination/destination7.jpg') }}"/>
<div class="color-overlay"></div>
</div>
<div class="news-content-over">
<div class="news-list border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="bordernone"><a class="" href="#">Not all those who wander are lost new landscapes.</a></h4>
<a class="news-btn pink" href="#">Read More <i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="news-item mx-3 z-0">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/destination/destination5.jpg') }}"/>
<div class="color-overlay"></div>
</div>
<div class="news-content-over">
<div class="news-list border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="bordernone"><a class="" href="#">Life is either a daring adventure but in having new eyes.</a></h4>
<a class="news-btn pink" href="#">Read More <i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="news-item mx-3 z-0">
<div class="news-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/destination/destination3.jpg') }}"/>
<div class="color-overlay"></div>
</div>
<div class="news-content-over">
<div class="news-list border-b pb-2 mb-2">
<ul>
<li><a class="pe-3" href=""><i class="fa fa-calendar pink pe-1"></i> 4th AUg 2020 </a></li>
<li><a class="pe-3" href=""><i class="fa fa-comment pink pe-1"></i> 3</a></li>
<li><a class="" href=""><i class="fa fa-tag pink pe-1"></i> Travel</a></li>
</ul>
</div>
<div class="news-content mt-2">
<h4 class="bordernone"><a class="" href="#">Mountains is always right destination.</a></h4>
<a class="news-btn pink" href="#">Read More <i class="fa fa-arrow-right"></i></a>
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
<a class="nir-btn-black" href="#">Let's talk</a>
</div>
</div>
<!-- cta-horizon Ends -->
@endsection
