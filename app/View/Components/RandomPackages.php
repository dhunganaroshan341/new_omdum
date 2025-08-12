<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\TourPackage;

class RandomPackages extends Component
{
    public $packages;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
     $this->packages = TourPackage::select('id', 'title', 'slug', 'duration')
    ->with(['packageImages:id,tour_package_id,image_path'])
    ->withCount(['batches', 'itineraries', 'bookings'])
    ->orderByDesc('batches_count')
    ->orderByDesc('bookings_count')
    ->orderByDesc('itineraries_count')
    ->get()
    ->map(function ($package) {
        // Mark the one with highest bookings as most_booked
        static $maxBookings = null;
        if ($maxBookings === null) {
            $maxBookings = TourPackage::withCount('bookings')->max('bookings_count');
        }
        $package->most_booked = $package->bookings_count === $maxBookings;
        return $package;
    });


    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // Pass the randomized packages collection to the view
        return view('components.random-packages', ['randomPackages' => $this->packages]);
    }
}
