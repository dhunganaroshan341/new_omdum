@extends('frontend.layout.main')

@section('content')
    @php
        $maintitle = $tour->title ?? 'Explore Package';
        $page = 'Package';
    @endphp

    <x-bread-crumb :main-title="$maintitle" :page-name="$page" />

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
                                <div class="rating-main d-sm-flex justify-content-between align-items-center">
                                    <p class="mb-0 me-3">
                                        <i class="flaticon-location-pin"></i>
                                        @if ($package->location)
                                            {{ $package->location }}
                                        @elseif(isset($package->country->name))
                                            {{ $package->country->name }}
                                        @else
                                            {{ 'Not Available' }}
                                        @endif
                                    </p>

                                    {{-- Price on the right side --}}
                                    @if ($package->price)
                                        <div class="price-container">
                                            {{-- <h3 class="price-title">Price</h3> --}}
                                            <p class="price-badge">{{ '$' . $package->price }}</p>
                                        </div>
                                    @else
                                        {{-- Price Not Available --}}
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="slider-store">
                            @foreach ($images as $image)
                                <div>
                                    <img alt="Image" src="{{ $image->image_url }}"
                                        onerror="this.src='{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}';" />
                                </div>
                            @endforeach
                        </div>

                        <div class="slider-thumbs">
                            @foreach ($images as $image)
                                <div>
                                    <img alt="Thumb" src="{{ $image->image_url }}"
                                        onerror="this.src='{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}';" />
                                </div>
                            @endforeach
                        </div>

                        <div class="description mb-2">
                            <h4>Description</h4>
                            <p>
                                {!! $package->long_description ??
                                    'The 12-Day Mundum Trek offers a unique journey through the pristine mountains of eastern
                                                                                                                                    Nepal, immersing you in the rich Kirati Rai culture and breathtaking natural landscapes.
                                                                                                                                    Explore remote villages, sacred religious sites, and experience authentic local traditions
                                                                                                                                    while trekking through unspoiled terrain.' !!}
                            </p>

                        </div>
                        <div class="description mb-2">
                            <div class="row">
                                <div class="col-md-6 mb-2 pe-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Departure &amp; Return Location</h5>
                                        <p class="mb-0">
                                            {{ $package->drop ?? 'Kathmandu Tribhuvan International Airport' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 ps-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Accommodation</h5>
                                        <p class="mb-0">
                                            {{ $package->accomodation ?? 'Local lodges and quality camping equipment' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 pe-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Starting Point</h5>
                                        <p class="mb-0">{{ $package->starting ?? 'Morning transfer from Kathmandu' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 ps-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1"> Difficulty</h5>
                                        <p class="mb-0">{{ $package->difficulty ?? 'Easy' }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- Show dynamic itinerary if present, otherwise show fallback --}}
                        @if (!empty($package->itineraries) && $package->itineraries->count())
                            <div class="description mb-4">
                                <h4>What to Expect</h4>
                                <p>
                                    {!! $package->what_to_expect ??
                                        ' Experience peaceful trekking routes that wind through pristine forests, traditional
                                                                                                                                                    Kirati Rai villages, and stunning ridge walks with Himalayan panoramas. Encounter warm
                                                                                                                                                    hospitality, unique cultural festivals, and authentic local cuisine. Expect moderate
                                                                                                                                                    hiking days with plenty of opportunities for photography, wildlife spotting, and star gazing under clear
                                                                                                                                                    mountain skies.' !!}
                                </p>
                            </div>

                            <div class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion">
                                @foreach ($package->itineraries as $itinerary)
                                    <div class="accrodion {{ $loop->first ? 'active' : '' }}">
                                        <div class="accrodion-title">
                                            <h5 class="mb-0">
                                                <span>Day {{ $itinerary->order }}</span>
                                                {{ $itinerary->title ?? '' }}
                                            </h5>
                                        </div>
                                        <div class="accrodion-content"
                                            style="{{ $loop->first ? 'display: block;' : 'display: none;' }}">
                                            <div class="inner">
                                                <p>{!! $itinerary->description ?? 'No description available.' !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                        @endif

                        <div class="row">
                            {{-- Price Includes --}}
                            <div class="col-md-12 mb-3">
                                <div class="desc-box border rounded p-3 bg-light">
                                    <h4 class="mb-3 text-success"><i class="fa fa-check-circle me-1"></i> Price Includes
                                    </h4>
                                    <ul class="mb-0 ps-3">
                                        @php
                                            $includes = $package->priceIncludes->where('is_included', true) ?? null;
                                            $includesHtml = $package->price_includes ?? null; // fallback HTML column
                                        @endphp

                                        @if ($includes && $includes->count() > 0)
                                            @foreach ($includes as $include)
                                                <li class="mb-1"><i class="fa fa-check pink me-2"></i>
                                                    {{ $include->title }}</li>
                                            @endforeach
                                        @elseif ($includesHtml)
                                            {!! $includesHtml !!}
                                        @else
                                            {{-- Static fallback --}}
                                            <li><i class="fa fa-check pink me-2"></i> All ground transports in private
                                                vehicle including airport transfers</li>
                                            <li><i class="fa fa-check pink me-2"></i> Four nights accommodation with
                                                breakfast at a 3-star category hotel in Kathmandu</li>
                                            <li><i class="fa fa-check pink me-2"></i> Kathmandu city tours including all
                                                entry fees, tour guide and private vehicle</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            {{-- Price Excludes --}}
                            <div class="col-md-12">
                                <div class="desc-box border rounded p-3 bg-white">
                                    <h4 class="mb-3 text-danger"><i class="fa fa-times-circle me-1"></i> Price Excludes</h4>
                                    <ul class="mb-0 ps-3">
                                        @php
                                            $excludes = $package->priceIncludes->where('is_included', false) ?? null;
                                            $excludesHtml = $package->price_excludes ?? null; // fallback HTML column
                                        @endphp

                                        @if ($excludes && $excludes->count() > 0)
                                            @foreach ($excludes as $exclude)
                                                <li class="mb-1"><i class="fa fa-close pink me-2"></i>
                                                    {{ $exclude->title }}</li>
                                            @endforeach
                                        @elseif ($excludesHtml)
                                            {!! $excludesHtml !!}
                                        @else
                                            {{-- Static fallback --}}
                                            <li><i class="fa fa-close pink me-2"></i> Meals not specified in the itinerary
                                            </li>
                                            <li><i class="fa fa-close pink me-2"></i> Travel insurance</li>
                                            <li><i class="fa fa-close pink me-2"></i> International airfare</li>
                                            <li><i class="fa fa-close pink me-2"></i> Nepal visa on arrival (USD 40 for 30
                                                days, USD 100 for 90 days – 2 passport photos required)</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                @include('components.booking-form-sidebar')
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog Ends -->
    <!-- Trending Starts -->
    @include('components.other-services-component', ['otherServices' => $otherPackages])
    <!-- Trending Ends -->
@endsection

@push('styles')
    <style>
        .sidebar-sticky {
            position: sticky;
            top: 20px;
            max-height: calc(100vh - 40px);
            overflow-y: auto;

            /* Hide scrollbar for Chrome, Safari and Opera */
            -webkit-overflow-scrolling: touch;
        }

        .sidebar-sticky::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .sidebar-sticky {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        /* Smooth scrolling behavior */
        .sidebar-sticky {
            scroll-behavior: smooth;
        }

        /* Add some padding to prevent content from touching edges */
        .list-sidebar {
            padding-right: 5px;
        }

        .description p {
            background: none !important;
        }

        .description span {
            font-size: 16px !important;
            line-height: 1.5 !important;
            font-family: "Rubik", sans-serif !important;
            font-weight: 400 !important;
            color: #777 !important;
        }

        .description p {
            font-size: 16px !important;
            line-height: 1.5 !important;
            font-family: "Rubik", sans-serif !important;
            font-weight: 400 !important;
            color: #777 !important;
        }

        .slick-prev,
        .slick-next {
            background: var(--omundum-green) !important;
            color: white !important;
        }

        .price-badge {
            background: #162241;
            border-radius: 20px;
            color: #fff;
            padding: 4px 10px;
            font-size: 0.9rem;
            font-weight: bold;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            display: inline-block;
            white-space: nowrap;
        }

        .price-container {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .price-title {
            margin: 1px 0;
        }

        .accrodion-grp .accrodion .accrodion-title h5::before {
            right: -15px !important;
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .sidebar-sticky {
                position: static;
                max-height: none;
                overflow-y: visible;
            }
        }

        /* Add fade effect at top and bottom when scrolling */
        .sidebar-sticky::before,
        .sidebar-sticky::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            height: 20px;
            pointer-events: none;
            z-index: 1;
            transition: opacity 0.3s ease;
        }

        .sidebar-sticky::before {
            top: 0;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
            opacity: 0;
        }

        .sidebar-sticky::after {
            bottom: 0;
            background: linear-gradient(to top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
            opacity: 0;
        }

        .sidebar-sticky.scrolled-top::before {
            opacity: 1;
        }

        .sidebar-sticky.scrolled-bottom::after {
            opacity: 1;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            // Accordion script
            $('.accrodion-title').on('click', function() {
                var accrodion = $(this).closest('.accrodion');
                var content = accrodion.find('.accrodion-content');
                $('.accrodion').not(accrodion).removeClass('active').find('.accrodion-content').slideUp();
                accrodion.toggleClass('active');
                content.stop(true, true).slideToggle();
            });

            // Sidebar scroll effects
            const sidebarSticky = $('.sidebar-sticky');

            if (sidebarSticky.length) {
                sidebarSticky.on('scroll', function() {
                    const scrollTop = $(this).scrollTop();
                    const scrollHeight = this.scrollHeight;
                    const clientHeight = this.clientHeight;
                    const scrollBottom = scrollHeight - clientHeight - scrollTop;

                    // Add/remove classes based on scroll position
                    if (scrollTop > 10) {
                        $(this).addClass('scrolled-top');
                    } else {
                        $(this).removeClass('scrolled-top');
                    }

                    if (scrollBottom > 10) {
                        $(this).addClass('scrolled-bottom');
                    } else {
                        $(this).removeClass('scrolled-bottom');
                    }
                });

                // Initialize scroll indicators
                setTimeout(function() {
                    sidebarSticky.trigger('scroll');
                }, 100);
            }

            // Smooth scroll to top of sidebar when clicking on sticky elements
            $('.sidebar-sticky .sidebar-item').on('click', 'a[href^="#"]', function(e) {
                const target = $(this.getAttribute('href'));
                if (target.length) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 500);
                }
            });

            // Auto-adjust sidebar height on window resize
            $(window).on('resize', function() {
                if ($(window).width() > 991) {
                    const windowHeight = $(window).height();
                    const sidebarTop = sidebarSticky.offset().top - $(window).scrollTop();
                    const maxHeight = Math.max(300, windowHeight - sidebarTop - 40);
                    sidebarSticky.css('max-height', maxHeight + 'px');
                }
            });
        });
    </script>
@endpush
