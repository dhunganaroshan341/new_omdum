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
                            <img alt="image"
                                src="{{ asset($post->first_image_url ?? '/template/yatri-world/main-file/images/india.jpg') }}">
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="date text-center bg-pink p-2">
                                    <h1 class="day mb-0 white">11</h1>
                                    <div class="month white">May</div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="blog-content mb-4 pt-0">
                                    <h3 class="blog-title"><a class="yellow" href="blog-single.html">{{ $post->title }}</a>
                                    </h3>
                                    <div class="para-content mb-2">
                                        <span class="me-2"><a class="tag pink" href="#"><i
                                                    class="fa fa-tag me-1"></i> Popular </a></span>
                                        <span class="me-2"><a class="pink" href="#"><i
                                                    class="fa fa-user me-1"></i> Adam Joel</a></span>
                                        <span><a class="pink" href="#"><i class="fa fa-comment"></i> 20</a></span>
                                    </div>
                                    {!! $post->description !!}
                                </div>
                                <!-- blog blockquote -->



                                <!-- blog share -->
                                {{-- <div
                                    class="blog-share d-flex justify-content-between align-items-center mb-4 bg-lgrey border">
                                    <div class="blog-share-tag">
                                        <ul class="inline">
                                            <li><strong>Posted In:</strong></li>
                                            <li><a href="#">Fashion,</a></li>
                                            <li><a href="#">Beauty,</a></li>
                                            <li><a href="#">Vacation,</a></li>
                                            <li><a href="#">Travel,</a></li>
                                            <li><a href="#">News</a></li>
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
                                </div> --}}
                            </div>
                        </div>
                        <!-- author detail -->

                        <!-- blog next prev -->
                        <div class="blog-next mb-4">
                            <a class="float-left float-start"
                                href="{{ route('blog.detail', ['slug' => $previousPost->slug]) }}">
                                <div class="prev ps-4">
                                    <i class="fa fa-arrow-left white"></i>
                                    <p class="m-0 white">Previous Post</p>
                                    <p class="m-0 white">{{ $previousPost->title }}</p>
                                </div>
                            </a>
                            <a class="float-end bg-grey" href="{{ route('blog.detail', ['slug' => $previousPost->slug]) }}">
                                <div class="next pe-4 text-end">
                                    <i class="fa fa-arrow-right"></i>
                                    <p class="m-0">Next Post</p>
                                    <p class="m-0">{{ $nextPost->title }}</p>
                                </div>
                            </a>
                        </div>
                        <!-- blog comment list -->

                        <!-- blog review -->

                    </div>
                </div>
                <!-- sidebar starts -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">

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
                            <div class="sidebar-item mb-4">
                                <div class="sidebar-tabs">
                                    <div class="sidebar-navtab text-center">
                                        <ul class="nav nav-tabs" role="tablist">
                                            {{-- <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#popular"
                                                    aria-selected="true" role="tab">
                                                    <i class="fa fa-check-circle"></i> Most Popular
                                                </a>
                                            </li> --}}
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" href="#recent"
                                                    aria-selected="false" role="tab" tabindex="-1">
                                                    <i class="fa fa-check-circle"></i> Recent Post
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="popular" role="tabpanel">
                                            <div class="sidebar-image mb-2 mt-2">
                                                <a href="blog-single..html"><img alt=""
                                                        src="{{ asset($post->first_image_url ?? '/template/yatri-world/main-file/images/india.jpg') }}"></a>
                                            </div>
                                            <article class="post mb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="blog-no">01</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 28, 2024</div>
                                                        <h5 class="m-0"><a href="blog-single.html">Takes on Baboon, and
                                                                It Doesn’t Go Well for It</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="post mb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="blog-no">02</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 28, 2024</div>
                                                        <h5 class="m-0"><a href="blog-single.html">Zebras Hold New
                                                                Record for Longest Migration</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="post">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="blog-no">03</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 28, 2024</div>
                                                        <h5 class="m-0"><a href="blog-single.html">African Reserve Got
                                                                Killed by Lions Instead</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="tab-pane fade" id="recent" role="tabpanel">
                                            <div class="sidebar-image mb-2 mt-2">
                                                <a href="blog-single.html"><img alt=""
                                                        src="https://bivekp23.sg-host.com/images/blog/blog1.jpg"></a>
                                            </div>
                                            <article class="post mb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="blog-no">01</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 28, 2024</div>
                                                        <h5 class="m-0"><a href="blog-single.html">Takes on Baboon, and
                                                                It Doesn’t Go Well for It</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="post mb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="blog-no">02</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 28, 2024</div>
                                                        <h5 class="m-0"><a href="blog-single.html">Zebras Hold New
                                                                Record for Longest Migration</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="post">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="blog-no">03</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 28, 2024</div>
                                                        <h5 class="m-0"><a href="blog-single.html">African Reserve Got
                                                                Killed by Lions Instead</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item mb-4">
                                <h4 class="">Tags</h4>
                                <ul class="sidebar-tags">
                                    <li><a href="#">Tour</a></li>
                                    <li><a href="#">Rental</a></li>
                                    <li><a href="#">City</a></li>
                                    <li><a href="#">Yatch</a></li>
                                    <li><a href="#">Activity</a></li>
                                    <li><a href="#">Museum</a></li>
                                    <li><a href="#">Beauty</a></li>
                                    <li><a href="#">Classic</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Designs</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Free Style</a></li>
                                    <li><a href="#">Programs</a></li>
                                    <li><a href="#">Travel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->
@endsection
