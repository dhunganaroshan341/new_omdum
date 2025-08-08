@extends('Admin.layout.master')
@section('content')
    <div class="container-fluid">
        @include('Admin.pages.bookings.manageBookingModal')

        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">All Bookings</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="bookingTable" class="table table-bordered table-striped align-middle"
                        data-url="{{ route('admin.bookings.index') }}">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Action</th>
                                <th>Package</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Booking Type</th>
                                <th>Booking Date</th>
                                <th>No. of People</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Submitted At</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Data will be loaded via AJAX --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
