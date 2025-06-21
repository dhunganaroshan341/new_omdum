@extends('frontend.layout.main')

@section('content')
<!-- banner starts -->
<div class="banner overflow-hidden">
<div class="slider slider2">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/flights/flight1.jpg)"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/flights/flight2.jpg)"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/flights/flight3.jpg)"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/flights/flight4.jpg)"></div>
</div>
</div>
</div>
<!-- Add Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</div>
</div>
<!-- banner ends -->
<!-- BreadCrumb Starts -->
<div class="breadcrumb-main1 pb-2 pt-2 bg-grey border-bottom">
<div class="breadcrumb-outer">
<div class="container">
<div class="breadcrumb-content">
<nav aria-label="breadcrumb">
<ul class="breadcrumb1">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item">Flights Single One</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
<!-- BreadCrumb Ends -->
<!-- blog starts -->
<section class="blog trending destination-b pb-6">
<div class="container">
<div class="row gx-lg-5">
<div class="col-lg-8 mb-4">
<div class="single-content">
<div class="description" id="description">
<div class="single-full-title border-b mb-2 pb-2">
<div class="single-title">
<div class="d-flex align-items-center justify-content-between border-b pb-2 mb-2">
<h2 class="mb-0">CHEAP FLIGHTS TO PARIS</h2>
<div class="text-right">
<h4 class="font-weight-bold mb-0">£350.00</h4>
<span>avg/person</span>
</div>
</div>
<div class="rating-main d-sm-flex align-items-center">
<p class="mb-0 me-2"><i class="flaticon-location-pin"></i> Greater London, United Kingdom</p>
<div class="rating me-2">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span>(1,186 Reviews)</span>
</div>
</div>
</div>
<div class="description-inner mb-2">
<h4>Highlight</h4>
<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
<p class="mb-0">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
</div>
<div class="description-inner mb-2">
<table>
<thead>
</thead>
<tbody>
<tr>
<td class="title">Departure</td>
<td><i aria-hidden="true" class="fa fa-map-marker pink me-1"></i> San Francisco International Airport</td>
</tr>
<tr>
<td class="title">Departure Time</td>
<td><i aria-hidden="true" class="fa fa-clock-o pink me-1"></i> Please arrive by 10:20 AM for a prompt departure at 10:50 AM</td>
</tr>
<tr>
<td class="title">Maximum travellers</td>
<td><i aria-hidden="true" class="fa fa-user pink me-1"></i> 23</td>
</tr>
<tr>
<td class="title">Languages</td>
<td><i aria-hidden="true" class="fa fa-file-audio-o pink me-1"></i> English, Thai, Malayt</td>
</tr>
<tr>
<td class="title">Includes</td>
<td>
<ul>
<li class="d-block mb-1"><i aria-hidden="true" class="fa fa-check pink me-1"></i> Airfare</li>
<li class="d-block mb-1"><i aria-hidden="true" class="fa fa-check pink me-1"></i> Transportation</li>
<li class="d-block"><i aria-hidden="true" class="fa fa-check pink me-1"></i> Professional Guide</li>
</ul>
</td>
</tr>
<tr>
<td class="title">Excludes</td>
<td class="excludes">
<ul>
<li class="d-block mb-1"><i aria-hidden="true" class="fa fa-times pink me-1"></i> Departure Taxes</li>
<li class="d-block mb-1"><i aria-hidden="true" class="fa fa-times pink me-1"></i> Entry Fees</li>
<li class="d-block"><i aria-hidden="true" class="fa fa-times pink me-1"></i> Insurance</li>
</ul>
</td>
</tr>
</tbody>
</table>
</div>
<div class="description-inner mb-4">
<h4>What to Expect</h4>
<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
<p class="mb-0">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
</div>
</div>
<div class="single-map mb-4" id="single-map">
<h4>Map</h4>
<div class="map">
<div style="width: 100%">
<iframe height="400" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</div>
</div>
</div>
<div class="single-review mb-4" id="single-review">
<h4>Average Reviews</h4>
<div class="row d-flex align-items-center">
<div class="col-md-4">
<div class="review-box bg-pink text-center pb-4 pt-4">
<h2 class="mb-1 white"><span>2.2</span>/5</h2>
<h4 class="white mb-1">"Feel so much worst than thinking"</h4>
<p class="mb-0 white font-italic">From 40 Reviews</p>
</div>
</div>
<div class="col-md-8">
<div class="review-progress">
<div class="progress-item">
<p>Cleanliness</p>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar" role="progressbar" style="width:40%">
<span class="sr-only">40% Complete</span>
</div>
</div>
</div>
<div class="progress-item">
<p>Facilities</p>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" class="progress-bar" role="progressbar" style="width:30%">
<span class="sr-only">30% Complete</span>
</div>
</div>
</div>
<div class="progress-item">
<p>Value for money</p>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar" role="progressbar" style="width:60%">
<span class="sr-only">60% Complete</span>
</div>
</div>
</div>
<div class="progress-item">
<p>Service</p>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar" role="progressbar" style="width:20%">
<span class="sr-only">20% Complete</span>
</div>
</div>
</div>
<div class="progress-item">
<p>Location</p>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar" role="progressbar" style="width:45%">
<span class="sr-only">45% Complete</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- blog comment list -->
<div class="single-comments single-box mb-4" id="single-comments">
<h5 class="border-b pb-2 mb-2">Showing 16 verified guest comments</h5>
<div class="comment-box">
<div class="comment-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/>
</div>
<div class="comment-content">
<h5 class="mb-1">Helena</h5>
<p class="comment-date">April 25, 2019 at 10:46 am</p>
<div class="comment-rate">
<div class="rating mar-right-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="comment-title">The worst hotel ever"</span>
</div>
<p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
<div class="comment-like">
<div class="like-title">
<a class="nir-btn" href="#">Reply</a>
</div>
<div class="like-btn pull-right">
<a class="like" href="#"><i class="fa fa-thumbs-up"></i> Like</a>
<a class="disike" href="#"><i class="fa fa-thumbs-down"></i> Dislike</a>
<a class="love" href="#"><i class="flaticon-like"></i> Love</a>
</div>
</div>
</div>
</div>
<div class="comment-box">
<div class="comment-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/>
</div>
<div class="comment-content">
<h5 class="mb-1">Helena</h5>
<p class="comment-date">April 25, 2019 at 10:46 am</p>
<div class="comment-rate">
<div class="rating mar-right-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="comment-title">Was too noisy and not suitable for business meetings"</span>
</div>
<p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
<div class="comment-like">
<div class="like-title">
<a class="nir-btn" href="#">Reply</a>
</div>
<div class="like-btn pull-right">
<a class="like" href="#"><i class="fa fa-thumbs-up"></i> Like</a>
<a class="disike" href="#"><i class="fa fa-thumbs-down"></i> Dislike</a>
<a class="love" href="#"><i class="flaticon-like"></i> Love</a>
</div>
</div>
</div>
</div>
</div>
<!-- blog review -->
<div class="single-add-review" id="single-add-review">
<h4>Write a Review</h4>
<form>
<div class="row gy-4">
<div class="col-md-6">
<div class="form-group">
<input placeholder="Name" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input placeholder="Email" type="email"/>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea>Comment</textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-btn">
<a class="nir-btn" href="#">Submit Review</a>
</div>
</div>
</div>
</form>
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
<h3>Popular Flights</h3>
<div class="about-slider">
<div class="trend-item mb-0">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight1.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main shadow-none">
<div class="trend-content pb-0">
<div class="row">
<div class="col-md-7">
<h4 class="mb-0 p-0 bordernone"><a class="" href="#" tabindex="0">Paris</a></h4>
<span>Oneway flight</span>
</div>
<div class="col-md-5">
<div class="text-right">
<h5 class="font-weight-bold mb-0">£350.00</h5>
<span>avg/person</span>
</div>
</div>
</div>
<div class="flight-content border-t mt-2 pt-2">
<div class="f-landing">
<div class="content">
<p class="mb-0 pink"><i aria-hidden="true" class="fa fa-plane"></i> Take Off</p>
<p>Wed Nov 19 7:50 AM</p>
</div>
</div>
<div class="f-landing">
<div class="content">
<p class="mb-0 pink"><i aria-hidden="true" class="fa fa-plane icon"></i> Landing</p>
<p>Wed Nov 21 5:00 PM</p>
</div>
</div>
</div>
<div class="flight-btn d-flex align-items-center justify-content-between border-t mt-2 pt-2">
<a class="d-block" href="#">Flight Details</a>
<a class="nir-btn" href="#">Choose</a>
</div>
</div>
</div>
</div>
<div class="trend-item mb-0">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight2.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main shadow-none">
<div class="trend-content pb-0">
<div class="row">
<div class="col-md-7">
<h4 class="font-weight-bold mb-0 p-0 bordernone"><a class="" href="#" tabindex="0">London</a></h4>
<span>Twoway flight</span>
</div>
<div class="col-md-5">
<div class="text-right">
<h5 class="font-weight-bold mb-0">£1150.00</h5>
<span>avg/person</span>
</div>
</div>
</div>
<div class="flight-content border-t mt-2 pt-2">
<div class="f-landing">
<div class="content">
<p class="mb-0 pink"><i aria-hidden="true" class="fa fa-plane"></i> Take Off</p>
<p>Wed Nov 19 7:50 AM</p>
</div>
</div>
<div class="f-landing">
<div class="content">
<p class="mb-0 pink"><i aria-hidden="true" class="fa fa-plane icon"></i> Landing</p>
<p>Wed Nov 21 5:00 PM</p>
</div>
</div>
</div>
<div class="flight-btn d-flex align-items-center justify-content-between border-t mt-2 pt-2">
<a class="d-block" href="#">Flight Details</a>
<a class="nir-btn" href="#">Choose</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sidebar-item">
<h3>Why Book With Us?</h3>
<div class="services-list">
<div class="d-flex align-items-center mb-2 pb-2 border-b">
<i class="fa fa-tag pink me-2"></i>
<span>No-hassle best price guarantee</span>
</div>
<div class="d-flex align-items-center mb-2 pb-2 border-b">
<i class="fa fa-phone-alt pink me-2"></i>
<span>Customer care available 24/7</span>
</div>
<div class="d-flex align-items-center mb-2 pb-2 border-b">
<i class="fa fa-star pink me-2"></i>
<span>Hand-picked Tours &amp; Activities</span>
</div>
<div class="d-flex align-items-center">
<i class="fa fa-plane pink me-2"></i>
<span>Free Travel Insureance</span>
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
