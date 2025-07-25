<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackageBookingRequest;
use App\Models\Booking;
use App\Models\PackageBooking;
use App\Models\TourBatch;
use App\Models\TourPackage;
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

    if (!empty($validated['tour_batch_id'])) {
        // If batch is selected, take price from batch
        $batch = TourBatch::find($validated['tour_batch_id']);
        $validated['price'] = $batch?->price;
    } else {
        // Otherwise, use the price from the package
        $package = TourPackage::find($validated['tour_package_id']);
        $validated['price'] = $package?->price;
    }

    // Calculate total_people
    // $validated['total_people'] = ($validated['adult'] ?? 0) + ($validated['children'] ?? 0);

    // Create the booking
    $booking = PackageBooking::create($validated);

    return response()->json([
        'success'=>true,
        'message' => 'Booking submitted successfully!',
        'data' => $booking
    ]);
}
}
