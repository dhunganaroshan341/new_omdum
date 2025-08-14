    <!-- footer starts -->
    <footer class="pt-10"
        style="background-image:url({{ asset('template/yatri_world/main-file/images/bg/bg3.jpg') }}); background-size: cover;">
        <div class="footer-upper pb-5">
            <div class="container">
                <div class="row">
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
                    <div class="col-lg-8 mb-4">
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
                                    <a href="{{ route('contact') }}">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="footer-listing-main d-lg-flex align-items-start justify-content-start mt-4  text-center text-lg-start flex-wrap gap-4">

                            <!-- NEPAL OFFICE -->
                            <div class="footer-listing white">
                                <h6 class="text-white mb-3">
                                    <i class="fas fa-location-dot me-2"></i> Nepal Office
                                </h6>
                                <p class="mb-2"><i class=" inline-icon  fas fa-map me-2"></i> Nil Saraswoti Marg,
                                    Gairidhara </p>
                                <p class="m-0"> Kathmandu, Nepal</p>
                                <p class="mb-2"><i class=" inline-icon   fas fa-phone me-2"></i>
                                    <a href="tel:+9779851137860" class="text-white">+977 9851137860</a>
                                </p>
                                <p class="mb-0"><i class="inline-icon   fas fa-envelope me-2"></i>
                                    <a href="mailto:info@ommundumtreks.com"
                                        class="text-white">info@ommundumtreks.com</a>
                                </p>
                            </div>

                            <!-- INDIA OFFICE -->
                            <div class="footer-listing white">
                                <h6 class="text-white mb-3">
                                    <i class="fas fa-location-dot me-2"></i> India Office
                                </h6>
                                <p class="mb-2"><i class=" inline-icon   fas fa-map me-2"></i> Shop No: 25, Kota,
                                    Rajasthan, India
                                </p>
                                <p class="mb-2"><i class=" inline-icon   fas fa-phone me-2"></i>
                                    <a href="tel:+916350606267" class="text-white">+91 6350606267</a>
                                </p>
                                <p class="mb-0"><i class=" inline-icon   fas fa-envelope me-2"></i>
                                    <a href="mailto:dhruv@ommundumtreks.com"
                                        class="text-white">dhruv@ommundumtreks.com</a>
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
                        <p class="m-0 white">copyright@ommundumtreks2025 | developed by <a
                                style="text-decoration: none;color:white" href="https://realminfotek.com/">Realminfotech
                                Pvt Ltd.</a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </footer>
    <!-- footer ends -->
