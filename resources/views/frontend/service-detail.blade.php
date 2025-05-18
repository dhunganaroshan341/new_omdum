@extends('frontend.layout.main')
@section('content')

<section class="hero-small">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('{{ asset('storage/' . ($pageBanner->image ?? 'images/banner1.jpg')) }}');">
                <div class="hero-small-background-overlay"></div>
                <div class="container h-100">
                    <div class="row align-items-center d-flex h-100">
                        <div class="col-md-12">
                            <div class="block">
                                <span class="text-uppercase text-sm letter-spacing"></span>
                                <h3 class="mb-3 mt-3 text-center"> Services &nbsp <i class="fa-solid fa-angle-right"></i> &nbsp {{ $serviceDetail->name ?? '' }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-2 py-5">
    <div class="container py-2">
        <div class="row">
            <div class="col-md-6 align-items-center d-flex">
                <div class="about-block">
                    <h1 class="title-color mb-3">{{ $serviceDetail->name ?? '' }}</h1>
                    <p>{!! $serviceDetail->description ?? '' !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-realm-background-before">
                    @if(!empty($serviceDetail->image))
                        <img src="{{ asset('storage/' . $serviceDetail->image) }}" alt="" class="w-100">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-4 py-5 text-center">
    <div class="hero-background-overlay"></div>
    <div class="container">
        <div class="help-container">
            <h1 class="title">Do you need help?</h1>
            <p class="card-text mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsum, odit velit exercitationem praesentium error id iusto dolorem expedita nostrum eius atque? Aliquam ab reprehenderit animi sapiente quasi, voluptate dolorum?</p>
            <a href="#" class="btn btn-primary mt-3">Call Us Now <i class="fa-solid fa-angle-right"></i></a>
        </div>
    </div>
</section>

{{-- blog and news section --}}
@include('components.blog-and-news-section')

{{-- team section --}}
@endsection
