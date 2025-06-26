@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/mundum-banner.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Mundum Cultural Trek</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/destinations') }}">Destinations</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mundum Trail</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- blog starts -->
    <section class="blog trending destination-b">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-lg-8">
                    <div class="single-content">
                        <div class="single-full-title border-b mb-2 pb-2">
                            <div class="single-title">
                                <h3 class="mb-1">12-Day Mundum Trek – Cultural & Scenic Adventure</h3>
                                <div class="rating-main d-sm-flex align-items-center">
                                    <p class="mb-0 me-3"><i class="flaticon-location-pin"></i> Eastern Nepal, Mundum Trail
                                    </p>
                                    <div class="rating me-3">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-half-o checked"></span>
                                    </div>
                                    <span>(245 Reviews)</span>
                                </div>
                            </div>

                        </div>
                        <div class="description-images mb-4">
                            <div class="thumbnail-images">
                                <div class="slider-store">
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/1.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/2.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/3.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/7.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/8.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/2.jpg') }}" />
                                    </div>
                                </div>
                                <div class="slider-thumbs">
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/1.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/2.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/3.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/7.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/8.jpg') }}" />
                                    </div>
                                    <div>
                                        <img alt="1"
                                            src="{{ asset('template/yatri_world/main-file/images/slider/2.jpg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tour-includes mb-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><i aria-hidden="true" class="fa fa-clock-o pink me-1"></i> 12-15 Days</td>
                                        <td><i aria-hidden="true" class="fa fa-group pink me-1"></i> Max Group Size: 12</td>
                                        <td><i aria-hidden="true" class="fa fa-calendar pink me-1"></i> Year-Round Trekking
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i aria-hidden="true" class="fa fa-user pink me-1"></i> Min Age: 12+</td>
                                        <td><i aria-hidden="true" class="fa fa-map-signs pink me-1"></i> Pickup: Kathmandu
                                            Airport</td>
                                        <td><i aria-hidden="true" class="fa fa-file-alt pink me-1"></i> Languages: English,
                                            Nepali, Kirati</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="description mb-2">
                            <h4>Description</h4>
                            <p>
                                The 12-Day Mundum Trek offers a unique journey through the pristine mountains of eastern
                                Nepal, immersing you in the rich Kirati Rai culture and breathtaking natural landscapes.
                                Explore remote villages, sacred religious sites, and experience authentic local traditions
                                while trekking through unspoiled terrain.
                            </p>
                            <p class="mb-0">
                                This trek balances cultural immersion with scenic adventure, including ridge walks,
                                panoramic mountain views, and camping in peaceful, less-traveled locations.
                            </p>
                        </div>

                        <div class="description mb-2">
                            <div class="row">
                                <div class="col-md-6 mb-2 pe-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Departure &amp; Return Location</h5>
                                        <p class="mb-0">Kathmandu Tribhuvan International Airport (Google Map)</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 ps-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Accommodation</h5>
                                        <p class="mb-0">Local lodges and quality camping equipment</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 pe-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Departure Time</h5>
                                        <p class="mb-0">Morning transfer from Kathmandu</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 ps-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Trek Difficulty</h5>
                                        <p class="mb-0">Easy to Moderate</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 pe-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Price Includes</h5>
                                        <ul>
                                            <li><i class="fa fa-check pink me-1"></i> Airport pickup and drop-off</li>
                                            <li><i class="fa fa-check pink me-1"></i> Experienced local guides and porters
                                            </li>
                                            <li><i class="fa fa-check pink me-1"></i> All accommodation during the trek</li>
                                            <li><i class="fa fa-check pink me-1"></i> Meals during trekking days</li>
                                            <li><i class="fa fa-check pink me-1"></i> Camping and cooking equipment</li>
                                            <li><i class="fa fa-check pink me-1"></i> Trekking permits and entrance fees
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 ps-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Price Excludes</h5>
                                        <ul>
                                            <li><i class="fa fa-close pink me-1"></i> International airfare</li>
                                            <li><i class="fa fa-close pink me-1"></i> Personal expenses and tips</li>
                                            <li><i class="fa fa-close pink me-1"></i> Travel insurance</li>
                                            <li><i class="fa fa-close pink me-1"></i> Beverages and alcohol</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="description mb-4">
                            <h4>What to Expect</h4>
                            <p>
                                Experience peaceful trekking routes that wind through pristine forests, traditional Kirati
                                Rai villages, and stunning ridge walks with Himalayan panoramas. Encounter warm hospitality,
                                unique cultural festivals, and authentic local cuisine. Expect moderate hiking days with
                                plenty of opportunities for photography, wildlife spotting, and star gazing under clear
                                mountain skies.
                            </p>
                            <p class="mb-0">
                                The trek provides a perfect balance of adventure, cultural immersion, and natural beauty,
                                suitable for beginners with moderate fitness.
                            </p>
                        </div>

                        <div class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion">

                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 1</span> - Arrival in Kathmandu</h5>
                                </div>
                                <div class="accrodion-content" style="display: block;">
                                    <div class="inner">
                                        <p>Airport pickup and transfer to your hotel. Briefing about the trek, equipment
                                            check, and overnight stay in Kathmandu.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 2</span> - Kathmandu to Diktel</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Enjoy a scenic 12-hour bus journey from Kathmandu to Diktel (1,650m). Overnight
                                            stay at a local lodge preparing for the trek start.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 3</span> - Diktel to Chakhewa</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Start trekking through remote villages and immerse yourself in the Kirati Rai
                                            culture. Camp overnight in the scenic outdoors.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 4 - 10</span> - Trekking the Mundum Trail</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Enjoy daily hikes of 5-7 hours, passing through Tempke Ridge, Dhotre Deurali,
                                            Maiyung, and other cultural villages. Experience authentic local life and camp
                                            in peaceful natural settings.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 11</span> - Silichung Peak and Return</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Early morning ascent to Silichung Peak (4,153m) for spectacular panoramic views
                                            of the Himalayas. Begin descent to lower camps.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 12</span> - Return to Kathmandu</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Final day of trekking and travel back to Kathmandu. Enjoy a farewell dinner and
                                            overnight stay at the hotel.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="single-map mb-4">
                            <h4>Map</h4>
                            <div class="map">
                                <div style="width: 100%">
                                    <iframe height="400"
                                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="single-review mb-4">
                            <h4>Average Reviews</h4>
                            <div class="row d-flex align-items-center">
                                <div class="col-md-4">
                                    <div class="review-box bg-pink text-center pb-4 pt-4">
                                        <h2 class="mb-1 white"><span>4.6</span>/5</h2>
                                        <h4 class="white mb-1">"An unforgettable cultural journey!"</h4>
                                        <p class="mb-0 white font-italic">From 85 Reviews</p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="review-progress">
                                        <div class="progress-item">
                                            <p>Guides & Support</p>
                                            <div class="progress">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="90"
                                                    class="progress-bar" role="progressbar" style="width:90%">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Accommodation</p>
                                            <div class="progress">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85"
                                                    class="progress-bar" role="progressbar" style="width:85%">
                                                    <span class="sr-only">85% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Value for Money</p>
                                            <div class="progress">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="88"
                                                    class="progress-bar" role="progressbar" style="width:88%">
                                                    <span class="sr-only">88% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Safety</p>
                                            <div class="progress">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="92"
                                                    class="progress-bar" role="progressbar" style="width:92%">
                                                    <span class="sr-only">92% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Scenery & Experience</p>
                                            <div class="progress">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95"
                                                    class="progress-bar" role="progressbar" style="width:95%">
                                                    <span class="sr-only">95% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- guest comments list -->
                        <div class="single-comments single-box mb-4">
                            <h5 class="border-b pb-2 mb-2">Showing 16 verified guest comments</h5>

                            <div class="comment-box">
                                <div class="comment-image">
                                    <img alt="image" src="images/reviewer/helena.jpg" />
                                </div>
                                <div class="comment-content">
                                    <h5 class="mb-1">Helena</h5>
                                    <p class="comment-date">April 25, 2024 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">"An unforgettable cultural journey!"</span>
                                    </div>
                                    <p class="comment">
                                        The trek provided a deep insight into Kirati culture, and the guides were incredibly
                                        knowledgeable and supportive. The landscapes were breathtaking and peaceful.
                                    </p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a class="nir-btn" href="#">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a class="like" href="#"><i class="fa fa-thumbs-up"></i> Like</a>
                                            <a class="dislike" href="#"><i class="fa fa-thumbs-down"></i>
                                                Dislike</a>
                                            <a class="love" href="#"><i class="flaticon-like"></i> Love</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-box">
                                <div class="comment-image">
                                    <img alt="image" src="images/reviewer/bibek.jpg" />
                                </div>
                                <div class="comment-content">
                                    <h5 class="mb-1">Bibek</h5>
                                    <p class="comment-date">May 10, 2024 at 2:30 pm</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <span class="comment-title">"Beautiful trails and excellent service"</span>
                                    </div>
                                    <p class="comment">
                                        Om Mundum Treks offered an incredible experience with well-organized logistics and
                                        friendly guides. The cultural immersion made this trek truly special.
                                    </p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a class="nir-btn" href="#">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a class="like" href="#"><i class="fa fa-thumbs-up"></i> Like</a>
                                            <a class="dislike" href="#"><i class="fa fa-thumbs-down"></i>
                                                Dislike</a>
                                            <a class="love" href="#"><i class="flaticon-like"></i> Love</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- blog review -->
                        <div class="single-add-review">
                            <h4>Write a Review</h4>
                            <form>
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input placeholder="Name" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input placeholder="Email" type="email" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea>Comment</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-btn">
                                            <a class="nir-btn" href="#">Submit Review</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <form class="form-content">
                                    <h4 class="title white text-center">MAKE A BOOKING</h4>
                                    <div class="row gy-4">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <span class="white">Your choosen date is</span>
                                                <h3 class="choosen-date white mb-0"><i class="fa fa-calendar"></i> 10 - 15
                                                    March, 2020 <small class="d-block font-weight-normal">(5 days) <a
                                                            class="d-block pink float-right"
                                                            href="#">Change</a></small></h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="white">No. Of People</label>
                                                <div class="input-box">
                                                    <i class="flaticon-add-user"></i>
                                                    <select class="niceSelect">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group bg-white p-3">
                                                <ul>
                                                    <li class="d-block pb-1">$150.00 x 2 guests<span
                                                            class="float-right pink">$300.00</span></li>
                                                    <li class="d-block pb-1">Booking fee + tax<span
                                                            class="float-right pink">$10.00</span></li>
                                                    <li class="d-block pb-1">Book now &amp; Save<span
                                                            class="float-right pink">-$15</span></li>
                                                    <li class="d-block pb-1">Other fees<span
                                                            class="float-right pink">Free</span></li>
                                                    <li class="d-block border-t">
                                                        <div class="pt-1">
                                                            <span>Total</span><span class="float-right pink">$350.00</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-0">
                                                <a class="nir-btn w-100" href="#">Instant Book</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-item">
                                <div class="map-box">
                                    <i class="fa fa-map-marker"></i>
                                    <a href="#">Show on Map</a>
                                </div>
                                <div class="location-rating mb-2 mt-2">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-2">
                                            <span class="location-box">4.5</span>
                                        </div>
                                        <div class="col-md-10">
                                            <p class="mb-0">Exceptional</p>
                                            <span>Location rating score</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="location-features">
                                    <ul>
                                        <li class="mb-2"><i class="fa fa-map-marker pink me-2"></i> Better than 99% of
                                            properties in London</li>
                                        <li class="mb-2"><i class="fa fa-map-marker pink me-2"></i> Exceptional Location
                                            - Inside city center</li>
                                        <li><i class="fa fa-map-marker pink me-2"></i> Popular Neighbourhood</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-contact text-center bg-navy">
                                    <i class="fa fa-phone-alt white"></i>
                                    <h3 class="white"><span>Book</span> by phone</h3>
                                    <a class="phone white" href="tel://004542344599">+45 423 445 99</a>
                                    <small class="white d-block mt-2">Monday to Friday 9.00am - 7.30pm</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->
    <!-- Trending Starts -->
    <section class="trending destination bg-grey pb-6">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Related <span>Tour Packages</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better
                    people. Each time we travel, we see the world with new eyes.</p>
            </div>

            <div class="trend-box d-flex flex-wrap justify-content-center gap-4">

                <!-- Tibet -->
                <div class="trend-item mx-3">
                    <div class="trend-image position-relative">
                        <img src="images/tibet.jpg" alt="Tibet Tour" />
                        <div class="trend-tags"><a href="#"><i class="flaticon-like"></i></a></div>
                    </div>
                    <div class="trend-content-main">
                        <div class="trend-content">
                            <h6><i class="fa fa-map-marker-alt"></i> Tibet</h6>
                            <h4><a href="#">Mystical Journey to Lhasa & Everest Base Camp</a></h4>
                            <div class="rating-main d-flex align-items-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span
                                        class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span
                                        class="fa fa-star checked"></span>
                                </div>
                                <span class="ms-2">28 Reviews</span>
                            </div>
                        </div>
                        <div class="trend-last-main">
                            <p class="mb-0 trend-para">Explore ancient monasteries and the breathtaking Himalayas of Tibet.
                            </p>
                            <div class="trend-last d-flex align-items-center justify-content-between">
                                <p class="mb-0 white"><i class="fa fa-clock-o"></i> 7 Days &amp; 6 Nights</p>
                                <div class="trend-price">
                                    <p class="price white mb-0">From <span>$799.00</span></p>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="#" class="btn btn-sm btn-primary">Book Now &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bhutan -->
                <div class="trend-item mx-3">
                    <div class="trend-image position-relative">
                        <img src="images/bhutan.jpg" alt="Bhutan Tour" />
                        <div class="trend-tags"><a href="#"><i class="flaticon-like"></i></a></div>
                    </div>
                    <div class="trend-content-main">
                        <div class="trend-content">
                            <h6><i class="fa fa-map-marker-alt"></i> Bhutan</h6>
                            <h4><a href="#">Discover the Hidden Kingdom of Bhutan</a></h4>
                            <div class="rating-main d-flex align-items-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span
                                        class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span
                                        class="fa fa-star checked"></span>
                                </div>
                                <span class="ms-2">35 Reviews</span>
                            </div>
                        </div>
                        <div class="trend-last-main">
                            <p class="mb-0 trend-para">Walk the Tiger’s Nest and experience Bhutan’s peaceful vibes.</p>
                            <div class="trend-last d-flex align-items-center justify-content-between">
                                <p class="mb-0 white"><i class="fa fa-clock-o"></i> 5 Days &amp; 4 Nights</p>
                                <div class="trend-price">
                                    <p class="price white mb-0">From <span>$620.00</span></p>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="#" class="btn btn-sm btn-primary">Book Now &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- India -->
                <div class="trend-item mx-3">
                    <div class="trend-image position-relative">
                        <img src="images/india.jpg" alt="India Tour" />
                        <div class="trend-tags"><a href="#"><i class="flaticon-like"></i></a></div>
                    </div>
                    <div class="trend-content-main">
                        <div class="trend-content">
                            <h6><i class="fa fa-map-marker-alt"></i> India</h6>
                            <h4><a href="#">Golden Triangle: Delhi, Agra & Jaipur</a></h4>
                            <div class="rating-main d-flex align-items-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span
                                        class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span
                                        class="fa fa-star checked"></span>
                                </div>
                                <span class="ms-2">50 Reviews</span>
                            </div>
                        </div>
                        <div class="trend-last-main">
                            <p class="mb-0 trend-para">Visit the Taj Mahal, explore palaces, and taste vibrant Indian
                                culture.</p>
                            <div class="trend-last d-flex align-items-center justify-content-between">
                                <p class="mb-0 white"><i class="fa fa-clock-o"></i> 6 Days &amp; 5 Nights</p>
                                <div class="trend-price">
                                    <p class="price white mb-0">From <span>$450.00</span></p>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="#" class="btn btn-sm btn-primary">Book Now &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nepal -->
                <div class="trend-item mx-3">
                    <div class="trend-image position-relative">
                        <img src="images/nepal.jpg" alt="Nepal Tour" />
                        <div class="trend-tags"><a href="#"><i class="flaticon-like"></i></a></div>
                    </div>
                    <div class="trend-content-main">
                        <div class="trend-content">
                            <h6><i class="fa fa-map-marker-alt"></i> Nepal</h6>
                            <h4><a href="#">Kathmandu to Pokhara Adventure</a></h4>
                            <div class="rating-main d-flex align-items-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span
                                        class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span
                                        class="fa fa-star checked"></span>
                                </div>
                                <span class="ms-2">42 Reviews</span>
                            </div>
                        </div>
                        <div class="trend-last-main">
                            <p class="mb-0 trend-para">From temples to lakes, discover Nepal’s charm in this scenic
                                journey.</p>
                            <div class="trend-last d-flex align-items-center justify-content-between">
                                <p class="mb-0 white"><i class="fa fa-clock-o"></i> 4 Days &amp; 3 Nights</p>
                                <div class="trend-price">
                                    <p class="price white mb-0">From <span>$399.00</span></p>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="#" class="btn btn-sm btn-primary">Book Now &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
        <!-- Trending Ends -->
@endsection
