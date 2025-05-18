@php
    $activeMenuServiceItems = getActiveStatusServices();
@endphp

<header>
    <div class="header-top-bar py-2 bg-realm-blue">
        <div class="container">
            <div class="row align-items-center  ">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-3">
                            <a href="mailto:{{ $email }}" class="text-realm-yellow text-decoration-none">
                                <i class="bi bi-envelope-fill me-1"></i>{{ $email }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a href="tel:{{ $contact }}" class="text-realm-yellow text-decoration-none">
                        <i class="bi bi-telephone-fill me-1"></i><span class="fw-bold">{{ $contact }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('first.index') }}">
                @if ($logo)
                    <img src="{{ asset('storage/' . $logo) }}" alt="Logo" width="100" height="100" class="img-fluid">
                @else
                    <img src="{{ asset('defaultImage/defaultlogo.png') }}" alt="Default Logo" width="100" height="100" class="img-fluid">
                @endif
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="icon-align-justify"></i></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item {{ request()->routeIs('first.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('first.index') }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('about-us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about-us') }}">About</a>
                    </li>
                    <li class="nav-item dropdown {{ request()->is('service*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            @foreach ($activeMenuServiceItems as $service)
                                <li>
                                    <a class="dropdown-item {{ request()->is('service/detail/'.$service->id) ? 'active' : '' }}"
                                       href="{{ route('service-detail', $service->id) }}">
                                        {{ $service->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('gallery*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item {{ request()->is('blog*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item {{ request()->is('contact-us*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact-us') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@push('styles')

    <style>
        /* Optional: Show dropdown on hover for large screens */
        @media (min-width: 992px) {
            .navbar .dropdown:hover .dropdown-menu {
                display: block;
            }
            .navbar-light .navbar-toggler-icon {
  background-image: block;
}
        }

        .nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }
    </style>
@endpush

