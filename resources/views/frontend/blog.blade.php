@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    {{-- <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Blog & News </h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active"><a
                                    href="{{ route('blog.index') }}">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section> --}}
    @php
        $maintitle = 'Blogs & News';
        $page = 'blogs';
    @endphp
    <x-bread-crumb :main-title="$maintitle" :pageName="$page" />
    {{-- @dd($posts) --}}
    <!-- BreadCrumb Ends -->
    {{-- @if ($posts) --}}
    <section class="blog">
        <div class="container">
            <div class="row gx-lg-5">
                <!-- Main Blog Content -->
                <div class="col-lg-8 mb-4">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="list-results d-flex align-items-center justify-content-between">
                                <div class="list-results-sort">
                                    <p class="m-0">
                                        {{-- Showing {{ $posts->firstItem() }}-{{ $posts->lastItem() }} of --}}
                                        {{-- {{ $posts->total() }} results --}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        @foreach ($posts as $post)
                            @if (!empty($post->title))
                                <div class="col-md-6 mb-4">
                                    <div class="blog-full text-center p-3">
                                        <a href="{{ route('blog.detail', ['slug' => $post->slug ?? 'slug']) }}">
                                            <img alt="{{ $post->title }}"
                                                src="{{ $post->first_image_url ?? asset('template/yatri_world/main-file/images/india.jpg') }}" />
                                        </a>

                                        <div class="blog-content pb-0">
                                            <span class="h-date pink mb-1 font-weight-light d-block">
                                                {{ $post->created_at->format('M d, Y') }}
                                            </span>
                                            <h3 class="mb-2">
                                                <a href="{{ route('blog.detail', ['slug' => $post->slug ?? 'slug']) }}">
                                                    {{ Str::limit($post->title, 70) }}
                                                </a>
                                            </h3>
                                            <p class="date-cats mb-0 border-t pt-2 pb-2">
                                                @if ($post->category)
                                                    <a class="me-2" href="#"><i class="fa fa-file"></i>
                                                        {{ $post->category->title }}</a>
                                                @endif
                                                {{-- @if ($post->createdBy)
                                                    <a href="#"><i class="fa fa-user"></i> By
                                                        {{ $post->createdBy->name }}</a>
                                                @endif
                                            </p> --}}
                                            <p class="mb-2 border-t pt-2">
                                                {{ Str::words(strip_tags($post->description), 20, '...') }}
                                            </p>
                                            <a class="grey font-weight-light"
                                                href="{{ route('blog.detail', ['slug' => $post->slug ?? 'slug']) }}">
                                                Read This <i class="fa fa-long-arrow-alt-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <!-- Pagination -->
                        <div class="col-lg-12">
                            <div class="pagination-main text-center">
                                {{ $posts->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">

                        <!-- Categories -->
                        @if ($categories->count())
                            <div class="sidebar-item mb-4">
                                <h4>All Categories</h4>
                                <ul class="sidebar-category">
                                    @foreach ($categories as $category)
                                        <li><a href="{{ route('blog.category', ['title' => $category->title]) }}">{{ $category->title }}
                                                ({{ $category->post_count }})
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            {{-- @endif --}}

                            <!-- Recent & Popular Posts -->
                            <div class="sidebar-item mb-4">
                                <div class="sidebar-tabs">
                                    <ul class="nav nav-tabs text-center mb-3">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#popular">
                                                <i class="fa fa-fire"></i> Most Popular
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#recent">
                                                <i class="fa fa-clock"></i> Recent Posts
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <!-- Popular Posts -->
                                        <div class="tab-pane fade show active" id="popular">
                                            @foreach ($popularPosts as $key => $pop)
                                                @if (!empty($pop->slug))
                                                    <article class="post mb-2">
                                                        <div
                                                            class="s-content d-flex align-items-center justify-content-between">
                                                            <div class="blog-no">{{ $key + 1 }}</div>
                                                            <div class="content-list ps-3">
                                                                <div class="date">
                                                                    {{ $pop->created_at->format('M d, Y') }}</div>
                                                                <h5 class="m-0">
                                                                    <a
                                                                        href="{{ route('blog.detail', ['slug' => $pop->slug]) }}">
                                                                        {{ Str::limit($pop->title, 50) }}
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </article>
                                                @endif
                                            @endforeach
                                        </div>

                                        <!-- Recent Posts -->
                                        <div class="tab-pane fade" id="recent">
                                            @foreach ($recentPosts as $key => $recent)
                                                @if (!empty($recent->slug))
                                                    <article class="post mb-2">
                                                        <div
                                                            class="s-content d-flex align-items-center justify-content-between">
                                                            <div class="blog-no">{{ $key + 1 }}</div>
                                                            <div class="content-list ps-3">
                                                                <div class="date">
                                                                    {{ $recent->created_at->format('M d, Y') }}</div>
                                                                <h5 class="m-0">
                                                                    <a
                                                                        href="{{ route('blog.detail', ['slug' => $recent->slug]) }}">
                                                                        {{ Str::limit($recent->title, 50) }}
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </article>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tags -->
                            {{-- <div class="sidebar-item mb-4">
                                <h4>Tags</h4>
                                <ul class="sidebar-tags">
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Culture</a></li>
                                    <li><a href="#">Hiking</a></li>
                                    <li><a href="#">Wildlife</a></li>
                                </ul>
                            </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@else
    <section class="blog">
        <div class="container">
            <div class="text-center py-5">
                <h4>No blog posts found.</h4>
                <p>Please check back later or browse another category.</p>
            </div>
        </div>
    </section>
    @endif

@endsection
@push('style')
    <style>
        .author-news {
            background-image: url('{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}') no-repeat !important;

        }
    </style>
@endpush
