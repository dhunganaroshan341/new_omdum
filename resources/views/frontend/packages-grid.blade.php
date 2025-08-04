@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url({{ asset('template/yatri_world/main-file/images/tibet.jpg') }});">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0"> Our Packages</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Packages</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Blog Starts -->
    <section class="blog trending destination-b pb-6">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-lg-8 mb-4">
                    <div class="trend-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="list-results d-flex align-items-center justify-content-between">
                                    <div class="list-results-sort">
                                        <p class="m-0">Showing 1-5 of 80 results</p>
                                    </div>
                                    <div class="click-menu d-flex align-items-center justify-content-between">
                                        <div class="change-list me-2"><a href="#"><i class="fa fa-bars"></i></a></div>
                                        <div class="change-grid f-active"><a href="#"><i class="fa fa-th"></i></a>
                                        </div>
                                        <div class="sortby d-flex align-items-center justify-content-between ms-2">
                                            <select class="niceSelect">
                                                <option value="1">Sort By</option>
                                                <option value="3">Price: low to high</option>
                                                <option value="4">Price: high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @foreach ($tourPackages as $package)
                                <!-- Start of Nepal Section -->
                                <div class="col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img alt="image"
                                                src="{{ !empty($package->images) && is_array($package->images) && isset($package->images[0])
                                                    ? asset('tour_images/' . $package->images[0])
                                                    : asset('template/yatri_world/main-file/images/india.jpg') }}" />

                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <h4><a
                                                        href="#">{{ $package->title ?? '15-Day Mundum Explorer Trek' }}</a>
                                                </h4>
                                                <p class="mb-0 pink">
                                                    {{-- <i class="fa fa-eye me-1"></i> Includes --}}
                                                    {{ $package->country->name ?? '' }}
                                                    <i class="fa fa-map-marker me-1 ms-3"></i>
                                                </p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">
                                                    {{ $package->short_desc ?? 'A sacred escape nestled in the Himalayas – perfect for soul-searching and adventure.' }}
                                                </p>
                                                <div
                                                    class="trend-last d-flex align-items-center justify-content-between bg-navy px-3 py-2 rounded">
                                                    <a href="{{ route('packages.show', ['slug' => $package->slug]) }}"
                                                        class="white d-flex align-items-center text-decoration-none">

                                                        <img src="{{ asset('tour_images/' . ($package->images[0] ?? '')) }}"
                                                            onerror="this.onerror=null;this.src='{{ asset('template/yatri_world/main-file/images/india.jpg') }}';"
                                                            class="d-author me-2" alt="Package Image" loading="lazy"
                                                            style="width: 32px; height: 32px; object-fit: cover; border-radius: 50%;">

                                                        <span>View Package</span>
                                                    </a>

                                                    <div class="trend-price">
                                                        <a href="{{ route('packages.show', ['slug' => $package->slug]) }}"
                                                            class="text-decoration-none">
                                                            <p class="price white mb-0">
                                                                <span>${{ number_format($package->price ?? 1050, 2) }}</span>
                                                                <i class="fa fa-arrow-right white ps-1"></i>
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- End of Nepal Section -->

                            <div class="col-lg-12">
                                <div class="text-center">
                                    <a class="nir-btn" href="#">Load More <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mb-4">
                    <div class="sidebar-sticky">
                        <div class="sidebar-item mb-4">
                            <form class="form-content">
                                <h4 class="title white">Find Tour & Travel Packages</h4>
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white">Your Destination</label>
                                            <div class="input-box">
                                                <i class="flaticon-placeholder"></i>
                                                <select class="niceSelect">
                                                    <option value="1">Where are you going?</option>
                                                    <option value="2">Tibet</option>
                                                    <option value="3">Bhutan</option>
                                                    <option value="4">India</option>
                                                    <option value="5">Nepal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <a class="nir-btn w-100" href="#"><i class="fa fa-search"></i> Check
                                                Availability</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <h4>Type</h4>
                                @foreach ($tourPackageTypes as $type)
                                    <div class="pretty p-default p-thick p-pulse">
                                        <input type="checkbox" />
                                        <div class="state">
                                            <label>{{ $type->title ?? 'Tour' }}<span class="number"></span></label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="sidebar-item">
                                <h4>Services</h4>
                                @foreach ($services as $service)
                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                        <input type="checkbox" />
                                        <div class="state p-warning-o">
                                            <label>{{ $service->title ?? 'Tour' }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="sidebar-item">
                                <h4>Price Range($)</h4>
                                <div class="range-slider">
                                    <div class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-max="2000" data-max-name="max_price" data-min="0"
                                        data-min-name="min_price" data-unit="$">
                                        <span class="min-value">0 $</span>
                                        <span class="max-value">2000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all full"
                                            style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Ends -->
            </div>
        </div>
    </section>


    <!-- blog Ends -->
    <!-- top destination starts -->
    <section class="top-destination overflow-hidden">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0 white">Other <span>Tour Packages</span></h2>
                <p class="mb-0 white">
                    Discover more unforgettable journeys beyond the Mundum Trail — from sacred Himalayan
                    pilgrimages to cultural adventures across Nepal and Tibet. Each trip offers a deeper connection to
                    nature, heritage, and humanity.
                </p>
            </div>

            <div class="desti-inner">
                <div class="row d-flex align-items-center">
                    @foreach ($tourPackages as $package)
                        <div class="col-lg-4 col-md-6 p-1">
                            <div class="desti-image position-relative overflow-hidden rounded shadow-sm">
                                <img alt="image" src="{{ asset('tour_images/' . ($package->images[0] ?? '')) }}"
                                    onerror="this.onerror=null;this.src='{{ asset('template/yatri_world/main-file/images/india.jpg') }}';"
                                    class="img-fluid w-100" style="height: 250px; object-fit: cover;">

                                <div
                                    class="desti-content position-absolute bottom-0 start-0 w-100 p-3 bg-navy bg-opacity-75">
                                    <h4 class="white mb-1">{{ $package->title ?? 'Mundum Cultural Trek' }}</h4>

                                    <div class="trend-last-main d-flex justify-content-between align-items-center">
                                        <p class="mb-1 white d-flex align-items-center">
                                            <i class="fa fa-clock-o me-1" aria-hidden="true"></i>
                                            {{ $package->duration ?? '12 Days' }}
                                        </p>
                                        <div class="trend-price">
                                            <p class="price pink mb-0">From
                                                <span>${{ number_format($package->price ?? 870, 2) }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="desti-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
                                    <a class="nir-btn" href="{{ route('packages.book', ['id' => $package->id]) }}">
                                        <span class="white">Book Now</span>
                                        <i class="fa fa-arrow-right white ps-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- top destination ends -->
@endsection
@push('styles')
    <style>
        .star-rating-parent {
            display: none;
        }

        .rating {
            display: none;
        }

        .trend-last a {
            color: white;
        }

        .trend-last a:hover {
            color: var(--omundum-green);
        }

        .trend-image img {
            object-fit: cover;
        }
    </style>
@endpush
