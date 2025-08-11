@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    {{-- <section class="breadcrumb-main"
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
    </section> --}}

    @php
        $maintitle = 'Our Packages';
        $page = 'packages';
    @endphp
    <x-bread-crumb :main-title="$maintitle" :pageName="$page" />
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
                                        <p class="m-0">
                                            @if ($tourPackages->total() === 0)
                                                0 Packages
                                            @else
                                                Showing {{ $tourPackages->firstItem() }}–{{ $tourPackages->lastItem() }} of
                                                {{ $tourPackages->total() }} results
                                            @endif
                                        </p>

                                    </div>

                                    <div class="click-menu d-flex align-items-center justify-content-between">
                                        {{-- <div class="change-list me-2"><a href="#"><i class="fa fa-bars"></i></a></div>
                                        <div class="change-grid f-active"><a href="#"><i class="fa fa-th"></i></a>
                                        </div> --}}
                                        {{-- search --}}
                                        <div class="search d-flex align-items-center justify-content-between ms-2">
                                            <form method="GET" action="{{ route('packages.search') }}" id="search-form"
                                                class="d-flex align-items-center w-100">
                                                <div class="form-group flex-grow-1 me-2 position-relative">
                                                    <label for="search-query" class="visually-hidden">Search</label>
                                                    <input type="text" class="form-control ps-5" name="search"
                                                        id="search-query" placeholder="Search packages"
                                                        value="{{ request('search') ?? '' }}" autocomplete="off">
                                                    <span class="position-absolute"
                                                        style="left: 15px; top: 50%; transform: translateY(-50%); color: #aaa;">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                </div>

                                                {{-- Preserve existing filters --}}
                                                @foreach ((array) request('parent_packages') as $parentSlug)
                                                    <input type="hidden" name="parent_packages[]"
                                                        value="{{ $parentSlug }}">
                                                @endforeach
                                                <input type="hidden" name="country" value="{{ request('country') }}">
                                                @if (request()->filled('package_type'))
                                                    <input type="hidden" name="package_type"
                                                        value="{{ request('package_type') }}">
                                                @endif
                                            </form>
                                        </div>
                                        {{-- search Ends --}}

                                        <div class="sortby d-flex align-items-center justify-content-between ms-2">
                                            <form method="GET" action="{{ route('packages.search') }}">
                                                {{-- Retain existing filters --}}
                                                {{-- Preserve all selected parent packages --}}
                                                @foreach ((array) request('parent_packages') as $parentSlug)
                                                    <input type="hidden" name="parent_packages[]"
                                                        value="{{ $parentSlug }}">
                                                @endforeach

                                                <input type="hidden" name="country" value="{{ request('country') }}">
                                                {{-- Retain selected package type --}}
                                                @if (request()->filled('package_type'))
                                                    <input type="hidden" name="package_type"
                                                        value="{{ request('package_type') }}">
                                                @endif
                                                <select name="sort_by" class="niceSelect" onchange="this.form.submit()">
                                                    <option value="">Sort By</option>
                                                    <option value="low"
                                                        {{ request('sort_by') == 'low' ? 'selected' : '' }}>Price: low to
                                                        high</option>
                                                    <option value="high"
                                                        {{ request('sort_by') == 'high' ? 'selected' : '' }}>Price: high to
                                                        low</option>
                                                </select>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @if ($tourPackages->isEmpty())
                                <div class="col-12">
                                    <div class="trend-item text-center py-5">
                                        <h4 class="pink">Packages Not Available</h4>
                                        <p>Try adjusting your filters or check back later.</p>
                                    </div>
                                </div>
                            @else
                                @foreach ($tourPackages as $package)
                                    <!-- Start of Nepal Section -->
                                    <div class="col-md-6 mb-4">
                                        <div class="trend-item">
                                            <div class="trend-image">
                                                <img alt="image"
                                                    src="{{ $package->first_image_url ?? asset('template/yatri_world/main-file/images/india.jpg') }}" />

                                            </div>
                                            <div class="trend-content-main">
                                                <div class="trend-content">
                                                    <h4><a
                                                            href="{{ route('packages.show', ['slug' => $package->slug]) }}">{{ $package->title ?? '15-Day Mundum Explorer Trek' }}</a>
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

                                                            <img src="{{ $package->first_image_url }}"
                                                                onerror="this.onerror=null;this.src='{{ asset('template/yatri_world/main-file/images/india.jpg') }}';"
                                                                class="d-author me-2" alt="Package Image" loading="lazy"
                                                                style="width: 32px; height: 32px; object-fit: cover; border-radius: 50%;">

                                                            <span class="view-package-span">View Package</span>
                                                        </a>

                                                        <div class="trend-price">
                                                            <a href="{{ route('packages.show', ['slug' => $package->slug]) }}"
                                                                class="text-decoration-none">
                                                                <p class="price white mb-0">
                                                                    <span>{{ $package->price ? '$' . $package->price : '' }}</span>
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
                            @endif
                            <div class="col-lg-12">
                                <div class="text-center">
                                    {{ $tourPackages->appends(request()->query())->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mb-4">
                    <div class="sidebar-sticky">
                        <div class="sidebar-item mb-4">

                            <form class="form-content" method="GET" action="{{ route('packages.search') }}"
                                id="country-filter-form">
                                <h4 class="title white">Find Tour & Travel Packages</h4>
                                <div class="form-group">
                                    <label class="white">Your Destination</label>
                                    <select name="country" class="niceSelect"
                                        onchange="document.getElementById('country-filter-form').submit();">
                                        <option value="">Where are you going?</option>
                                        @foreach ($ourCountries as $country)
                                            <option value="{{ $country->slug }}"
                                                {{ request('country') == $country->slug ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="nir-btn clear-submit w-100"><i class="fa fa-search"></i>
                                    Check
                                    Availability</button>
                            </form>

                        </div>

                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <h4>General Packages Available</h4>
                                <form method="GET" action="{{ route('packages.search') }}" id="package-filter-form">
                                    {{-- Country filter (optional) --}}
                                    <input type="hidden" name="country" value="{{ request('country') }}">

                                    {{-- General Packages (Parent Packages) --}}
                                    <div class="sidebar-item">
                                        @foreach ($parentPackages as $parent)
                                            <div class="pretty p-default p-thick p-pulse">
                                                <input type="checkbox" name="parent_packages[]"
                                                    value="{{ $parent->slug }}"
                                                    {{ request('parent_packages') && in_array($parent->slug, request('parent_packages')) ? 'checked' : '' }} />

                                                <div class="state">
                                                    <label>{{ $parent->title }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    {{-- Package Types --}}
                                    <div class="sidebar-item">
                                        <h4>Type</h4>
                                        @php
                                            $packageTypes = [
                                                'tour' => 'Tour',
                                                'trekking' => 'Trekking',
                                                'other' => 'Other',
                                            ];
                                        @endphp
                                        @foreach ($packageTypes as $key => $label)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="package_type"
                                                    id="{{ $key }}" value="{{ $key }}"
                                                    {{ request('package_type') === $key ? 'checked' : '' }}>
                                                <label class="form-check-label dark" for="{{ $key }}">
                                                    {{ $label }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                    {{-- Price Range (UI-based slider or manual input) --}}
                                    {{-- <div class="sidebar-item">
                                        <h4>Price Range ($)</h4>
                                        <div class="form-group d-flex">
                                            <input type="number" name="min_price" class="form-control me-2"
                                                placeholder="Min" value="{{ request('min_price') }}">
                                            <input type="number" name="max_price" class="form-control"
                                                placeholder="Max" value="{{ request('max_price') }}">
                                        </div>
                                    </div> --}}

                                    <button type="submit" class="nir-btn clear-submit w-100 mt-3">Filter</button>
                                </form>



                            </div>

                            {{-- <div class="sidebar-item">
                                <h4>Services</h4>
                                @foreach ($services as $service)
                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                        <input type="checkbox" />
                                        <div class="state p-warning-o">
                                            <label>{{ $service->title ?? 'Tour' }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div> --}}

                            {{-- <div class="sidebar-item">
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
                            </div> --}}
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
                <h2 class="m-0 white">Latest <span>Tour Packages</span></h2>
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

                                {{-- Image wrapped in link --}}
                                <a href="{{ route('packages.show', ['slug' => $package->slug]) }}">
                                    <img alt="image"
                                        src="{{ $package->first_image_url ?? asset('template/yatri_world/main-file/images/india.jpg') }}"
                                        onerror="this.onerror=null;this.src='{{ asset('template/yatri_world/main-file/images/india.jpg') }}';"
                                        class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                                </a>

                                <div
                                    class="desti-content position-absolute bottom-0 start-0 w-100 p-3 bg-navy bg-opacity-75">
                                    <h4 class="white mb-1">
                                        <a href="{{ route('packages.show', ['slug' => $package->slug]) }}"
                                            class="text-decoration-none white">
                                            {{ $package->title ?? 'Mundum Cultural Trek' }}
                                        </a>
                                    </h4>

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
                                    <a class="nir-btn" href="{{ route('packages.show', ['slug' => $package->slug]) }}">
                                        <span class="white boonow-span">Book Now</span>
                                        <i class="fa fa-arrow-right white ps-1 book-now-i"></i>
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

        .page-item a {
            color: var(--omundum-green) !important;
        }

        .page-item a :hover {
            color: var(--omundum-green) !important;
        }

        .desti-image,
        .desti-image img,
        .desti-content h4 a,
        .trend-last-main p,
        .trend-last-main .price span,
        .desti-overlay a span,
        .desti-overlay a i {
            transition: all 0.3s ease;
        }

        /* Card hover: lift + shadow + image zoom */
        .desti-image:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .desti-image:hover img {
            transform: scale(1.05);
        }

        /* Overlay fade in */
        .desti-overlay {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .desti-image:hover .desti-overlay {
            opacity: 1;
        }

        .trend-content a:hover {
            color: var(--omundum-green) !important;
        }

        .view-package-span:hover {
            color: var(--omundum-green) !important;
        }

        .trend-price span:hover {
            color: var(--omundum-green) !important;
        }

        /* Change all key text to green on hover */
        /* Beat .white class color with higher specificity */
        /* .desti-image:hover .desti-content h4 a.white,
                                                                                                                                                                                                                                                    .desti-image:hover .trend-last-main p.white,
                                                                                                                                                                                                                                                    .desti-image:hover .trend-last-main .price span,
                                                                                                                                                                                                                                                    .desti-image:hover .desti-overlay a span.white,
                                                                                                                                                                                                                                                    .desti-image:hover .desti-overlay a i.white {
                                                                                                                                                                                                                                                        color: var(--omundum-green) !important;
                                                                                                                                                                                                                                                    } */
    </style>
@endpush
@push('scripts')
    <script>
        $(document).ready(function() {
            // Auto-submit on checkbox/radio change (works for filter form)
            $('#package-filter-form input[type="checkbox"], #package-filter-form input[type="radio"]').on('change',
                function() {
                    let form = $('#package-filter-form');
                    form.off('submit'); // remove existing prevention
                    form.submit();
                });

            $('#package-filter-form').on('submit', function() {
                $(this).find('button[type="submit"]').prop('disabled', true);
            });

            // Search input debounce auto-submit
            let debounceTimer;
            $('#search-query').on('input', function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(function() {
                    console.log('Forcing search form submit');

                    // Unbind any submit handlers on the form to prevent interference
                    $('#search-form').off('submit');

                    // Use native DOM submit to bypass jQuery event handlers too
                    document.getElementById('search-form').submit();
                }, 1000);
            });

        });
    </script>
@endpush
