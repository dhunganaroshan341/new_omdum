@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Shop Grid 1</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Shop Grid 1</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!--  Dishes starts -->
<section class="blog trending destination-b">
<div class="container">
<div class="row gx-lg-5">
<div class="col-lg-8 mb-4">
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
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop1.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Trekking Wood Sticks</a></h4>
<p class="price pink mb-1 font-weight-bold">$350.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop2.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Adventure X Bag</a></h4>
<p class="price pink mb-1 font-weight-bold">$250.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop3.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Fashion Trek Shoes</a></h4>
<p class="price pink mb-1 font-weight-bold">$420.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop4.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Nylon Trek Rope</a></h4>
<p class="price pink mb-1 font-weight-bold">$99.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop5.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Kingcamp Tents</a></h4>
<p class="price pink mb-1 font-weight-bold"><del class="font-weight-normal grey">$220.00</del> $199.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop7.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Perfect Black Axe</a></h4>
<p class="price pink mb-1 font-weight-bold">$199.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop6.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Gadgets Tools</a></h4>
<p class="price pink mb-1 font-weight-bold">$56.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop8.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Trek Pumpa Cap</a></h4>
<p class="price pink mb-1 font-weight-bold">$50.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="pagination-main text-center">
<ul class="pagination">
<li><a href="#"><i aria-hidden="true" class="fa fa-angle-double-left"></i></a></li>
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#"><i aria-hidden="true" class="fa fa-angle-double-right"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="sidebar-sticky">
<div class="list-sidebar">
<div class="sidebar-item mb-4">
<div class="sidebar-title">
<h4 class="mb-2">Featured Products</h4>
</div>
<div class="recent-item d-flex align-items-center border-b pb-2 mb-2">
<div class="recent-image w-25">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/insta/ins-1.jpg') }}"/>
</div>
<div class="recent-content ps-2">
<h5 class="mb-0 font-weight-normal"><a href="shop-detail.php">Nike brand shoes</a></h5>
<div class="post-detail">
<div class="shop-price">
<del><span>$42.00</span></del>
<ins><span>$35.00</span></ins>
</div>
</div>
</div>
</div>
<div class="recent-item d-flex align-items-center border-b pb-2 mb-2">
<div class="recent-image w-25">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/insta/ins-2.jpg') }}"/>
</div>
<div class="recent-content ps-2">
<h5 class="mb-0 font-weight-normal"><a href="shop-detail.php">Raymond Gogs 2</a></h5>
<div class="post-detail">
<div class="shop-price">
<del><span>$22.00</span></del>
<ins><span>$15.00</span></ins>
</div>
</div>
</div>
</div>
<div class="recent-item d-flex align-items-center border-b pb-2 mb-2">
<div class="recent-image w-25">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/insta/ins-3.jpg') }}"/>
</div>
<div class="recent-content ps-2">
<h5 class="mb-0 font-weight-normal"><a href="shop-detail.php">Summer Sign Caps</a></h5>
<div class="post-detail">
<div class="shop-price">
<del><span>$50.00</span></del>
<ins><span>$45.00</span></ins>
</div>
</div>
</div>
</div>
<div class="recent-item d-flex align-items-center">
<div class="recent-image w-25">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/insta/ins-4.jpg') }}"/>
</div>
<div class="recent-content ps-2">
<h5 class="mb-0 font-weight-normal"><a href="shop-detail.php">Baume &amp; Mercier</a></h5>
<div class="post-detail">
<div class="shop-price">
<del><span>$20.00</span></del>
<ins><span>$15.00</span></ins>
</div>
</div>
</div>
</div>
</div>
<div class="sidebar-item mb-4">
<div class="sidebar-title">
<h4 class="mb-2">Categories</h4>
</div>
<ul class="sidebar-category">
<li><a href="#">All</a></li>
<li><a href="#">Featured</a></li>
<li><a href="#">Sliders</a></li>
<li class="active"><a href="#">Manage Listings</a></li>
<li><a href="#">Address and Map</a></li>
<li><a href="#">Reservation Requests</a></li>
<li><a href="#">Your Reservation</a></li>
<li><a href="#">Search Results</a></li>
</ul>
</div>
<div class="sidebar-item mb-4">
<h4 class="">Price Range($)</h4>
<div class="range-slider">
<div aria-disabled="false" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-max="2000" data-max-name="max_price" data-min="0" data-min-name="min_price" data-unit="$">
<span class="min-value">0 $</span>
<span class="max-value">2000 $</span>
<div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
</div>
<div class="range-content d-flex align-items-center justify-content-between w-100 mt-5">
<a class="nir-btn-black p-2 ps-3 pe-3" href="#">Filter</a>
<p class="mb-0">Price : <span>$0 - $2000</span></p>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="sidebar-item">
<div class="sidebar-title">
<h4 class="mb-2">Cloud Tags</h4>
</div>
<ul class="sidebar-tags">
<li><a href="#">Tour</a></li>
<li><a href="#">Rental</a></li>
<li><a href="#">City</a></li>
<li><a href="#">Yatch</a></li>
<li><a href="#">Activity</a></li>
<li><a href="#">Museum</a></li>
<li><a href="#">Beauty</a></li>
<li><a href="#">Classic</a></li>
<li><a href="#">Creative</a></li>
<li><a href="#">Designs</a></li>
<li><a href="#">Featured</a></li>
<li><a href="#">Free Style</a></li>
<li><a href="#">Programs</a></li>
<li><a href="#">Travel</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dishes ends -->
@endsection
