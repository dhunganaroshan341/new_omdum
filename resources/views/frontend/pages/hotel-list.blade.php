@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Hotel List</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Hotel List</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- blog starts -->
<section class="blog destination-b pb-6">
<div class="container">
<div class="row gx-lg-5">
<div class="col-lg-8 mb-4">
<div class="trend-box">
<div class="list-results">
<div class="d-flex justify-content-between align-items-center mb-2 border-b pb-2">
<h3 class="mb-0">London: 3292 hotels found</h3>
<div class="click-menu d-flex align-items-center justify-content-between">
<div class="change-list f-active me-2"><a href="hotel-list.html"><i class="fa fa-bars"></i></a></div>
<div class="change-grid"><a href="hotel-grid.html"><i class="fa fa-th"></i></a></div>
</div>
</div>
<div class="list-results-sort d-md-flex align-items-center">
<p class="m-0"><a class="me-2" href="#">Recommended</a></p>
<div class="form-group m-0 me-2 my-1">
<div class="input-box">
<select class="niceSelect">
<option value="1">Price</option>
<option value="2">$50-$100</option>
<option value="3">$101-$150</option>
<option value="4">$151-$200</option>
<option value="5">$2010-$250</option>
</select>
</div>
</div>
<div class="sortby float-right d-md-flex align-items-center">
<div class="form-group m-0 me-2 my-1">
<div class="input-box">
<select class="niceSelect w-100">
<option value="1">Star</option>
<option value="2">One</option>
<option value="3">Two</option>
<option value="4">Three</option>
<option value="5">Four</option>
<option value="5">Five</option>
</select>
</div>
</div>
<select class="niceSelect my-1">
<option value="1">Sort By</option>
<option value="2">Average rating</option>
<option value="3">Price: low to high</option>
<option value="4">Price: high to low</option>
</select>
</div>
</div>
</div>
<div class="blog-full d-flex justify-content-around mb-4">
<div class="row w-100">
<div class="col-lg-5 col-md-4 blog-height">
<div class="blog-image">
<a href="hotel-detail.html" style="background-image: url(images/rooms/list3.jpg);"></a>
</div>
</div>
<div class="col-lg-7 col-md-8">
<div class="trend-content-main">
<div class="trend-content pt-2 pb-2">
<div class="pb-1 d-flex align-items-center justify-content-between">
<div class="rating">
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
</div>
<a href="#"><i class="flaticon-like"></i></a>
</div>
<h3 class="mb-1"><a href="hotel-detail.html">Empire Prestige Causeway Bay</a></h3>
<div class="mb-2">
<i class="icon fa fa-map-marker-alt me-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
<span class="text-primary font-size-14">View on map</span>
</div>
<div class="rating border-b pb-1 mb-1">
<p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
</div>
<div class="trend-last-main">
<div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-2">
<span>Breakfast</span>
<span>Free Cancellation</span>
<span>Pay at the hotel</span>
</div>
</div>
<div class="trend-daily">
<h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="blog-full d-flex justify-content-around mb-4">
<div class="row w-100 flex-row-reverse">
<div class="col-lg-5 col-md-4 blog-height">
<div class="blog-image">
<a href="hotel-detail.html" style="background-image: url(images/rooms/list1.jpg);"></a>
</div>
</div>
<div class="col-lg-7 col-md-8">
<div class="trend-content-main">
<div class="pb-1 d-flex align-items-center justify-content-between">
<div class="rating">
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
</div>
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-content pt-2 pb-2 text-right">
<h3 class="mb-2"><a href="hotel-detail.html">Pininfarina Resort</a></h3>
<div class="mb-2">
<i class="icon fa fa-map-marker-alt me-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
<span class="text-primary font-size-14">View on map</span>
</div>
<div class="rating border-b pb-1 mb-1">
<p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
</div>
<div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-2">
<span>Breakfast</span>
<span>Free Cancellation</span>
<span>Pay at the hotel</span>
</div>
<div class="trend-daily">
<h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="blog-full d-flex justify-content-around mb-4">
<div class="row w-100">
<div class="col-lg-5 col-md-4 blog-height">
<div class="blog-image">
<a href="hotel-detail.html" style="background-image: url(images/rooms/list4.jpg);"></a>
</div>
</div>
<div class="col-lg-7 col-md-8">
<div class="trend-content-main">
<div class="pb-1 d-flex align-items-center justify-content-between">
<div class="rating">
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
</div>
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-content">
<h3 class="mb-2"><a href="hotel-detail.html">Bentley Super Hotel</a></h3>
<div class="mb-2">
<i class="icon fa fa-map-marker-alt me-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
<span class="text-primary font-size-14">View on map</span>
</div>
<div class="rating border-b pb-1 mb-1">
<p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
</div>
<div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
<span>Breakfast</span>
<span>Free Cancellation</span>
<span>Pay at the hotel</span>
</div>
<div class="trend-daily">
<h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="blog-full d-flex justify-content-around mb-4">
<div class="row w-100 flex-row-reverse">
<div class="col-lg-5 col-md-4 blog-height">
<div class="blog-image">
<a href="hotel-detail.html" style="background-image: url(images/rooms/list2.jpg);"></a>
</div>
</div>
<div class="col-lg-7 col-md-8">
<div class="trend-content-main">
<div class="pb-1 d-flex align-items-center justify-content-between">
<div class="rating">
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
</div>
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-content pt-2 pb-2 text-right">
<h3 class="mb-2"><a href="hotel-detail.html">White Palace Hotel</a></h3>
<div class="mb-2">
<i class="icon fa fa-map-marker-alt me-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
<span class="text-primary font-size-14">View on map</span>
</div>
<div class="rating border-b pb-1 mb-1">
<p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
</div>
<div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
<span>Breakfast</span>
<span>Free Cancellation</span>
<span>Pay at the hotel</span>
</div>
<div class="trend-daily">
<h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="blog-full d-flex justify-content-around mb-4">
<div class="row w-100">
<div class="col-lg-5 col-md-4 blog-height">
<div class="blog-image">
<a href="hotel-detail.html" style="background-image: url(images/rooms/list6.jpg);"></a>
</div>
</div>
<div class="col-lg-7 col-md-8">
<div class="trend-content-main">
<div class="pb-1 d-flex align-items-center justify-content-between">
<div class="rating">
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
</div>
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-content">
<h3 class="mb-2"><a href="hotel-detail.html">Hyatt Regional Hotel</a></h3>
<div class="mb-2">
<i class="icon fa fa-map-marker-alt me-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
<span class="text-primary font-size-14">View on map</span>
</div>
<div class="rating border-b pb-1 mb-1">
<p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
</div>
<div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
<span>Breakfast</span>
<span>Free Cancellation</span>
<span>Pay at the hotel</span>
</div>
<div class="trend-daily">
<h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="blog-full d-flex justify-content-around mb-4">
<div class="row w-100 flex-row-reverse">
<div class="col-lg-5 col-md-4 blog-height">
<div class="blog-image">
<a href="hotel-detail.html" style="background-image: url(images/rooms/list5.jpg);"></a>
</div>
</div>
<div class="col-lg-7 col-md-8">
<div class="trend-content-main">
<div class="pb-1 d-flex align-items-center justify-content-between">
<div class="rating">
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
</div>
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-content pb-2 text-right">
<div class="pb-1 d-flex align-items-center justify-content-between">
<div class="rating">
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
</div>
<a href="#"><i class="flaticon-like"></i></a>
</div>
<h3 class="mb-2"><a href="hotel-detail.html">Park Avenue Baker Street</a></h3>
<div class="mb-2">
<i class="icon fa fa-map-marker-alt me-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
<span class="text-primary font-size-14">View on map</span>
</div>
<div class="rating border-b pb-1 mb-1">
<p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
</div>
<div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
<span>Breakfast</span>
<span>Free Cancellation</span>
<span>Pay at the hotel</span>
</div>
<div class="trend-daily">
<h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="blog-full d-flex justify-content-around mb-4">
<div class="row w-100">
<div class="col-lg-5 col-md-4 blog-height">
<div class="blog-image">
<a href="hotel-detail.html" style="background-image: url(images/rooms/list7.jpg);"></a>
</div>
</div>
<div class="col-lg-7 col-md-8">
<div class="trend-content-main">
<div class="pb-1 d-flex align-items-center justify-content-between">
<div class="rating">
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
<small class="fas fa-star pink"></small>
</div>
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-content">
<h3 class="mb-2"><a href="hotel-detail.html">New Road Hotel</a></h3>
<div class="mb-2">
<i class="icon fa fa-map-marker-alt me-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
<span class="text-primary font-size-14">View on map</span>
</div>
<div class="rating border-b pb-1 mb-1">
<p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
</div>
<div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
<span>Breakfast</span>
<span>Free Cancellation</span>
<span>Pay at the hotel</span>
</div>
<div class="trend-daily">
<h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
</div>
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
<label class="white">Destination or Hotel Name</label>
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
<div class="col-lg-12">
<div class="form-group">
<label class="white">Rooms and Guests</label>
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
<a href="#"><img alt="map" class="w-100" src="{{ asset('template/yatri_world/main-file/images/map.jpg') }}"/></a>
</div>
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
<h3>Meals</h3>
</div>
<div class="sidebar-content">
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Breakfast Included (213)</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>All-inclusive (288)</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>Breakfast &amp; dinner included (158)</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>Kitchen facilities (120)</label>
</div>
</div>
</div>
</div>
<div class="sidebar-item">
<h3>Facilities</h3>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Parking</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>Restaurant</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Pet Friendly</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Room Services</label>
</div>
</div>
</div>
<div class="sidebar-item">
<h3>Property Type</h3>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Hotels<span class="number">749</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>Apartments<span class="number">630</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Breakfast &amp; Bed<span class="number">58</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Resorts<span class="number">29</span></label>
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
