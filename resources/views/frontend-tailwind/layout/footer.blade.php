<footer class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Logo -->
            <div>
                <div class="mb-6">
                    @if ($logo)
                        <img src="{{ asset('storage/' . $logo) }}" alt="Logo" class="h-20 object-contain">
                    @else
                        <img src="{{ asset('defaultImage/defaultlogo.png') }}" alt="Default Logo" class="h-20 object-contain">
                    @endif
                </div>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-xl font-semibold mb-4">Services</h4>
                <ul class="space-y-2 text-gray-600">
                    @foreach ($services as $service)
                        <li>
                            <a href="{{ route('service-detail', $service->id) }}" class="hover:text-gray-900 transition">
                                {{ $service->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-gray-600">
                    <li><a href="{{ route('about-us') }}" class="hover:text-gray-900 transition">About Us</a></li>
                    <li><a href="#!" class="hover:text-gray-900 transition">Blog</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-xl font-semibold mb-4">Get in Touch</h4>
                <div class="space-y-3 text-gray-600">
                    <p><i class="fa-solid fa-envelope mr-2 text-gray-500"></i><a href="mailto:{{ $email }}" class="hover:text-gray-900">{{ $email }}</a></p>
                    <p><i class="fa-solid fa-phone-square mr-2 text-gray-500"></i><a href="tel:{{ $contact }}" class="hover:text-gray-900">{{ $contact }}</a></p>
                </div>
                <div class="flex space-x-4 mt-4">
                    <a href="{{ $facebook }}" class="text-gray-600 hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $twitter }}" class="text-gray-600 hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $instagram }}" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-10 border-t border-gray-300 pt-6 text-center text-gray-500 text-sm">
            © {{ date('Y') }} {{ $title }}. All rights reserved.
        </div>
    </div>
</footer>
