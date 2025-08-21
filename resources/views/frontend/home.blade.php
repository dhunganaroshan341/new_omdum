@extends('frontend.layout.main')
@section('content')
    <!-- banner starts -->
    @if ($video)
        @include('components.custom-banner-video')
    @else
        @include('components.youtube-banner-simple')
    @endif
    <!-- banner ends -->


    <x-popup-notice />
    <!-- Fav destination Starts -->

    <x-fav-destination />
    <!-- Fav destination Ends -->


    <!-- form starts -->
    {{-- @include('components.booking-modal') --}}
    <!-- form ends -->



    <!-- top destination ends -->

    <x-home-about-us-section />

    <!-- Call to action starts -->
    <x-call-to-action-home-section />
    <!-- call to action Ends -->

    <!-- top destination starts -->
    <x-random-packages />



    <!-- Achivements Counter -->
    <x-achievement-counter />
    <!-- End Counter -->
    <!-- top deal starts -->
    <x-top-deal />
    <!-- top deal ends -->
    <!-- cta-horizon starts -->
    <div class="cta-horizon bg-navy pt-4 pb-4">
        <div class="container d-md-flex align-items-center justify-content-between">
            <h4 class="mb-0 white">It’s Time For a New Adventure! Don’t Wait Any Longer. Contact us!</h4>
            <a href="{{ route('contact') }}" class="nir-btn">Reach out To Us</a>
        </div>
    </div>
    <!-- cta-horizon Ends -->



    <x-client-carousel />
    <!-- testomonial start -->
    <x-testimonial-section />
    <!-- testimonial ends -->


    <!-- News Starts -->
    <x-blog-and-news-section />
    <!-- News Ends -->

    <!-- Newsletter Starts -->
    <x-news-letter-section />
    <!-- Newsletter Ends -->
@endsection
@push('styles')
    <style>
        .book-now-a:hover {
            color: var(--omundum-green);
        }

        .about-image-main img {
            height: 400px !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.attract-slider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                autoplay: true,
                autoplayTimeout: 1000,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 4
                    },
                    1000: {
                        items: 6
                    }
                }
            });

            $('.team-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>
@endpush
