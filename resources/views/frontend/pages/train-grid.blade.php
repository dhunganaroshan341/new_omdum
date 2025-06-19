@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Train Grid</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Train Grid</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- blog starts -->
<section class="blog destination-b trending pb-6">
<div class="container">
<div class="row gx-lg-5">
<div class="col-lg-8 mb-4">
<div class="trend-box">
<div class="list-results d-flex align-items-center justify-content-between">
<div class="list-results-sort">
<p class="m-0">Showing 1-5 of 80 results</p>
</div>
<div class="click-menu d-flex align-items-center justify-content-between">
<div class="change-list me-2"><a href="train-list.html"><i class="fa fa-bars"></i></a></div>
<div class="change-grid f-active"><a href="train-grid.html"><i class="fa fa-th"></i></a></div>
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
<div class="row">
<div class="col-md-6 mb-4">
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
<div class="col-md-6 mb-4">
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
<div class="col-md-6 mb-4">
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
<div class="col-md-6 mb-4">
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
<div class="col-md-6 mb-4">
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
<div class="col-md-6 mb-4">
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
<div class="col-md-6 mb-4">
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
<div class="col-md-6 mb-4">
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
</div>
<div class="text-center">
<a class="nir-btn" href="#">Load More <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 mb-4">
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
<h3>Price Range($)</h3>
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
<div class="detail-title">
<h3>Connection</h3>
</div>
<div class="sidebar-content">
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Offers without connection (13)</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>Offers with connection (88)</label>
</div>
</div>
</div>
</div>
<div class="sidebar-item">
<h3>Categories</h3>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>SEA TOURS (785)</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>ROMANTIC TOURS (125)</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>FOOD TOURS (85)</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>HONEYMOON TOURS (70)</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>MOUNTAIN TOURS (159)</label>
</div>
</div>
</div>
<div class="sidebar-item">
<h3>Car Type</h3>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Business<span class="number">749</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>First Class<span class="number">630</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Economy<span class="number">58</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Premium Economy<span class="number">29</span></label>
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
@endsection
