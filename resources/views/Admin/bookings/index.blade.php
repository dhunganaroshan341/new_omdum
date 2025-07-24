@extends('Admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Bookings</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Package</th>
                                <th>Batch</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Booking Date</th>
                                <th>custom</th>
                                <th>No. of People</th>
                                <th>price</th>
                                <th>Status</th>
                                <th>Submitted At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bookings as $booking)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $booking->tourPackage->title ?? 'N/A' }}</td>
                                    <td>{{ $booking->name }}</td>
                                    <td>{{ $booking->email }}</td>
                                    <td>{{ $booking->phone }}</td>
                                    <td>{{ $booking->booking_date }}</td>
                                    <td>{{ $booking->number_of_people }}</td>
                                    <td>
                                        <span
                                            class="badge {{ $booking->status == 'Pending' ? 'bg-warning' : 'bg-success' }}">
                                            {{ $booking->status }}
                                        </span>
                                    </td>
                                    <td>{{ $booking->created_at->format('d M, Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">No bookings found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
