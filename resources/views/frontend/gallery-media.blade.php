@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Omundum Trek Album</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <div class="col-md-6">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" />
                            <div class="overlay"></div>
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending1.jpg"><i
                                            class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" />
                            <div class="overlay"></div>
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending2.jpg"><i
                                            class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}" />
                            <div class="overlay"></div>
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending3.jpg"><i
                                            class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" />
                            <div class="overlay"></div>
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending4.jpg"><i
                                            class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}" />
                            <div class="overlay"></div>
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending5.jpg"><i
                                            class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" />
                            <div class="overlay"></div>
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending6.jpg"><i
                                            class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" />
                            <div class="overlay"></div>
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending7.jpg"><i
                                            class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                            <img alt="image" src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" />
                            <div class="overlay"></div>
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a data-lightbox="gallery" data-title="Title" href="images/trending/trending8.jpg"><i
                                            class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="pagination-main text-center">
                        <ul class="pagination">
                            <li><a href="#"><i aria-hidden="true" class="fa fa-angle-double-left"></i></a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </li>
                        </ul>
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
