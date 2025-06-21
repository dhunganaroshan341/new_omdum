@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Grid Leftsidebar</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Destination Grid Leftsidebar</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- blog starts -->
<section class="blog trending destination-b pb-6">
<div class="container">
<div class="row gx-lg-5">
<div class="col-lg-8 mb-4 order-1 order-lg-2">
<div class="trend-box">
<div class="row">
<div class="col-lg-12">
<div class="list-results d-flex align-items-center justify-content-between">
<div class="list-results-sort">
<p class="m-0">Showing 1-5 of 80 results</p>
</div>
<div class="click-menu d-flex align-items-center justify-content-between">
<div class="change-list me-2"><a href="#"><i class="fa fa-bars"></i></a></div>
<div class="change-grid f-active"><a href="#"><i class="fa fa-th"></i></a></div>
<div class="sortby d-flex align-items-center justify-content-between ms-2">
<select class="niceSelect">
<option value="1">Sort By</option>
<option value="2">Average rating</option>
<option value="3">Price: low to high</option>
<option value="4">Price: high to low</option>
</select>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending8.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating pb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4><a href="#">Nepal Special Tour</a></h4>
<p class="mb-0 pink"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Nepal.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between bg-navy">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<div class="ribbon ribbon-top-left"><span>10% OFF</span></div>
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending11.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating pb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4><a href="#">Paris in Love</a></h4>
<p class="mb-0 pink"><i class="fa fa-eye me-1"></i> 255 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> France.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between bg-navy">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending2.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating pb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4><a href="#">Egyptian Voyager</a></h4>
<p class="mb-0 pink"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Eygpt.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between bg-navy">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
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
<span class="ms-2">58 Reviews</span>
</div>
<h4><a href="#">Empire Prestige Causeway Bay</a></h4>
<p class="mb-0 pink"><i class="fa fa-eye me-1"></i> 255 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Thailand.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between bg-navy">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending4.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating pb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4><a href="#">Bali &amp; Indonesia Tour</a></h4>
<p class="mb-0 pink"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Indonesia.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between bg-navy">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
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
<span class="ms-2">58 Reviews</span>
</div>
<h4><a href="#">Madagascar Safari</a></h4>
<p class="mb-0 pink"><i class="fa fa-eye me-1"></i> 255 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Mexico.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between bg-navy">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
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
<span class="ms-2">65 Reviews</span>
</div>
<h4><a href="#">Dazzling Dubai</a></h4>
<p class="mb-0 pink"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Dubai.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between bg-navy">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
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
<span class="ms-2">51 Reviews</span>
</div>
<h4><a href="#">The Spanish Riviera</a></h4>
<p class="mb-0 pink"><i class="fa fa-eye me-1"></i> 255 Visiting Places <i class="fa fa-map-marker me-1 ms-3"></i> Spain.</p>
</div>
<div class="trend-last-main">
<p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
<div class="trend-last d-flex align-items-center justify-content-between bg-navy">
<p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price white mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="text-center">
<a class="nir-btn" href="#">Load More <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mb-4 order-2 order-lg-1">
<div class="sidebar-sticky">
<div class="sidebar-item mb-4">
<form class="form-content">
<h4 class="title white">Find The Places</h4>
<div class="row gy-4">
<div class="col-lg-12">
<div class="form-group">
<label class="white">Your Destination</label>
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
<div class="col-lg-6">
<div class="form-group">
<label class="white">Check In</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range0" placeholder="yyyy-mmm-dd" type="text"/>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="white">Check Out</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range1" placeholder="yyyy-mm-dd" type="text"/>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="white">Adult</label>
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
<div class="col-lg-6">
<div class="form-group">
<label class="white">Children</label>
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
<div class="col-lg-12">
<div class="form-group mb-0">
<a class="nir-btn w-100" href="#"><i class="fa fa-search"></i> Check Availability</a>
</div>
</div>
</div>
</form>
</div>
<div class="list-sidebar">
<div class="sidebar-item">
<h4>Services</h4>
<div class="pretty p-default p-thick p-pulse mar-bottom-15">
<input type="checkbox"/>
<div class="state p-warning-o">
<label>24/7 Reception</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse mar-bottom-15">
<input type="checkbox"/>
<div class="state p-warning-o">
<label>Parking</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse mar-bottom-15">
<input type="checkbox"/>
<div class="state p-warning-o">
<label>Bar</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse mar-bottom-15">
<input type="checkbox"/>
<div class="state p-warning-o">
<label>Restaurant</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse mar-bottom-15">
<input type="checkbox"/>
<div class="state p-warning-o">
<label>Satellite Television</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse mar-bottom-15">
<input type="checkbox"/>
<div class="state p-warning-o">
<label>Lift/ELevator</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state p-warning-o">
<label>Luggage Storage </label>
</div>
</div>
</div>
<div class="sidebar-item">
<div class="map-box">
<i class="fa fa-map-marker"></i>
<a href="#">Show on Map</a>
</div>
</div>
<div class="sidebar-item">
<h4>Star Rating</h4>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
<span class="star-rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
<span class="star-rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
<span class="star-rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
<span class="star-rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
<span class="star-rating">
<span class="fa fa-star checked"></span>
</span>
</label>
</div>
</div>
</div>
<div class="sidebar-item">
<h4>Price Range($)</h4>
<div class="range-slider">
<div aria-disabled="false" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-max="2000" data-max-name="max_price" data-min="0" data-min-name="min_price" data-unit="$">
<span class="min-value">0 $</span>
<span class="max-value">2000 $</span>
<div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="sidebar-item">
<h4>City</h4>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
                                            Amsterdam<span class="number">749</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>
                                            Rotterdam<span class="number">630</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
                                            Copenghan<span class="number">58</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
                                            New Delhi<span class="number">29</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
                                            New York<span class="number">29</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
                                            Kathmandu<span class="number">29</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
                                            Brisbane<span class="number">29</span>
</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>
                                            Tokyo<span class="number">29</span>
</label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- blog Ends -->
<!-- top destination starts -->
<section class="top-destination overflow-hidden">
<div class="container">
<div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
<h2 class="m-0 white">Related <span>Tour Packages</span></h2>
<p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
</div>
<div class="desti-inner">
<div class="row d-flex align-items-center">
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
<h4 class="white mb-1">New York Tour</h4>
<div class="trend-last-main">
<div class="trend-last">
<p class="mb-1 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price pink mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="#">
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
<h4 class="white mb-1">Armania Tour</h4>
<div class="trend-last-main">
<div class="trend-last">
<p class="mb-1 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price pink mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="#">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 p-1">
<div class="desti-image">
<img alt="desti" src="{{ asset('template/yatri_world/main-file/images/destination/destination10.jpg') }}"/>
<div class="desti-content">
<div class="rating mb-1">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4 class="white mb-1">London Tour</h4>
<div class="trend-last-main">
<div class="trend-last">
<p class="mb-1 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price pink mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="#">
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
<h4 class="white mb-1">Manchester Tour</h4>
<div class="trend-last-main">
<div class="trend-last">
<p class="mb-1 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price pink mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="#">
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
<h4 class="white mb-1">kathmandu Tour</h4>
<div class="trend-last-main">
<div class="trend-last">
<p class="mb-1 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price pink mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="#">
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
<h4 class="white mb-1">Tokyo Tour</h4>
<div class="trend-last-main">
<div class="trend-last">
<p class="mb-1 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price pink mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
</div>
<div class="desti-overlay">
<a class="nir-btn" href="#">
<span class="white">Book Now</span>
<i class="fa fa-arrow-right white ps-1"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 p-1">
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
<h4 class="white mb-1">Norwich Tour</h4>
<div class="trend-last-main">
<div class="trend-last">
<p class="mb-1 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 3 days &amp; 2 night</p>
<div class="trend-price">
<p class="price pink mb-0">From <span>$350.00</span></p>
</div>
</div>
</div>
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
@endsection
