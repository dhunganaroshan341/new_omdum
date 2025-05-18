<section class="hero">
    @include('frontend.notice')

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($homeslides as $index => $slide)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"
                     style="background-image: url({{ asset('storage/' . $slide->image) }}); background-size: cover; background-position: center; height: 100vh; position: relative;">

                    <div class="hero-background-overlay" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; background-color: rgba(0,0,0,0.5); z-index: 1;"></div>

                    <div class="container h-100" style="position: relative; z-index: 2;">
                        <div class="row align-items-center d-flex h-100">
                            <div class="col-md-7">
                                <div class="block text-white">
                                    <div class="divider mb-3"></div>
                                    <h1 class="mb-3 mt-3">{{ $slide->title }}</h1>
                                    <p class="mb-4 pr-5">{!! $slide->shortdesc !!}</p>
                                    <div class="btn-container">
                                        <a href="#" target="_blank" class="btn btn-primary">
                                            Contact Now <i class="icofont-simple-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Controls (fixed and visible on both edges) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1); width: 40px; height: 40px;"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1); width: 40px; height: 40px;"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
