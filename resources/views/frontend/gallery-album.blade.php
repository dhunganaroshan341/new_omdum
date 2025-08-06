@extends('frontend.layout.main')

@extends('layouts.app')

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
                            <div class="gallery-image">
                                <img alt="{{ $album->title ?? 'Untitled Album' }}"
                                    src="{{ $album->thumbnail ?? asset('template/yatri_world/main-file/images/default.jpg') }}" />
                                <div class="overlay"></div>
                            </div>
                            <div class="gallery-content text-center">
                                <h5 class="mb-0">
                                    <a href="{{ route('gallery.album.showById', $album->id) }}"
                                        class="text-white d-inline-block text-decoration-none">
                                        {{ $album->title ?? 'Untitled Album' }}
                                    </a>
                                </h5>
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
        }
    </style>
@endpush
