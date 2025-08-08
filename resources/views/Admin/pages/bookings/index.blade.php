@extends('Admin.layout.master')
@section('content')
    <div class="container-fluid">
        <button class="btn btn-primary addCallToActionBtn mb-4 mt-4">Bookings</button>
        @include('Admin.pages.CallToAction.callToActionModal')

        <div class="table-responsive">
            <table class="table table-striped" id="show-booking-data">
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
            </table>
        </div>

    </div>
@endsection
