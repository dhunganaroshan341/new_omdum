@push('styles')
<style>
    .carousel-control-prev,
    .carousel-control-next {
        width: 40px;
        height: 40px;
        background-color: rgba(99, 101, 241, 0.3);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
    }

    .carousel-control-prev {
        left: -20px;
    }

    .carousel-control-next {
        right: -20px;
    }

    .carousel-indicators {
        bottom: -40px;
    }

    .carousel-indicators button {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #6365f1;
        opacity: 0.3;
    }

    .carousel-indicators .active {
        opacity: 1;
    }
</style>
@endpush

<div class="bg-light py-5">
    <div class="container py-5">
        <h2 class="text-center mb-5 text-3xl font-extrabold text-gray-900">What Our Customers Say</h2>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($testimonials->chunk(2) as $index => $testimonialChunk)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    @foreach ($testimonialChunk as $testimonial)
                                        <div class="flex justify-center">
                                            <figure class="bg-white rounded-lg shadow-lg p-6 transition-transform duration-300 ease-in-out hover:translate-y-1">
                                                <img src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}" class="w-20 h-20 object-cover rounded-full border-4 border-gray-800 mb-4">
                                                <blockquote class="italic text-lg text-gray-600 mb-4">
                                                    "{{ $testimonial->description ?? '...' }}"
                                                </blockquote>
                                                <div class="author text-center">
                                                    <h5 class="text-xl font-semibold text-gray-800">{{ $testimonial->name ?? 'Anonymous' }}</h5>
                                                    <span class="text-sm text-gray-500">{{ $testimonial->designation ?? 'Customer' }}</span>
                                                </div>
                                            </figure>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                    <div class="carousel-indicators">
                        @foreach ($testimonials->chunk(4) as $index => $chunk)
                            <button type="button" data-bs-target="#testimonialCarousel"
                                data-bs-slide-to="{{ $index }}"
                                class="{{ $index == 0 ? 'active' : '' }}"
                                aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
