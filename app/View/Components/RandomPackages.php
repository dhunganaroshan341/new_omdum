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
        // Get 8 latest TourPackages, then shuffle/randomize them
        $this->packages = TourPackage::select('id', 'title', 'slug', 'duration', 'first_image_url')
    ->withCount('batches') // adds batches_count column
    ->orderByDesc('batches_count')
    ->orderByDesc(
        TourPackage::selectRaw('COUNT(*)')
            ->from('itineraries')
            ->whereColumn('tour_packages.id', 'itineraries.tour_package_id')
    )
    ->orderByDesc(
        TourPackage::selectRaw('COUNT(*)')
            ->from('package_bookings')
            ->whereColumn('tour_packages.id', 'package_bookings.tour_package_id')
    )
    ->take(8)
    ->get()
    ->shuffle() // random from top results
    ->take(8); // or however many you want to show

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
