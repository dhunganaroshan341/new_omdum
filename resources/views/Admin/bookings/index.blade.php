@extends('Admin.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Bookings</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
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
                            @forelse ($bookings as $booking)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    {{-- Package title --}}
                                    <td>{{ $booking->tourPackage->title ?? 'N/A' }}</td>

                                    {{-- User Info --}}
                                    <td>{{ $booking->name }}</td>
                                    <td>{{ $booking->email }}</td>
                                    <td>{{ $booking->phone }}</td>

                                    {{-- Booking Type --}}
                                    <td>{{ ucfirst($booking->booking_type) }}</td>

                                    {{-- Booking Date --}}
                                    <td>
                                        @if ($booking->booking_type === 'custom')
                                            {{ $booking->custom_date ? \Carbon\Carbon::parse($booking->custom_date)->format('d M, Y') : 'N/A' }}
                                        @else
                                            {{ $booking->tourBatch?->start_date?->format('d M, Y') ?? 'N/A' }}
                                        @endif
                                    </td>

                                    {{-- People & Price --}}
                                    <td>{{ $booking->total_people }}</td>
                                    <td>{{ $booking->price ?? 'N/A' }}</td>

                                    {{-- Status --}}
                                    <td>
                                        <span
                                            class="badge
                                            {{ $booking->status == 'pending'
                                                ? 'bg-warning'
                                                : ($booking->status == 'confirmed'
                                                    ? 'bg-success'
                                                    : 'bg-secondary') }}">
                                            {{ ucfirst($booking->status) }}
                                        </span>
                                    </td>

                                    {{-- Submitted At --}}
                                    <td>{{ $booking->created_at->format('d M, Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="text-center">No bookings found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
