@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url({{ asset('/template/yatri_world/main-file/images/tibet.jpg') }});">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">About Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->
    <!-- form starts -->
    <x-about-us-section />

    <!-- our teams Ends -->
    <!-- Counter -->
    <section class="counter-main pb-6"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/bg/bg4.jpg') }}')">
        <div class="container">
            <div class="counter text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="counter-item bg-lgrey">
                            <i class="fa fa-users white bg-navy mb-1"></i>
                            <h3 class="value mb-0 navy">100</h3>
                            <h4 class="m-0">Happy Customers</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="counter-item bg-lgrey">
                            <i class="fa fa-plane mb-1 white bg-navy"></i>
                            <h3 class="value mb-0 navy">50</h3>
                            <h4 class="m-0">Amazing Tours </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="counter-item bg-lgrey">
                            <i class="fa fa-chart-bar white bg-navy mb-1"></i>
                            <h3 class="value mb-0 navy">3472</h3>
                            <h4 class="m-0">In Business</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="counter-item bg-lgrey">
                            <i class="fa fa-support white bg-navy mb-1"></i>
                            <h3 class="value mb-0 navy">523</h3>
                            <h4 class="m-0">Support Cases </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- End Counter -->
    <!-- content-line start -->
    <div class="content-line bg-navy pb-6 pt-6">
        <div class="container">
            <div class="content-line-inner">
                <div class="row d-md-flex align-items-center justify-content-between">
                    <div class="col-md-9">
                        <p class="mb-0 white h4">
                            It’s Time For a New Adventure! Don’t Wait Any Longer. Contact us!
                        </p>
                    </div>
                    <div class="col-md-3">
                        <a class="nir-btn" href="#">Fine More Destination</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-line ends -->
    <!-- testomonial start -->
    <x-testimonial-section />
    <!-- testimonial ends -->
    <!-- client start -->
    <x-client-carousel />
@endsection
