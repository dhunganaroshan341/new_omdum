<header>
    <div class="bg-gray-100 py-2 text-sm">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row justify-between items-center px-4">
            <ul class="flex items-center space-x-4">
                <li>
                    <a href="mailto:{{ $email }}" class="text-gray-600 hover:text-blue-600 flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1..."/>
                        </svg>
                        <span>{{ $email }}</span>
                    </a>
                </li>
            </ul>

            <div class="mt-2 lg:mt-0">
                <a href="tel:{{ $contact }}" class="text-gray-600 hover:text-blue-600 flex items-center space-x-1 justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M1.885.511a1.745 1.745 0 0 1..."/>
                    </svg>
                    <span class="font-semibold">{{ $contact }}</span>
                </a>
            </div>
        </div>
    </div>

    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('first.index') }}">
                    @if ($logo && $logo!=null)
                        <img src="{{ asset('storage/' . $logo) }}" alt="Logo" class="h-12 w-auto">
                    @else
                        <img src="{{ asset('defaultImage/defaultlogo.png') }}" alt="Default Logo" class="h-12 w-auto">
                    @endif
                </a>

                <!-- Hamburger menu (for small screens) -->
                <button id="menu-toggle" class="block lg:hidden text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <!-- Navigation links -->
                <ul id="navbar-menu"
                    class="hidden lg:flex space-x-6 text-gray-700 font-medium items-center">
                    <li><a href="{{ route('first.index') }}" class="{{ request()->routeIs('first.index') ? 'text-blue-600' : '' }}">Home</a></li>
                    <li><a href="{{ route('about-us') }}" class="{{ request()->routeIs('about-us') ? 'text-blue-600' : '' }}">About</a></li>
                    <li><a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'text-blue-600' : '' }}">Services</a></li>
                    <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-blue-600' : '' }}">Gallery</a></li>
                    <li><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'text-blue-600' : '' }}">Blog</a></li>
                    <li><a href="{{ route('contact-us') }}" class="{{ request()->routeIs('contact-us') ? 'text-blue-600' : '' }}">Contact</a></li>
                </ul>
            </div>

            <!-- Mobile nav menu -->
            <ul id="mobile-menu"
                class="lg:hidden hidden flex-col space-y-4 pb-4 text-gray-700 font-medium">
                <li><a href="{{ route('first.index') }}">Home</a></li>
                <li><a href="{{ route('about-us') }}">About</a></li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact-us') }}">Contact</a></li>
            </ul>
        </div>
    </nav>

    @push('scripts')
    <script>
        const toggleBtn = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        toggleBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    @endpush
</header>
