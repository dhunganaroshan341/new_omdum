@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Gallery</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Gallery</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- Gallery starts -->
<div class="gallery pt-10 pb-6">
<div class="container">
<div class="row mt-3">
<div class="col-md-6">
<div class="gallery-item mb-4">
<div class="gallery-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending1.jpg') }}"/>
<div class="overlay"></div>
</div>
<div class="gallery-content">
<ul>
<li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending1.jpg"><i class="fa fa-eye"></i></a></li>
<li><a href="#"><i class="fa fa-link"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-6">
<div class="gallery-item mb-4">
<div class="gallery-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending2.jpg') }}"/>
<div class="overlay"></div>
</div>
<div class="gallery-content">
<ul>
<li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending2.jpg"><i class="fa fa-eye"></i></a></li>
<li><a href="#"><i class="fa fa-link"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="gallery-item mb-4">
<div class="gallery-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending3.jpg') }}"/>
<div class="overlay"></div>
</div>
<div class="gallery-content">
<ul>
<li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending3.jpg"><i class="fa fa-eye"></i></a></li>
<li><a href="#"><i class="fa fa-link"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="gallery-item mb-4">
<div class="gallery-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending4.jpg') }}"/>
<div class="overlay"></div>
</div>
<div class="gallery-content">
<ul>
<li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending4.jpg"><i class="fa fa-eye"></i></a></li>
<li><a href="#"><i class="fa fa-link"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="gallery-item mb-4">
<div class="gallery-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending5.jpg') }}"/>
<div class="overlay"></div>
</div>
<div class="gallery-content">
<ul>
<li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending5.jpg"><i class="fa fa-eye"></i></a></li>
<li><a href="#"><i class="fa fa-link"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="gallery-item mb-4">
<div class="gallery-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending6.jpg') }}"/>
<div class="overlay"></div>
</div>
<div class="gallery-content">
<ul>
<li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending6.jpg"><i class="fa fa-eye"></i></a></li>
<li><a href="#"><i class="fa fa-link"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="gallery-item mb-4">
<div class="gallery-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending7.jpg') }}"/>
<div class="overlay"></div>
</div>
<div class="gallery-content">
<ul>
<li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending7.jpg"><i class="fa fa-eye"></i></a></li>
<li><a href="#"><i class="fa fa-link"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="gallery-item mb-4">
<div class="gallery-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/trending/trending8.jpg') }}"/>
<div class="overlay"></div>
</div>
<div class="gallery-content">
<ul>
<li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending8.jpg"><i class="fa fa-eye"></i></a></li>
<li><a href="#"><i class="fa fa-link"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Gallery Ends -->
@endsection
