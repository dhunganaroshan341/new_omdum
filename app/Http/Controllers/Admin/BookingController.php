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
use Yajra\DataTables\Facades\DataTables;

class BookingController extends Controller
{
  public function index(Request $request)
{
    if ($request->ajax()) {
        $search = $request->input('search.value');
        $columns = $request->input('columns');
        $pageSize = $request->input('length');
        $order = $request->input('order')[0];
        $orderColumnIndex = $order['column'];
        $orderBy = $order['dir'];
        $start = $request->input('start');

        $bookingsQuery = PackageBooking::with(['tourPackage', 'tourBatch'])
            ->where('status', '!=', 'inactive'); // ✅ exclude inactive

        $total = $bookingsQuery->count();

        $filtered = $bookingsQuery->when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', "%$search%")
                    ->orWhere('email', 'LIKE', "%$search%")
                    ->orWhere('phone', 'LIKE', "%$search%")
                    ->orWhere('country', 'LIKE', "%$search%")
                    ->orWhere('status', 'LIKE', "%$search%");
            });
        });

        $filteredCount = $filtered->count();

        $bookings = $filtered
            ->orderBy($columns[$orderColumnIndex]['data'], $orderBy)
            ->offset($start)
            ->limit($pageSize);

        return DataTables::of($bookings)
            ->addIndexColumn()

            // ✅ Pre-built action buttons
            ->addColumn('action', function ($data) {
                return view('Admin.Button.button', compact('data'));
            })

            ->addColumn('status', function ($item) {
                return '<select class="form-select booking-status" data-id="' . $item->id . '">
                            <option value="pending" ' . ($item->status == 'pending' ? 'selected' : '') . '>Pending</option>
                            <option value="confirmed" ' . ($item->status == 'confirmed' ? 'selected' : '') . '>Confirmed</option>
                            <option value="cancelled" ' . ($item->status == 'cancelled' ? 'selected' : '') . '>Cancelled</option>
                            <option value="active" ' . ($item->status == 'active' ? 'selected' : '') . '>Active</option>
                        </select>';
            })

            ->addColumn('package', function ($item) {
                return optional($item->tourPackage)->title ?? '-';
            })

            ->addColumn('batch', function ($item) {
                return optional($item->tourBatch)->title ?? ($item->custom_date ?? '-');
            })

            ->rawColumns(['action', 'status'])
            ->with('recordsTotal', $total)
            ->with('recordsFiltered', $filteredCount)
            ->make(true);
    }

    return view('Admin.pages.bookings.index');
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
