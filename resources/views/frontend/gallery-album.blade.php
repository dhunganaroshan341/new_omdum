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
                                        {{ $album->galleryMedia->count() }}
                                        {{ Str::plural('image', $album->galleryMedia->count()) }}
                                    </div>
                                </a>
                            </div>
                            <a href="{{ route('gallery.album.showById', $album->id) }}"
                                class="text-white d-inline-block text-decoration-none">
                                <div class="gallery-content text-center">
                                    <h5 class="mb-0">

                                        {{ $album->title ?? 'Untitled Album' }}

                                    </h5>
                                </div>
                            </a>
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

        /* The overlay bar covering about half width at bottom */
        .image-count-overlay {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50%;
            /* half width */
            height: 40px;
            /* height of the bar */
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 8px 12px;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            border-top-left-radius: 12px;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
            font-weight: 600;
        }

        /* Show on hover */
        .gallery-image:hover .image-count-overlay {
            opacity: 1;
            pointer-events: auto;
        }
    </style>
@endpush
