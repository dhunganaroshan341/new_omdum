@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Blog & News </h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Blog </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->
    <!-- blog starts -->
    <section class="blog">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-lg-8 mb-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="list-results d-flex align-items-center justify-content-between">
                                <div class="list-results-sort">
                                    <p class="m-0">Showing 1-5 of 80 results</p>
                                </div>
                                <div class="click-menu d-flex align-items-center justify-content-between">
                                    <div class="change-list me-2"><a href="#"><i class="fa fa-bars"></i></a></div>
                                    <div class="change-grid f-active"><a href="#"><i class="fa fa-th"></i></a></div>
                                    <div class="sortby d-flex align-items-center justify-content-between ms-2">
                                        <select class="niceSelect">
                                            <option value="1">Sort By</option>
                                            <option value="2">latest</option>

                                            <option value="4">Earliest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="Mount Everest"
                                    src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block">Dec 8, 2024</span>
                                    <h3 class="mb-2">
                                        <a href="#">Conquering the Himalayas: A Journey to Mount Everest</a>
                                    </h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Trekking</a>
                                        <a href="#"><i class="fa fa-user"></i> By Adventure Team</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">
                                        Discover the thrill of standing at the world's highest peak. Our Everest Base Camp
                                        trek offers stunning views,
                                        cultural encounters, and unforgettable moments in the heart of the Himalayas.
                                    </p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="Tibet Landscape"
                                    src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block">Dec 8, 2024</span>
                                    <h3 class="mb-2">
                                        <a href="#">Mystical Tibet: Exploring the Roof of the World</a>
                                    </h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Culture &
                                            Spirituality</a>
                                        <a href="#"><i class="fa fa-user"></i> By Travel Journal</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">
                                        Journey into Tibet’s sacred monasteries, majestic plateaus, and timeless traditions.
                                        Witness prayer flags fluttering
                                        in the wind and soak in the serene beauty of the Himalayas like never before.
                                    </p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="Tibetan Culture"
                                    src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block">Dec 8, 2024</span>
                                    <h3 class="mb-2">
                                        <a href="#">Daily Life in Tibet: Rituals, Faith & Heritage</a>
                                    </h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Travel Stories</a>
                                        <a href="#"><i class="fa fa-user"></i> By Himalayan Chronicles</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">
                                        Discover how faith and tradition shape the rhythms of Tibetan life—from sunrise
                                        chants in monasteries to
                                        market scenes buzzing with locals and pilgrims under snow-capped peaks.
                                    </p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="" src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block"> Dec 8, 2024</span>
                                    <h3 class="mb-2"><a class="" href="#">Leverage agile frameworks to
                                            provide a robust</a></h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Categories</a> <a
                                            class="" href="#"><i class="fa fa-user"></i> By Lorem Ipsum</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">Susp endisse ullam corper a adipiscing class ullam corper
                                        inceptos nisl consequat eros congue.</p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="Remote Highlands of Tibet"
                                    src="{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block">Dec 8, 2024</span>
                                    <h3 class="mb-2">
                                        <a href="#">Into the Clouds: Pilgrimage Trails of High Tibet</a>
                                    </h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Sacred Journeys</a>
                                        <a href="#"><i class="fa fa-user"></i> By Pathless Travels</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">
                                        Trace the ancient footpaths of Tibetan pilgrims through high-altitude passes,
                                        fluttering prayer flags,
                                        and solitude broken only by chanting winds and temple bells.
                                    </p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="Mount Everest Himalaya Expedition"
                                    src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block">Dec 8, 2024</span>
                                    <h3 class="mb-2">
                                        <a href="#">Touching the Sky: Trekking to Everest Base Camp</a>
                                    </h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Adventure Travel</a>
                                        <a href="#"><i class="fa fa-user"></i> By Himalayan Pulse</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">
                                        Follow in the footsteps of legends to the foot of the world’s highest peak. The
                                        Everest Base Camp trek
                                        offers not just altitude—but awe.
                                    </p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="Everest Base Camp Trekking Adventure"
                                    src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block">Dec 8, 2024</span>
                                    <h3 class="mb-2">
                                        <a href="#">Conquer the Trails to Everest Base Camp</a>
                                    </h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Trekking & Hiking</a>
                                        <a href="#"><i class="fa fa-user"></i> By Himalayan Diaries</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">
                                        Experience the majesty of the Himalayas as you journey through Sherpa villages and
                                        breathtaking landscapes en route to the world’s tallest peak.
                                    </p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="Bhutan Cultural Heritage Tour"
                                    src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block">Dec 8, 2024</span>
                                    <h3 class="mb-2">
                                        <a href="#">Unveiling the Hidden Kingdom of Bhutan</a>
                                    </h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Culture &
                                            Heritage</a>
                                        <a href="#"><i class="fa fa-user"></i> By Global Treks</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">
                                        Explore the mystical monasteries, breathtaking valleys, and timeless traditions of
                                        Bhutan — a journey to the last Shangri-La.
                                    </p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="Tibet Mountain Landscape"
                                    src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block">Dec 8, 2024</span>
                                    <h3 class="mb-2"><a href="#">Journey Through the Mystical Land of Tibet</a>
                                    </h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Culture &
                                            Spirituality</a>
                                        <a href="#"><i class="fa fa-user"></i> By Himalayan Trails</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">
                                        Discover ancient monasteries, breathtaking Himalayan vistas, and the rich spiritual
                                        heritage that defines Tibet’s timeless allure.
                                    </p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="blog-full text-center p-3">
                                <img alt="Tibet Scenic View"
                                    src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" />
                                <div class="blog-content pb-0">
                                    <span class="h-date pink mb-1 font-weight-light d-block">Dec 8, 2024</span>
                                    <h3 class="mb-2">
                                        <a href="#">Exploring the Spiritual Heart of Tibet</a>
                                    </h3>
                                    <p class="date-cats mb-0 border-t pt-2 pb-2">
                                        <a class="me-2" href="#"><i class="fa fa-file"></i> Travel & Culture</a>
                                        <a href="#"><i class="fa fa-user"></i> By Himalayan Explorer</a>
                                    </p>
                                    <p class="mb-2 border-t pt-2">
                                        Immerse yourself in the breathtaking landscapes, ancient monasteries, and rich
                                        traditions of Tibet—a journey that touches the soul.
                                    </p>
                                    <a class="grey font-weight-light" href="#">Read This <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="pagination-main text-center">
                                <ul class="pagination">
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-angle-double-left"></i></a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar starts -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="author-news mb-4">
                                <div class="author-news-content">
                                    <div class="author-thumb">
                                        <img alt="author photo"
                                            src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}" />
                                    </div>
                                    <div class="author-content">
                                        <span>Author Spotlight</span>
                                        <h4 class="title mb-0"><a class="white" href="#">Relson Dulux</a></h4>
                                        <p class="m-0">Travel Blogger / Expedition Guide</p>
                                        <div class="header-social">
                                            <ul>
                                                <li><a href="https://facebook.com/relsondulux" target="_blank"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://plus.google.com/relsondulux" target="_blank"><i
                                                            class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="https://twitter.com/relsondulux" target="_blank"><i
                                                            class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="dot-overlay"></div>
                            </div>

                            <div class="sidebar-item mb-4">
                                <h4>All Categories</h4>
                                <ul class="sidebar-category">
                                    <li class="active"><a href="#">All</a></li>
                                    <li><a href="#">Adventure Travel</a></li>
                                    <li><a href="#">Cultural Insights</a></li>
                                    <li><a href="#">Nature & Wildlife</a></li>
                                    <li><a href="#">Travel Tips</a></li>
                                    <li><a href="#">Food & Cuisine</a></li>
                                    <li><a href="#">Photography</a></li>
                                </ul>
                            </div>

                            <div class="sidebar-item mb-4">
                                <div class="sidebar-tabs">
                                    <div class="sidebar-navtab text-center">
                                        <ul class="nav nav-tabs">
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
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="popular">
                                            <div class="sidebar-image mb-2 mt-2">
                                                <a href="#"><img alt="Bhutan Landscape"
                                                        src="{{ asset('template/yatri_world/main-file/images/bhutan.jpg') }}" /></a>
                                            </div>
                                            <article class="post mb-2">
                                                <div class="s-content d-flex align-items-center justify-content-between">
                                                    <div class="blog-no">01</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 28, 2024</div>
                                                        <h5 class="m-0"><a href="#">Discovering Bhutan: The Land
                                                                of the Thunder Dragon</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="post mb-2">
                                                <div class="s-content d-flex align-items-center justify-content-between">
                                                    <div class="blog-no">02</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 15, 2024</div>
                                                        <h5 class="m-0"><a href="#">Top 10 Wildlife Sanctuaries
                                                                You Must Visit</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="post">
                                                <div class="s-content d-flex align-items-center justify-content-between">
                                                    <div class="blog-no">03</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">May 30, 2024</div>
                                                        <h5 class="m-0"><a href="#">A Foodie's Guide to Street
                                                                Cuisine Around the World</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="tab-pane fade" id="recent">
                                            <div class="sidebar-image mb-2 mt-2">
                                                <a href="#"><img alt="Tibet Mountains"
                                                        src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}" /></a>
                                            </div>
                                            <article class="post mb-2">
                                                <div class="s-content d-flex align-items-center justify-content-between">
                                                    <div class="blog-no">01</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jul 3, 2024</div>
                                                        <h5 class="m-0"><a href="#">Journey Through Tibet's
                                                                Hidden Trails</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="post mb-2">
                                                <div class="s-content d-flex align-items-center justify-content-between">
                                                    <div class="blog-no">02</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 25, 2024</div>
                                                        <h5 class="m-0"><a href="#">The Ultimate Packing List for
                                                                Adventure Travel</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="post">
                                                <div class="s-content d-flex align-items-center justify-content-between">
                                                    <div class="blog-no">03</div>
                                                    <div class="content-list ps-3">
                                                        <div class="date">Jun 20, 2024</div>
                                                        <h5 class="m-0"><a href="#">Experiencing Everest Base
                                                                Camp: Tips & Tricks</a></h5>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-item mb-4">
                                <h4>Tags</h4>
                                <ul class="sidebar-tags">
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Wildlife</a></li>
                                    <li><a href="#">Culture</a></li>
                                    <li><a href="#">Mountains</a></li>
                                    <li><a href="#">Photography</a></li>
                                    <li><a href="#">Travel Tips</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Guides</a></li>
                                    <li><a href="#">Expeditions</a></li>
                                    <li><a href="#">Sustainable Travel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar ends -->

            </div>
    </section>
    <!-- blog Ends -->
@endsection
@push('style')
    <style>
        .author-news {
            background-image: url('{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}') no-repeat !important;

        }
    </style>
@endpush
