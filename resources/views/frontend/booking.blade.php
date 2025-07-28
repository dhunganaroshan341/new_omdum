@extends('frontend.layout.main')

@section('content')
    <x-bread-crumb main-title="Book Now" page-name="Booking" />

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item">
                            <form id="booking-form" class="form-content" method="POST" action="{{ route('packages.book') }}">
                                @csrf

                                <h4 class="title white text-center">MAKE A BOOKING</h4>
                                <div class="row gy-4">
                                    {{-- Full Name --}}
                                    <div class="col-12 col-md-4">
                                        <label class="white d-block mb-2">Full Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>

                                    {{-- Email --}}
                                    <div class="col-12 col-md-4">
                                        <label class="white d-block mb-2">Email Address</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>

                                    {{-- Phone --}}
                                    <div class="col-12 col-md-4">
                                        <label class="white d-block mb-2">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" required>
                                    </div>

                                    {{-- Country --}}
                                    <div class="col-12 col-md-4">
                                        <label class="white d-block mb-2">Country</label>
                                        <select name="country" class="nice-select" required>
                                            <option value="" disabled selected>Select your country</option>
                                            @foreach ($countries as $code => $name)
                                                <option value="{{ $code }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- No. of People --}}
                                    <div class="col-12 col-md-4">
                                        <label class="white d-block mb-2">No. Of People</label>
                                        <div class="input-box">
                                            <i class="flaticon-add-user"></i>
                                            <select class="niceSelect" name="number_of_people">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Booking Type --}}
                                    <div class="col-12">
                                        <label class="white d-block mb-2">Select Booking Type</label>
                                        <label class="me-3">
                                            <input type="radio" name="booking_type" value="batch" checked> Batch Date
                                        </label>
                                        <label>
                                            <input type="radio" name="booking_type" value="custom"> Custom Date
                                        </label>
                                    </div>

                                    {{-- Package --}}
                                    <div class="col-12 col-md-6" id="batch-date-section">
                                        <label class="white d-block mb-2">Select Package</label>
                                        <select name="tour_package_id" id="package-select" class="nice-select" required>
                                            <option value="" disabled selected>-- Select a Package --</option>
                                            @foreach ($packages as $package)
                                                <option value="{{ $package->id }}">
                                                    {{ implode(' ', array_slice(explode(' ', $package->title), 0, 4)) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- Batch --}}
                                    <div class="col-12 col-md-6">
                                        <label class="white d-block mb-2">Select Batch</label>
                                        <select name="batch_id" id="batch-select" class="nice-select" disabled required>
                                            <option value="">-- Select a Package First --</option>
                                        </select>
                                    </div>

                                    {{-- Batch Messages --}}
                                    <div class="col-12">
                                        <div id="no-batch-message" class="text-light bg-secondary p-2 rounded mt-2"
                                            style="display:none;">
                                            Only package Inquiry is going to be sent. However can select the custom date as
                                            well.
                                        </div>
                                        <div id="batch-info" class="text-light bg-dark p-2 rounded mt-2"
                                            style="display:none;"></div>
                                    </div>

                                    {{-- Custom Date --}}
                                    <div class="col-12 col-md-4" id="custom-date-section" style="display:none;">
                                        <label class="white d-block mb-2">Select Custom Date</label>
                                        <input type="date" name="custom_date" class="form-control">
                                    </div>



                                    {{-- Message --}}
                                    <div class="col-12">
                                        <label class="white d-block mb-2">Message (Optional)</label>
                                        <textarea name="message" class="form-control" rows="3"></textarea>
                                    </div>

                                    {{-- Submit Button Centered --}}
                                    <div class="col-12 col-md-6 mx-auto">
                                        <button type="submit" class="nir-btn w-100">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            let batches = [];

            function resetBatchSelect(message = '-- Select a Batch --') {
                $('#batch-select').html(`<option disabled selected>${message}</option>`);
                $('#batch-select').prop('disabled', true);
                $('#batch-info').hide();
            }

            $('#package-select').on('change', function() {
                const packageId = $(this).val();

                resetBatchSelect('Loading batches...');

                $.get(`/packages/get-batches/${packageId}`, function(response) {
                    batches = response;

                    if (batches.length > 0) {
                        let options = '<option disabled selected>-- Select a Batch --</option>';
                        batches.forEach(batch => {
                            options += `<option value="${batch.id}">
                            ${batch.start_date} to ${batch.end_date ?? 'N/A'}
                        </option>`;
                        });
                        $('#batch-select').html(options).prop('disabled', false);
                        $('#no-batch-message').hide();
                    } else {
                        resetBatchSelect('No batches available');
                        $('#no-batch-message').show();
                    }
                });
            });

            $('#batch-select').on('change', function() {
                const batchId = $(this).val();
                const batch = batches.find(b => b.id == batchId);

                if (batch) {
                    $('#batch-info').html(`
                    <strong>Batch Dates:</strong> ${batch.start_date} to ${batch.end_date ?? 'N/A'}<br>
                    <strong>Seats Available:</strong> ${batch.available_seats}/${batch.max_people}<br>
                    <strong>Price:</strong> $${batch.price}
                `).show();
                } else {
                    $('#batch-info').hide();
                }
            });

            $('input[name="booking_type"]').on('change', function() {
                const type = $(this).val();
                if (type === 'batch') {
                    $('#batch-date-section').show();
                    $('#custom-date-section').hide();
                } else {
                    $('#batch-date-section').hide();
                    $('#custom-date-section').show();
                }
            });

            // AJAX Submit
            $('#booking-form').on('submit', function(e) {
                e.preventDefault();
                const form = $(this);
                const formData = form.serialize();

                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Booking Successful!',
                                text: response.message,
                                confirmButtonColor: '#3085d6',
                            });

                            form.trigger('reset');
                            resetBatchSelect();
                            $('#custom-date-section').hide();
                            $('#batch-date-section').show();
                            $('#no-batch-message').hide();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Booking Failed!',
                                text: response.message || 'Something went wrong!',
                                confirmButtonColor: '#d33',
                            });
                        }
                    },
                    error: function(xhr) {
                        let message = 'Something went wrong!';
                        if (xhr.responseJSON?.message) {
                            message = xhr.responseJSON.message;
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: message,
                            confirmButtonColor: '#d33',
                        });
                    }
                });
            });
        });
    </script>
@endpush
