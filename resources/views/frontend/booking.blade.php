@extends('frontend.layout.main')

@section('content')
    <x-bread-crumb main-title="Book Now" page-name="Booking" />

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item">
                            <form id="booking-form" class="form-content" method="POST" action="{{ route('packages.book') }}">
                                @csrf

                                <h4 class="title white text-center">MAKE A BOOKING</h4>
                                <div class="row gy-4">

                                    <!-- Package Selection -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white d-block mb-2">Select Package</label>
                                            <select name="tour_package_id" id="package-select" class="nice-select" required>
                                                <option value="" disabled selected>Select a package</option>
                                                @foreach ($packages as $package)
                                                    <option value="{{ $package->id }}"
                                                        data-batches="{{ json_encode(
                                                            $package->batches->map(function ($batch) {
                                                                return [
                                                                    'id' => $batch->id,
                                                                    'start_date' => $batch->start_date->format('Y-m-d'),
                                                                    'end_date' => $batch->end_date ? $batch->end_date->format('Y-m-d') : null,
                                                                ];
                                                            }),
                                                        ) }}">
                                                        {{ $package->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Full Name -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white d-block mb-2">Full Name</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white d-block mb-2">Email Address</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white d-block mb-2">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Country Dropdown -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white d-block mb-2">Country</label>
                                            <select name="country" class="nice-select" required>
                                                <option value="" disabled selected>Select your country</option>
                                                @foreach ($countries as $countryCode => $countryName)
                                                    <option value="{{ $countryCode }}">{{ $countryName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Toggle Date Option -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white d-block mb-2">Select Booking Type</label>
                                            <div>
                                                <label class="me-3">
                                                    <input type="radio" name="booking_type" value="batch" checked> Batch
                                                    Date
                                                </label>
                                                <label>
                                                    <input type="radio" name="booking_type" value="custom"> Custom Date
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Batch Selection -->
                                    <div class="col-lg-12" id="batch-date-section">
                                        <div class="form-group">
                                            <label class="white d-block mb-2">Select Batch</label>
                                            <select name="tour_batch_id" id="batch-select" class="nice-select" disabled>
                                                <option value="">-- Select a Package First --</option>
                                            </select>
                                            <div id="no-batch-message" class="text-light bg-secondary p-2 rounded mt-2"
                                                style="display:none;">
                                                No batch available for this package. You can select the custom date.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Custom Date Selection -->
                                    <div class="col-lg-12" id="custom-date-section" style="display:none;">
                                        <div class="form-group">
                                            <label class="white d-block mb-2">Select Custom Date</label>
                                            <input type="date" name="custom_date" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Number of People -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white">No. Of People</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect" name="number_of_people">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional Message -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white d-block mb-2">Message (Optional)</label>
                                            <textarea name="message" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="nir-btn w-100">Book Now</button>
                                        </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const packageSelect = document.getElementById('package-select');
            const batchSelect = document.getElementById('batch-select');
            const batchDateSection = document.getElementById('batch-date-section');
            const customDateSection = document.getElementById('custom-date-section');
            const noBatchMessage = document.getElementById('no-batch-message');
            const bookingTypeRadios = document.querySelectorAll('input[name="booking_type"]');

            // Handle package selection
            packageSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const batches = JSON.parse(selectedOption.dataset.batches || '[]');

                // Clear batch select
                batchSelect.innerHTML = '<option value="">-- Select a Batch --</option>';

                if (batches.length > 0) {
                    batchSelect.disabled = false;
                    noBatchMessage.style.display = 'none';

                    batches.forEach(batch => {
                        const option = document.createElement('option');
                        option.value = batch.id;
                        option.textContent = batch.start_date + (batch.end_date ? ' to ' + batch
                            .end_date : '');
                        batchSelect.appendChild(option);
                    });
                } else {
                    batchSelect.disabled = true;
                    noBatchMessage.style.display = 'block';
                }
            });

            // Handle booking type change
            bookingTypeRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.value === 'batch') {
                        batchDateSection.style.display = 'block';
                        customDateSection.style.display = 'none';
                    } else {
                        batchDateSection.style.display = 'none';
                        customDateSection.style.display = 'block';
                    }
                });
            });
        });
    </script>
@endpush
