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
<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
<li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> Profile</a></li>
<li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
<li class="active"><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
<li><a href="dashboard-add-new.html"><i class="sl sl-icon-plus"></i> Add listing</a></li>
<li><a href="dashboard-list.html"><i class="sl sl-icon-layers"></i> Listing</a></li>
<li><a href="dashboard-history.html"><i class="fa fa-list-ul me-2"></i>Booking History</a></li>
<li><a href="login.html"><i class="sl sl-icon-power"></i> Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="dashboard-content">
<div class="dashboard-review single-comments">
<div class="comments">
<div class="comment-box d-flex align-items-center justify-content-between">
<div class="comment-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="comment-content">
<h5 class="m-0">Helena</h5>
<p class="comment-date mb-2">April 25, 2024 at 10:46 am</p>
<span class="num-rating white">4.6/5</span>
<span class="comment-title"><i>"Was too noisy and not suitable for business meetings"</i></span>
<p class="comment mt-2">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
</div>
</div>
<div class="comment-box d-flex align-items-center justify-content-between">
<div class="comment-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img3.jpg') }}"/>
</div>
<div class="comment-content">
<h5 class="m-0">Helena</h5>
<p class="comment-date mb-2">April 25, 2024 at 10:46 am</p>
<span class="num-rating white">4.6/5</span>
<span class="comment-title"><i>"Was too noisy and not suitable for business meetings"</i></span>
<p class="comment mt-2">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
</div>
</div>
<div class="comment-box d-flex align-items-center justify-content-between">
<div class="comment-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="comment-content">
<h5 class="m-0">Helena</h5>
<p class="comment-date mb-2">April 25, 2024 at 10:46 am</p>
<span class="num-rating white">4.6/5</span>
<span class="comment-title"><i>"Was too noisy and not suitable for business meetings"</i></span>
<p class="comment mt-2">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
</div>
</div>
<div class="comment-box d-flex align-items-center justify-content-between">
<div class="comment-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img4.jpg') }}"/>
</div>
<div class="comment-content">
<h5 class="m-0">Helena</h5>
<p class="comment-date mb-2">April 25, 2024 at 10:46 am</p>
<span class="num-rating white">4.6/5</span>
<span class="comment-title"><i>"Was too noisy and not suitable for business meetings"</i></span>
<p class="comment mt-2">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
</div>
</div>
<div class="comment-box d-flex align-items-center justify-content-between">
<div class="comment-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img3.jpg') }}"/>
</div>
<div class="comment-content">
<h5 class="m-0">Helena</h5>
<p class="comment-date mb-2">April 25, 2024 at 10:46 am</p>
<span class="num-rating white">4.6/5</span>
<span class="comment-title"><i>"Was too noisy and not suitable for business meetings"</i></span>
<p class="comment mt-2">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
</div>
</div>
<div class="comment-box d-flex align-items-center justify-content-between">
<div class="comment-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img2.jpg') }}"/>
</div>
<div class="comment-content">
<h5 class="m-0">Helena</h5>
<p class="comment-date mb-2">April 25, 2024 at 10:46 am</p>
<span class="num-rating white">4.6/5</span>
<span class="comment-title"><i>"Was too noisy and not suitable for business meetings"</i></span>
<p class="comment mt-2">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
</div>
</div>
</div>
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
</div>
</div>
<!-- Content / End -->
</div>
</div>
<!-- Dashboard / End -->
@endsection
