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
    <section class="container py-5">
        <!-- Service 1 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}" class="img-fluid rounded shadow"
                    alt="Service Image 1">
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <h3 class="mb-3 service-title">Trekking Adventures</h3>
                <p>Explore the breathtaking trails of Nepal with our expert-guided trekking services. Whether you're new to
                    hiking or a seasoned trekker, we offer routes tailored to your skill level.</p>
                <a href="#" class="btn btn-view-packages mt-3">Explore <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" class="img-fluid rounded shadow"
                    alt="Service Image 2">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h3 class="mb-3 service-title">Cultural Tours</h3>
                <p>Dive deep into Nepal’s rich culture and heritage. Visit temples, local villages, and experience the
                    unique traditions of the Himalayas on our immersive cultural tours.</p>
                <a href="#" class="btn btn-view-packages mt-3">Explore <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>
    </section>
    @include('components.why-us-section')
    @include('components.testimonial-section')
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
