@extends('frontend.layout.main')

@section('main-section')
    <!-- Inner Header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7"
        data-bg-img="{{ asset('template/yatri_world/main-file/images/bg/bg3.jpg') }}">
        <div class="container pt-70 pb-20">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white">Blog Details</h2>
                        <ol class="breadcrumb text-left text-black mt-10">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                            <li class="active text-white">Blog Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Post -->
    <section>
        <div class="container pt-30">
            <div class="row">
                <div class="col-md-9 blog-pull-right">
                    <div class="single-service">
                        <!-- Blog Image -->
                        <div class="blog-post">
                            <article class="post clearfix mb-0">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <div class="blog-imagelist mb-3">
                                            @if ($post->postImages->first())
                                                <img alt="image"
                                                    src="{{ asset('uploads/post_images/' . $post->postImages->first()->image) }}" />
                                            @else
                                                <img alt="image"
                                                    src="{{ asset('template/yatri_world/main-file/images/bg/bg3.jpg') }}" />
                                            @endif
                                        </div>
                                        <div class="entry-date media-left text-center flip bg-theme-colored">
                                            <div class="date text-center bg-pink p-2">
                                                <h1 class="day mb-0 white">{{ $post->created_at->format('d') }}</h1>
                                                <div class="month white">{{ $post->created_at->format('M') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="blog-title"><a class="yellow" href="#">{{ $post->title }}</a></h3>
                                    <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                        <i class="fa fa-commenting-o text-theme-colored2 mr-5"></i> 0 comments
                                    </span>
                                    <span class="me-2">
                                        <a class="tag pink" href="#"><i class="fa fa-tag me-1"></i>
                                            {{ $post->category->name ?? 'Uncategorized' }}</a>
                                    </span>
                                </div>

                                <!-- Blog Body -->
                                <div class="entry-content mt-10">
                                    <p>{!! $post->description !!}</p>

                                    <!-- Additional Images -->
                                    @if ($post->postImages->count() > 1)
                                        <div class="blog-imagelist mb-4">
                                            <div class="row">
                                                @foreach ($post->postImages->slice(1) as $image)
                                                    <div class="col-md-6 mb-2">
                                                        <img alt="image"
                                                            src="{{ asset('uploads/post_images/' . $image->image) }}" />
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Post Info -->
                                    <div class="mt-30 mb-0">
                                        <ul class="list-inline entry-date pull-left flip font-12 mt-5">
                                            <li><i class="fa fa-folder-open-o mr-5 text-theme-colored"></i>
                                                <a href="#">{{ $post->category->name ?? 'Uncategorized' }}</a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline like-comment pull-right flip font-12 mt-5">
                                            <li><a href="#"><i
                                                        class="fa fa-commenting-o text-theme-colored2 mr-5"></i>0
                                                    Comments</a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-sm-12 col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Category</h5>
                            <ul class="list angle-double-right">
                                <li><a href="#">{{ $post->category->name ?? 'Uncategorized' }}</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Tags</h5>
                            <div class="tags">
                                <a href="#">{{ $post->category->name ?? 'Uncategorized' }}</a>
                            </div>
                        </div>
                        <!-- Add more widgets as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
