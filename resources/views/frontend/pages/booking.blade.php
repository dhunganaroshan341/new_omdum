@extends('frontend.layout.main')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pt-0" style="background-image: url(images/bg/bg8.jpg);">
        <div class="breadcrumb-outer pt-10 pb-4">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Booking</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Booking</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Booking Form Starts -->
    <section class="blog trending destination-b pb-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-4">
                    <div class="booking-box">
                        <div class="customer-information mb-4">
                            <h3 class="border-b pb-2 mb-3">Booking Details</h3>

                            <form method="POST" action="#">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Full Name</label>
                                            <input name="full_name" placeholder="Your Full Name" type="text" required
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Email</label>
                                            <input name="email" placeholder="Email Address" type="email" required
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Date</label>
                                            <input name="date" type="date" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Nationality</label>
                                            <select name="nationality" class="form-control" required>
                                                <option value="">Select Nationality</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Thailand">Thailand</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Adults</label>
                                            <input name="adults" type="number" min="1" value="2"
                                                class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Children</label>
                                            <input name="children" type="number" min="0" value="0"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label>Destination</label>
                                            <select name="destination" id="destination-select" class="form-control"
                                                required>
                                                <option value="">Select Destination</option>
                                                <option value="Pokhara">Pokhara</option>
                                                <option value="Lumbini">Lumbini</option>
                                                <option value="Chitwan">Chitwan</option>
                                                <option value="Everest Base Camp">Everest Base Camp</option>
                                                <option value="Rara Lake">Rara Lake</option>
                                                <option value="Mustang">Mustang</option>
                                                <option value="Kathmandu">Kathmandu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label>Additional Message (Optional)</label>
                                            <textarea name="message" rows="4" class="form-control" placeholder="Any message or request..."></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Total Price</label>
                                            <input type="text" name="total_price" class="form-control"
                                                placeholder="Total will be calculated..." readonly />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit Booking</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- /.customer-information -->
                    </div> <!-- /.booking-box -->
                </div> <!-- /.col-lg-8 -->
            </div>
        </div>
    </section>
    <!-- Booking Form Ends -->

    {{-- @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush --}}

    @push('scripts')
        {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $('#destination-select').select2({
                    placeholder: "Select Destination",
                    allowClear: true
                });
            });
        </script> --}}
    @endpush
@endsection
