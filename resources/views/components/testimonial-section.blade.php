<section class="section-3 py-5 position-relative">
    <div class="angle-left"></div>
    <div class="angle-right"></div>
    <div class="container">
        <div class="testimonial-head text-center">
            <div class="divider mb-3 mx-auto"></div>
            <h2 class="text-realm-yellow mb-4">Testimonials</h2>
        </div>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                @foreach ($testimonials->chunk(2) as $chunkIndex => $chunk)
                    <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                        <div class="row justify-content-center">
                            @foreach ($chunk as $testimonial)
                                <div class="col-md-6 mb-4">
                                    <div class="card border-0 text-center h-100">
                                        @if (!empty($testimonial->image))
                                            <img src="{{ asset('storage/' . $testimonial->image) }}"
                                                class="card-img-top rounded-circle mx-auto mt-3"
                                                style="width: 80px; height: 80px; object-fit: cover;"
                                                alt="{{ $testimonial->name }}">
                                        @else
                                            <img src="{{ asset('assets/images/default-user.png') }}"
                                                class="card-img-top rounded-circle mx-auto mt-3"
                                                style="width: 80px; height: 80px; object-fit: cover;"
                                                alt="Default Avatar">
                                        @endif

                                        <div class="card-body p-3">
                                            <h5 class="card-title mt-2 mb-1">{{ $testimonial->name ?? 'Anonymous' }}</h5>

                                            @if (!empty($testimonial->designation) || !empty($testimonial->address))
                                                <p class="mb-2 text-muted small">
                                                    @if (!empty($testimonial->designation))
                                                        <span>{{ $testimonial->designation }}</span>
                                                    @endif
                                                    @if (!empty($testimonial->designation) && !empty($testimonial->address))
                                                        <span> | </span>
                                                    @endif
                                                    @if (!empty($testimonial->address))
                                                        <span>{{ $testimonial->address }}</span>
                                                    @endif
                                                </p>
                                            @endif

                                            <p class="card-text fst-italic">
                                                {!! Str::limit($testimonial->description ?? '', 150, '...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Optional controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-none text-realm-blue  " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-none text-realm-blue  " aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
@push('styles')
<style>
    @media (max-width: 768px) {
        .carousel .carousel-item .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-size: 100%, 100%;
    }
</style>
@endpush
