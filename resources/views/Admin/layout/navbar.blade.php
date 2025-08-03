<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row bg-white shadow-sm">
    <!-- Left: Logo + Menu Toggle -->
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start px-3">
        <!-- Menu Toggle Icon -->
        <button class="navbar-toggler navbar-toggler align-self-center me-2" type="button" data-bs-toggle="minimize">
            <i class="mdi mdi-menu fs-4 text-dark"></i>
        </button>

        <!-- Full Logo -->
        <a class="navbar-brand brand-logo" href="{{ url('/') }}">
            <img src="{{ $logo ?? asset('assets/images/logo.jpeg') }}" alt="Main Logo" style="height: 40px;" />
        </a>

        <!-- Mini Logo -->
        <a class="navbar-brand brand-logo-mini ms-2" href="{{ url('/') }}">
            <img src="{{ asset('admin/images/logo.png') }}" alt="Mini Logo" style="height: 30px;" />
        </a>
    </div>

    <!-- Right: Navbar Items -->
    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1 justify-content-end pe-4">
        <!-- Notification Icon -->
        <ul class="navbar-nav me-4">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-bell-outline fs-4"></i>
                    <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown" aria-labelledby="notificationDropdown">
                    <h6 class="dropdown-header">Notifications</h6>
                    <a class="dropdown-item">
                        <i class="mdi mdi-email-outline me-2 text-primary"></i> New message received
                    </a>
                    <a class="dropdown-item">
                        <i class="mdi mdi-calendar me-2 text-success"></i> Upcoming meeting
                    </a>
                </div>
            </li>
        </ul>

        <!-- User Profile -->
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div class="navbar-profile d-flex align-items-center">
                        <img class="img-xs rounded-circle" src="{{ asset('admin/images/faces/face1.jpg') }}"
                            alt="profile" />
                        <span
                            class="ms-2 d-none d-md-inline text-dark fw-semibold">{{ Auth::user()->name ?? 'Admin' }}</span>
                        <i class="mdi mdi-menu-down"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <i class="mdi mdi-account-outline me-2 text-primary"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="mdi mdi-logout me-2 text-danger"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- partial -->
