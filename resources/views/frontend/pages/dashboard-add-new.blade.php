@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<div class="breadcrumb-main pt-9 pb-7" style="background-image: url(images/bg/bg8.jpg);">
<div class="dot-overlay"></div>
</div>
<!-- BreadCrumb Ends -->
<!-- Dashboard -->
<div class="pt-10 pb-10" id="dashboard">
<div class="container">
<div class="dashboard-main">
<div class="row gx-lg-5">
<div class="col-lg-3">
<div class="dashboard-sidebar">
<div class="profile-sec">
<div class="author-news mb-3">
<div class="author-news-content text-center p-3">
<div class="author-thumb mt-0">
<img alt="author" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="author-content pt-2 p-0">
<h3 class="mb-1 white"><a class="white" href="#">Ketty Nelson</a></h3>
<p class="detail"><i class="fa fa-map-marker"></i> 264, Carson Street USA, KY 40539</p>
<p class="detail"><i class="fa fa-phone"></i> <a class="white" href="tel:+4585479851">+45 8547 9851</a></p>
<div class="header-social mt-2">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</div>
</div>
<!-- Responsive Navigation Trigger -->
<a class="dashboard-responsive-nav-trigger" href="#"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
<div class="dashboard-nav">
<div class="dashboard-nav-inner">
<ul>
<li><a href="#"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
<li><a href="#"><i class="sl sl-icon-user"></i> Profile</a></li>
<li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
<li><a href="#"><i class="sl sl-icon-star"></i> Reviews</a></li>
<li class="active"><a href="#"><i class="sl sl-icon-plus"></i> Add listing</a></li>
<li><a href="#"><i class="sl sl-icon-layers"></i> Listing</a></li>
<li><a href="#"><i class="fa fa-list-ul"></i>Booking History</a></li>
<li><a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="dashboard-content">
<div class="add-listing">
<div class="listing-main">
<div class="addlist-inner mb-3">
<div class="addlist-title">
<h4 class="m-0"><i class="fa fa-user pe-2"></i>General Information</h4>
</div>
<div class="addlist-content bg-white">
<form action="/">
<div class="row gy-4">
<div class="col-md-6">
<div class="form-group">
<div class="input-box">
<label class="form-label">Title</label>
<input class="" placeholder="Type your title here" type="text"/>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-box">
<label>Tagline</label>
<input class="" placeholder="Your Listing Motto or Tagline" type="text"/>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Select Gender</label>
<div class="input-box">
<select class="niceSelect">
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-box">
<label>Phone No.</label>
<input class="" placeholder="Phone Number" type="text"/>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-box">
<label>Email Address</label>
<input class="" placeholder="Email Address" type="text"/>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-box">
<label>Website</label>
<input class="" placeholder="http://" type="text"/>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Location</label>
<div class="input-box">
<select class="niceSelect">
<option>Australia</option>
<option>Sydney</option>
<option>Newyork</option>
<option>Los Angels</option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-box">
<label>Regions</label>
<input class="" placeholder="Select your listing region" type="text"/>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-0">
<label>Company Logo</label>
<div class="input-box">
<label class="upload-file mb-0">
<input type="file"/>
<i class="far fa-image"></i>
<span>Click here or drop file to upload</span>
</label>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-0">
<label>Cover Photo</label>
<div class="input-box">
<label class="upload-file mb-0">
<input type="file"/>
<i class="far fa-image"></i>
<span>Click here or drop file to upload</span>
</label>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="addlist-inner mb-3">
<div class="addlist-title">
<h4 class="m-0"><i class="fa fa-user pe-2"></i>Detail Information</h4>
</div>
<div class="addlist-content bg-white">
<form action="/">
<div class="row gy-4">
<div class="col-md-6">
<div class="form-group">
<label>Select Price Range</label>
<div class="input-box">
<select class="niceSelect">
<option>Ultra High ($$$$)</option>
<option>Expensive ($$$)</option>
<option>Moderate ($$)</option>
<option>Cheap ($)</option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-box">
<label>Custom Date</label>
<input class="" id="cdate" required="" type="text"/>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Tags</label>
<div class="input-box">
<select class="niceSelect">
<option>orange</option>
<option>white</option>
<option>purple</option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Select Category</label>
<div class="input-box">
<select class="niceSelect">
<option>Restaurant</option>
<option>   Food</option>
<option>   Lunch Pack</option>
<option>Places</option>
<option>   Travel</option>
<option>   Booking</option>
<option>   Hotel</option>
<option>   Location</option>
<option>Shopping</option>
<option>   Accessories</option>
<option>   Clothing</option>
<option>   Gadgets</option>
</select>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Social Information</label>
<div class="row align-items-center">
<div class="col-md-5">
<div class="input-box">
<select class="niceSelect">
<option value="behance"> Behance</option>
<option value="dribbble"> Dribbble</option>
<option value="facebook"> Facebook</option>
<option value="flickr"> Flickr</option>
<option value="github"> Github</option>
</select>
</div>
</div>
<div class="col-md-5">
<div class="input-box">
<input class="" placeholder="http://www.example.com/" type="text"/>
</div>
</div>
<div class="col-md-2">
<div class="listing-btn d-flex justify-content-between align-items-center text-right">
<a class="nir-btn" href="#"><i class="fa fa-times"></i></a>
<a class="nir-btn-black" href="#"><i class="fa fa-expand-arrows-alt"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<div class="input-box">
<label>Description</label>
<textarea class="" id="desc" placeholder="Description" rows="8"></textarea>
</div>
</div>
</div>
<div class="col-lg-12">
<a class="nir-btn" href="#"><i class="fa fa-plus"></i> Add New</a>
</div>
</div>
</form>
</div>
</div>
<div class="addlist-inner mb-3">
<div class="addlist-title">
<h4 class="m-0"><i class="fa fa-calendar-check pe-2"></i>Listing FAQs</h4>
</div>
<div class="addlist-content bg-white">
<form action="/">
<div class="row">
<div class="col-lg-12">
<div class="form-group m-0">
<div class="row gy-4 align-items-center">
<div class="col-lg-4 col-md-6">
<div class="input-box">
<input class="" placeholder="Questions" type="text"/>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="input-box">
<input class="" placeholder="Answers" type="text"/>
</div>
</div>
<div class="col-lg-4">
<div class="listing-btn d-flex justify-content-between align-items-center text-right">
<a class="nir-btn me-2" href="#"><i class="fa fa-times"></i></a>
<a class="nir-btn-black" href="#"><i class="fa fa-expand-arrows-alt"></i></a>
<a class="nir-btn" href="#"><i class="fa fa-plus"></i> Add New</a>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="term-conds mb-3">
<div class="pretty p-default p-thick p-pulse">
<input type="checkbox"/>
<div class="state d-flex align-items-center p-warning-o">
<label>I Agree with all <a href="#">Terms &amp; Conditions</a></label>
</div>
</div>
</div>
<a class="nir-btn" href="#">Submit Listing</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Content / End -->
</div>
</div>
<!-- Dashboard / End -->
@endsection
