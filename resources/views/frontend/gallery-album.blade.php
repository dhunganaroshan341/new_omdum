@extends('frontend.layout.main')

@php use Illuminate\Support\Str; @endphp

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Omundum Albums</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Gallery</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Gallery starts -->
    <div class="gallery pt-10 pb-6">
        <div class="container">
            <div class="row mt-3">

                @foreach ($albums as $album)
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item mb-4">
                            <div class="gallery-image position-relative">
                                <a href="{{ route('gallery.album.showById', $album->id) }}">
                                    <img alt="{{ $album->title ?? 'Untitled Album' }}"
                                        src="{{ $album->thumbnail ?? asset('template/yatri_world/main-file/images/default.jpg') }}" />
                                    <div class="overlay"></div>
                                    <div class="image-count-overlay">
                                        {{ $album->title }} &nbsp; |
                                        {{ $album->galleryMedia->count() }}
                                        {{ Str::plural('image', $album->galleryMedia->count()) }}
                                    </div>
                                </a>
                            </div>

                            <div class="gallery-content text-center">
                                <a href="{{ route('gallery.album.showById', $album->id) }}"
                                    class="text-white d-inline-block text-decoration-none">
                                    <h5 class="mb-0">
                                        {{ $album->title ?? 'Untitled Album' }}
                                    </h5>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach

                <!-- Pagination -->
                <div class="col-lg-12">
                    <div class="pagination-main text-center">
                        {{ $albums->links('pagination::bootstrap-4') }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery Ends -->
@endsection

@push('styles')
    <style>
        .gallery-image img {
            height: 300px !important;
            object-fit: cover !important;
            width: 100%;
            display: block;
        }

        .gallery-image {
            position: relative;
        }

        .image-count-overlay {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50%;
            height: 40px;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 8px 12px;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            border-top-left-radius: 12px;
            font-weight: 600;
            transition: opacity 0.3s ease;
        }

        /* Show only on hover in desktop */
        @media (min-width: 768px) {
            .image-count-overlay {
                opacity: 0;
                pointer-events: none;
            }

            .gallery-image:hover .image-count-overlay {
                opacity: 1;
                pointer-events: auto;
            }
        }

        /* Always show image count and title in mobile */
        @media (max-width: 767.98px) {
            .image-count-overlay {
                opacity: 1;
                pointer-events: auto;
            }

            .gallery-content h5 {
                color: #fff;
                background: rgba(0, 0, 0, 0.6);
                display: inline-block;
                padding: 4px 10px;
                border-radius: 8px;
                margin-top: 8px;
            }
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
            font-family: "Poppins", sans-serif;
            margin: 10px 0 16px;
            color: white;
            line-height: 1.4;
        }

        /* Default hidden in mobile so jQuery can slide it */
        @media (max-width: 767.98px) {

            .image-count-overlay,
            .gallery-content {
                /* display: none; */
            }
        }
    </style>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
            );
        }

        function handleScrollReveal() {
            if (window.innerWidth > 767.98) return; // Only apply on mobile

            $('.gallery-item').each(function() {
                const overlay = $(this).find('.image-count-overlay');
                const title = $(this).find('.gallery-content');

                if (isInViewport(this)) {
                    overlay.stop().slideDown(300);
                    title.stop().slideDown(300);
                } else {
                    overlay.stop().slideUp(300);
                    title.stop().slideUp(300);
                }
            });
        }

        $(document).ready(function() {
            // Initial call
            handleScrollReveal();

            // Scroll event
            $(window).on('scroll', function() {
                handleScrollReveal();
            });
        });
    </script>
@endpush
