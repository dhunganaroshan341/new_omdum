<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Omundum-Treks&Travel' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="BoiWs133RdfaxxsJJ6aRkHEg5sepqPme_1SEj67ti7M" />
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
    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">

    <style>
        .dot-overlay {
            background: #162241 url('{{ asset('template/yatri_world/main-file/images/dot-overlay.png') }}') !important;
            /* pointer-events: none; */
        }

        .dot-overlay {
            background: #162241 url({{ asset('images/dot-overlay.png') }}) repeat;
            /* pointer-events: none; */
            /* allow clicks through */
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
                        <!-- Phone -->
                        <li>
                            <a href="tel:{{ $contact ?? '+977 9851402800' }}" class="white">
                                <i class="fa fa-phone"></i>
                                +977 {{ $contact ?? '9851402800' }}
                            </a>
                        </li>

                        <!-- Email -->
                        <li>
                            <a href="mailto:{{ $email ?? 'info@ommundumtreks.com' }}" class="white">
                                <i class="fa fa-support"></i>
                                {{ $email ?? 'info@ommundumtreks.com' }}
                            </a>
                        </li>

                        <!-- Office Hours -->
                        <li>
                            {{-- <a href="#" class="white"> --}}
                            <i class="inline-icon fa fa-map-marker"></i>
                            {{ $office_hours ?? 'Mon-Fri: 10 AM – 5 PM' }}
                            {{-- </a> --}}
                        </li>
                    </ul>
                </div>

                <div class="links float-right">
                    <ul>
                        <!-- Social Links -->
                        <li><a href="{{ $facebook ?? 'https://www.facebook.com/share/1EtS5uJCgD/' }}" target="_blank"
                                rel="noopener noreferrer"><i class="fab fa-facebook white" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="{{ $twitter ?? '#' }}" target="_blank" rel="noopener noreferrer"><i
                                    class="fab fa-twitter white" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $instagram ?? 'https://www.instagram.com/mundumtravels?igsh=MW94eHZjaWY4aWl6dQ==' }}"
                                target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram white"
                                    aria-hidden="true"></i></a></li>
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






    <!-- *Scripts* -->
    <script src="{{ asset('template/yatri_world/main-file/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/plugin.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/main.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/custom-swiper2.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/custom-nav.js') }}"></script>
    <script src="{{ asset('template/yatri_world/main-file/js/custom-date.js') }}"></script>
    <script src="{{ asset('js/main-script.js') }}"></script>


    @stack('scripts')

</body>

</html>
