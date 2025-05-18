<section class="section-3 py-5 position-relative">

    <!-- Left angle decoration -->
    <div class="angle-left"></div>

    <!-- Right angle decoration -->
    <div class="angle-right"></div>
    <div class="container">
        <div class="testimonial-head text-center">
            <div class="divider mb-3 mx-auto"></div>
            <h2 class="text-realm-yellow mb-4 ">Testimonials</h2>
        </div>

        <div class="cards">
            <div class="services-slider">
                @foreach ($testimonials as $testimonial)
                    <div class="card border-0 text-center">
                        {{-- Image --}}
                        @if (!empty($testimonial->image))
                            <img src="{{ asset('storage/' . $testimonial->image) }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 80px; height: 80px; object-fit: cover;" alt="{{ $testimonial->name }}">
                        @else
                            <img src="{{ asset('default-avatar.png') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 80px; height: 80px; object-fit: cover;" alt="Default Avatar">
                        @endif

                        {{-- Card Body --}}
                        <div class="card-body p-3">
                            <h5 class="card-title mt-2 mb-1">{{ $testimonial->name ?? 'Anonymous' }}</h5>

                            {{-- Designation and Address (conditionally rendered) --}}
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

                            {{-- Description --}}
                            <p class="card-text fst-italic">
                                {!! Str::limit($testimonial->description ?? '', 150, '...') !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</section>
@push('styles')


@endpush
