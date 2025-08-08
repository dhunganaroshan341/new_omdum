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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            hiking days with
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            plenty of opportunities for photography, wildlife spotting, and star gazing under clear
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            mountain skies.' !!}
                                </p>
                            </div>

                            <div class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion">
                                @foreach ($package->itineraries as $itinerary)
                                    <div class="accrodion {{ $loop->first ? 'active' : '' }}">
                                        <div class="accrodion-title">
                                            <h5 class="mb-0">
                                                {{-- <span>{{ $itinerary->order . '.' }}


                                                    {{ ' (Duration -' . $itinerary->itinerary_duration . ')' }}</span> : --}}
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
                            {{-- Static fallback --}}
                            <div class="description mb-4">
                                <h4>What to Expect</h4>
                                <p>
                                    Experience peaceful trekking routes that wind through pristine forests, traditional
                                    Kirati
                                    Rai villages, and stunning ridge walks with Himalayan panoramas. Encounter warm
                                    hospitality,
                                    unique cultural festivals, and authentic local cuisine. Expect moderate hiking days with
                                    plenty of opportunities for photography, wildlife spotting, and star gazing under clear
                                    mountain skies.
                                </p>
                                <p class="mb-0">
                                    The trek provides a perfect balance of adventure, cultural immersion, and natural
                                    beauty,
                                    suitable for beginners with moderate fitness.
                                </p>
                            </div>

                            <div class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion">
                                @php
                                    $staticItineraries = [
                                        [
                                            'day' => '1',
                                            'title' => 'Arrival in Kathmandu',
                                            'desc' =>
                                                'Airport pickup and transfer to your hotel. Briefing about the trek, equipment check, and overnight stay in Kathmandu.',
                                        ],
                                        [
                                            'day' => '2',
                                            'title' => 'Kathmandu to Diktel',
                                            'desc' =>
                                                'Enjoy a scenic 12-hour bus journey from Kathmandu to Diktel (1,650m). Overnight stay at a local lodge preparing for the trek start.',
                                        ],
                                        [
                                            'day' => '3',
                                            'title' => 'Diktel to Chakhewa',
                                            'desc' =>
                                                'Start trekking through remote villages and immerse yourself in the Kirati Rai culture. Camp overnight in the scenic outdoors.',
                                        ],
                                        [
                                            'day' => '4 - 10',
                                            'title' => 'Trekking the Mundum Trail',
                                            'desc' =>
                                                'Enjoy daily hikes of 5–7 hours through Tempke Ridge, Dhotre Deurali, Maiyung, and other villages. Camp in peaceful natural settings.',
                                        ],
                                        [
                                            'day' => '11',
                                            'title' => 'Silichung Peak and Return',
                                            'desc' =>
                                                'Early morning ascent to Silichung Peak (4,153m) for spectacular Himalayan views. Begin descent to lower camps.',
                                        ],
                                        [
                                            'day' => '12',
                                            'title' => 'Return to Kathmandu',
                                            'desc' =>
                                                'Final day of trekking and return to Kathmandu. Enjoy a farewell dinner and overnight at the hotel.',
                                        ],
                                ]; @endphp

                                @foreach ($staticItineraries as $day)
                                    <div class="accrodion {{ $loop->first ? 'active' : '' }}">
                                        <div class="accrodion-title">
                                            <h5 class="mb-0"><span>Day {{ $day['day'] }}</span> - {{ $day['title'] }}
                                            </h5>
                                        </div>
                                        <div class="accrodion-content"
                                            style="{{ $loop->first ? 'display: block;' : 'display: none;' }}">
                                            <div class="inner">
                                                <p>{{ $day['desc'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif


                        <div class="row">
                            {{-- Price Includes --}}
                            <div class="col-md-12 mb-3">
                                <div class="desc-box border rounded p-3 bg-light">
                                    <h4 class="mb-3 text-success"><i class="fa fa-check-circle me-1"></i> Price Includes
                                    </h4>
                                    <ul class="mb-0 ps-3">
                                        @forelse($package->priceIncludes->where('is_included', true) as $include)
                                            <li class="mb-1"><i class="fa fa-check pink me-2"></i> {{ $include->title }}
                                            </li>
                                        @empty
                                            <li><i class="fa fa-check pink me-2"></i> All ground transports in private
                                                vehicle including airport transfers</li>
                                            <li><i class="fa fa-check pink me-2"></i> Four nights accommodation with
                                                breakfast at a 3-star category hotel in Kathmandu</li>
                                            <li><i class="fa fa-check pink me-2"></i> Kathmandu city tours including all
                                                entry fees, tour guide and private vehicle</li>
                                            <li><i class="fa fa-check pink me-2"></i> Full board meals with tea/coffee
                                                (breakfast, lunch and dinner)
                                                during the trek</li>
                                            <li><i class="fa fa-check pink me-2"></i> Best available twin sharing lodge
                                                accommodation; private bathrooms with hot shower at Phakding, Namche and
                                                Lukla</li>
                                            <li><i class="fa fa-check pink me-2"></i> Seasonal fruits during the trek</li>
                                            <li><i class="fa fa-check pink me-2"></i> One experienced guide, porters (1 per
                                                2 people), including their food, stay, salary, insurance</li>
                                            <li><i class="fa fa-check pink me-2"></i> Round trip flight Kathmandu – Lukla
                                                and back with departure taxes</li>
                                            <li><i class="fa fa-check pink me-2"></i> Duffle bag for the trek</li>
                                            <li><i class="fa fa-check pink me-2"></i> Down jacket and sleeping bag</li>
                                            <li><i class="fa fa-check pink me-2"></i> Nepal Hiking Team T-shirt, trekking
                                                map and trip achievement certificate</li>
                                            <li><i class="fa fa-check pink me-2"></i> First aid medical kit</li>
                                            <li><i class="fa fa-check pink me-2"></i> Sagarmatha National Park permit</li>
                                            <li><i class="fa fa-check pink me-2"></i> TIMS Fee (Trekkers' Info Mgmt System –
                                                bring 2 passport photos)</li>
                                            <li><i class="fa fa-check pink me-2"></i> Government taxes & service charges
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>

                            {{-- Price Excludes --}}
                            <div class="col-md-12">
                                <div class="desc-box border rounded p-3 bg-white">
                                    <h4 class="mb-3 text-danger"><i class="fa fa-times-circle me-1"></i> Price Excludes</h4>
                                    <ul class="mb-0 ps-3">
                                        @forelse($package->priceIncludes->where('is_included', false) as $exclude)
                                            <li class="mb-1"><i class="fa fa-close pink me-2"></i> {{ $exclude->title }}
                                            </li>
                                        @empty
                                            <li><i class="fa fa-close pink me-2"></i> Meals not specified in the itinerary
                                            </li>
                                            <li><i class="fa fa-close pink me-2"></i> Travel insurance</li>
                                            <li><i class="fa fa-close pink me-2"></i> International airfare</li>
                                            <li><i class="fa fa-close pink me-2"></i> Nepal visa on arrival (USD 40 for 30
                                                days, USD 100 for 90 days – 2 passport photos required)</li>
                                            <li><i class="fa fa-close pink me-2"></i> Cold drinks like Coke, Fanta, bottled
                                                water, etc.</li>
                                            <li><i class="fa fa-close pink me-2"></i> Snacks and personal expenses</li>
                                            <li><i class="fa fa-close pink me-2"></i> Hot shower (except Phakding, Namche,
                                                Lukla)</li>
                                            <li><i class="fa fa-close pink me-2"></i> Personal trekking equipment</li>
                                            <li><i class="fa fa-close pink me-2"></i> Tips and gratuities for staff and
                                                drivers</li>
                                        @endforelse
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
                                {{-- <div id="booking-response" class="mt-3"></div> --}}
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
            /* max-height: 100vh; */
            /* 80% of viewport height */
            /* overflow-y: auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    padding-right: 10px; */
            /* to prevent scrollbar overlapping content */
        }

        .description p {

            background: none !important;
        }

        .description span {

            font-size: 16px !important;
            line-height: 1. !important;
            font-family: "Rubik", sans-serif !important;
            font-weight: 400 !important;
            color: #777 !important;

        }

        .description p {

            font-size: 16px !important;
            line-height: 1. !important;
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
            /* pill-like look */
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
            /* space between title and badge */
        }

        .price-title {

            margin: 1px 0;
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


        });
    </script>
@endpush
