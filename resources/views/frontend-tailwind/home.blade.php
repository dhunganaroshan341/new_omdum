@extends('frontend-tailwind.layout.main')

@section('content')

<section class="relative hero">
    @include('frontend-tailwind.notice')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($homeslides as $index => $slide)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"
                    style="background-image: url({{ asset('storage/' . $slide->image) }});">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="container h-full">
                        <div class="flex items-center justify-center h-full">
                            <div class="col-md-7 text-white">
                                <div class="divider mb-3"></div>
                                <h1 class="text-4xl mb-3">{{ $slide->title }}</h1>
                                <p class="text-lg mb-4 pr-5">{!! $slide->shortdesc !!}</p>
                                <div class="btn-container">
                                    <a href="#" target="_blank"
                                        class="inline-block bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">Contact
                                        Now <i class="icofont-simple-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="py-10 section-2">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="flex items-center">
                <div class="about-block">
                    <h1 class="text-3xl text-blue-600">Welcome</h1>
                    <p class="mt-4">{!! $frontend->description !!}</p>
                </div>
            </div>
            <div>
                <div class="image-red-background">
                    <img src="{{ asset('storage/'. $frontend->welcome_image) }}" alt="" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-10 section-4 bg-gray-100 text-center">
    <div class="relative">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="container relative z-10">
            <div class="help-container text-white">
                <h1 class="text-4xl font-bold">Do you need help?</h1>
                <p class="mt-3 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsum, odit velit
                    exercitationem praesentium error id iusto dolorem expedita nostrum eius atque? Aliquam ab reprehenderit
                    animi sapiente quasi, voluptate dolorum?</p>
                <a href="#" class="mt-3 inline-block bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">
                    Call Us Now <i class="fa-solid fa-angle-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-10 section-3">
    @include('frontend.testimonial')
</section>

<script>
    $(document).ready(function(){
        $("#staticBackdrop").modal("show");
    })
</script>

@endsection
