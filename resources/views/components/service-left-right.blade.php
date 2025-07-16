@if (isset($services) && $services != null)
    <section class="container py-5">
        <!-- Service 1 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}"
                    class="img-fluid rounded shadow" alt="Service Image 1">
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <h3 class="mb-3 service-title">Trekking Adventures</h3>
                <p>Explore the breathtaking trails of Nepal with our expert-guided trekking services. Whether you're new
                    to
                    hiking or a seasoned trekker, we offer routes tailored to your skill level.</p>
                <a href="#" class="btn btn-view-packages mt-3">Explore <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}"
                    class="img-fluid rounded shadow" alt="Service Image 2">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h3 class="mb-3 service-title">Cultural Tours</h3>
                <p>Dive deep into Nepal’s rich culture and heritage. Visit temples, local villages, and experience the
                    unique traditions of the Himalayas on our immersive cultural tours.</p>
                <a href="#" class="btn btn-view-packages mt-3">Explore <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}"
                    class="img-fluid rounded shadow" alt="Local Transportation">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h3 class="mb-3 service-title">Local Transportation</h3>
                <p>Enjoy comfortable, air-conditioned vehicles with private transfers and reliable intercity travel
                    options.
                    Our experienced drivers ensure safe and timely transportation throughout your trip.</p>
                <a href="#" class="btn btn-view-packages mt-3">Learn More <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}"
                    class="img-fluid rounded shadow" alt="Emergency Support & Travel Insurance">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h3 class="mb-3 service-title">Emergency Support & Travel Insurance</h3>
                <p>Benefit from 24/7 emergency contact support, travel insurance assistance, and rapid response for
                    medical
                    emergencies or lost documents, giving you peace of mind during your journey.</p>
                <a href="#" class="btn btn-view-packages mt-3">Learn More <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>

    </section>
@else
    <section class="container py-5">
        <!-- Service 1 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}"
                    class="img-fluid rounded shadow" alt="Service Image 1">
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <h3 class="mb-3 service-title">Trekking Adventures</h3>
                <p>Explore the breathtaking trails of Nepal with our expert-guided trekking services. Whether you're new
                    to
                    hiking or a seasoned trekker, we offer routes tailored to your skill level.</p>
                <a href="#" class="btn btn-view-packages mt-3">Explore <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('template/yatri_world/main-file/images/tibet.jpg') }}"
                    class="img-fluid rounded shadow" alt="Service Image 2">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h3 class="mb-3 service-title">Cultural Tours</h3>
                <p>Dive deep into Nepal’s rich culture and heritage. Visit temples, local villages, and experience the
                    unique traditions of the Himalayas on our immersive cultural tours.</p>
                <a href="#" class="btn btn-view-packages mt-3">Explore <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}"
                    class="img-fluid rounded shadow" alt="Local Transportation">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h3 class="mb-3 service-title">Local Transportation</h3>
                <p>Enjoy comfortable, air-conditioned vehicles with private transfers and reliable intercity travel
                    options.
                    Our experienced drivers ensure safe and timely transportation throughout your trip.</p>
                <a href="#" class="btn btn-view-packages mt-3">Learn More <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('template/yatri_world/main-file/images/everest.jpg') }}"
                    class="img-fluid rounded shadow" alt="Emergency Support & Travel Insurance">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h3 class="mb-3 service-title">Emergency Support & Travel Insurance</h3>
                <p>Benefit from 24/7 emergency contact support, travel insurance assistance, and rapid response for
                    medical
                    emergencies or lost documents, giving you peace of mind during your journey.</p>
                <a href="#" class="btn btn-view-packages mt-3">Learn More <i
                        class="fa fa-arrow-right white ps-1"></i></a>
            </div>
        </div>

    </section>
@endif
