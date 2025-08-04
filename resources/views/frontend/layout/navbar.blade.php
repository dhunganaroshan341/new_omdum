@php
    $navbarCountries = getNavbarCountries();
@endphp

<div class="header_menu" id="header_menu">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-flex d-flex align-items-center justify-content-between w-100">

                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img alt="logo" src="{{ asset('front/images/logo.png') }}" />
                    </a>
                </div>

                <!-- Navbar Menu -->
                <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">

                        <!-- Static Pages -->
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>

                        <!-- Destinations Dropdown -->
                        @foreach ($navbarCountries as $country)
                            <li class="submenu dropdown">
                                <a href="#">{{ $country->name }} <i class="icon-arrow-down"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach ($country->groupedPackages as $typeTitle => $packages)
                                        <li class="submenu dropdown">
                                            <a href="#">{{ $typeTitle }} <i class="icon-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                @foreach ($packages as $package)
                                                    <li>
                                                        <a
                                                            href="{{ route('packages.show', ['slug' => $package->slug]) }}">
                                                            {{ $package->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach

                        <!-- Blog and Contact -->
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>

                    <!-- Optional icons (e.g., cart) -->
                    <div class="header-sidemenu">
                        {{-- Optional icon space --}}
                        {{-- <div class="mhead">
                            <span class="menu-ham">
                                <a class="cart-icon d-flex align-items-center ms-1" href="#">
                                    <i class="icon-basket-loaded"></i>
                                    <span class="cart-label">3</span>
                                </a>
                            </span>
                        </div> --}}
                    </div>
                </div>

                <!-- Mobile nav placeholder -->
                <div id="slicknav-mobile"></div>
            </div>
        </div>
    </nav>
</div>
