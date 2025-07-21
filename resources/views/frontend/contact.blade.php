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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2957.0448856124403!2d85.32194127455185!3d27.72043262491585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1910905f9f65%3A0xdc85747e51575050!2sNeel%20Sarswoti%20Marg%2C%20Kathmandu%2044600!5e1!3m2!1sen!2snp!4v1751872691730!5m2!1sen!2snp"
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

    </section>
    <!-- contact Ends -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#storeContact").submit(function(event) {
                event.preventDefault();
                $("#sendMessage").prop("disabled", true);
                let message = $("#message").val();
                console.log(message);
                let formdata = new FormData(this);
                $.ajax({
                    type: "post",
                    url: "{{ route('contact.store') }}",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                        if (response.status === true) {
                            $("#storeContact").trigger("reset");
                            alert("Message has been sent");
                        } else {
                            alert("Something went wrong!");
                        }

                    },
                    error: function(response) {
                        if (response.status === 422) {
                            let errors = response.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $("#" + key + "-validation").text(value[0]);
                            });
                        }
                    },
                    complete: function() {
                        $("#sendMessage").prop("disabled", false);
                    }
                });
            })
        })
    </script>
@endpush
