@extends('frontend.layout.main')

@section('content')
    <!-- contact starts -->
    <section class="contact-main pt-0 contact1 bg-grey">
        <div class="map mb-10">
            <div style="width: 100%">
                <iframe height="500"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
        <div class="container py-5">
            <div class="contact-info">
                <div class="row gx-lg-5">
                    <!-- Nepal Office -->
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-info">
                            <h3 class="">Nepal Office</h3>
                            <p class="mb-4">Start your journey in Nepal with our dedicated local team. We're here to help
                                with planning, logistics, and everything in between.</p>
                            <div class="d-flex col-auto">
                                <div class="col-lg-10 col-md-10">
                                    <div class="info-item d-flex align-items-center bg-white mb-3">
                                        <div class="info-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <p class="m-0">Thamel - 26,</p>
                                            <p class="m-0"> Kathmandu, Nepal</p>
                                        </div>
                                    </div>
                                    <div class="info-item d-flex align-items-center bg-white mb-3">
                                        <div class="info-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <p class="m-0"> +977 9851402800</p>

                                        </div>
                                    </div>
                                    <div class="info-item d-flex align-items-center bg-white mb-3">
                                        <div class="info-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <p class="m-0">info@ommundumtreks.com</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- International Office -->
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-info">
                            <h3 class="">International Office</h3>
                            <p class="mb-4">Connect with our global team for inquiries outside Nepal. We assist
                                international trekkers with personalized support.</p>
                            <div class="d-flex col-auto">
                                <div class="col-lg-10 col-md-10">
                                    <div class="info-item d-flex align-items-center bg-white mb-3">
                                        <div class="info-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <p class="m-0"> Shop No: 25, Kota,</p>
                                            <p class="m-0">Rajasthan, India</p>
                                        </div>
                                    </div>
                                    <div class="info-item d-flex align-items-center bg-white mb-3">
                                        <div class="info-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <p class="m-0"> +91 6350606267</p>

                                        </div>
                                    </div>
                                    <div class="info-item d-flex align-items-center bg-white mb-3">
                                        <div class="info-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <p class="m-0"> dhruv@ommundumtreks.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="contact-form" id="contact-form1">
                            <h3 class="">Keep in Touch</h3>
                            <p class="mb-4">Connect with fellow adventurers and stay updated on trekking experiences
                                across Nepal. We share insider tips, seasonal recommendations, and authentic stories from
                                the trail. Get notified about group departures, local festivals, and exclusive offers for
                                repeat travelers.</p>
                            <div id="contactform-error-msg"></div>
                            <form action="#" id="contactform" method="post" name="contactform">
                                <div class="form-group mb-2">
                                    <input class="form-control" id="fname" name="first_name" placeholder="First Name"
                                        type="text" />
                                </div>
                                <div class="form-group mb-2">
                                    <input class="form-control" id="lname" name="last_name" placeholder="Last Name"
                                        type="text" />
                                </div>
                                <div class="form-group mb-2">
                                    <input class="form-control" id="email" name="email" placeholder="Email"
                                        type="email" />
                                </div>
                                <div class="form-group mb-2">
                                    <input class="form-control" id="phnumber" name="phone" placeholder="Phone"
                                        type="text" />
                                </div>
                                <div class="textarea mb-2">
                                    <textarea class="form-control" name="comments" placeholder="Enter a message" rows="4"></textarea>
                                </div>
                                <div class="comment-btn text-right mt-1">
                                    <input class="nir-btn" id="submit" type="submit" value="Send Message" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- contact Ends -->
    @endsection
