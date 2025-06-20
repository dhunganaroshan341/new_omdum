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
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
    <section class="about-us">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h4 class="mb-1 blue font-weight-normal">About Om Mundum Treks</h4>
                            <h2>Extraordinary Journeys Beyond the Ordinary</h2>
                            <p class="mb-3">
                                At Om Mundum Treks, we believe travel is more than just a journey—it's a life-changing
                                experience. We offer unique adventures that take you off the beaten path, showcasing Nepal's
                                breathtaking mountains, rich Kirati culture, and pristine hidden trails. Specializing in the
                                newly opened Mundum Trail, we provide authentic cultural immersion experiences in eastern
                                Nepal's untouched wilderness. Our carefully crafted expeditions connect you with indigenous
                                Rai communities, ancient traditions, and spectacular Himalayan landscapes that few travelers
                                ever witness. Every trek is designed with purpose—to create meaningful connections between
                                adventurers and Nepal's most preserved cultural heritage while supporting local communities
                                and sustainable tourism practices.



                            </p>
                            <div class="about-imagelist">
                                <ul class="d-flex justify-content-between">
                                    <li class="me-2">
                                        <img alt="about image"
                                            src="{{ asset('template/yatri_world/main-file/images/destination/everest2-buddha.jpg') }}" />
                                    </li>
                                    <li class="me-2">
                                        <img alt="about image"
                                            src="{{ asset('template/yatri_world/main-file/images/destination/everest.jpg') }}" />
                                    </li>
                                    <li class="me-2">
                                        <img alt="about image"
                                            src="{{ asset('template/yatri_world/main-file/images/destination/trek.jpg') }}" />
                                    </li>
                                    <li class="me-2">
                                        <img alt="about image"
                                            src="{{ asset('template/yatri_world/main-file/images/destination/trek.jpg') }}" />
                                    </li>
                                    <li>
                                        <img alt="about image"
                                            src="{{ asset('template/yatri_world/main-file/images/destination/trek.jpg') }}" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img alt="about image"
                                src="{{ asset('template/yatri_world/main-file/images/destination/lumbini.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- form ends -->
    <!-- about-us starts -->
    <section class="about-us1 bg-grey pb-6">
        <div class="container">
            <div class="about-us1-inner pt-5 pb-8">
                <div class="about-image-box">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="about-content">
                                <h2 class="">Our Mission & Vision</h2>
                                <p class="mb-2">At Om Mundum Treks, our mission is to provide exceptional trekking and
                                    adventure experiences while promoting sustainable tourism and preserving Nepal’s rich
                                    cultural and natural heritage</p>
                                <br>

                                <div class="about-featured mb-0">
                                    <ul>
                                        <li>Authentic Experiences</li>
                                        <li>Safety & Excellence</li>
                                        <li>Sustainable Tourism</li>
                                        <li>Customer Satisfaction</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-image-main">
                                <div class="row">
                                    <div class="col-md-6 mt-4 mb-4">
                                        <img alt=""
                                            src="{{ asset('template/yatri_world/main-file/images/destination/tibet-vertical.jpg') }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <img alt=""
                                            src="{{ asset('template/yatri_world/main-file/images/destination/mountain-portrait.jpg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- why us starts -->
                <div class="why-us pt-4 border-t">
                    <div class="why-us-box">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="why-us-item text-center bg-lgrey">
                                    <div class="why-us-icon mb-2">
                                        <i class="flaticon-call pink"></i>
                                    </div>
                                    <div class="why-us-content">
                                        <h4><a href="#">Advice &amp; Support</a></h4>
                                        <p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours
                                            a day</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="why-us-item text-center bg-lgrey">
                                    <div class="why-us-icon mb-2">
                                        <i class="flaticon-global pink"></i>
                                    </div>
                                    <div class="why-us-content">
                                        <h4><a href="#">Air Ticketing</a></h4>
                                        <p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours
                                            a day</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="why-us-item text-center bg-lgrey">
                                    <div class="why-us-icon mb-2">
                                        <i class="flaticon-building pink"></i>
                                    </div>
                                    <div class="why-us-content">
                                        <h4><a href="#">Hotel Services</a></h4>
                                        <p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours
                                            a day</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="why-us-item text-center bg-lgrey">
                                    <div class="why-us-icon mb-2">
                                        <i class="flaticon-location-pin pink"></i>
                                    </div>
                                    <div class="why-us-content">
                                        <h4><a href="#">Tour Packages</a></h4>
                                        <p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours
                                            a day</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- why us ends -->
            </div>
        </div>
    </section>
    <!-- about-us ends -->
    <!-- our teams starts -->
    <section class="our-team pb-4">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Our <span>Team &amp; Guide</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better
                    people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="team-main">
                <div class="shop-slider">
                    <div class="team-list mx-3">
                        <div class="team-image">
                            <img alt="team"
                                src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}" />
                        </div>
                        <div class="team-content1 text-center">
                            <h4 class="mb-0 pink">Salmon Thuir</h4>
                            <p class="mb-0">Cheif Officer</p>
                        </div>
                    </div>
                    <div class="team-list mx-3">
                        <div class="team-image">
                            <img alt="team"
                                src="{{ asset('template/yatri_world/main-file/images/team/img2.jpg') }}" />
                        </div>
                        <div class="team-content1 text-center">
                            <h4 class="mb-0 pink">Horke Pels</h4>
                            <p class="mb-0">Head Chef</p>
                        </div>
                    </div>
                    <div class="team-list mx-3">
                        <div class="team-image">
                            <img alt="team"
                                src="{{ asset('template/yatri_world/main-file/images/team/img4.jpg') }}" />
                        </div>
                        <div class="team-content1 text-center">
                            <h4 class="mb-0 pink">Solden kalos</h4>
                            <p class="mb-0">Supervisor</p>
                        </div>
                    </div>
                    <div class="team-list mx-3">
                        <div class="team-image">
                            <img alt="team"
                                src="{{ asset('template/yatri_world/main-file/images/team/img3.jpg') }}" />
                        </div>
                        <div class="team-content1 text-center">
                            <h4 class="mb-0 pink">Nelson Bam</h4>
                            <p class="mb-0">Quality Assurance</p>
                        </div>
                    </div>
                    <div class="team-list mx-3">
                        <div class="team-image">
                            <img alt="team"
                                src="{{ asset('template/yatri_world/main-file/images/team/img5.jpg') }}" />
                        </div>
                        <div class="team-content1 text-center">
                            <h4 class="mb-0 pink">Cacics Coold</h4>
                            <p class="mb-0">Asst. Chef</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our teams Ends -->
    <!-- Counter -->
    <section class="counter-main pb-6" style="background-image: url(images/bg/bg4.jpg)">
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
                        <a class="nir-btn" href="destination-list.html">Fine More Destination</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-line ends -->
    <!-- testomonial start -->
    <section class="testimonial pb-6">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">What <span>People Say About Us</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better
                    people. Each time we travel, we see the world with new eyes.</p>
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
                            <a href="#"><img alt=""
                                    src="{{ asset('template/yatri_world/main-file/images/testimonial/img1.jpg') }}" /></a>
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
                            <a href="#"><img alt=""
                                    src="{{ asset('template/yatri_world/main-file/images/testimonial/img2.jpg') }}" /></a>
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
                            <a href="#"><img alt=""
                                    src="{{ asset('template/yatri_world/main-file/images/testimonial/img3.jpg') }}" /></a>
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
    <!-- client start -->
    <div class="partners bg-grey pt-4 pb-4">
        <div class="container-fluid">
            <div class="attract-slider">
                <div class="client-logo item">
                    <a href="#">
                        <img alt="partner"
                            src="{{ asset('template/yatri_world/main-file/images/clients/logo-01.png') }}" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img alt="partner"
                            src="{{ asset('template/yatri_world/main-file/images/clients/logo-02.png') }}" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img alt="partner"
                            src="{{ asset('template/yatri_world/main-file/images/clients/logo-03.png') }}" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img alt="partner"
                            src="{{ asset('template/yatri_world/main-file/images/clients/logo-04.png') }}" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img alt="partner"
                            src="{{ asset('template/yatri_world/main-file/images/clients/logo-02.png') }}" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img alt="partner"
                            src="{{ asset('template/yatri_world/main-file/images/clients/logo-03.png') }}" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img alt="partner"
                            src="{{ asset('template/yatri_world/main-file/images/clients/logo-04.png') }}" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img alt="partner"
                            src="{{ asset('template/yatri_world/main-file/images/clients/logo-01.png') }}" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img alt="partner"
                            src="{{ asset('template/yatri_world/main-file/images/clients/logo-02.png') }}" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- client ends -->
@endsection
