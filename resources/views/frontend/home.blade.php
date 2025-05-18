@extends('frontend.layout.main')
@section('content')
@include('components.home-banner-slider-section')

    @if(!empty($frontend) && $frontend->description && $frontend->image)
    <section class="section-2 py-5">
        <div class="container py-2">
            <div class="row">
                <div class="col-md-6 align-items-center d-flex">
                    <div class="about-block">
                        <h1 class="title-color">Welcome</h1>
                        <p>{!! $frontend->description !!}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-red-background">
                        <img src="{{ asset('storage/' . $frontend->image) }}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
<section class="section-2 py-5">
    <div class="container py-2">
        <div class="row">
            <div class="col-md-6 align-items-center d-flex">
                <div class="about-block">
                    <h1 class="title-color">{{!empty($welcome_title)?$welcome_title:'Welcome to Realm Infotech' }}</h1>
                    <div class="mt-2 mb-3 text-muted">
                       {{ !empty($welcome_subtitle)? $welcome_subtitle:'Your Trusted Partner in Digital Solutions' }}
                    </div>
                    <p>
                        {{ !empty($welcome_description) ? $welcome_description : 'Realm Infotech is a dynamic software development and digital marketing company located in Patan Dhoka, Lalitpur. We specialize in delivering modern, reliable, and scalable digital solutions that empower businesses of all sizes. Whether you\'re looking to build a powerful web application, strengthen your brand online, or streamline your business operations, our experienced team is here to help. At Realm Infotech, we believe in combining creativity with cutting-edge technology to drive innovation and long-term growth.' }}
                    </p>
                    <p>
                        <span class="text-realm-blue-dark">Visit us at</span> <a href="https://realminfotek.com" target="_blank"><span class="text-realm-yellow-dark">realminfotek.com</span></a>.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-red-background">
                    <img src="{{ !empty($welcome_image) ? asset('storage/'.$welcome_image->path) : asset('assets/images/about-us.jpg') }}" alt="About Realm Infotech" class="w-100">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section-3 py-5">
    <div class="container">
        <div class="divider mb-3"></div>
        <h2 class="title-color mb-4 h1">Services</h2>
        <div class="cards">
           <div class="row">
            @foreach ($services as $service)


                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/' . $service->image ) }}" class="card-img-top" alt="">
                        <div class="card-body p-3">
                            <h1 class="card-title mt-2"><a href="{{ route('service-detail', $service->id) }}">{{ $service->name }}</a></h1>
                            <div class="content pt-2">
                                <p class="card-text">{{ $service->short_desc }}</p>
                            </div>
                            <a href="{{ route('service-detail', $service->id) }}" class="btn btn-primary mt-4">Details <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach


           </div>
        </div>
    </div>
</section>

{{-- do you need help section --}}
@include('components.cta-section')


    <section class="section-3 py-5">
        {{-- @include('frontend.testimonial') --}}
       @include('components.testimonial-section', ['testimonials' => $testimonials ?? []])

    </section>

    {{-- blog and news section --}}
    @include('components.blog-and-news-section')

    <script>
        $(document).ready(function(){
            $("#staticBackdrop").modal("show");
        })
    </script>
@endsection

@push('styles')
    <style>
        .carousel-control-icon{
            padding:5px;
        }
    </style>

@endpush
