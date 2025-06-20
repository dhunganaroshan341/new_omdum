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
        <div class="container">
            <div class="contact-info">
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-info">
                            <h3 class="">Start Your Adventure Today
                            </h3>
                            <p class="mb-4">Have questions about trekking in Nepal? Want to book your next mountain
                                adventure? Our experienced team is ready to help you plan your journey to Nepal's pristine
                                regions. Contact us for detailed information about routes, schedules, and what to expect on
                                your trek through traditional villages and mountain trails.</p>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-content ps-4">
                                    <p class="m-0">445 Mount Eden Road, Mt Eden</p>
                                    <p class="m-0">Basundhara Chakrapath</p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-content ps-4">
                                    <p class="m-0">977-444-666-888</p>
                                    <p class="m-0">977-444-222-000</p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info-content ps-4">
                                    <p class="m-0">info@Yatriiworld.com</p>
                                    <p class="m-0">help@Yatriiworld.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
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
                                    <textarea name="comments" placeholder="Enter a message"></textarea>
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
    </section>
    <!-- contact Ends -->
@endsection
