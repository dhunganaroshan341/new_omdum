<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Omundum-Treks&Travel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/front/images/logo.png') }}">
    <!-- Bootstrap core CSS -->
    <!--Font Awesome-->
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link href="{{ asset('template/yatri_world/main-file/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('template/yatri_world/main-file/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="{{ asset('template/yatri_world/main-file/css/plugin.css') }}" rel="stylesheet" type="text/css">
    <!-- Flaticons CSS -->

    <link href="{{ asset('template/yatri_world/main-file/fonts/flaticon.css') }}" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="{{ asset('template/yatri_world/main-file/fonts/line-icons.css') }}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('styles')
    <style>
        body {
            background: #f1f1f1 !important;
        }

        .dot-overlay {
            background: #162241 url('{{ asset('template/yatri_world/main-file/images/dot-overlay.png') }}') !important;
            /* pointer-events: none; */
        }

        .inline-icon {
            display: inline !important;
        }

        .slider-content a:hover {
            color: var(--omundum-green) !important;
        }

        /* .trending .trend-item .trend-content-main {
            position: absolute !important;
        } */
        .footer-about img {

            max-width: 240px !important;

        }


        .dot-overlay {
            background: #162241 url({{ asset('images/dot-overlay.png') }}) repeat;
            /* pointer-events: none; */
            /* allow clicks through */
        }

        /* destination-slingle slick slider image fix */
        .slider-store img {
            height: 500px !important;
            object-fit: cover !important;
        }

        .slider-thumbs img {
            height: 90px !important;
            object-fit: cover !important;
        }

        .blog-full img {
            height: 200px !important;
            object-fit: cover !important;
            min-width: 300px !important;
        }


        .book-now-a :hover {
            color: #fff !important;
            background: #f06925 !important;
            transition: all ease-in-out 0.5s;
        }

        .price-white i :hover {
            color: black;
        }

        /* blog page starts overriting boostrap  */
        .active>.page-link,
        .page-link.active {
            z-index: 3;
            color: white;
            background-color: var(--omundum-green);
            border-color: var(--bs-pagination-active-border-color);
        }

        .blog-content>a:hover {
            color: var(--omundum-green) !important;
            transition: all ease-in-out 0.5s;
        }

        .blog-content a:hover,
        a:focus {
            text-decoration: none;
            color: var(--omundum-green);
            transition: all ease-in-out 0.5s;
            outline: none;
        }

        /* nav-bar custom styles */
        /* Logo Control */
        .navbar-logo {
            height: 100%;
            max-height: 60px;
            object-fit: contain;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            padding: 0;
            height: 60px;
        }

        /* Navbar Items */
        .navbar-nav .nav-link {
            padding: 0.5rem 1rem;
        }

        /* Submenu Dropdown */
        .submenu.dropdown>.dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            /* min-width: 100px; */
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 0.25rem;
            padding: 0.5rem 0;
        }

        .submenu.dropdown:hover>.dropdown-menu {
            display: block;
        }

        .submenu.dropdown>a::after {
            content: " ▾";
            font-size: 0.6rem;
            margin-left: 4px;
        }

        /* Optional: Hide dropdown icon if no packages */
        .submenu>a .icon-arrow-down {
            display: none;
        }

        .submenu.dropdown>a .icon-arrow-down {
            display: inline;
        }

        @media (max-width: 991.98px) {
            .submenu.dropdown>.dropdown-menu {
                position: static;
                display: none;
            }

            .submenu.dropdown.active>.dropdown-menu {
                display: block;
            }
        }

        .dropdown-menu.grand-sub-menu-ul {
            min-width: 270px;
        }

        .grand-dropdown-li {
            min-width: 250px !important;
        }

        .grand-dropdown-a {
            min-width: 250px !important;
        }

        /* nav-bar custom style ends */

        .header_menu .navbar.navbar-default .nav.navbar-nav li.submenu .dropdown-menu li.submenu .dropdown-menu li a {
            font-size: 14px;
        }
    </style>
</head>

<body>


    <!-- Preloader -->
    {{-- <div id="preloader">
        <div id="status"></div>
    </div> --}}
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area">
        <div class="header-content bg-logo-green">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="links">
                    <ul>
                        <li><a href="tel:(000)999-898-888" class="white"><i class="fa fa-phone"></i>

                                +977 9851402800</a></li>
                        <li><a href="mailto:info@OmundumTrek&Travels.com" class="white"><i class="fa fa-support"></i>
                                info@ommundumtreks.com</a></li>
                        <li><a href="#" class="white"><i class=" inline-icon fa fa-map-marker"></i> Mon-Fri: 10
                                AM – 5 PM</a>
                        </li>
                    </ul>
                </div>
                <div class="links float-right">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook white" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter white" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram white" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin white" aria-hidden="true"></i></a></li>
                        <li><a href="#search1" class="mt_search"><i class="icon-magnifier white"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navigation Bar -->
        @include('frontend.layout.navbar')
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->

    @yield('content')

    @include('frontend.layout.footer')

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bordernone p-0">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="login-content p-4 text-center">
                        <div class="login-title section-border">
                            <h3 class="pink mb-1">Register</h3>
                            <p>Access thousands of online classes in design, business, and more!</p>
                        </div>
                        <div class="login-form text-center">
                            <form>
                                <div class="form-group mb-2">
                                    <input type="text" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="password" placeholder="Enter password">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="password" placeholder="Confirm password">
                                </div>
                            </form>
                            <div class="form-btn">
                                <a href="#" class="nir-btn">Register</a>
                            </div>
                            <div class="form-group mb-0 form-checkbox mt-3">
                                <input type="checkbox"> By clicking this, you are agree to to<a href="#"
                                    class=""> our terms of use</a> and <a href="#" class="">privacy
                                    policy</a> including the use of cookies
                            </div>
                        </div>
                        <div class="login-social border-t mt-3 pt-2 mb-3">
                            <p class="mb-2">OR continue with</p>
                            <a href="#" class="btn-facebook"><i class="fab fa-facebook"
                                    aria-hidden="true"></i> Facebook</a>
                            <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i>
                                Twitter</a>
                            <a href="#" class="btn-google"><i class="fab fa-google" aria-hidden="true"></i>
                                Google</a>
                        </div>
                        <div class="sign-up">
                            <p class="m-0">Already have an account? <a href="{{ route('login') }}"
                                    class="pink">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- login Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bordernone p-0">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="login-content p-4 text-center">
                        <div class="login-title section-border">
                            <h3 class="pink">Login</h3>
                        </div>
                        <div class="login-form">
                            <form>
                                <div class="form-group mb-2">
                                    <input type="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="password" placeholder="Enter password">
                                </div>
                            </form>
                            <div class="form-btn">
                                <a href="#" class="nir-btn">LOGIN</a>
                            </div>
                            <div class="form-group mb-0 form-checkbox mt-3">
                                <input type="checkbox"> Remember Me | <a href="#" class="">Forgot
                                    password?</a>
                            </div>
                        </div>
                        <div class="login-social border-t mt-3 pt-2 mb-3">
                            <p class="mb-2">OR continue with</p>
                            <a href="#" class="btn-facebook"><i class="fab fa-facebook"
                                    aria-hidden="true"></i> Facebook</a>
                            <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i>
                                Twitter</a>
                        </div>
                        <div class="sign-up">
                            <p class="m-0">Do not have an account? <a href="{{ route('login') }}"
                                    class="pink">Sign
                                    Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header side menu -->
    <div class="header_sidemenu">
        <div class="header_sidemenu_in">
            <div class="menu">
                <div class="close-menu">
                    <i class="fa fa-times white"></i>
                </div>
                <div class="m-contentmain">
                    <div class="cart-main">
                        <div class="cart-box">
                            <div class="popup-container">
                                <h5 class="p-3 mb-0 bg-pink white text-caps">My Carts(3 Items)</h5>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="images/shop/shop1.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$45.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="images/shop/shop2.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="images/shop/shop6.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="summary-total">
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Delivery Charge</div>
                                        <div class="price-s">$10</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Sub Total</div>
                                        <div class="price-s">$200</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Discount</div>
                                        <div class="price-s">$2</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Total</div>
                                        <div class="price-s">$208</div>
                                    </div>
                                </div>
                                <div class="cart-buttons d-flex align-items-center justify-content-between">
                                    <a href="#" class="nir-btn">View Cart</a>
                                    <a href="#" class="nir-btn-black">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay hide"></div>
        </div>
    </div>


    <!-- *Scripts* -->
    <script src="{{ asset('template/yatri_world/main-file/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/plugin.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/main.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/custom-swiper2.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/custom-nav.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/custom-date.js') }}"></script>
    @stack('scripts')

</body>

</html>
