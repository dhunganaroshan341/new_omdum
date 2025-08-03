<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row shadow-sm bg-white">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start bg-primary px-3">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center text-white" type="button"
                data-bs-toggle="minimize">
                <i class="fas fa-bars"></i> <!-- Minimize icon -->
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="{{ url('/') }}">
                <img src="{{ $logo ?? asset('assets/images/logo.jpeg') }}" alt="Main Logo" class="h-40" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
                <img src="{{ asset('admin/images/logo.png') }}" alt="Mini Logo" class="h-30" />
            </a>
        </div>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1 justify-content-between px-4">
        <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item">
                <span class="nav-link text-dark fw-bold fs-6">
                    <i class="fas fa-tachometer-alt me-1"></i> Welcome Admin Panel
                </span>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-flex align-items-center">
                <a class="nav-link dropdown-toggle text-dark" id="profileDropdown" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle fs-4 me-2"></i>
                    {{ Auth::user()->name ?? 'Admin' }}
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <i class="fas fa-user-cog me-2"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('admin.settings') }}">
                        <i class="fas fa-cogs me-2"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- partial -->
