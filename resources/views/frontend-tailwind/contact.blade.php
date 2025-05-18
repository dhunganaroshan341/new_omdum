@extends('frontend.layout.main')
@section('content')
<section class="hero-small">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url({{ asset('assets/images/banner1.jpg') }}) ;">
                <div class="hero-small-background-overlay"></div>
                <div class="container h-100">
                    <div class="row items-center h-full">
                        <div class="col-md-12">
                            <div class="block text-center">
                                <h1 class="mb-3 mt-3">Contact us</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-0">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-semibold mb-4 text-black">We're here to help!</h1>
    </div>

    <!-- Contact info box -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
        <!-- Box item -->
        <div class="card shadow p-5 text-center border-0">
            <h5 class="mb-3">Visit Our Office</h5>
            <ul class="list-none">
                <li class="mb-3">
                    <a href="#" class="text-gray-800"><i class="fas fa-fw fa-map-marker-alt mr-2 mt-1"></i>{{ $address }}</a>
                </li>
            </ul>
        </div>

        <!-- Box item -->
        <div class="card shadow p-5 text-center border-0">
            <h5 class="mb-3">Call us</h5>
            <ul class="list-none">
                <li class="mb-3">
                    <a href="tel:+977-{{ $contact }}" class="text-gray-800"><i class="fas fa-fw fa-phone-alt mr-2"></i>{{ $contact }}</a>
                </li>
            </ul>
        </div>

        <!-- Box item -->
        <div class="card shadow p-5 text-center border-0">
            <h5 class="mb-3">Email Us</h5>
            <ul class="list-none">
                <li class="mb-0">
                    <a href="mailto:{{ $email }}" class="text-gray-800"><i class="far fa-fw fa-envelope mr-2"></i>{{ $email }}</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="mt-8">
    <div class="container mx-auto">
        <div class="row g-4 g-lg-0">
            <div class="col-md-12">
                <h2 class="mt-4 text-2xl font-bold">Let's talk</h2>
                <p class="text-gray-700 mb-6">Reaching our Office & Find Our Location</p>

                <form id="storeContact">
                    <!-- Name -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="yourName" class="form-label">Your name *</label>
                            <input type="text" class="form-input" name="name" id="name" placeholder="" value="{{ old('name') }}">
                            <span class="text-red-500 text-sm" id="name-validation"></span>
                        </div>
                        <div>
                            <label for="emailInput" class="form-label">Email address *</label>
                            <input type="email" class="form-input" name="email" id="email" placeholder="" value="{{ old('email') }}">
                            <span class="text-red-500 text-sm" id="email-validation"></span>
                        </div>
                        <div>
                            <label for="emailInput" class="form-label">Subject *</label>
                            <input type="text" class="form-input" name="subject" id="subject" placeholder="" value="{{ old('subject') }}">
                            <span class="text-red-500 text-sm" id="subject-validation"></span>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="mt-4">
                        <label for="textareaBox" class="form-label">Message *</label>
                        <textarea class="form-input" name="message" id="message" rows="4">{{ old('message') }}</textarea>
                        <span class="text-red-500 text-sm" id="message-validation"></span>
                    </div>

                    <!-- Button -->
                    <div class="mt-6">
                        <button class="btn btn-lg btn-primary w-full py-2" id="sendMessage" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="mt-8">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4425.791097184029!2d85.31862677628256!3d27.677986976199414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19799ecafa79%3A0xbd693a1616123b1f!2sRealm%20Infotech%20Pvt.%20Ltd.!5e1!3m2!1sen!2snp!4v1743856965231!5m2!1sen!2snp"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

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
                url: "{{ route('store.contact-us') }}",
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
@endsection
