<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Omundum-Treks&Travel</title>
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
    <style>
        .inline-icon {
            display: inline !important:
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
                        <li><a href="mailto:info@Yatriiworld.com" class="white"><i class="fa fa-support"></i>
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

    <!-- footer starts -->
    <footer class="pt-10" style="background-image:url(images/bg/bg3.jpg);">
        <div class="footer-upper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="footer-about">
                            <img src="{{ asset('/front/images/logo-white.png') }}" alt="logo">
                            <p class="mt-3 mb-3">
                                At Om Mundum Treks, our mission is to
                                provide exceptional trekking and adventure experiences
                                while promoting sustainable tourism and
                                preserving Nepal’s rich cultural and natural heritage.
                            </p>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-4">
                        <div class="footer-links text-center">
                            <ul class="list">
                                <li>
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('booking') }}">Travel Booking</a>
                                </li>
                                <li>
                                    <a href="{{ route('flight-booking') }}">Flight Booking</a>
                                </li>
                                <li>
                                    <a href="{{ route('car-booking') }}">Car Booking</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-list') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="footer-listing-main d-lg-flex align-items-start justify-content-between mt-4 text-center text-lg-start flex-wrap gap-4">

                            <!-- NEPAL OFFICE -->
                            <div class="footer-listing white">
                                <h6 class="text-white mb-3">
                                    <i class="fas fa-location-dot me-2"></i> Nepal Office
                                </h6>
                                <p class="mb-2"><i class=" inline-icon  fas fa-map me-2"></i> Thamel - 26, Kathmandu,
                                    Nepal</p>
                                <p class="mb-2"><i class=" inline-icon   fas fa-phone me-2"></i>
                                    <a href="tel:+9779851402800" class="text-white">+977 9851402800</a>
                                </p>
                                <p class="mb-0"><i class="inline-icon   fas fa-envelope me-2"></i>
                                    <a href="mailto:info@ommundumtreks.com"
                                        class="text-white">info@ommundumtreks.com</a>
                                </p>
                            </div>

                            <!-- INDIA OFFICE -->
                            <div class="footer-listing white">
                                <h6 class="text-white mb-3">
                                    <i class="fas fa-location-dot me-2"></i> India Office
                                </h6>
                                <p class="mb-2"><i class=" inline-icon   fas fa-map me-2"></i> Shop No: 25, Kota,
                                    Rajasthan, India
                                </p>
                                <p class="mb-2"><i class=" inline-icon   fas fa-phone me-2"></i>
                                    <a href="tel:+916350606267" class="text-white">+91 6350606267</a>
                                </p>
                                <p class="mb-0"><i class=" inline-icon   fas fa-envelope me-2"></i>
                                    <a href="mailto:dhruv@ommundumtreks.com"
                                        class="text-white">dhruv@ommundumtreks.com</a>
                                </p>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner">
                    <div class="copyright-text text-center">
                        <p class="m-0 white">copyright@ommundumtreks2025</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </footer>
    <!-- footer ends -->

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
                                    <a href="{{ route('cart') }}" class="nir-btn">View Cart</a>
                                    <a href="{{ route('checkout') }}" class="nir-btn-black">Checkout</a>
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

</body>

</html>
