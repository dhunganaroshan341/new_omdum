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
    <section class="about-us">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="mb-1 blue font-weight-normal">About Om Mundum Treks</h2>
                            <h3>Extraordinary Journeys Beyond the Ordinary</h3>
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
                                            src="http://bivekp23.sg-host.com/template/yatri_world/main-file/images/destination/everest2-buddha.jpg">
                                    </li>
                                    <li class="me-2">
                                        <img alt="about image"
                                            src="http://bivekp23.sg-host.com/template/yatri_world/main-file/images/destination/everest.jpg">
                                    </li>
                                    <li class="me-2">
                                        <img alt="about image"
                                            src="http://bivekp23.sg-host.com/template/yatri_world/main-file/images/destination/trek.jpg">
                                    </li>
                                    <li class="me-2">
                                        <img alt="about image"
                                            src="http://bivekp23.sg-host.com/template/yatri_world/main-file/images/destination/trek.jpg">
                                    </li>
                                    <li>
                                        <img alt="about image"
                                            src="http://bivekp23.sg-host.com/template/yatri_world/main-file/images/destination/trek.jpg">
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
