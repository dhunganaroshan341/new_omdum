<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Service;
use App\Models\TourPackage;
use App\Models\TourPackageType;
use Illuminate\Http\Request;
use NerdSnipe\LaravelCountries\Facades\LaravelCountries;

class TourPackageController extends Controller
{
    public function index()
    {
        $countries = LaravelCountries::getCountries();
        $tourPackages = TourPackage::where('status', 'Active')->get();
        $services = Service::all();
        $tourPackageTypes = TourPackageType::all();
        return view('frontend.packages-grid', compact('countries', 'tourPackages', 'services', 'tourPackageTypes'));
    }

    public function show($slug)
    {
        $package = TourPackage::where('slug', $slug)->where('status', 'Active')->firstOrFail();
        $totalDays = $package->itineraries
            ->filter(fn ($item) => is_numeric($item->day_number))
            ->sum(fn ($item) => (int) $item->day_number);
        $otherPackages = TourPackage::where('country_id', $package->country_id)->where('id', '!=', $package->id)->get();
        return view('frontend.packages-single', compact('package', 'totalDays', 'otherPackages'));
    }

    public function booking(Request $request)
    {
        $request->validate([
            'tour_package_id' => 'required|exists:tour_packages,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'booking_date' => 'required|date',
            'number_of_people' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);

        Booking::create($request->all());

        return response()->json(['message' => 'Booking submitted successfully!']);
    }
}
