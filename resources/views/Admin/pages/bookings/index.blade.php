@extends('Admin.layout.master')

@section('content')
    <div class="container-fluid">

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="startDate" class="form-label fw-semibold">Start Date</label>
                <input type="date" id="startDate" class="form-control" />
            </div>
            <div class="col-md-3">
                <label for="endDate" class="form-label fw-semibold">End Date</label>
                <input type="date" id="endDate" class="form-control" />
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <button id="filterBtn" class="btn btn-primary me-2">Filter</button>
                <button id="resetBtn" class="btn btn-secondary">Reset</button>
            </div>
        </div>

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
