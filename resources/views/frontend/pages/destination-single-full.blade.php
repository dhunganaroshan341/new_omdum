@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<div class="breadcrumb-main pt-10 pb-10" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content bread-content text-center pt-10">
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Destination Single Full</li>
</ul>
</nav>
<h2 class="mb-0 white text-uppercase">Single Full</h2>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</div>
<!-- BreadCrumb Ends -->
<div class="tabs-navbar1 bg-white sticky1 p-4">
<div class="row">
<div class="col-md-12">
<ul class="nav nav-tabs border-0">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#description">Highlight</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#iternary">Iternary</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#single-map">Map</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#single-review">Reviews</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#single-Comments">Comments</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#single-add-review">Add Reviews</a>
</li>
</ul>
</div>
</div>
</div>
<!-- blog starts -->
<section class="blog trending destination-b">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="single-content">
<div class="description-images mb-4">
<div class="thumbnail-images">
<div class="slider-store">
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg1.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg2.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg3.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg7.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg8.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg2.jpg') }}"/>
</div>
</div>
<div class="slider-thumbs">
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg1.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg2.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg3.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg7.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg8.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/bg/bg2.jpg') }}"/>
</div>
</div>
</div>
</div>
<div class="description" id="description">
<div class="single-full-title border-b mb-2 pb-2">
<div class="single-title">
<h3 class="mb-1">Adriatic Adventure–Zagreb to Athens</h3>
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
<div class="tour-includes mb-2">
<table>
<tbody>
<tr>
<td><i aria-hidden="true" class="fa fa-clock-o pink me-1"></i> 5 Days</td>
<td><i aria-hidden="true" class="fa fa-group pink me-1"></i> Max People : 26</td>
<td><i aria-hidden="true" class="fa fa-calendar pink me-1"></i> Jan 18 - Dec 21</td>
</tr>
<tr>
<td><i aria-hidden="true" class="fa fa-user pink me-1"></i> Min Age : 10+</td>
<td><i aria-hidden="true" class="fa fa-map-signs pink me-1"></i> Pickup : Airport</td>
<td><i aria-hidden="true" class="fa fa-file-alt pink me-1"></i> Langauge - English, Thai</td>
</tr>
</tbody>
</table>
</div>
<div class="description-inner mb-2">
<div class="row">
<div class="col-md-6 mb-2 pe-2">
<div class="desc-box">
<h5 class="mb-1">Departure &amp; Return Location</h5>
<p class="mb-0">John F.K. International Airport(Google Map)</p>
</div>
</div>
<div class="col-md-6 mb-2 ps-2">
<div class="desc-box">
<h5 class="mb-1">Bedroom</h5>
<p class="mb-0">4 Bedrooms</p>
</div>
</div>
<div class="col-md-6 mb-2 pe-2">
<div class="desc-box">
<h5 class="mb-1">Departure Time</h5>
<p class="mb-0">3 Hours Before Flight Time</p>
</div>
</div>
<div class="col-md-6 mb-2 ps-2">
<div class="desc-box">
<h5 class="mb-1">Departure Time</h5>
<p class="mb-0">3 Hours Before Flight Time</p>
</div>
</div>
<div class="col-md-6 mb-2 pe-2">
<div class="desc-box">
<h5 class="mb-1">Price Includes</h5>
<ul>
<li><i class="fa fa-check pink me-1"></i> Air Fares</li>
<li><i class="fa fa-check pink me-1"></i> 3 Nights Hotel Accomodation</li>
<li><i class="fa fa-check pink me-1"></i> Tour Guide</li>
<li><i class="fa fa-check pink me-1"></i> Entrance Fees</li>
</ul>
</div>
</div>
<div class="col-md-6 mb-2 ps-2">
<div class="desc-box">
<h5 class="mb-1">Departure &amp; Return Location</h5>
<ul>
<li><i class="fa fa-close pink me-1"></i> Guide Service Fee</li>
<li><i class="fa fa-close pink me-1"></i> Driver Service Fee</li>
<li><i class="fa fa-close pink me-1"></i> Any Private Expenses</li>
<li><i class="fa fa-close pink me-1"></i> Room Service Fees</li>
</ul>
</div>
</div>
</div>
</div>
<div class="description-inner mb-4">
<h4>What to Expect</h4>
<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
<p class="mb-0">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
</div>
</div>
<div class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion" id="iternary">
<h4>Iternary</h4>
<div class="accrodion active">
<div class="accrodion-title">
<h5 class="mb-0"><span>Day 1</span> - Barcelona - Zaragoza - Madrid</h5>
</div>
<div class="accrodion-content" style="display: block;">
<div class="inner">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
</div><!-- /.inner -->
</div>
</div>
<div class="accrodion">
<div class="accrodion-title">
<h5 class="mb-0"><span>Day 2</span> - Zurich - Biel/Bienne - Neuchatel - Geneva</h5>
</div>
<div class="accrodion-content" style="display: none;">
<div class="inner">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
</div><!-- /.inner -->
</div>
</div>
<div class="accrodion">
<div class="accrodion-title">
<h5 class="mb-0"><span>Day 3</span> - Enchanting Engelberg</h5>
</div>
<div class="accrodion-content" style="display: none;">
<div class="inner">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
</div><!-- /.inner -->
</div>
</div>
<div class="accrodion">
<div class="accrodion-title">
<h5 class="mb-0"><span>Day 4</span> - Barcelona - Zaragoza - Madrid</h5>
</div>
<div class="accrodion-content" style="display: none;">
<div class="inner">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
</div><!-- /.inner -->
</div>
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
<p class="comment-date">April 25, 2025 at 10:46 am</p>
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
<p class="comment-date">April 25, 2025 at 10:46 am</p>
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
</div>
</div>
</section>
<!-- blog Ends -->
@endsection
