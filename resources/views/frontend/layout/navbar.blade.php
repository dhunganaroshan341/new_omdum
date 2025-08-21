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
                        <img alt="logo" src="{{ $logo ?? asset('front/images/logo.png') }}" />
                    </a>
                </div>

                <!-- Navbar Menu -->
                <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">

                        <!-- Static Pages -->
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>

                        {{-- <li class="{{ request()->routeIs('packages.index') ? 'active' : '' }}">
                            <a href="{{ route('packages.index') }}">Packages</a>
                        </li> --}}

                        <!-- Destinations Dropdown -->
                        @foreach ($navbarCountries as $country)
                            @php
                                $hasPackages = !empty($country->groupedPackages) && count($country->groupedPackages);
                                // Match if current URL is for any of this country's packages
$isActive = collect($country->groupedPackages)
    ->flatten(1)
    ->pluck('slug')
    ->contains(request()->route('slug'));
                            @endphp

                            <li class="{{ $hasPackages ? 'submenu dropdown' : '' }} {{ $isActive ? 'active' : '' }}">
                                <a href="#">{{ $country->name }}
                                    @if ($hasPackages)
                                        <i class="icon-arrow-down"></i>
                                    @endif
                                </a>
                                @if ($hasPackages)
                                    <ul class="dropdown-menu child-dropdown child-dropdown-ul">
                                        @foreach ($country->groupedPackages as $typeTitle => $packages)
                                            <li class="submenu dropdown child-dropdown child-dropdown-li">
                                                <a class="child-dropdown-a" href="#">{{ $typeTitle }} <i
                                                        class="icon-arrow-right"></i></a>
                                                <ul class="dropdown-menu grand-sub-menu-ul">
                                                    @foreach ($packages as $package)
                                                        <li class="grand-sub-menu-li">
                                                            <a class="grand-submenu-a {{ request()->routeIs('packages.show') && request()->route('slug') === $package->slug ? 'active' : '' }}"
                                                                href="{{ route('packages.show', ['slug' => $package->slug]) }}">
                                                                {{ $package->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach

                        <!-- Services -->
                        {{-- <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                            <a href="{{ route('services') }}">Services</a>
                        </li> --}}

                        <!-- Blog and Contact -->
                        <li class="{{ request()->routeIs('blog.index') ? 'active' : '' }}">
                            <a href="{{ route('blog.index') }}">Blog</a>
                        </li>

                        <li class="{{ request()->routeIs('contact-us') ? 'active' : '' }}">
                            <a href="{{ route('contact-us') }}">Contact Us</a>
                        </li>

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
