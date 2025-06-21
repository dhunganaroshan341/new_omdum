@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Blog Masonry</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Blog Masonry</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- blog starts -->
<section class="blog pb-6">
<div class="container">
<div class="blog-main">
<div class="row">
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/blog/blog1.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Dec 8, 2024</span>
<h3 class="mb-2"><a class="" href="#">Leverage agile frameworks to provide a robust</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination3.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Feb 21, 2024</span>
<h3 class="mb-2"><a class="" href="#">Travel – Explore the world with a backpack</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/blog/blog3.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Apr 8, 2024</span>
<h3 class="mb-2"><a class="" href="#">Milan shopping: 8 independent boutiques you need to know</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/blog/blog4.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Jan 15, 2024</span>
<h3 class="mb-2"><a class="" href="#">Mystery as British Airways A380 in London</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3 bg-navy">
<div class="blog-content p-0">
<span class="h-date white mb-1 font-weight-light d-block"> Nov 09, 2024</span>
<h3 class="mb-2"><a class="white" href="#">Investigate fresh Russian Olympic doping claims</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2 white" href="#"><i class="fa fa-file"></i> Categories</a> <a class="white" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-0 border-t pt-2 white">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/blog/blog6.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Jan 15, 2025</span>
<h3 class="mb-2"><a class="" href="#">Use your iPhone GPS for Hiking</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination6.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Mar 15, 2025</span>
<h3 class="mb-2"><a class="" href="#">The real voyage does not consist in seeking </a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/blog/blog7.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Oct 10, 2024</span>
<h3 class="mb-2"><a class="" href="#">Cordially convinced incommode existence</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3 bg-lgrey">
<div class="blog-content p-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Nov 09, 2024</span>
<h3 class="mb-2"><a class="" href="#">Travel far enough, you meet yourself.</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/blog/blog9.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Nov 09, 2024</span>
<h3 class="mb-2"><a class="" href="#">Another blog title post with a featured image</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination5.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Mar 15, 2024</span>
<h3 class="mb-2"><a class="" href="#">The real voyage does not consist in seeking </a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/blog/blog10.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Nov 09, 2024</span>
<h3 class="mb-2"><a class="" href="#">Another blog title post with a featured image</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3 bg-lgrey">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/destination/destination8.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Nov 09, 2024</span>
<h3 class="mb-2"><a class="" href="#">Another blog title post with a featured image</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/blog/blog9.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Nov 09, 2024</span>
<h3 class="mb-2"><a class="" href="#">Another blog title post with a featured image</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mansonry-item mb-2">
<div class="blog-full text-center p-3">
<img alt="" src="{{ asset('template/yatri_world/main-file/images/blog/blog9.jpg') }}"/>
<div class="blog-content pb-0">
<span class="h-date pink mb-1 font-weight-light d-block"> Nov 09, 2024</span>
<h3 class="mb-2"><a class="" href="#">Another blog title post with a featured image</a></h3>
<p class="date-cats mb-0 border-t pt-2 pb-2">
<a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
</p>
<p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper inceptos nisl consequat eros congue.</p>
<a class="grey font-weight-light" href="#">Read This <i class="fa fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="blog-button text-center">
<a class="nir-btn" href="">Load More</a>
</div>
</div>
</section>
<!-- blog Ends -->
@endsection
