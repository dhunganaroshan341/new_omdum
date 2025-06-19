@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Pricing</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Pricing</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- pricing starts -->
<section class="booking pricing-tab pb-6">
<div class="container">
<div class="price-tabmain">
<div class="price-navtab text-center mb-4">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#annual">
                            ANNUAL <i class="fa fa-check-circle"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#lifetime">
<i class="fa fa-check-circle"></i> LIFETIME
                          </a>
</li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane fade show active" id="annual">
<div class="price-list">
<div class="row">
<div class="col-lg-4">
<div class="price-box text-center mt-0 mb-4">
<div class="price-header bg-pink">
<h4 class="white m-0">Starter Plan</h4>
<h2 class="white"><sup class="dolers">$</sup>49.99</h2>
</div>
<div class="price-item-list">
<ul>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Wifi</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Parking</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Daily Housekeeping</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
</ul>
</div>
<div class="price-link mt-2">
<a class="nir-btn bg-pink" href="#">Choose plan</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="price-box text-center price-recommended mt-0 mb-4">
<div class="price-header">
<h4 class="white m-0">Basic Plan</h4>
<h2 class="white"><sup class="dolers">$</sup>99</h2>
</div>
<div class="price-item-list">
<ul>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Wifi</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Parking</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Daily Housekeeping</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
</ul>
</div>
<div class="price-link mt-2">
<a class="nir-btn bg-navy" href="#">Buy Now</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="price-box text-center mt-0 mb-4">
<div class="price-header bg-pink">
<h4 class="white m-0">Premium Plan</h4>
<h2 class="white"><sup class="dolers">$</sup>299</h2>
</div>
<div class="price-item-list">
<ul>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Wifi</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Parking</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Daily Housekeeping</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
</ul>
</div>
<div class="price-link mt-2">
<a class="nir-btn bg-pink" href="#">Select plan</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="lifetime">
<div class="price-list">
<div class="row">
<div class="col-lg-4">
<div class="price-box text-center mt-0 mb-4">
<div class="price-header bg-pink">
<h4 class="white m-0">Starter Plan</h4>
<h2 class="white"><sup class="dolers">$</sup>149.99</h2>
</div>
<div class="price-item-list">
<ul>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Wifi</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Parking</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Daily Housekeeping</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
</ul>
</div>
<div class="price-link mt-2">
<a class="nir-btn bg-pink" href="#">Choose plan</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="price-box text-center price-recommended mt-0 mb-4">
<div class="price-header">
<h4 class="white m-0">Basic Plan</h4>
<h2 class="white"><sup class="dolers">$</sup>399.99</h2>
</div>
<div class="price-item-list">
<ul>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Wifi</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Parking</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Daily Housekeeping</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
</ul>
</div>
<div class="price-link mt-2">
<a class="nir-btn bg-navy" href="#">Buy Now</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="price-box text-center mt-0 mb-4">
<div class="price-header bg-pink">
<h4 class="white m-0">Premium Plan</h4>
<h2 class="white"><sup class="dolers">$</sup>599.99</h2>
</div>
<div class="price-item-list">
<ul>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Wifi</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Free Parking</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Daily Housekeeping</li>
<li><i aria-hidden="true" class="fa fa-check"></i> Swimming Pool</li>
</ul>
</div>
<div class="price-link mt-2">
<a class="nir-btn bg-pink" href="#">Select plan</a>
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
<!-- pricing ends -->
<!-- pricing starts -->
<section class="pricing-tab bg-grey">
<div class="container">
<div class="price-tabmain">
<div class="price-list">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg-5">
<div class="section-title w-100">
<h4 class="mb-1 blue">Awesome Packages</h4>
<h2>We offer great prices, premium and quality products for your business.</h2>
<p class="m-0">Style too own civil out along. Perfectly offending attempted add arranging age gentleman concluded. Get who uncommonly our expression ten increasing considered occasional travelling.</p>
</div>
</div>
<div class="col-lg-7">
<div class="row">
<div class="col-md-6 mt-4">
<div class="price-box text-center">
<div class="price-header bg-black">
<h4 class="white mb-2">Standard</h4>
<h2 class="white"><sup class="dolers">$</sup>49.99</h2>
</div>
<div class="price-item-list">
<ul>
<li>Unlimited listings</li>
<li>One photo gallery</li>
<li>Facebook link included</li>
<li>Most amenities enabled</li>
<li>Easy Listing editor</li>
</ul>
</div>
<div class="price-link">
<a class="nir-btn" href="#">Choose plan</a>
</div>
</div>
</div>
<div class="col-md-6">
<div class="price-box text-center price-recommended">
<div class="price-header">
<h4 class="white mb-2">Professional</h4>
<h2 class="white"><sup class="dolers">$</sup>99</h2>
</div>
<div class="price-item-list">
<ul>
<li>Unlimited listings</li>
<li>One photo gallery</li>
<li>Facebook link included</li>
<li>Most amenities enabled</li>
<li>Easy Listing editor</li>
</ul>
</div>
<div class="price-link">
<a class="nir-btn-black" href="#">Buy Now</a>
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
<!-- pricing ends -->
@endsection
