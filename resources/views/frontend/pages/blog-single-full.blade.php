@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Blog Single Full</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Blog Single Full</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- blog starts -->
<section class="blog blog-left">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="blog-single">
<div class="blog-imagelist mb-3">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/bg/bg3.jpg') }}"/>
</div>
<div class="row">
<div class="col-md-2">
<div class="date text-center bg-pink p-2">
<h1 class="day mb-0 white">11</h1>
<div class="month white">May</div>
</div>
</div>
<div class="col-md-10">
<div class="blog-content mb-4 pt-0">
<h3 class="blog-title"><a class="yellow" href="#">Counts Is the Greatest Change the Platform Has Ever Made</a></h3>
<div class="para-content mb-2">
<span class="me-2"><a class="tag pink" href="#"><i class="fa fa-tag me-1"></i> Popular </a></span>
<span class="me-2"><a class="pink" href="#"><i class="fa fa-user me-1"></i> Adam Joel</a></span>
<span><a class="pink" href="#"><i class="fa fa-comment"></i> 20</a></span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipis Vi ales elit vitae lo bortis faucibus. Lorem ipsum dolor sit amet, conse dolor sit amet, consectetu ctetur adipis Viales. Lorem ipsum dolor sit amet, cons sit amet, consectetur adi ectetur adipis Vi.</p>
<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
</div>
<!-- blog blockquote -->
<div class="blog-quote mb-4">
<p class="white">“To take a trivial example, which ever undertakes laborious physical work exercise, except obtain some advantage blinded” </p>
<span class="white">By Michael Delwell</span>
<i class="fas fa-quote-left"></i>
</div>
<div class="blog-imagelist mb-4">
<div class="row">
<div class="col-md-6">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog1.jpg') }}"/>
</div>
<div class="col-md-6">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/blog/blog2.jpg') }}"/>
</div>
</div>
</div>
<p class="mb-4">as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
<!-- blog share -->
<div class="blog-share d-flex justify-content-between align-items-center mb-4 bg-lgrey border">
<div class="blog-share-tag">
<ul class="inline">
<li><strong>Posted In:</strong></li>
<li><a href="#">Fashion,</a></li>
<li><a href="#">Beauty,</a></li>
<li><a href="#">Vacation,</a></li>
<li><a href="#">Travel,</a></li>
<li><a href="#">News</a></li>
</ul>
</div>
<div class="header-social">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<!-- author detail -->
<div class="blog-author mb-4 bg-grey border">
<div class="blog-author-item">
<div class="row d-flex justify-content-between align-items-center">
<div class="col-md-3">
<div class="blog-thumb text-center position-relative">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/>
</div>
</div>
<div class="col-md-9">
<h3 class="title pink"><a href="#">About Author <span>Graphic Designer</span></a></h3>
<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sceler neque in euismod. Nam vitae urnasodales neque in faucibus.</p>
</div>
</div>
</div>
</div>
<!-- blog next prev -->
<div class="blog-next mb-4">
<a class="float-left float-start" href="#">
<div class="prev ps-4">
<i class="fa fa-arrow-left white"></i>
<p class="m-0 white">Previous Post</p>
<p class="m-0 white">The bedding was hardly able</p>
</div>
</a>
<a class="float-end bg-grey" href="#">
<div class="next pe-4 text-end">
<i class="fa fa-arrow-right"></i>
<p class="m-0">Previous Post</p>
<p class="m-0">The bedding was hardly able</p>
</div>
</a>
</div>
<!-- blog comment list -->
<div class="single-comments single-box mb-4">
<h4 class="mb-4">Showing 16 verified guest comments</h4>
<div class="comment-box">
<div class="comment-image mt-2">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/>
</div>
<div class="comment-content">
<h4 class="mb-1 Soldman Kell">Soldman Kell</h4>
<p class="comment-date">April 25, 2019 at 10:46 am</p>
<div class="comment-rate">
<div class="rating mar-right-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="comment-title">"The worst hotel ever"</span>
</div>
<p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
<div class="comment-like">
<div class="like-title float-left">
<a class="nir-btn me-2" href="#">Reply</a>
</div>
</div>
</div>
</div>
<div class="comment-box">
<div class="comment-image mt-2">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/>
</div>
<div class="comment-content">
<h4 class="mb-1">Burson Lesson</h4>
<p class="comment-date">April 25, 2019 at 10:46 am</p>
<div class="comment-rate">
<div class="rating mar-right-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="comment-title">"Was too noisy and not suitable for business meetings"</span>
</div>
<p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
<div class="comment-like">
<div class="like-title float-left">
<a class="nir-btn" href="#">Reply</a>
</div>
</div>
</div>
</div>
</div>
<!-- blog review -->
<div class="single-add-review">
<h4 class="">Write a Review</h4>
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
