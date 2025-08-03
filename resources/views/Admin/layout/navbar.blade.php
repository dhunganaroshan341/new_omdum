<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <!-- General Settings -->
        <li class="nav-item nav-category">General</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.settings') }}">
                <i class="mdi mdi-cog menu-icon"></i>
                <span class="menu-title">General Settings</span>
            </a>
        </li>

        <!-- Manage Content -->
        <li class="nav-item nav-category">Manage Content</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.pages.index') }}">
                <i class="mdi mdi-file-document-box-multiple menu-icon"></i>
                <span class="menu-title">Pages</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.sections.index') }}">
                <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
                <span class="menu-title">Sections</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.services.index') }}">
                <i class="mdi mdi-briefcase-check menu-icon"></i>
                <span class="menu-title">Services</span>
            </a>
        </li>

        <!-- Packages, Bookings, Contact -->
        <li class="nav-item nav-category">Operations</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.packages.index') }}">
                <i class="mdi mdi-package-variant menu-icon"></i>
                <span class="menu-title">Tour Packages</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.bookings.index') }}">
                <i class="mdi mdi-calendar-check menu-icon"></i>
                <span class="menu-title">Bookings</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.contacts.index') }}">
                <i class="mdi mdi-email-outline menu-icon"></i>
                <span class="menu-title">Contact Messages</span>
            </a>
        </li>

    </ul>
</nav>
