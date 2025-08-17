@extends('frontend.layout.main')
@section('content')
    <x-bread-crumb main-title="Book Now" page-name="Booking" />

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item">
                            <form id="booking-form" class="form-content" method="POST" action="{{ route('packages.book') }}">
                                @csrf

                                <h4 class="title white text-center mb-4">MAKE A BOOKING</h4>
                                <div class="row gy-4">
                                    {{-- Row 1: Full Name, Email, Phone --}}
                                    <div class="col-12 col-md-4">
                                        <label class="white d-block mb-2">Full Name *</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <label class="white d-block mb-2">Email Address *</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <label class="white d-block mb-2">Phone Number *</label>
                                        <input type="tel" name="phone" class="form-control" required>
                                    </div>

                                    {{-- Row 2: Country, No. of People --}}
                                    <div class="col-12 col-md-6">
                                        <label class="white d-block mb-2">Country</label>
                                        <select name="country" class="nice-select" required>
                                            <option value="" disabled selected>Select your country</option>
                                            @foreach ($countries as $code => $data)
                                                <option value="{{ $code }}|{{ $data['phone_code'] }}">
                                                    {{ $data['name'] }} ({{ $data['phone_code'] }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="white d-block mb-2">No. Of People</label>
                                        <div class="input-box">
                                            <i class="flaticon-add-user"></i>
                                            <input type="number" name="total_people" class="form-control" min="1"
                                                value="1" required>
                                        </div>
                                    </div>

                                    {{-- Row 3: Booking Type + Package + Batch + Custom Date --}}
                                    <div class="col-12 col-md-4 d-flex align-items-end">
                                        <div class="w-100">
                                            <label class="white d-block mb-2">Booking Type</label>
                                            <div class="d-flex gap-2">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input me-1" name="booking_type"
                                                        value="batch">
                                                    Batch
                                                </label>
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input me-1" name="booking_type"
                                                        value="custom" checked>
                                                    Custom
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4" id="package-section">
                                        <label class="white d-block mb-2">Select Package</label>
                                        <select name="tour_package_id" id="package-select" class="nice-select" required>
                                            <option value="" disabled selected>-- Select a Package --</option>
                                            @foreach ($packages as $package)
                                                <option value="{{ $package->id }}">
                                                    {{ implode(' ', array_slice(explode(' ', $package->title), 0, 4)) }} -
                                                    {{ $package->price ? '$' . $package->price : '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-4" id="batch-section">
                                        <label class="white d-block mb-2">Select Batch</label>
                                        <select name="batch_id" id="batch-select" class="nice-select" disabled required>
                                            <option value="">-- Select a Package First --</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-3" id="custom-date-section" style="display:none;">
                                        <label class="white d-block mb-2">Select Custom Date</label>
                                        <input type="date" name="custom_date" id="customDateInput" class="form-control">
                                    </div>

                                    {{-- Batch messages full width --}}
                                    <div class="col-12">
                                        <div id="no-batch-message" class="text-light bg-secondary p-2 rounded mt-2"
                                            style="display:none;">
                                            Custom Date Selected
                                        </div>
                                        <div id="batch-info" class="text-light bg-dark p-2 rounded mt-2"
                                            style="display:none;"></div>
                                    </div>

                                    {{-- Message full width --}}
                                    <div class="col-12">
                                        <label class="white d-block mb-2">Message (Optional)</label>
                                        <textarea name="message" class="form-control" rows="3"></textarea>
                                    </div>

                                    {{-- Submit button centered --}}
                                    <div class="col-12 col-md-6 mx-auto">
                                        <button type="submit" id="submitBtn" class="nir-btn w-100">Book Now</button>
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
            let isSubmitting = false; // Prevent multiple submits

            function resetBatchSelect(message = '-- Select a Batch --') {
                $('#batch-select').html(`<option disabled selected>${message}</option>`);
                $('#batch-select').prop('disabled', true);
                $('#batch-info').hide();
                $('#no-batch-message').hide();
            }

            $('#package-select').on('change', function() {
                const packageId = $(this).val();
                resetBatchSelect('Loading batches...');

                $.get(`/packages/get-batches/${packageId}`, function(response) {
                    batches = response;

                    if (batches.length > 0) {
                        let options = '<option disabled selected>-- Select a Batch --</option>';
                        batches.forEach(batch => {
                            options +=
                                `<option value="${batch.id}">${batch.start_date} to ${batch.end_date ?? 'N/A'}</option>`;
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
                    $('#batch-section').show();
                    $('#batch-select').prop('disabled', false).show();
                    $('#custom-date-section').hide();
                    $('input[name="custom_date"]').val('');
                } else {
                    $('#batch-section').hide();
                    $('#batch-select').prop('disabled', true).hide();
                    $('#batch-info').hide();
                    $('#no-batch-message').hide();
                    $('#custom-date-section').show();
                }
            });

            if ($('input[name="booking_type"]:checked').val() === 'batch') {
                $('#batch-section').show();
                $('#batch-select').prop('disabled', false).show();
                $('#custom-date-section').hide();
            } else {
                $('#batch-section').hide();
                $('#batch-select').prop('disabled', true).hide();
                $('#custom-date-section').show();
            }

            // Prevent multiple submissions
            $('#booking-form').on('submit', function(e) {
                e.preventDefault();
                if (isSubmitting) return; // Stop duplicate requests
                isSubmitting = true;

                const form = $(this);
                const submitBtn = $('#submitBtn');
                submitBtn.prop('disabled', true).text('Processing...');

                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: form.serialize(),
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
                            $('#batch-section').show();
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
                    },
                    complete: function() {
                        setTimeout(() => {
                            isSubmitting = false;
                            submitBtn.prop('disabled', false).text('Book Now');
                        }, 2000); // Prevent spam booking (2s cooldown)
                    }
                });
            });

        });

        // Set today's date as default
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('customDateInput').value = today;
    </script>
@endpush
