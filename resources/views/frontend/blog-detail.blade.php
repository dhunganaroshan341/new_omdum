@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/bg/bg8.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">{{ $post->title ?? 'Blog Detail' }}</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Blog</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- blog starts -->
    <section class="blog blog-left">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-lg-8">
                    <div class="blog-single">
                        <div class="blog-imagelist mb-3">
                            <img alt="{{ $post->title ?? 'Blog Image' }}"
                                src="{{ $post->postImages->isNotEmpty() ? asset('tour_images/' . $post->postImages[0]->image_path) : asset('template/yatri_world/main-file/images/bg/bg3.jpg') }}" />
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="date text-center bg-pink p-2">
                                    <h1 class="day mb-0 white">{{ $post->created_at->format('d') }}</h1>
                                    <div class="month white">{{ $post->created_at->format('M') }}</div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="blog-content mb-4 pt-0">
                                    <h3 class="blog-title">
                                        <a class="yellow" href="#">{{ $post->title }}</a>
                                    </h3>
                                    <div class="para-content mb-2">
                                        @if ($post->category)
                                            <span class="me-2">
                                                {{-- <a class="tag pink"
                                                    href="{{ route('blog.category', ['slug' => $post->category->slug ?? '']) }}">
                                                    <i class="fa fa-tag me-1"></i> {{ $post->category->title }}
                                                </a> --}}
                                            </span>
                                        @endif
                                        @if ($post->createdBy)
                                            <span class="me-2">
                                                <a class="pink" href="#"><i class="fa fa-user me-1"></i>
                                                    {{ $post->createdBy->name }}</a>
                                            </span>
                                        @endif
                                        <span><a class="pink" href="#"><i class="fa fa-comment"></i>
                                                {{ $post->comments_count ?? 0 }}</a></span>
                                    </div>

                                    <p>{!! $post->description !!}</p>
                                </div>

                                <!-- blog share -->
                                <div
                                    class="blog-share d-flex justify-content-between align-items-center mb-4 bg-lgrey border">
                                    <div class="blog-share-tag">
                                        <ul class="inline">
                                            <li><strong>Posted In:</strong></li>
                                            @if ($post->category)
                                                <li><a
                                                        href="{{ route('blog.search', ['category_id' => $post->category_id]) }}">{{ $post->category->title }}</a>
                                                </li>
                                            @endif
                                            {{-- Add more categories or tags if applicable --}}
                                        </ul>
                                    </div>
                                    <div class="header-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- author detail -->
                        @if ($post->createdBy)
                            <div class="blog-author mb-4 bg-grey border">
                                <div class="blog-author-item">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-3">
                                            <div class="blog-thumb text-center position-relative">
                                                <img alt="{{ $post->createdBy->name }}"
                                                    src="{{ $post->createdBy->profile_image ? asset('profile_images/' . $post->createdBy->profile_image) : asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h3 class="title pink">
                                                <a href="#">{{ $post->createdBy->name }}</a>
                                                <span>{{ $post->createdBy->role ?? '' }}</span>
                                            </h3>
                                            <p class="m-0">
                                                {{ $post->createdBy->bio ?? 'Author biography not available.' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- blog next prev -->
                        <div class="blog-next mb-4 d-flex justify-content-between">
                            @if ($previousPost)
                                <a href="{{ route('blog.detail', ['slug' => $previousPost->slug]) }}"
                                    class="prev ps-4 text-decoration-none">
                                    <i class="fa fa-arrow-left white"></i>
                                    <p class="m-0 white">Previous Post</p>
                                    <p class="m-0 white">{{ Str::limit($previousPost->title, 40) }}</p>
                                </a>
                            @else
                                <div></div>
                            @endif

                            @if ($nextPost)
                                <a href="{{ route('blog.detail', ['slug' => $nextPost->slug]) }}"
                                    class="next pe-4 text-decoration-none text-end">
                                    <i class="fa fa-arrow-right"></i>
                                    <p class="m-0">Next Post</p>
                                    <p class="m-0">{{ Str::limit($nextPost->title, 40) }}</p>
                                </a>
                            @endif
                        </div>

                        <!-- blog comments and review sections could be dynamically loaded if you have comments in DB -->

                    </div>
                </div>

                <!-- sidebar starts -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        {{-- Sidebar content could be dynamic here, like recent posts, categories, tags --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->
@endsection
