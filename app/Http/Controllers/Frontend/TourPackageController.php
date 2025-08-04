<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\CountryHelper;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\PackageBooking;
use App\Models\Service;
use App\Models\TourBatch;
use App\Models\TourPackage;
use App\Models\TourPackageType;
use App\Models\OurCountry;

use Illuminate\Http\Request;


class TourPackageController extends Controller
{
    protected $countries;
     public function __construct()
    {
     $this->countries = CountryHelper::getCountries();
    }

   public function index()
{
    $countries = $this->countries; // associative array code => country name

    // Active packages with no children
    $tourPackages = TourPackage::where('status', 'Active')
        ->whereDoesntHave('children')  // assuming you have children() relation defined
        ->get();

    $services = Service::all();
    $tourPackageTypes = TourPackageType::all();
    $ourCountries = OurCountry::all();
    // Parent packages: no parent_id, but have children
    $parentPackages = TourPackage::whereNull('parent_id')
        ->whereHas('children')
        ->get();

    return view('frontend.packages-grid', compact('countries', 'tourPackages', 'services', 'tourPackageTypes', 'parentPackages','ourCountries'));
}



public function show($slug)
{
    $countries = $this->countries;

    $package = TourPackage::with('priceIncludes', 'itineraries')
        ->where('slug', $slug)
        ->where('status', 'Active')
        ->firstOrFail();

    $images = \App\Models\TourPackageImage::where('tour_package_id', $package->id)->get();

if ($images->isEmpty()) {
    $fallbackUrl = asset('template/yatri_world/main-file/images/tibet_vertical.jpg');
    $images = collect();
    for ($i = 0; $i < 5; $i++) {
        $images->push((object)[
            'image_url' => $fallbackUrl,
            'image_path' => 'template/yatri_world/main-file/images/tibet_vertical.jpg',
        ]);
    }
} else {
    $images->transform(function ($image) {
        if (str_starts_with($image->image_path, 'http://') || str_starts_with($image->image_path, 'https://')) {
            $image->image_url = $image->image_path;
        } else {
            $image->image_url = asset('uploads/' . ltrim($image->image_path, '/'));
        }
        return $image;
    });
}
// dd($images);

    $totalDays = $package->itineraries
        ->filter(fn ($item) => is_numeric($item->day_number))
        ->sum(fn ($item) => (int) $item->day_number);

    $otherPackages = TourPackage::where('our_country_id', $package->our_country_id)
        ->where('id', '!=', $package->id)
        ->get();

    return view('frontend.packages-single', compact('countries', 'package', 'totalDays', 'otherPackages', 'images'));
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

        PackageBooking::create($request->all());

        return response()->json(['message' => 'Booking submitted successfully!']);
    }
    public function getBatches($packageId)
{
    $batches = TourBatch::where('tour_package_id', $packageId)->get(['id', 'start_date', 'end_date']);

    return response()->json($batches);
}

public function search(Request $request)
{
    $countries = $this->countries;

    $validated = $request->validate([
        'parent_packages' => 'array',
        'parent_packages.*' => 'integer|exists:tour_packages,id',
        'country' => 'nullable|string',
        'sort_by' => 'nullable|string|in:low,high',
    ]);

    $countryName = $validated['country'] ?? null;
    $parentIds = $validated['parent_packages'] ?? [];

    // Step 1: Find country from slug (case-insensitive match)
    $country = null;
    if ($countryName) {
        $country = OurCountry::where('slug', 'LIKE', $countryName)->first();
    }

    // Step 2: Base query
    $query = TourPackage::query()->where('status', 'Active');

    if ($country) {
        $query->where('our_country_id', $country->id);
    }

    // Step 3: Filter by selected parent package(s)
    if (!empty($parentIds)) {
        $query->whereHas('parent', function ($q) use ($parentIds) {
            $q->whereIn('id', $parentIds);
        });
    }

    // Step 4: Sort by price if selected
    if ($request->filled('sort_by')) {
        if ($request->sort_by === 'low') {
            $query->orderBy('price', 'asc');
        } elseif ($request->sort_by === 'high') {
            $query->orderBy('price', 'desc');
        }
    }

    // Step 5: Get the filtered packages
    $tourPackages = $query->get();

    // Step 6: Sidebar - Only parent packages of current country
    $parentPackagesQuery = TourPackage::whereNull('parent_id')->whereHas('children');
    if ($country) {
        $parentPackagesQuery->where('our_country_id', $country->id);
    }
    $parentPackages = $parentPackagesQuery->get();

    // Other sidebar/filter data
    $ourCountries = OurCountry::all();
    $services = Service::all();
    $tourPackageTypes = TourPackageType::all();

    return view('frontend.packages-grid', compact(
        'countries',
        'ourCountries',
        'tourPackages',
        'services',
        'tourPackageTypes',
        'parentPackages',
        'countryName'
    ));
}


}
