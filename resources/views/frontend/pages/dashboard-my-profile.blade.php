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
<li class="active"><a href="#"><i class="sl sl-icon-user"></i> Profile</a></li>
<li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
<li><a href="#"><i class="sl sl-icon-star"></i> Reviews</a></li>
<li><a href="#"><i class="sl sl-icon-plus"></i> Add listing</a></li>
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
<div class="dashboard-form mb-4">
<div class="row">
<!-- Profile -->
<div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
<div class="dashboard-list">
<h4 class="gray">Profile Details</h4>
<div class="dashboard-list-static">
<!-- Avatar -->
<div class="edit-profile-photo">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/user-avatar.jpg') }}"/>
<div class="change-photo-btn">
<div class="photoUpload">
<span><i class="fa fa-upload"></i> Upload Photo</span>
<input class="upload" type="file"/>
</div>
</div>
</div>
<!-- Details -->
<div class="my-profile">
<div class="form-group mb-2">
<label>Your Name *</label>
<input type="text" value="Tom Perrin"/>
</div>
<div class="form-group mb-2">
<label>Phone Number *</label>
<input type="text" value="(123) 123-456"/>
</div>
<div class="form-group mb-2">
<label>Email Address *</label>
<input type="text" value="tom@example.com"/>
</div>
<div class="form-group mb-2">
<label>Your Bio *</label>
<textarea cols="30" id="notes" name="notes" rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
</div>
<div class="form-group mb-2">
<label class="twitter-input"><i class="fab fa-twitter"></i> Twitter</label>
<input placeholder="https://www.twitter.com/" type="text"/>
</div>
<div class="form-group mb-2">
<label class="fb-input"><i class="fab fa-facebook"></i> Facebook</label>
<input placeholder="https://www.facebook.com/" type="text"/>
</div>
</div>
</div>
</div>
</div>
<!-- Change Password -->
<div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
<div class="dashboard-list margin-top-0">
<h4 class="gray">Your Address</h4>
<div class="dashboard-list-static">
<!-- Change Password -->
<div class="my-profile">
<div class="form-group mb-2">
<label>Company Name</label>
<input type="text"/>
</div>
<div class="form-group mb-2">
<label>Address *</label>
<input type="text"/>
</div>
<div class="form-group mb-2">
<label>Zip Code *</label>
<input type="text"/>
</div>
<div class="form-group mb-2">
<label>Country *</label>
<input type="text"/>
</div>
<div class="form-group mb-2">
<label>City *</label>
<input type="text"/>
</div>
<div class="form-group mb-2">
<label>Region/State *</label>
<input type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-btn">
<a class="nir-btn" href="#">SAVE CHANGE</a>
</div>
</div>
</div>
<div class="dashboard-form mb-4">
<div class="dashboard-location">
<h4>Location</h4>
<form>
<div class="row">
<div class="col-md-6">
<div class="form-group mb-2">
<label>Home Airport</label>
<input type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-2">
<label>Address</label>
<input type="email"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-2">
<label>City</label>
<input type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-2">
<label>State/Province/Region</label>
<input type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-2">
<label>ZIP Code/Postal Code</label>
<input type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-2">
<label>Country</label>
<input type="text"/>
</div>
</div>
<div class="col-lg-12">
<div class="form-btn">
<a class="nir-btn" href="#">SAVE CHANGE</a>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="dashboard-form mb-4">
<div class="dashboard-password">
<h4>Change Password</h4>
<form>
<div class="row">
<div class="col-lg-4">
<div class="form-group mb-2">
<label>Current Password</label>
<input placeholder="*********" type="password"/>
</div>
</div>
<div class="col-lg-4">
<div class="form-group mb-2">
<label>New Password</label>
<input type="password"/>
</div>
</div>
<div class="col-lg-4">
<div class="form-group mb-2">
<label>Re-enter Password</label>
<input type="password"/>
</div>
</div>
<div class="col-lg-12">
<div class="form-btn mar-top-15">
<a class="nir-btn" href="#">SAVE CHANGE</a>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="dashboard-form mb-4">
<div class="dashboard-password">
<h4>Currency</h4>
<form>
<div class="row">
<div class="col-md-6">
<div class="form-group currency-content mb-2">
<label>Primary Curreny</label>
<select>
<option>USD</option>
<option>USD</option>
<option>USD</option>
<option>USD</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group currency-content mb-2">
<label>Tax(%)</label>
<input placeholder="15" type="text"/>
</div>
</div>
<div class="col-lg-12">
<div class="currency-content">
<p class="bold">Send Enrique Mail</p>
<input type="checkbox"/> Admin &amp; Customer <br/>
<input type="checkbox"/> Partner &amp; Customer <br/>
<input type="checkbox"/> Admin, Partner &amp; Customer
                                                </div>
</div>
<div class="col-lg-12">
<div class="form-btn mt-2">
<a class="nir-btn" href="#">SAVE CHANGE</a>
</div>
</div>
</div>
</form>
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
