@extends('frontend.layout.main')
@section('content')
    <!-- banner starts -->
    @if ($video)
        @include('components.custom-banner-video')
    @else
        @include('components.youtube-banner-simple')
    @endif
    <!-- banner ends -->



    <!-- Fav destination Starts -->

    <x-fav-destination />
    <!-- Fav destination Ends -->


    <!-- form starts -->
    {{-- @include('components.booking-modal') --}}
    <!-- form ends -->



    <!-- top destination ends -->

    <!-- about-us starts -->
    <section class="about-us bg-grey mt-2 ">
        <div class="container">
            <div class="about-image-box mb-4">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="about-content pt-4">
                            <h4 class="mb-1 font-weight-normal orange">About Om mundum Tours & Treks</h4>
                            <h2 class="">We're Truely Dedicated To Make Your Travel Experience</h2>
                            <p class="mb-2">Top Tour Operators and Travel Agency. We offering in total 793 tours and
                                holidays throughout the world. Combined we have received 1532 customer reviews and an
                                average rating of 5 out of 5 stars. <br>Travel has helped us to understand the meaning
                                of life and it has helped us become better people. Each time we travel, we see the world
                                with new eyes.</p>
                            <div class="about-featured mb-0">
                                <ul>
                                    <li>Safety Travel System</li>
                                    <li>Budget-Friendly Tour</li>
                                    <li>Expert Trip Planning</li>
                                    <li>Fast Communication</li>
                                    <li>Right Solution & Guide</li>
                                    <li>24/7 Customer Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-main">
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                        alt="">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- why us starts -->
            @include('components.why-us-section')
            <!-- why us ends -->
        </div>
    </section>
    <!-- about-us ends -->

    <!-- Call to action starts -->
    <x-call-to-action-home-section />
    <!-- call to action Ends -->

    <!-- top destination starts -->
<x-random-packages/>



    <!-- Achivements Counter -->
    <x-achievement-counter />
    <!-- End Counter -->
    <!-- top deal starts -->
    <x-top-deal />
    <!-- top deal ends -->
    <!-- cta-horizon starts -->
    <div class="cta-horizon bg-navy pt-4 pb-4">
        <div class="container d-md-flex align-items-center justify-content-between">
            <h4 class="mb-0 white">It’s Time For a New Adventure! Don’t Wait Any Longer. Contact us!</h4>
            <a href="{{ route('contact') }}" class="nir-btn">Reach out To Us</a>
        </div>
    </div>
    <!-- cta-horizon Ends -->



    <!-- testomonial start -->
    <x-testimonial-section />
    <!-- testimonial ends -->

    <!-- News Starts -->
    <x-blog-and-news-section />
    <!-- News Ends -->

    <!-- Newsletter Starts -->
    <section class="newsletter-area m-0 pb-5 pt-5 bg-navy">
        <div class="container">
            <div class="newsletter-main">
                <div class="newsletter-wrapper">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-5">
                            <div class="newsletter-content-wrapper d-sm-flex align-items-center">
                                <div class="newsletter-icon">
                                    <i class="fa fa-envelope-open white"></i>
                                </div>
                                <div class="newsletter-content ms-4">
                                    <h3 class="title white mb-1">SUBSCRIBE <span>Now!</span> </h3>
                                    <p class="m-0 white">Get the latest trekking updates, travel tips, and exclusive offers
                                        delivered straight to your inbox.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="text" placeholder="Enter Your Email...">
                                    <button class="nir-btn">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Ends -->
@endsection
@push('styles')
    <style>
        .book-now-a:hover {
            color: var(--omundum-green);
        }
    </style>
@endpush
