@extends('frontend.layout.main')
@section('content')
    <!-- banner starts -->
    @include('components.youtube-banner-video')
    <!-- banner ends -->



    <!-- Fav destination Starts -->
    <section class="trending destination pb-6 bg-grey pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Choose Your <span>Favourite Destination</span></h2>

            </div>
            <div class="trend-box">
                <div class="price-navtab text-center mb-4">
                    <ul class="nav nav-tabs">

                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tibet">Tibet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#nepal">Nepal</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#india">India</a>
                        </li>

                    </ul>

                </div>
                <div class="tab-content">












                    <div id="tibet" class="tab-pane fade in active">
                        <div class="row">
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ms-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="destination-single.html">Tibet Holidays Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i
                                                    class="fa fa-map-marker me-1 ms-3"></i> China.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-center">
                                                <a class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                                                        class="d-author me-2" alt="">
                                                    Book Now

                                                </a>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="fa fa-arrow-right white ps-1"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ms-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="destination-single.html">Mount Kailash Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye me-1"></i> 615 Visiting Places <i
                                                    class="fa fa-map-marker me-1 ms-3"></i> China.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-center">
                                                <a class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                                                        class="d-author me-2" alt="">
                                                    Book Now

                                                </a>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="fa fa-arrow-right white ps-1"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ms-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="destination-single.html">Multi Nation Package</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye me-1"></i> 926 Visiting Places <i
                                                    class="fa fa-map-marker me-1 ms-3"></i> Bhutan/China.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-center">
                                                <a class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                                                        class="d-author me-2" alt="">
                                                    Book Now

                                                </a>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="fa fa-arrow-right white ps-1"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="nepal" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ms-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="destination-single.html">Nepal Special Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i
                                                    class="fa fa-map-marker me-1 ms-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A sacred escape nestled in the Himalayas – perfect
                                                for soul-searching and adventure.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-center">
                                                <a class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                                                        class="d-author me-2" alt="">
                                                    Book Now

                                                </a>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="fa fa-arrow-right white ps-1"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ms-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="destination-single.html">Everest New Year Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye me-1"></i> 615 Visiting Places <i
                                                    class="fa fa-map-marker me-1 ms-3"></i> Solukhumbu</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A sacred escape nestled in the Himalayas – perfect
                                                for soul-searching and adventure.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-center">
                                                <a class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                                                        class="d-author me-2" alt="">
                                                    Book Now

                                                </a>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="fa fa-arrow-right white ps-1"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ms-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="destination-single.html">Nepal Holiday tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye me-1"></i> 926 Visiting Places <i
                                                    class="fa fa-map-marker me-1 ms-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-center">
                                                <a class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                                                        class="d-author me-2" alt="">
                                                    Book Now

                                                </a>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="fa fa-arrow-right white ps-1"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="india" class="tab-pane fade">
                        <div class="row">
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ms-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="destination-single.html">Nepal Holidays Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye me-1"></i> 852 Visiting Places <i
                                                    class="fa fa-map-marker me-1 ms-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-center">
                                                <a class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                                                        class="d-author me-2" alt="">
                                                    Book Now

                                                </a>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="fa fa-arrow-right white ps-1"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ms-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="destination-single.html">Tibet Holidays Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye me-1"></i> 615 Visiting Places <i
                                                    class="fa fa-map-marker me-1 ms-3"></i> Tibet.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-center">
                                                <a class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                                                        class="d-author me-2" alt="">
                                                    Book Now

                                                </a>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="fa fa-arrow-right white ps-1"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ms-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="destination-single.html">India Holiday Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye me-1"></i> 926 Visiting Places <i
                                                    class="fa fa-map-marker me-1 ms-3"></i> India.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-center">
                                                <a class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                                                        class="d-author me-2" alt="">
                                                    Book Now

                                                </a>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="fa fa-arrow-right white ps-1"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
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



    <!-- Counter -->
    <section class="counter-main pb-6 pt-10"
        style="background-image: url('{{ asset('/template/yatri_world/main-file/images/bg/bg4.jpg') }}')">
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
                            <i class="fa fa-building  white bg-navy mb-1"></i>
                            <h3 class="value mb-0 navy">3472</h3>
                            <h4 class="m-0">In Business</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="counter-item bg-lgrey">
                            <i class="fa fa-support  white bg-navy mb-1"></i>
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
    <!-- top deal starts -->
    <section class="top-deals bg-grey pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Today's <span>Top Deal</span></h2>
                {{-- <p class="mb-0">....</p> --}}
            </div>
            <div class="team-slider">
                {{-- kailash --}}
                <div class="slider-item position-relative mx-3">
                    <div class="slider-image">
                        <img src="{{ asset('template/yatri_world/main-file/images/kailash-vertical.jpg') }}"
                            alt="image">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Tibet,China</h6>
                        <h4><a href="#">Visit Mount kailash!</a></h4>
                        <p>With upto 30% Off, experience Mount kailash your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                {{-- kailash --}}

                {{-- kailash --}}
                <div class="slider-item position-relative mx-3">
                    <div class="slider-image">
                        <img src="{{ asset('template/yatri_world/main-file/images/kailash-vertical.jpg') }}"
                            alt="image">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Tibet,China</h6>
                        <h4><a href="#">Visit Mount kailash!</a></h4>
                        <p>With upto 30% Off, experience Mount kailash your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                {{-- kailash --}}

                {{-- kailash --}}
                <div class="slider-item position-relative mx-3">
                    <div class="slider-image">
                        <img src="{{ asset('template/yatri_world/main-file/images/kailash-vertical.jpg') }}"
                            alt="image">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Tibet,China</h6>
                        <h4><a href="#">Visit Mount kailash!</a></h4>
                        <p>With upto 30% Off, experience Mount kailash your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                {{-- kailash --}}

                {{-- kailash --}}
                <div class="slider-item position-relative mx-3">
                    <div class="slider-image">
                        <img src="{{ asset('template/yatri_world/main-file/images/kailash-vertical.jpg') }}"
                            alt="image">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Tibet,China</h6>
                        <h4><a href="#">Visit Mount kailash!</a></h4>
                        <p>With upto 30% Off, experience Mount kailash your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                {{-- kailash --}}

            </div>
        </div>
    </section>
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
    <section class="testimonial pb-6 pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">What <span>People Say About Us</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become
                    better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="review-slider">
                <div class="item">
                    <div class="testimonial-item1 text-center">
                        <div class="details">
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry.
                                Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem.
                                Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}"
                                    alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 pink">Jared Erondu</h4>
                                <span>Supervisor</span>
                            </div>
                        </div>
                        <i class="fa fa-quote-left mb-2"></i>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item1 text-center">
                        <div class="details">
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry.
                                Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem.
                                Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}"
                                    alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 pink">Cadic Vegeta</h4>
                                <span>Sr. Chef</span>
                            </div>
                        </div>
                        <i class="fa fa-quote-left mb-2"></i>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item1 text-center">
                        <div class="details">
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry.
                                Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem.
                                Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}"
                                    alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 pink">Jonathan Beri</h4>
                                <span>Manager</span>
                            </div>
                        </div>
                        <i class="fa fa-quote-left mb-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
