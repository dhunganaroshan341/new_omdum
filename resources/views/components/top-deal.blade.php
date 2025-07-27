<section class="top-deals bg-grey pt-9">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0">Today's <span>Top Deal</span></h2>
            {{-- <p class="mb-0">....</p> --}}
        </div>
        <div class="team-slider">
            @forelse ($topDeals as $deal)
                <div class="slider-item position-relative mx-3">
                    <div class="slider-image">
                        {{-- Show first image or fallback --}}
                        <img src="{{ isset($deal->images[0]) ? asset($deal->images[0]) : asset('template/yatri_world/main-file/images/india.jpg') }}"
                            alt="{{ $deal->title }}">
                    </div>
                    <div class="slider-content">
                        {{-- Assuming you have country or location stored --}}
                        <h6 class="font-weight-normal pink">
                            <i class="fa fa-map-marker-alt"></i>
                            {{ $deal->country->name ?? 'Unknown Location' }}
                        </h6>
                        <h4><a href="{{ route('packages.show', $deal->slug) }}">{{ $deal->title }}</a></h4>
                        <p>{{ Str::limit($deal->short_description, 60) }}</p>
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
