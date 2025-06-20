<div class="header_menu" id="header_menu">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img alt="image" src="{{ asset('front/images/logo.png') }}" />
                    </a>
                </div>

                <!-- Navbar Menu -->
                <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">
                        <li><a href="{{ route('pages.about') }}">About Us</a></li>
                        <li><a href="{{ route('pages.services') }}">Services</a></li>

                        {{-- Clean destination (no dropdown) --}}
                        <li><a href="{{ route('destination.grid') }}">Destination</a></li>

                        {{-- Blogs Dropdown --}}
                        <li class="submenu dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown"
                                href="{{ route('blog.grid') }}" role="button">
                                Blogs <i aria-hidden="true" class="icon-arrow-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('blog.grid') }}">Blog Grid</a></li>
                                <li><a href="{{ route('pages.blog-single') }}">Blog Single</a></li>
                                <li><a href="{{ route('blog.single') }}">Blog Single Full</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                    </ul>

                    <!-- Optional cart or extra icon space -->
                    <div class="header-sidemenu">
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

                <!-- Mobile nav -->
                <div id="slicknav-mobile"></div>
            </div>
        </div>
    </nav>
</div>
