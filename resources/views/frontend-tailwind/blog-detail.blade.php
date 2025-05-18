@extends('frontend-tailwind.layout.main')
@section('content')
    <section class="hero-small">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('{{ asset('assets/images/banner1.jpg') }}') ;">
                    <div class="hero-small-background-overlay"></div>
                    <div class="container h-full">
                        <div class="row items-center justify-center h-full">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h1 class="text-3xl font-semibold mb-3 mt-3">{{ $detail->title ?? '' }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2 py-5">
        <div class="container py-2">
            <div class="col-md-12">
                {{-- <div class="image-red-background">
                    <img src="{{ asset('storage/' . $detail->postImages[0]->image) }}" alt="" class="w-full">
                </div> --}}

                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($detail->postImages as $index => $image)
                            <div class="carousel-item {{ $index == 1 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image->image) }}" class="d-block w-full max-w-full h-auto" alt="...">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-12 flex items-center">
                <div class="about-block">
                    <h1 class="text-2xl font-semibold text-gray-800 mb-3">{{ $detail->title ?? '' }}</h1>
                    <p class="text-gray-700">{!! $detail->description ?? '' !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
