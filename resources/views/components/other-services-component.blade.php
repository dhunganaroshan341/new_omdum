<!-- Trending Starts -->
<section class="trending destination bg-grey pb-6">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0">Related <span>Tour Packages</span></h2>
            <p class="mb-0">
                Travel has helped us to understand the meaning of life and it has helped us become better people.
                Each time we travel, we see the world with new eyes.
            </p>
        </div>

        <div class="trend-box">
            <div class="team-slider">
                @foreach ($otherServices as $service)
                    @php
                        $images = json_decode($service->images, true);
                        $imagePath =
                            isset($images[0]) && file_exists(public_path('uploads/' . $images[0]))
                                ? asset('uploads/' . $images[0])
                                : asset('template/yatri_world/main-file/images/india.jpg');
                        $country = $service->country->name ?? 'Unknown';
                        $price = $service->price;
                        $slugUrl = route('packages.show', ['slug' => $service->slug]);
                    @endphp

                    <div class="trend-item mx-3">
                        <a href="{{ $slugUrl }}">
                            <div class="trend-image">
                                <img src="{{ $imagePath }}" alt="{{ $service->title }}">
                            </div>
                        </a>

                        <div class="trend-content-main">
                            <div class="trend-content">
                                <h6 class="font-weight-normal">
                                    <i class="fa fa-map-marker-alt"></i> {{ $country }}
                                </h6>
                                <h4>
                                    <a href="{{ $slugUrl }}">
                                        {{ $service->title }}
                                    </a>
                                </h4>
                            </div>

                            <div class="trend-last-main">
                                <p class="mb-0 trend-para">
                                    {{ \Illuminate\Support\Str::words($service->short_description, 5, '...') }}
                                </p>

                                <div class="trend-last d-flex align-items-center justify-content-between">
                                    <p class="mb-0 white">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        {{ $service->duration ?? 'Flexible' }}
                                    </p>
                                    <div class="trend-price">
                                        <p class="price white mb-0">
                                            <a href="{{ $slugUrl }}">
                                                View Package <i class="fa fa-arrow-right white ps-1"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Trending Ends -->

@push('styles')
    <style>
        .trend-content-main {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 15px rgba(204, 204, 204, 0.34);
            transition: all ease-in-out 0.3s;
            background: #fff;
            z-index: 9;
            max-height: 200px;
            overflow-y: auto;
        }

        .trend-content-main::-webkit-scrollbar {
            width: 6px;
        }

        .trend-content-main::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 3px;
        }

        .trend-price a {
            color: #fff;
            font-weight: 600;
            text-decoration: none;
        }

        .trend-price a:hover {
            text-decoration: underline;
        }
    </style>
@endpush
