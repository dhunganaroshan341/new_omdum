    <!-- footer starts -->
    <footer class="pt-10"
        style="background-image:url({{ asset('template/yatri_world/main-file/images/bg/bg3.jpg') }}); background-size: cover;">
        <div class="footer-upper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <div class="footer-about">
                            <img src="{{ asset('/front/images/logo-white.png') }}" alt="logo">
                            <p class="mt-3 mb-3">
                                At Om Mundum Treks, our mission is to
                                provide exceptional trekking and adventure experiences
                                while promoting sustainable tourism and
                                preserving Nepal’s rich cultural and natural heritage.
                            </p>
                            <div class="social-links">
                                <ul>
                                    <li><a href="{{ $facebook ?? '#' }}"><i class="fab fa-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="{{ $twitter ?? '#' }}"><i class="fab fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="{{ $instagram ?? '#' }}"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 mb-4">
                        <div class="footer-links text-center">
                            <ul class="list">
                                <li>
                                    <a href="{{ route('frontend.booking-single') }}">Book Now</a>

                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('gallery') }}">Gallery</a>
                                </li>

                                <li>
                                    <a href="{{ route('blog.index') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                                <li>
                                    <a href="{{ route('packages.index') }}">Packages</a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}">Services</a>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="footer-listing-main d-lg-flex align-items-start justify-content-center mt-4 text-center text-lg-start flex-wrap gap-4">
                            <!-- PRIMARY OFFICE -->
                            <div class="footer-listing white">
                                <h6 class="text-white mb-3">
                                    <i class="fas fa-location-dot me-2"></i> Primary Office
                                </h6>
                                <p class="mb-2">
                                    <i class="inline-icon fas fa-map me-2"></i>
                                    {{ $address ?? 'Nil Saraswoti Marg, Gairidhara Kathmandu, Nepal' }}
                                </p>
                                <p class="mb-2 no-wrap">
                                    <i class="inline-icon fas fa-phone me-2"></i>
                                    <a href="tel:+977{{ $contact ?? '9851137860' }}" class="text-white">
                                        +977 {{ $contact ?? '9851137860' }}
                                    </a>
                                    @if ($landline1 ?? false)
                                        | <a href="tel:+977{{ $landline1 }}" class="text-white">+977
                                            {{ $landline1 }}</a>
                                    @endif
                                </p>

                                <p class="mb-0">
                                    <i class="inline-icon fas fa-envelope me-2"></i>
                                    <a href="mailto:{{ $email ?? 'info@ommundumtreks.com' }}" class="text-white">
                                        {{ $email ?? 'info@ommundumtreks.com' }}
                                    </a>
                                </p>
                            </div>

                            <!-- SECONDARY OFFICE -->
                            <div class="footer-listing white">
                                <h6 class="text-white mb-3">
                                    <i class="fas fa-location-dot me-2"></i> Secondary Office
                                </h6>
                                <p class="mb-2">
                                    <i class="inline-icon fas fa-map me-2"></i>
                                    {{ $address2 ?? 'Shop No: 25, Kota, Rajasthan, India' }}
                                </p>
                                @if ($phone3 ?? false)
                                    <p class="mb-2">
                                        <i class="inline-icon fas fa-phone me-2"></i>
                                        <a href="tel:+91{{ $phone3 }}" class="text-white">+91
                                            {{ $phone3 }}</a>
                                    </p>
                                @endif
                                @if ($phone4 ?? false)
                                    <p class="mb-2">
                                        <i class="inline-icon fas fa-phone me-2"></i>
                                        <a href="tel:+91{{ $phone4 }}" class="text-white">+91
                                            {{ $phone4 }}</a>
                                    </p>
                                @endif
                                <p class="mb-0">
                                    <i class="inline-icon fas fa-envelope me-2"></i>
                                    <a href="mailto:{{ $email2 ?? 'dhruv@ommundumtreks.com' }}" class="text-white">
                                        {{ $email2 ?? 'dhruv@ommundumtreks.com' }}
                                    </a>
                                </p>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner">
                    <div class="copyright-text text-center">
                        <p class="m-0 white">copyright@ommundumtreks2025 | Developed by <a
                                style="text-decoration: none;color:white" href="https://realminfotek.com/">Realminfotech
                                Pvt Ltd.</a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </footer>
    <!-- footer ends -->
