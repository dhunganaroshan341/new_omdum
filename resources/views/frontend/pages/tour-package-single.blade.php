@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">{{ $package->title ?? 'Mundum Cultural Trek' }}</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/destinations') }}">Destinations</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Mundum Trail</li>
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
                                <h3 class="mb-1">
                                    {{ $package->title ?? '12-Day Mundum Trek – Cultural &amp; Scenic Adventure' }}</h3>
                                <div class="rating-main d-sm-flex align-items-center">
                                    <p class="mb-0 me-3"><i class="flaticon-location-pin"></i>
                                        {{ $packge->country->name ?? 'Eastern Nepal, Mundum Trail' }}
                                    </p>

                                </div>
                            </div>
                        </div>
                        @php
                            // Use this array dynamically from DB
                            $images = json_decode($package->images ?? '[]', true); // assuming it's stored as JSON
$fallbackImage = asset('template/yatri_world/main-file/images/tibet_vertical.jpg');
                        @endphp

                        <div class="description-images mb-4">
                            <div class="thumbnail-images">
                                <div class="slider-store">
                                    @if (!empty($images) && is_array($images))
                                        @foreach ($images as $image)
                                            <div>
                                                <img alt="Image" src="{{ asset($image) }}"
                                                    onerror="this.src='{{ $fallbackImage }}';" />
                                            </div>
                                        @endforeach
                                    @else
                                        {{-- Fallback if no images --}}
                                        <div>
                                            <img alt="Fallback" src="{{ $fallbackImage }}" />
                                        </div>
                                    @endif
                                </div>

                                <div class="slider-thumbs">
                                    @if (!empty($images) && is_array($images))
                                        @foreach ($images as $image)
                                            <div>
                                                <img alt="Thumb" src="{{ asset($image) }}"
                                                    onerror="this.src='{{ $fallbackImage }}';" />
                                            </div>
                                        @endforeach
                                    @else
                                        <div>
                                            <img alt="Fallback Thumb" src="{{ $fallbackImage }}" />
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="tour-includes mb-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><i aria-hidden="true" class="fa fa-clock-o pink me-1"></i>
                                            Total Days: {{ $totalDays ?? '12' }}
                                        </td>
                                        <td><i aria-hidden="true" class="fa fa-group pink me-1"></i> Max Group Size:
                                            {{ $package->max_people ?? '12' }}</td>
                                        <td><i aria-hidden="true" class="fa fa-calendar pink me-1"></i>
                                            {{ $package->best_season ?? 'Year-Round Trekking' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i aria-hidden="true" class="fa fa-user pink me-1"></i> Min Age:
                                            {{ $package->min_age ?? '12' }}+</td>
                                        <td><i aria-hidden="true" class="fa fa-map-signs pink me-1"></i> Pickup:
                                            {{ $package->pickup ??
                                                'Kathmandu
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Airport' }}
                                        </td>
                                        <td><i aria-hidden="true" class="fa fa-file-alt pink me-1"></i>
                                            Languages:{{ $package->languages ?? 'English,Nepali,Kirati' }}

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="description mb-2">
                            <h4>Description</h4>
                            <p>
                                {{ $package->description ??
                                    'The 12-Day Mundum Trek offers a unique journey through the pristine mountains of eastern
                                                                                                                                                                                                                                                                                                                                                                                                                                Nepal, immersing you in the rich Kirati Rai culture and breathtaking natural landscapes.
                                                                                                                                                                                                                                                                                                                                                                                                                                Explore remote villages, sacred religious sites, and experience authentic local traditions
                                                                                                                                                                                                                                                                                                                                                                                                                                while trekking through unspoiled terrain.' }}
                            </p>

                        </div>
                        <div class="description mb-2">
                            <div class="row">
                                <div class="col-md-6 mb-2 pe-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Departure &amp; Return Location</h5>
                                        <p class="mb-0">{{ $package->drop ?? 'Kathmandu Tribhuvan International Airport' }}
                                        </p>
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

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <form class="form-content">
                                    <h4 class="title white text-center">MAKE A BOOKING</h4>
                                    <div class="row gy-4">
                                        <!-- 📅 Date Picker -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="white d-block mb-2">Select Date </label>
                                                <input type="date" class="form-control mb-2" id="date">

                                            </div>
                                        </div>

                                        <!-- 🗓️ Selected Date Summary -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <span class="white">Your chosen date is</span>
                                                <h3 class="choosen-date white mb-0" id="chosen-dates-display">
                                                    <i class="fa fa-calendar"></i> <span id="chosen-date-text">Please
                                                        select a date</span>
                                                    <small class="d-block font-weight-normal">
                                                        (<span id="total-days">0</span> days)
                                                        <a class="d-block pink float-right" href="#"
                                                            onclick="clearDates()">Change</a>
                                                    </small>
                                                </h3>
                                            </div>
                                        </div>

                                        <!-- 👥 No. of People -->
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

                                        <!-- 💰 Pricing Summary -->
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

                                        <!-- 🛒 Instant Book -->
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
            <div class="trend-box">
                <div class="team-slider">
                    <!-- Tibet -->
                    <div class="trend-item mx-3">
                        <div class="trend-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" />
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                        </div>
                        <div class="trend-content-main">
                            <div class="trend-content">
                                <h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> Tibet</h6>
                                <h4><a href="#">Lhasa &amp; Everest Base Camp Adventure</a></h4>
                                <div class="rating-main d-flex align-items-center">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">28 Reviews</span>
                                </div>
                            </div>
                            <div class="trend-last-main">
                                <p class="mb-0 trend-para">Experience Tibetan culture and stunning Himalayan views.</p>
                                <div class="trend-last d-flex align-items-center justify-content-between">
                                    <p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 7 days &amp; 6
                                        nights</p>
                                    <div class="trend-price">
                                        <p class="price white mb-0">From <span>$799.00</span></p>
                                    </div>
                                </div>
                                <div class="text-end mt-2">
                                    <a class="btn btn-sm btn-primary" href="#">Book Now →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bhutan -->
                    <div class="trend-item mx-3">
                        <div class="trend-image">
                            <img alt="image"
                                src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}" />
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                        </div>
                        <div class="trend-content-main">
                            <div class="trend-content">
                                <h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> Bhutan</h6>
                                <h4><a href="#">Paro &amp; Tiger’s Nest Experience</a></h4>
                                <div class="rating-main d-flex align-items-center">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">35 Reviews</span>
                                </div>
                            </div>
                            <div class="trend-last-main">
                                <p class="mb-0 trend-para">Discover Bhutan’s serene landscapes and sacred sites.</p>
                                <div class="trend-last d-flex align-items-center justify-content-between">
                                    <p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 5 days &amp; 4
                                        nights</p>
                                    <div class="trend-price">
                                        <p class="price white mb-0">From <span>$620.00</span></p>
                                    </div>
                                </div>
                                <div class="text-end mt-2">
                                    <a class="btn btn-sm btn-primary" href="#">Book Now →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- India -->
                    <div class="trend-item mx-3">
                        <div class="trend-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" />
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                        </div>
                        <div class="trend-content-main">
                            <div class="trend-content">
                                <h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> India</h6>
                                <h4><a href="#">Golden Triangle: Delhi, Agra &amp; Jaipur</a></h4>
                                <div class="rating-main d-flex align-items-center">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">50 Reviews</span>
                                </div>
                            </div>
                            <div class="trend-last-main">
                                <p class="mb-0 trend-para">Explore India’s rich history and vibrant culture.</p>
                                <div class="trend-last d-flex align-items-center justify-content-between">
                                    <p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 6 days &amp; 5
                                        nights</p>
                                    <div class="trend-price">
                                        <p class="price white mb-0">From <span>$450.00</span></p>
                                    </div>
                                </div>
                                <div class="text-end mt-2">
                                    <a class="btn btn-sm btn-primary" href="#">Book Now →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Nepal -->
                    <div class="trend-item mx-3">
                        <div class="trend-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" />
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                        </div>
                        <div class="trend-content-main">
                            <div class="trend-content">
                                <h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> Nepal</h6>
                                <h4><a href="#">Kathmandu, Pokhara &amp; Himalayan Sunrise</a></h4>
                                <div class="rating-main d-flex align-items-center">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">42 Reviews</span>
                                </div>
                            </div>
                            <div class="trend-last-main">
                                <p class="mb-0 trend-para">A scenic journey from temples to lakes and mountains.</p>
                                <div class="trend-last d-flex align-items-center justify-content-between">
                                    <p class="mb-0 white"><i aria-hidden="true" class="fa fa-clock-o"></i> 4 days &amp; 3
                                        nights</p>
                                    <div class="trend-price">
                                        <p class="price white mb-0">From <span>$399.00</span></p>
                                    </div>
                                </div>
                                <div class="text-end mt-2">
                                    <a class="btn btn-sm btn-primary" href="#">Book Now →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.team-slider -->
            </div> <!-- /.trend-box -->
        </div>
    </section>
    <!-- Trending Ends -->
@endsection
@push('styles')
    <style>
        .sidebar-sticky {
            max-height: 80vh;
            /* 80% of viewport height */
            overflow-y: auto;
            padding-right: 10px;
            /* to prevent scrollbar overlapping content */
        }
    </style>
@endpush
