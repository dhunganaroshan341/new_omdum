<!-- footer starts -->
<footer class="pt-10" style="background-image:url({{ asset('template/yatri_world/main-file/images/bg/bg3.jpg') }});">

    <div class="footer-upper pb-5">
        <div class="container">
            <div class="row">
                <!-- Left: About Section -->
                <div class="col-lg-4 mb-4">
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
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right: Links + Footer Info Boxes -->
                <div class="col-lg-8 mb-4">
                    <div class="footer-links text-center">
                        <ul class="list">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('pages.gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('blog-list') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('contact') }}">Terms & Conditions</a></li>
                        </ul>
                    </div>

                    <!-- 3-column box layout fixed -->
                    <div
                        class="footer-listing-main d-lg-flex align-items-center justify-content-between mt-4 text-center">

                        <!-- Nepal Office -->
                        <div class="footer-listing white">
                            <i class="fa fa-map-marked white mb-1"></i>
                            <p class="white mb-0">Thamel - 26, Kathmandu, Nepal</p>
                            <p class="white mb-0">
                                <a href="tel:+9779851402800" class="text-white">+977 9851402800</a>
                            </p>
                            <p class="white mb-0">
                                <a href="mailto:info@ommundumtreks.com" class="text-white">info@ommundumtreks.com</a>
                            </p>
                        </div>

                        <!-- India Office -->
                        <div class="footer-listing white">
                            <i class="fa fa-map-marked white mb-1"></i>
                            <p class="white mb-0">Shop No: 25, Kota, Rajasthan, India</p>
                            <p class="white mb-0">
                                <a href="tel:+916350606267" class="text-white">+91 6350606267</a>
                            </p>
                            <p class="white mb-0">
                                <a href="mailto:dhruv@ommundumtreks.com" class="text-white">dhruv@ommundumtreks.com</a>
                            </p>
                        </div>

                        <!-- Support Box -->
                        <div class="footer-listing white">
                            <i class="fa fa-headphones white mb-1"></i>
                            <p class="white mb-0">
                                <a href="mailto:support@ommundumtreks.com"
                                    class="text-white">support@ommundumtreks.com</a>
                            </p>
                            <p class="white mb-0">
                                <a href="mailto:info@ommundumtreks.com" class="text-white">info@ommundumtreks.com</a>
                            </p>
                            <p class="white mb-0">
                                <a href="mailto:book@ommundumtreks.com" class="text-white">booking@ommundumtreks.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright pt-2 pb-2">
        <div class="container">
            <div class="copyright-inner">
                <div class="copyright-text text-center">
                    <p class="m-0 white">© 2025 Om Mundum Treks & Travels. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</footer>
<!-- footer ends -->
