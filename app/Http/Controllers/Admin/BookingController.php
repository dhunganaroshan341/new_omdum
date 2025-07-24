<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackageBookingRequest;
use App\Models\Booking;
use App\Models\PackageBooking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = PackageBooking::with('tourPackage','tourBatch')->latest()->get();
        return view('admin.bookings.index', compact('bookings'));
    }
   public function store(StorePackageBookingRequest $request)
{
    $validated = $request->validated();

    // Create the booking
    $booking = PackageBooking::create($validated);

    return response()->json([
        'message' => 'Booking submitted successfully!',
        'data' => $booking
    ]);
}
}
