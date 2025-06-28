@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/tibet_vertical.jpg') }}');">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Services</h2>
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
    <!-- BreadCrumb Ends -->
    <!-- blog starts -->
    <section class="blog destination-b pb-6">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-lg-12 mb-4">
                    <div class="trend-box">
                        <div class="col-md-12">
                            <div class="row">
                                @for ($i = 0; $i < 6; $i++)
                                    <div class="col-md-4 blog-full  d-flex justify-content-around mb-4">
                                        <div class="row w-100">
                                            <div class="ribbon ribbon-top-left"><span>10% OFF</span></div>
                                            <div class="col-lg-5 col-md-4 blog-height">
                                                <div class="blog-image">
                                                    <a href="#"
                                                        style="background-image: url('{{ asset('template/yatri_world/main-file/images/india.jpg') }}');"></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-8">
                                                <div class="blog-content p-0">
                                                    <h4 class="mb-1"><a class="" href="#">Paris in
                                                            Love</a></h4>
                                                    <div class="trend-tags">
                                                        <a href="#"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="rating pb-1">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <p class="mb-2 pink"><i class="fa fa-eye me-1"></i> 252 Amazing Places
                                                        <i class="fa fa-map-marker me-1 ms-3"></i> France.
                                                    </p>
                                                    <p class="mb-2 border-t pt-2">Letter wooded direct two men indeed income
                                                        sister.
                                                        Impression up admiration partiality is...</p>
                                                    <div class="deal-price">
                                                        <p class="price mb-0">From <span>$250.00</span>/ 7 days 6 nights</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="col-lg-4 mb-4">
                    <div class="sidebar-sticky">
                        <div class="sidebar-item mb-4">
                            <form class="form-content">
                                <h4 class="title white">Find The Places</h4>
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white">Your Destination</label>
                                            <div class="input-box">
                                                <i class="flaticon-placeholder"></i>
                                                <select class="niceSelect">
                                                    <option value="1">Where are you going?</option>
                                                    <option value="2">Tibet</option>
                                                    <option value="3">Nepal</option>
                                                    <option value="4">India</option>
                                                    <option value="5">Bhutan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Date</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range0" placeholder="yyyy-mmm-dd" type="text" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Adult</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Children</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <a class="nir-btn w-100" href="#"><i class="fa fa-search"></i> Check
                                                Availability</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <h4>Services</h4>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" />
                                    <div class="state p-warning-o">
                                        <label>24/7 Reception</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" />
                                    <div class="state p-warning-o">
                                        <label>Parking</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" />
                                    <div class="state p-warning-o">
                                        <label>Bar</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" />
                                    <div class="state p-warning-o">
                                        <label>Restaurant</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" />
                                    <div class="state p-warning-o">
                                        <label>Satellite Television</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" />
                                    <div class="state p-warning-o">
                                        <label>Lift/ELevator</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state p-warning-o">
                                        <label>Luggage Storage </label>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="map-box">
                                    <i class="fa fa-map-marker"></i>
                                    <a href="#">Show on Map</a>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h4>Star Rating</h4>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            <span class="star-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            <span class="star-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            <span class="star-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            <span class="star-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            <span class="star-rating">
                                                <span class="fa fa-star checked"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h4>Price Range($)</h4>
                                <div class="range-slider">
                                    <div aria-disabled="false"
                                        class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-max="2000" data-max-name="max_price" data-min="0"
                                        data-min-name="min_price" data-unit="$">
                                        <span class="min-value">0 $</span>
                                        <span class="max-value">2000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all full"
                                            style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h4>City</h4>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            Amsterdam<span class="number">749</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input checked="" type="checkbox" />
                                    <div class="state">
                                        <label>
                                            Rotterdam<span class="number">630</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            Copenghan<span class="number">58</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            New Delhi<span class="number">29</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            New York<span class="number">29</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            Kathmandu<span class="number">29</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            Brisbane<span class="number">29</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>
                                            Tokyo<span class="number">29</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- blog Ends -->
    <!-- Testiomonial starts -->
    @include('components.testimonial-section')
    <!-- Testimonial Ends -->
@endsection
