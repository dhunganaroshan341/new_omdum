@extends('frontend.layout.main')

@section('content')
    <x-bread-crumb main-title="Book Now" page-name="Booking" />

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="card bg-dark text-light shadow rounded-4 p-4">
                    <form id="booking-form" method="POST" action="{{ route('packages.book') }}">
                        @csrf

                        <h4 class="text-center mb-4">MAKE A BOOKING</h4>

                        <div class="row g-4">
                            {{-- Full Name & Email --}}
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control form-control-lg" required>
                            </div>

                            {{-- Phone & Country --}}
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Country</label>
                                <select name="country" class="form-select form-select-lg" required>
                                    <option value="" disabled selected>Select your country</option>
                                    @foreach ($countries as $code => $name)
                                        <option value="{{ $code }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Booking Type --}}
                            <div class="col-12">
                                <label class="form-label">Booking Type</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="booking_type" value="batch"
                                        checked>
                                    <label class="form-check-label">Batch Date</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="booking_type" value="custom">
                                    <label class="form-check-label">Custom Date</label>
                                </div>
                            </div>

                            {{-- Package & Batch --}}
                            <div class="col-md-6" id="batch-date-section">
                                <label class="form-label">Select Package</label>
                                <select name="tour_package_id" id="package-select" class="form-select form-select-lg"
                                    required>
                                    <option value="" disabled selected>-- Select a Package --</option>
                                    @foreach ($packages as $package)
                                        <option value="{{ $package->id }}">{{ $package->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Select Batch</label>
                                <select name="batch_id" id="batch-select" class="form-select form-select-lg" disabled
                                    required>
                                    <option value="">-- Select a Package First --</option>
                                </select>
                            </div>

                            {{-- Batch info / fallback --}}
                            <div class="col-12">
                                <div id="no-batch-message" class="alert alert-warning" style="display:none;">
                                    No batch available for this package. You can select the custom date.
                                </div>
                                <div id="batch-info" class="alert alert-info" style="display:none;"></div>
                            </div>

                            {{-- Custom Date --}}
                            <div class="col-md-6" id="custom-date-section" style="display:none;">
                                <label class="form-label">Select Custom Date</label>
                                <input type="date" name="custom_date" class="form-control form-control-lg">
                            </div>

                            {{-- People Count & Message --}}
                            <div class="col-md-6">
                                <label class="form-label">No. Of People</label>
                                <select name="number_of_people" class="form-select form-select-lg">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Message (Optional)</label>
                                <textarea name="message" class="form-control form-control-lg" rows="3"></textarea>
                            </div>

                            {{-- Submit --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Book Now</button>
                            </div>
                        </div>
                    </form>
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
