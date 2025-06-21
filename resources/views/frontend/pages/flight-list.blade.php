@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Flight List</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Flight List</li>
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
<div class="list-results d-flex align-items-center justify-content-between">
<div class="list-results-sort">
<p class="m-0">Showing 1-5 of 80 results</p>
</div>
<div class="click-menu d-flex align-items-center justify-content-between">
<div class="change-list f-active me-2"><a href="#"><i class="fa fa-bars"></i></a></div>
<div class="change-grid"><a href="#"><i class="fa fa-th"></i></a></div>
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
<div class="flight-list">
<div class="flight-navtab text-center mb-2">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active white border-0 rounded-0" data-bs-toggle="tab" href="#schedule1">
																	Saturday <span class="d-block">Feb 15, 2025</span>
</a>s
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
</ul>
</div>
<div class="tab-content">
<div class="tab-pane fade in active" id="schedule1">
<div class="flight-full">
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_2.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">18:30</h4>
<h4 class="mb-0 pink">New York</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">02H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">7:30</h4>
<h4 class="mb-0 pink">California</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,345</p>
<a class="nir-btn-black" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_4.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">13:30</h4>
<h4 class="mb-0 pink">New Delhi</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">04H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">5:30</h4>
<h4 class="mb-0 pink">Mumbai</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,145</p>
<a class="nir-btn">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_5.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">14:30</h4>
<h4 class="mb-0 pink">Sydney</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">04H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">8:30</h4>
<h4 class="mb-0 pink">Brisbane</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$1,200</p>
<a class="nir-btn-black" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_2.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">18:30</h4>
<h4 class="mb-0 pink">New York</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">02H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">7:30</h4>
<h4 class="mb-0 pink">California</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,345</p>
<a class="nir-btn-black" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_4.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">13:30</h4>
<h4 class="mb-0 pink">New Delhi</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">04H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">5:30</h4>
<h4 class="mb-0 pink">Mumbai</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,145</p>
<a class="nir-btn">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_5.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">14:30</h4>
<h4 class="mb-0 pink">Sydney</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">04H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">8:30</h4>
<h4 class="mb-0 pink">Brisbane</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$1,200</p>
<a class="nir-btn-black" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_2.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">18:30</h4>
<h4 class="mb-0 pink">New York</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">02H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">7:30</h4>
<h4 class="mb-0 pink">California</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,345</p>
<a class="nir-btn-black" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_4.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">13:30</h4>
<h4 class="mb-0 pink">New Delhi</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">04H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">5:30</h4>
<h4 class="mb-0 pink">Mumbai</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,145</p>
<a class="nir-btn">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_5.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">14:30</h4>
<h4 class="mb-0 pink">Sydney</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">04H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">8:30</h4>
<h4 class="mb-0 pink">Brisbane</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$1,200</p>
<a class="nir-btn-black" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_2.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">18:30</h4>
<h4 class="mb-0 pink">New York</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">02H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">7:30</h4>
<h4 class="mb-0 pink">California</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,345</p>
<a class="nir-btn-black" href="#">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item mb-2 box-shodow">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_4.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">13:30</h4>
<h4 class="mb-0 pink">New Delhi</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">04H 45M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">5:30</h4>
<h4 class="mb-0 pink">Mumbai</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="item-inner flight-btn text-center p-0 bordernone mb-0">
<p class="navy">$2,145</p>
<a class="nir-btn">Book Now</a>
</div>
</div>
</div>
</div>
<div class="item box-shadow mb-2">
<div class="row d-flex align-items-center justify-content-between position-relative">
<div class="col-lg-2 col-md-3">
<div class="item-inner-image text-center">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight_grid_4.png') }}"/>
</div>
</div>
<div class="col-lg-3 col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">18:30</h4>
<h4 class="mb-0 pink">Manchester</h4>
<p class="mb-0 text-uppercase">Feb 15, 2020</p>
</div>
</div>
</div>
<div class="col-md-2">
<div class="item-inner flight-time">
<p class="mb-0">03H 50M FLIGHT</p>
</div>
</div>
<div class="col-md-2">
<div class="item-inner">
<div class="content">
<h4 class="mb-0">6:30</h4>
<h4 class="mb-0 pink">London</h4>
<p class="mb-0 text-uppercase">Feb 16, 2020</p>
</div>
</div>
</div>
<div class="col-md-3">
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
<div class="col-12">
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
<h3>Stops</h3>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Non Stop</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>1 Stop</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>2 Stop</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>3 Stop</label>
</div>
</div>
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
<h3>Airlines</h3>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Air Asia<span class="number">749</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Thai Airlines<span class="number">749</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Turkish Airlines<span class="number">749</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>United Airlines<span class="number">630</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Major Airlines<span class="number">58</span></label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Dragon<span class="number">29</span></label>
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
<h3>Facilities</h3>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Snack With Drinks</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>High Class Dinner</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Online Gaming</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Seat Television</label>
</div>
</div>
</div>
<div class="sidebar-item">
<h3>Flight Type</h3>
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
<div class="sidebar-item">
<h3>Inflight Experience</h3>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Inflight Dining</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>Music</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state">
<label>Sky Shopping</label>
</div>
</div>
<div class="pretty p-default p-thick p-pulse">
<input checked="" type="checkbox"/>
<div class="state">
<label>Seat &amp; Cabin</label>
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
