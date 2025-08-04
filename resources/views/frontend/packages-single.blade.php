@extends('frontend.layout.main')

@section('content')
    @php
        $maintitle = $tour->title ?? 'Explore Tour';
        $page = 'Tours';
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
                                <div class="rating-main d-sm-flex align-items-center">
                                    <p class="mb-0 me-3"><i class="flaticon-location-pin"></i>
                                        @if ($package->location)
                                            {{ $package->location }}
                                        @elseif(isset($package->country->name))
                                            {{ $package->country->name }}
                                        @else
                                            {{ ' Not Available' }}
                                        @endif
                                    </p>

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





                        <div class="tour-includes mb-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-clock-o pink me-1"></i> Duration:
                                            {{ $package->duration ?? '5 Days' }}</td>
                                        <td><i class="fa fa-group pink me-1"></i> Max People:
                                            {{ $package->max_people ?? '26' }}</td>
                                        <td><i class="fa fa-calendar pink me-1"></i>Best Season:
                                            {{ $package->best_season ?? 'Jan 18 - Dec 21' }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-tag pink me-1"></i>
                                            Price:
                                            {{ $package->price ? '$' . number_format($package->price, 2) : 'Price Upon Request' }}
                                        </td>

                                        <td><i class="fa fa-map-signs pink me-1"></i> Pickup:
                                            {{ $package->pickup ?? 'Airport' }}</td>
                                        <td><i class="fa fa-file-alt pink me-1"></i> Language:
                                            {{ $package->languages ?? 'English, Nepali' }}</td>
                                    </tr>
                                </tbody>
                            </table>
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
                                        <h5 class="mb-1"> Difficulty</h5>
                                        <p class="mb-0">{{ $package->difficulty ?? 'Easy' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 pe-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Price Includes</h5>
                                        <ul>
                                            @forelse($package->priceIncludes->where('is_included', true) as $include)
                                                <li><i class="fa fa-check pink me-1"></i> {{ $include->title }}</li>
                                            @empty
                                                <li><i class="fa fa-check pink me-1"></i> Airport pickup and drop-off</li>
                                                <li><i class="fa fa-check pink me-1"></i> Experienced local guides and
                                                    porters</li>
                                                <li><i class="fa fa-check pink me-1"></i> All accommodation during the trek
                                                </li>
                                                <li><i class="fa fa-check pink me-1"></i> Meals during trekking days</li>
                                                <li><i class="fa fa-check pink me-1"></i> Camping and cooking equipment</li>
                                                <li><i class="fa fa-check pink me-1"></i> Trekking permits and entrance fees
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2 ps-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Price Excludes</h5>
                                        <ul>
                                            @forelse($package->priceIncludes->where('is_included', false) as $exclude)
                                                <li><i class="fa fa-close pink me-1"></i> {{ $exclude->title }}</li>
                                            @empty
                                                <li><i class="fa fa-close pink me-1"></i> International airfare</li>
                                                <li><i class="fa fa-close pink me-1"></i> Personal expenses and tips</li>
                                                <li><i class="fa fa-close pink me-1"></i> Travel insurance</li>
                                                <li><i class="fa fa-close pink me-1"></i> Beverages and alcohol</li>
                                            @endforelse
                                        </ul>
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
                                                <span>{{ $itinerary->order . '.' }}


                                                    {{ ' (Duration -' . $itinerary->itinerary_duration . ')' }}</span> :
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

            // Booking form submission
            $('#booking-form').on('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var responseContainer = $('#booking-response');
                responseContainer.html('');

                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function(response) {
                        responseContainer.html('<div class="alert alert-success">' + response
                            .message + '</div>');
                        form.trigger('reset');
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        var errorHtml = '<div class="alert alert-danger"><ul>';
                        $.each(errors, function(key, value) {
                            errorHtml += '<li>' + value[0] + '</li>';
                        });
                        errorHtml += '</ul></div>';
                        responseContainer.html(errorHtml);
                    }
                });
            });
        });
    </script>
@endpush
