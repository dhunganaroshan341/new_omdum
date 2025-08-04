@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/bg/bg8.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0" style="line-height: 1.8;">
                        {{ \Illuminate\Support\Str::words($post->title ?? 'Blog Detail', 3, '...') }}
                    </h2>
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


    <!-- blog starts -->
    <section class="blog blog-left">
        <div class="container">
            <div class="row gx-lg-5">
                <!-- Blog Content -->
                <div class="col-lg-8">
                    <div class="blog-single">
                        <div class="blog-imagelist mb-3">
                            <img alt="image"
                                src="{{ asset($post->first_image_url ?? '/template/yatri-world/main-file/images/india.jpg') }}">
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
                                    <h3 class="blog-title"><a class="yellow" href="#">{{ $post->title }}</a></h3>
                                    <div class="para-content mb-2">
                                        <span class="me-2">
                                            <a class="tag pink" href="#">
                                                <i class="fa fa-tag me-1"></i>
                                                {{ $post->category->name ?? 'Uncategorized' }}
                                            </a>
                                        </span>
                                        <span class="me-2">
                                            <a class="pink" href="#"><i class="fa fa-user me-1"></i>
                                                {{ $post->createdBy->name ?? 'Admin' }}
                                            </a>
                                        </span>
                                        <span>
                                            <a class="pink" href="#"><i class="fa fa-comment"></i>
                                                {{ $comments->count() }}</a>
                                        </span>
                                    </div>
                                    {!! $post->description !!}
                                </div>
                            </div>
                        </div>

                        <!-- Blog Prev/Next Navigation -->
                        <div class="blog-next mb-4 d-flex justify-content-between">
                            @if ($previousPost)
                                <a href="{{ route('blog.detail', ['slug' => $previousPost->slug]) }}"
                                    class="float-start text-start">
                                    <div class="prev ps-4">
                                        <i class="fa fa-arrow-left white"></i>
                                        <p class="m-0 white">Previous Post</p>
                                        <p class="m-0 white">
                                            {{ \Illuminate\Support\Str::words($previousPost->title, 3, '...') }}
                                        </p>
                                    </div>
                                </a>
                            @else
                                <div class="float-start text-start opacity-50 pointer-none ps-4">
                                    <div class="prev">
                                        <i class="fa fa-arrow-left white"></i>
                                        <p class="m-0 white">Previous Post</p>
                                        <p class="m-0 white">No Previous</p>
                                    </div>
                                </div>
                            @endif

                            @if ($nextPost)
                                <a href="{{ route('blog.detail', ['slug' => $nextPost->slug]) }}"
                                    class="float-end text-end">
                                    <div class="next pe-4">
                                        <i class="fa fa-arrow-right white"></i>
                                        <p class="m-0">Next Post</p>
                                        <p class="m-0">
                                            {{ \Illuminate\Support\Str::words($nextPost->title, 3, '...') }}
                                        </p>
                                    </div>
                                </a>
                            @else
                                <div class="float-end text-end opacity-50 pointer-none pe-4">
                                    <div class="next">
                                        <i class="fa fa-arrow-right white"></i>
                                        <p class="m-0">Next Post</p>
                                        <p class="m-0">No Next</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">

                            <!-- Categories -->
                            <div class="sidebar-item mb-4">
                                <h4 class="">All Categories</h4>
                                <ul class="sidebar-category">
                                    @foreach ($categories as $category)
                                        <li><a
                                                href="{{ route('blog.category', ['title' => $category->title]) }}">{{ $category->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Recent Posts -->
                            <div class="sidebar-item mb-4">
                                <h4 class="">Recent Posts</h4>
                                @foreach ($recentPosts as $index => $recent)
                                    <article class="post mb-3">
                                        <div class="s-content d-flex align-items-center">
                                            <div class="blog-no">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                                            <div class="content-list ps-3">
                                                <div class="date">{{ $recent->created_at->format('M d, Y') }}</div>
                                                <h5 class="m-0">
                                                    <a href="{{ route('blog.detail', ['slug' => $recent->slug]) }}">
                                                        {{ $recent->title }}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>

                            <!-- Tags -->
                            <div class="sidebar-item mb-4">
                                <h4 class="">Tags</h4>
                                <ul class="sidebar-tags">
                                    @php
                                        $tags = [
                                            'Tour',
                                            'Rental',
                                            'City',
                                            'Yatch',
                                            'Activity',
                                            'Museum',
                                            'Beauty',
                                            'Classic',
                                            'Creative',
                                            'Designs',
                                            'Featured',
                                            'Free Style',
                                            'Programs',
                                            'Travel',
                                        ];
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <li><a href="#">{{ $tag }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Sidebar ends -->
            </div>
        </div>
    </section>
    <!-- blog Ends -->
@endsection
@push('styles')
    <style>
        .blog-next {
            background: #162241
        }
    </style>
@endpush
