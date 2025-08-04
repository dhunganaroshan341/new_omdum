@if ($randomPackages)

    <section class="top-destination overflow-hidden bg-navy p-0">
        <div class="container-fluid">
            <div class="desti-inner">
                @php
                    $fallbackImages = [
                        asset('template/yatri_world/main-file/images/india.jpg'),
                        asset('template/yatri_world/main-file/images/everest.jpeg'),
                        asset('template/yatri_world/main-file/images/destination/lumbini.jpg'),
                    ];

                    // Use package image if available, else fallback in order
                    $imgSrc = $package->images->image_path ?? $fallbackImages[0];
                @endphp
                @foreach ($randomPackages->chunk(4) as $chunk)
                    <div class="row d-flex align-items-center">
                        @foreach ($chunk as $package)
                            <div class="col-lg p-0">
                                <div class="desti-image bordernone">
                                    <img src="{{ $imgSrc }}" alt="{{ $package->title ?? 'Destination' }}"
                                        onerror="this.onerror=null;this.src='{{ $fallbackImages[1] }}'; this.onerror=function(){ this.src='{{ $fallbackImages[2] }}'; }">

                                    <div class="desti-content">
                                        {{-- <div class="rating mb-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <span class="fa fa-star checked"></span>
                                            @endfor
                                        </div> --}}
                                        <h4 class="white mb-0">{{ $package->title ?? 'Tour Package' }}</h4>
                                    </div>

                                    <div class="desti-overlay">
                                        <a href="{{ route('packages.show', ['slug' => $package->slug]) }}"
                                            class="nir-btn">
                                            <span class="white">Book Now</span>
                                            <i class="fa fa-arrow-right white ps-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@else
    <section class="top-destination overflow-hidden bg-navy p-0">
        <div class="container-fluid">
            <div class="desti-inner">
                <div class="row d-flex align-items-center">
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">

                            <img src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Mount Kailash Tour</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}"
                                alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Thimpu-City Bhutan</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}" alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">India Tour Package</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Mount kailash Premium </h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row d-flex align-items-center">

                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Tibet Tour</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}"
                                alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Northern India Tour</h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}"
                                alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Tibet package </h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg p-0">
                        <div class="desti-image bordernone">
                            <img src="{{ asset('template/yatri_world/main-file/images/everest.jpeg') }}"
                                alt="destination">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Everest Base Camp </h4>
                            </div>
                            <div class="desti-overlay">
                                <a href="booking.html" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
@endif
