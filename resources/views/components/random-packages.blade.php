<section class="top-destination overflow-hidden bg-navy p-0">
    <div class="container-fluid">
        <div class="desti-inner">
            @foreach ($packages->chunk(4) as $chunk)
                <div class="row d-flex align-items-center">
                    @foreach ($chunk as $package)
                        <div class="col-lg p-0">
                            <div class="desti-image bordernone">
                                <img src="{{ asset($package->first_image ?? 'template/yatri_world/main-file/images/default.jpg') }}"
                                    alt="{{ $package->title ?? 'Destination' }}">

                                <div class="desti-content">
                                    <div class="rating mb-1">
                                        @for ($i = 0; $i < 5; $i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                    </div>
                                    <h4 class="white mb-0">{{ $package->title ?? 'Tour Package' }}</h4>
                                </div>

                                <div class="desti-overlay">
                                    <a href="{{ route('package.show', ['slug' => $package->slug]) }}" class="nir-btn">
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
