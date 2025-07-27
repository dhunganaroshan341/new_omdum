<section class="trending destination pb-6 bg-grey pt-9">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0">Choose Your <span>Favourite Destination</span></h2>
        </div>

        <div class="trend-box">

            {{-- Nav Tabs --}}
            <div class="price-navtab text-center mb-4">
                <ul class="nav nav-tabs">
                    @foreach ($favouriteDestinationsByCountry as $country)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab"
                                href="#{{ Str::slug($country->name) }}">
                                {{ $country->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Tab Contents --}}
            <div class="tab-content">
                @foreach ($favouriteDestinationsByCountry as $country)
                    <div id="{{ Str::slug($country->name) }}"
                        class="tab-pane fade {{ $loop->first ? 'show active' : '' }}">
                        <div class="row">
                            @foreach ($country->tourPackages as $package)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="{{ asset($package->images[0] ?? 'template/yatri_world/main-file/images/everest.jpg') }}"
                                                alt="{{ $package->title }}">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <h4>
                                                    <a href="{{ route('packages.show', $package->slug) }}">
                                                        {{ $package->title }}
                                                    </a>
                                                </h4>
                                                <p class="mb-0">
                                                    <i class="fa fa-eye me-1"></i>
                                                    {{ $package->visiting_places ?? '0' }} Visiting Places
                                                    <i class="fa fa-map-marker me-1 ms-3"></i>
                                                    {{ $country->name }}
                                                </p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">
                                                    {{ Str::limit($package->short_description, 100) }}
                                                </p>
                                                <div
                                                    class="trend-last d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('packages.show', $package->slug) }}"
                                                        class="book-now-a mb-0 white d-flex align-items-center">
                                                        <img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}"
                                                            class="d-author me-2" alt="">
                                                        Book Now
                                                    </a>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0">
                                                            <a href="{{ route('packages.show', $package->slug) }}">
                                                                <i class="fa fa-arrow-right white ps-1"></i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
