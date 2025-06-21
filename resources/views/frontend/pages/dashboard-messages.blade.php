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
<li class="active"><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
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
<div class="row gy-4">
<div class="col-lg-4">
<div class="message-list">
<div class="message-search">
<input placeholder="Search" type="text"/>
</div>
<div class="inbox-item">
<div class="inbox-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="inbox-content">
<p>Vincent Porter</p>
<span>I'm going to office</span>
</div>
<span class="unread">2</span>
</div>
<div class="inbox-item">
<div class="inbox-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img2.jpg') }}"/>
</div>
<div class="inbox-content">
<p>Jacob Brown</p>
<span>You: WHere is Alex?</span>
</div>
<span class="unread">1</span>
</div>
<div class="inbox-item">
<div class="inbox-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img3.jpg') }}"/>
</div>
<div class="inbox-content">
<p>Harry Taylor</p>
<span>I'm going to office</span>
</div>
</div>
<div class="inbox-item">
<div class="inbox-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img4.jpg') }}"/>
</div>
<div class="inbox-content">
<p>Sarah Miller</p>
<span>You: Okay</span>
</div>
</div>
<div class="inbox-item">
<div class="inbox-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img2.jpg') }}"/>
</div>
<div class="inbox-content">
<p>Joanna Davies</p>
<span>Let's go!</span>
</div>
</div>
<div class="inbox-item">
<div class="inbox-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="inbox-content">
<p>Sam Lee</p>
<span>Awesome</span>
</div>
</div>
<div class="inbox-item">
<div class="inbox-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img4.jpg') }}"/>
</div>
<div class="inbox-content">
<p>Vincent Porter</p>
<span>I'm going to office</span>
</div>
</div>
<div class="inbox-item">
<div class="inbox-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img3.jpg') }}"/>
</div>
<div class="inbox-content">
<p>Jacob Brown</p>
<span>You: Where is Alex?</span>
</div>
</div>
</div>
</div>
<div class="col-lg-8 d-flex">
<div class="message">
<div class="message-header inbox-item">
<div class="inbox-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="inbox-content">
<p>Vincent Porter</p>
<span>was online today at 11:43</span>
</div>
</div>
<div class="message-content">
<div class="msg-received">
<div class="msg-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="msg-content">
<p>Today, 10: 31</p>
<p class="msg">Hello John!</p>
</div>
</div>
<div class="msg-received">
<div class="msg-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="msg-content">
<p>Today, 10: 31</p>
<p class="msg">Simply dummy text of the printing and typesetting industry. Lorem Ipsum had been industry's</p>
</div>
</div>
<div class="msg-received msg-sent">
<div class="msg-content">
<p>Today, 10: 31</p>
<p class="msg">Are we meeting today?</p>
</div>
</div>
<div class="msg-received msg-sent">
<div class="msg-content">
<p>Today, 10: 31</p>
<p class="msg">The project finally complete! Let's go to!</p>
</div>
</div>
<div class="msg-received">
<div class="msg-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="msg-content">
<p>Today, 10: 31</p>
<p class="msg">Let's go</p>
</div>
</div>
<div class="msg-reply">
<input placeholder="Enter text here..." type="text"/>
<a class="nir-btn mt-2 pull-right" href="#">Send Message</a>
</div>
</div>
</div>
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
