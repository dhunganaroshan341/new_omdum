@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Our Services</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Services</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>

    <!-- Services Section -->
    @include('components.service-left-right')
    @include('components.why-us-section')
    <x-testimonial-section />
@endsection

@push('styles')
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        .service-title {
            color: var(--omundum-orange);
        }

        .btn-view-packages {
            background-color: var(--omundum-orange);
            color: #fff;
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-view-packages:hover {
            background-color: var(--omundum-green);
            color: #fff;
        }
    </style>
@endpush

@push('scripts')
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
@endpush
