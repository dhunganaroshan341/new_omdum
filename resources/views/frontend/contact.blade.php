@extends('frontend.layout.main')
<!-- BreadCrumb Starts -->

<!-- BreadCrumb Ends -->
@section('content')
    {{-- <section class="breadcrumb-main"
        style="background-image: url({{ asset('/template/yatri_world/main-file/images/tibet.jpg') }});">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Contact Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section> --}}
    <!-- contact starts -->
    <section class="contact-main pt-0 contact1 bg-grey">
        <div class="map mb-10">
            <div style="width: 100%">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.9225691755028!2d85.32698169999999!3d27.7196769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2828e7c35b4eab31%3A0x97173eb923f166ae!2sMundum%20Travels!5e0!3m2!1sen!2snp!4v1754815796905!5m2!1sen!2snp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                            <p class="m-0">Nil Saraswoti Marg, Gairidhara </p>
                                            <p class="m-0"> Kathmandu, Nepal</p>
                                        </div>
                                    </div>
                                    <div class="info-item d-flex align-items-center bg-white mb-3">
                                        <div class="info-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <p class="m-0"> +977 9851137860</p>

                                        </div>

                                    </div>
                                    <div class="info-item d-flex align-items-center bg-white mb-3">
                                        <div class="info-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <p class="m-0"> +977 01 450 3000 </p>

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
                            <form id="storeContact" method="post">
                                @csrf
                                <div class="form-group mb-2">
                                    <input class="form-control" name="name" placeholder="Name" type="text" />
                                    <small class="text-danger" id="name-validation"></small>
                                </div>
                                <div class="form-group mb-2">
                                    <input class="form-control" name="email" placeholder="Email" type="email" />
                                    <small class="text-danger" id="email-validation"></small>
                                </div>
                                <div class="form-group mb-2">
                                    <input class="form-control" name="phone" placeholder="e.g. +9779812345678"
                                        type="text" />
                                    <small class="text-danger" id="phone-validation"></small>
                                </div>
                                <div class="textarea mb-2">
                                    <textarea class="form-control" name="message" placeholder="Enter a message" rows="4"></textarea>
                                    <small class="text-danger" id="message-validation"></small>
                                </div>

                                <!-- With this -->
                                <div class="form-group mb-3 text-center">
                                    <div class="g-recaptcha d-inline-block"
                                        data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                </div>

                                <div class="comment-btn text-right mt-1">
                                    <button type="submit" id="sendMessage" class="nir-btn">Send Message</button>
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

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        $(document).ready(function() {
            $("#storeContact").on("submit", function(event) {
                event.preventDefault();

                // Disable button + change text
                let $btn = $("#sendMessage");
                $btn.prop("disabled", true).text("Processing...");

                // Clear old validation errors
                $("small.text-danger").text("");

                // Simple front-end validations
                let phone = $("input[name='phone']").val().trim();
                let phoneRegex = /^\+?[1-9]\d{0,3}\d{7,14}$/;

                if (phone && !phoneRegex.test(phone)) {
                    $("#phone-validation").text(
                        "Please enter a valid phone number with country code (e.g. +9779812345678)");
                    $btn.prop("disabled", false).text("Send Message");
                    return;
                }

                let formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "{{ route('contact.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === true) {
                            $("#storeContact")[0].reset();
                            Swal.fire({
                                icon: "success",
                                title: "Message Sent",
                                text: "Thank you for contacting us! We will get back to you soon.",
                                confirmButtonColor: "#3085d6"
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Something went wrong. Please try again.",
                                confirmButtonColor: "#d33"
                            });
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $("#" + key + "-validation").text(value[0]);
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Unable to send your message. Please try later.",
                                confirmButtonColor: "#d33"
                            });
                        }
                    },
                    complete: function() {
                        // Re-enable button + restore text
                        $btn.prop("disabled", false).text("Send Message");
                    }
                });
            });
        });
    </script>
@endpush
