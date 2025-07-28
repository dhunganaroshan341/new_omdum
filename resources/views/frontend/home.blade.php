@extends('frontend.layout.main')
@section('content')
    <!-- banner starts -->
    @include('components.youtube-banner-simple')
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
    @include('components.call-to-action-home-section')
    <!-- call to action Ends -->

    <!-- top destination starts -->
    <section class="top-destination overflow-hidden bg-navy p-0">
        <div class="container-fluid">
            <div class="desti-inner">
                <div class="row d-flex align-items-center">
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">

                            <img src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Mount Kailash Tour</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Thimpu-City Bhutan</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}" alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">India Tour Package</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Mount kailash Premium </h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row d-flex align-items-center">

                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Tibet Tour</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}" alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Northern India Tour</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Tibet package </h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/everest.jpeg') }}"
                                alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Everest Base Camp </h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>



    <!-- Achivements Counter -->
    <x-achievement-counter />
    <!-- End Counter -->
    <!-- top deal starts -->
    @include('components.top-deal');
    <!-- top deal ends -->
    <!-- cta-horizon starts -->
    <div class="cta-horizon bg-navy pt-4 pb-4">
        <div class="container d-md-flex align-items-center justify-content-between">
            <h4 class="mb-0 white">It’s Time For a New Adventure! Don’t Wait Any Longer. Contact us!</h4>
            <a href="contact.html" class="nir-btn">Fine More Destination</a>
        </div>
    </div>
    <!-- cta-horizon Ends -->



    <!-- testomonial start -->
    <x-testimonial-section />
    <!-- testimonial ends -->

    <!-- News Starts -->
    <section class="news pb-2 bg-lgrey pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Latest <span>Blogs </span></h2>
                <p class="mb-0 ">Travel has helped us to understand the meaning of life and it has helped us become
                    better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="news-outer">
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        <div class="news-item overflow-hidden">
                            <div class="news-image">
                                <img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}" alt="image">
                            </div>
                            <div class="news-list mt-2 border-b pb-2 mb-2">
                                <ul>
                                    <li><a href="#" class="pe-3"><i class="fa fa-calendar pink pe-1"></i>
                                            4th AUg 2020 </a></li>
                                    <li><a href="#" class="pe-3"><i class="fa fa-comment pink pe-1"></i>
                                            3</a></li>
                                    <li><a href="#" class=""><i class="fa fa-tag pink pe-1"></i> Tour,
                                            Tourism, Travel</a></li>
                                </ul>
                            </div>
                            <div class="news-content mt-2">
                                <h4 class="pb-2 mb-2 border-b"><a href="blog-single.html">The real voyage does not
                                        consist in seeking new landscapes</a></h4>
                                <p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked
                                    being court hopes. Farther so friends am to detract. Forbade concern do private be.
                                    Offending residence but men engrossed shy. <br><br>One of the programs is Save Our I
                                    have personally in many of the programs mentioned on this site.</p>

                                <div class="author-img">
                                    <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                        alt="Demo Image">
                                    <span>By - Jack Well Fardez</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mb-4">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="#" class="pe-3"><i class="fa fa-calendar pink pe-1"></i>
                                                    4th AUg 2020 </a></li>
                                            <li><a href="#" class="pe-3"><i class="fa fa-comment pink pe-1"></i>
                                                    3</a></li>
                                            <li><a href="#" class=""><i class="fa fa-tag pink pe-1"></i>
                                                    Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="blog-single.html">Mountains is always
                                                right destination.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="#" class="pe-3"><i class="fa fa-calendar pink pe-1"></i>
                                                    4th AUg 2020 </a></li>
                                            <li><a href="#" class="pe-3"><i class="fa fa-comment pink pe-1"></i>
                                                    3</a></li>
                                            <li><a href="#" class=""><i class="fa fa-tag pink pe-1"></i>
                                                    Tourism</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="blog-single.html">We have not all those
                                                who wander are lost.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/kailash-vertical.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="#" class="pe-3"><i class="fa fa-calendar pink pe-1"></i>
                                                    4th AUg 2020 </a></li>
                                            <li><a href="#" class="pe-3"><i class="fa fa-comment pink pe-1"></i>
                                                    3</a></li>
                                            <li><a href="#" class=""><i class="fa fa-tag pink pe-1"></i>
                                                    Tour</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="blog-single.html">Here Our's Life is
                                                either a daring adventure.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="#" class="pe-3"><i class="fa fa-calendar pink pe-1"></i>
                                                    4th AUg 2020 </a></li>
                                            <li><a href="#" class="pe-3"><i class="fa fa-comment pink pe-1"></i>
                                                    3</a></li>
                                            <li><a href="#" class=""><i class="fa fa-tag pink pe-1"></i>
                                                    Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="blog-single.html">Take only memories,
                                                leave only footprints.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
