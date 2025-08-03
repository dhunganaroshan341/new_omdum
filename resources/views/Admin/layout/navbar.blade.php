<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- Dashboard --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        {{-- General Settings --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.setting.index') }}">
                <i class="mdi mdi-cog menu-icon"></i>
                <span class="menu-title">General Settings</span>
            </a>
        </li>

        {{-- Manage Content --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#manageContent" role="button" aria-expanded="false"
                aria-controls="manageContent">
                <i class="mdi mdi-folder-multiple menu-icon"></i>
                <span class="menu-title">Manage Content</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manageContent">
                <ul class="nav flex-column sub-menu list-unstyled">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.pages.index') }}"><i
                                class="mdi mdi-file-document menu-icon"></i> Pages & Sections</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.service.index') }}"><i
                                class="mdi mdi-face-agent menu-icon"></i> Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.gallery-albums.index') }}"><i
                                class="mdi mdi-view-gallery menu-icon"></i> Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.testimonial') }}"><i
                                class="mdi mdi-animation menu-icon"></i> Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.client.index') }}"><i
                                class="mdi mdi-account-group-outline menu-icon"></i> Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.notice.index') }}"><i
                                class="mdi mdi-bullhorn menu-icon"></i> Notices</a></li>
                </ul>
            </div>
        </li>

        {{-- Banners --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#bannerMenu" role="button" aria-expanded="false"
                aria-controls="bannerMenu">
                <i class="mdi mdi-image-multiple menu-icon"></i>
                <span class="menu-title">Banners</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="bannerMenu">
                <ul class="nav flex-column sub-menu list-unstyled">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.homeslide') }}"><i
                                class="mdi mdi-view-carousel menu-icon"></i> Home Slider</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.banner.video.index') }}"><i
                                class="mdi mdi-video menu-icon"></i> Video Banner</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.page-banner.index') }}"><i
                                class="mdi mdi-image-outline menu-icon"></i> Page Banner</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.call-to-action.index') }}"><i
                                class="mdi mdi-bullhorn menu-icon"></i> CTA Banner</a></li>
                </ul>
            </div>
        </li>

        {{-- Packages & Bookings --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#packageMenu" role="button" aria-expanded="false"
                aria-controls="packageMenu">
                <i class="mdi mdi-map-marker-path menu-icon"></i>
                <span class="menu-title">Packages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="packageMenu">
                <ul class="nav flex-column sub-menu list-unstyled">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.tour-packages.index') }}"><i
                                class="mdi mdi-clipboard-text menu-icon"></i> Manage</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.bookings.index') }}"><i
                                class="mdi mdi-account-multiple-check menu-icon"></i> Bookings</a></li>
                </ul>
            </div>
        </li>

        {{-- Blogs --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#blogSubmenu" role="button" aria-expanded="false"
                aria-controls="blogSubmenu">
                <i class="mdi mdi-post-outline menu-icon"></i>
                <span class="menu-title">Blogs</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blogSubmenu">
                <ul class="nav flex-column sub-menu list-unstyled">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.category') }}"><i
                                class="mdi mdi-grid-large menu-icon"></i> Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.post') }}"><i
                                class="mdi mdi-newspaper menu-icon"></i> Post</a></li>
                </ul>
            </div>
        </li>

        {{-- Users --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.user') }}">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>

        {{-- Contact --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.contact.index') }}">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title">Contact</span>
            </a>
        </li>

        {{-- Logout --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.logout') }}">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
