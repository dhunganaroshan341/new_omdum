@extends('frontend.layout.main')
@section('content')
<section class="hero-small">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url({{ asset('assets/images/banner1.jpg') }});">
                <div class="hero-small-background-overlay"></div>
                <div class="container h-full">
                    <div class="flex items-center justify-center h-full">
                        <div class="w-full text-center">
                            <div class="block">
                                <h1 class="text-3xl font-semibold mb-3 mt-3">Blog & News</h1>
                                <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-3 py-5">
    <div class="container">
        <div class="cards">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <div class="mb-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/' . $post->postImages[0]->image) }}" class="card-img-top w-full h-auto" alt="">
                            <div class="card-body p-3">
                                <h2 class="card-title mt-2 text-xl font-semibold">
                                    <a href="{{ route('blog-detail', $post->id) }}" class="text-blue-600 hover:underline">{{ $post->title }}</a>
                                </h2>
                                <div class="content pt-2">
                                    <p class="card-text text-gray-600">{!! Str::limit($post->description, 100, '...') !!}</p>
                                </div>
                                <a href="{{ route('blog-detail', $post->id) }}" class="btn btn-primary mt-4 inline-flex items-center px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded">
                                    Details <i class="fa-solid fa-angle-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
