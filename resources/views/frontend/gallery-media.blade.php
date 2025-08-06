@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ $pageBanner->image ?? asset('template/yatri_world/main-file/images/bhutan.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">{{ $galleryAlbum->title ?? 'Album' }}</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li aria-current="page" class="breadcrumb-item active">{{ $galleryAlbum->title }}</li>
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
                @forelse($galleryAlbum->galleryMedia as $media)
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item mb-4">
                            <div class="gallery-image">
                                <img alt="image" src="{{ $media->image }}" />
                                <div class="overlay"></div>
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li>
                                        <a data-lightbox="gallery" data-title="{{ $galleryAlbum->title }}"
                                            href="{{ $media->image }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $media->url ?? '#' }}"><i class="fa fa-link"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No media found in this album.</p>
                    </div>
                @endforelse
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
