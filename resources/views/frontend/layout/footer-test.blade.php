<footer class="pt-10"
    style="background-image:url({{ asset('template/yatri_world/main-file/images/bg/bg3.jpg') }}); background-size: cover;">
    <div class="footer-upper pb-5">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-lg-4 mb-4">
                    <div class="footer-about">
                        <img src="{{ asset('/front/images/logo-white.png') }}" alt="logo">
                        <p class="mt-3 mb-3">
                            At Om Mundum Treks, our mission is to provide exceptional trekking and adventure experiences
                            while promoting sustainable tourism and preserving Nepal’s rich cultural and natural
                            heritage.
                        </p>
                        <ul class="social-links list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Links + Info Boxes -->
                <div class="col-lg-8 mb-4">
                    <div class="footer-links text-center mb-4">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ route('about') }}">About Us</a></li>
                            <li class="list-inline-item"><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li class="list-inline-item"><a href="{{ route('blog') }}">Blog</a></li>
                            <li class="list-inline-item"><a href="{{ route('contact') }}">Contact</a></li>
                            <li class="list-inline-item"><a href="{{ route('contact') }}">Terms & Conditions</a></li>
                        </ul>
                    </div>

                    <div class="row text-center text-white">
                        <!-- Nepal Office -->
                        <div class="col-md-4 mb-3">
                            <i class="fa fa-map-marked mb-2"></i>
                            <p>Thamel - 26, Kathmandu, Nepal</p>
                            <p><a href="tel:+9779851402800" class="text-white">+977 9851402800</a></p>
                            <p><a href="mailto:info@ommundumtreks.com" class="text-white">info@ommundumtreks.com</a></p>
                        </div>

                        <!-- India Office -->
                        <div class="col-md-4 mb-3">
                            <i class="fa fa-map-marked mb-2"></i>
                            <p>Shop No: 25, Kota, Rajasthan, India</p>
                            <p><a href="tel:+916350606267" class="text-white">+91 6350606267</a></p>
                            <p><a href="mailto:dhruv@ommundumtreks.com" class="text-white">dhruv@ommundumtreks.com</a>
                            </p>
                        </div>

                        <!-- Support -->
                        <div class="col-md-4 mb-3">
                            <i class="fa fa-headphones mb-2"></i>
                            <p><a href="mailto:support@ommundumtreks.com"
                                    class="text-white">support@ommundumtreks.com</a></p>
                            <p><a href="mailto:info@ommundumtreks.com" class="text-white">info@ommundumtreks.com</a></p>
                            <p><a href="mailto:book@ommundumtreks.com" class="text-white">booking@ommundumtreks.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="bg-dark text-white py-2">
        <div class="container text-center">
            <p class="m-0">&copy; {{ date('Y') }} Om Mundum Treks & Travels. All rights reserved.</p>
        </div>
    </div>
    <div class="dot-overlay"></div>
</footer>
