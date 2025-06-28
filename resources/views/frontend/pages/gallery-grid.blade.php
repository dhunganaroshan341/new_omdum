@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/bg/bg8.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Gallery</h2>
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
    <!-- top destination starts -->
    <section class="container py-4">
        <div class="row align-items-center justify-content-between g-3">
            <!-- Empty column for spacing or future content -->
            <div class="col-md-4 d-none d-md-block">
                {{-- nothing to be put --}}
            </div>

            <!-- Filter label and dropdown -->
            <div class="col-md-4">
                <div class="input-group">
                    <!-- Label styled to match select height -->
                    <span class="input-group-text bg-light text-dark border border-end-0">
                        <i class="fa fa-filter me-1"></i> Filter
                    </span>
                    <select id="filterSelect" class="form-select border-start-0">
                        <option selected disabled>Choose type</option>
                        <option value="2">Photo</option>
                        <option value="3">Video</option>
                    </select>
                </div>
            </div>

        </div>
    </section>


    <section class="top-destination overflow-hidden">
        <div class="container">


            <div class="desti-inner">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img alt="desti" src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" />
                            <div class="desti-content">

                                <h4 class="white mb-1">Mundum Cultural Trek</h4>

                            </div>
                            <div class="desti-overlay">
                                <a class="nir-btn" href="#">
                                    <a class="nir-btn" href="#">
                                        <i class="fa fa-eye white ps-1"></i>
                                        <span class="white">View Album</span>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img alt="desti" src="{{ asset('template/yatri_world/main-file/images/india.jpg') }}" />
                            <div class="desti-content">

                                <h4 class="white mb-1">Mundum Cultural Trek</h4>

                            </div>
                            <div class="desti-overlay">
                                <a class="nir-btn" href="#">
                                    <a class="nir-btn" href="#">
                                        <i class="fa fa-eye white ps-1"></i>
                                        <span class="white">View Album</span>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img alt="desti" src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" />
                            <div class="desti-content">

                                <h4 class="white mb-1">Mundum Cultural Trek</h4>

                            </div>
                            <div class="desti-overlay">
                                <a class="nir-btn" href="#">
                                    <a class="nir-btn" href="#">
                                        <i class="fa fa-eye white ps-1"></i>
                                        <span class="white">View Album</span>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img alt="desti"
                                src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}" />
                            <div class="desti-content">

                                <h4 class="white mb-1">Mundum Cultural Trek</h4>

                            </div>
                            <div class="desti-overlay">
                                <a class="nir-btn" href="#">
                                    <a class="nir-btn" href="#">
                                        <i class="fa fa-eye white ps-1"></i>
                                        <span class="white">View Album</span>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img alt="desti" src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}" />
                            <div class="desti-content">

                                <h4 class="white mb-1">Mundum Cultural Trek</h4>

                            </div>
                            <div class="desti-overlay">
                                <a class="nir-btn" href="#">
                                    <a class="nir-btn" href="#">
                                        <i class="fa fa-eye white ps-1"></i>
                                        <span class="white">View Album</span>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img alt="desti" src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" />
                            <div class="desti-content">

                                <h4 class="white mb-1">Mundum Cultural Trek</h4>

                            </div>
                            <div class="desti-overlay">
                                <a class="nir-btn" href="#">
                                    <a class="nir-btn" href="#">
                                        <i class="fa fa-eye white ps-1"></i>
                                        <span class="white">View Album</span>
                                    </a>
                                </a>
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
    </section>
    <!-- top destination ends -->
    <!-- Gallery Ends -->
@endsection
@push('styles')
    <style>
        .top-destination:before {
            content: "";
            background: none;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }
    </style>
@endpush
