<section class="top-deals bg-grey pt-9">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0">Today's <span>Top Deal</span></h2>
        </div>

        <div class="team-slider">

            @forelse ($topDeals as $deal)
                <div class="slider-item position-relative mx-3">
                    <div class="slider-image">
                        {{-- Use the first_image_url accessor --}}
                        <img src="{{ $deal->first_image_url }}" alt="{{ $deal->title ?? 'Top Deal Image' }}">
                    </div>

                    <div class="slider-content">
                        <h6 class="font-weight-normal pink">
                            <i class="fa fa-map-marker-alt"></i>
                            {{ $deal->location ?? 'Unknown' }}
                        </h6>

                        <h4>
                            <a href="{{ route('packages.show', $deal->slug) }}">
                                {{ $deal->title ?? 'Untitled Deal' }}
                            </a>
                        </h4>

                        <p>{{ \Illuminate\Support\Str::limit($deal->short_description ?? '', 60) }}</p>

                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From
                                <span>${{ number_format($deal->price ?? 0, 2) }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <p>No Top Deals available right now.</p>
            @endforelse

        </div>
    </div>
</section>
