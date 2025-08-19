@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    {{-- <section class="breadcrumb-main"
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
    </section> --}}
    @php
        $maintitle = 'About Us';
        $page = 'about';
    @endphp
    <x-bread-crumb :main-title="$maintitle" :pageName="$page" />

    <!-- BreadCrumb Ends -->
    <!-- form starts -->
    <x-about-us-section />

    <!-- our teams Ends -->
    <!-- Counter -->
    <x-achievement-counter />
    <!-- End Counter -->
    <!-- content-line start -->
    <div class="content-line bg-navy pb-6 pt-6">
        <div class="container">
            <div class="content-line-inner">
                <div class="row d-md-flex align-items-center justify-content-between">
                    <div class="col-md-9">
                        <p class="mb-0 white h4">
                            It’s Time For a New Adventure! Don’t Wait Any Longer.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <a class="nir-btn" href="{{ route('packages') }}">Find More Destination</a>
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
@push('styles')
    <style>
        .client-logo.item.slick-slide {
            border-radius: 20%;
        }

        .about-image img {
            height: 400px;
            object-fit: cover;
        }
    </style>
@endpush
