<?php


namespace App\View\Components;

use App\Models\Package;
use App\Models\TourPackage;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FavDestination extends Component
{
    public $favouriteDestinationsByCountry;

    public function __construct()
    {
        // Eager load 'country' relationship
        $packages = TourPackage::with('country')
            ->where('favourite_destination', 1)
            ->get();

        // Group by country name or object
        $this->favouriteDestinationsByCountry = $packages
            ->groupBy(function ($package) {
                return $package->country?->name ?? 'Unknown';
            });
    }

    public function render(): View|Closure|string
    {
        return view('components.fav-destination');
    }
}
