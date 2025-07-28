<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackageBookingRequest;
use App\Models\Booking;
use App\Models\PackageBooking;
use App\Models\TourBatch;
use App\Models\TourPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = PackageBooking::with('tourPackage','tourBatch')->latest()->get();
        return view('Admin.bookings.index', compact('bookings'));
    }
public function store(StorePackageBookingRequest $request)
{
    try {
        // Validate incoming request
        $validated = $request->validated();

        // Set price from tour batch if selected, otherwise from package
        if (!empty($validated['tour_batch_id'])) {
            $batch = TourBatch::find($validated['tour_batch_id']);
            $validated['price'] = $batch?->price;
        } else {
            $package = TourPackage::find($validated['tour_package_id']);
            $validated['price'] = $package?->price;
        }

        // Optional: Calculate total people (if you plan to store it)
        // $validated['total_people'] = ($validated['adult'] ?? 0) + ($validated['children'] ?? 0);

        // Create booking
        $booking = PackageBooking::create($validated);

        if ($booking) {
            return response()->json([
                'success' => true,
                'message' => 'Booking submitted successfully!',
                'data' => $booking
            ]);
        }

        // If creation failed
        return response()->json([
            'success' => false,
            'message' => 'Booking could not be completed. Please try again.'
        ], 422);

    } catch (\Throwable $th) {
        // Log the actual error for debugging
        Log::error('Booking Store Error: ' . $th->getMessage());

        return response()->json([
            'success' => false,
            'message' => 'Something went wrong. Please try again later.'
        ], 500);
    }
}

}
