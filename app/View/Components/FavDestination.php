<?php

namespace App\View\Components;

use App\Models\OurCountry;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FavDestination extends Component
{
    public $favouriteDestinationsByCountry;

    public function __construct()
    {
        // Get countries with their top 6 latest favourite packages
        $this->favouriteDestinationsByCountry = OurCountry::with(['packages' => function ($query) {
            $query->with(['images', 'country'])
                  ->where('favourite_destination', 1)
                  ->where('status', 'Active')
                  ->latest()
                  ->take(6); // ✅ Limit to latest 6
        }])->get()->filter(fn ($country) => $country->packages->isNotEmpty());
    }

    public function render(): View|Closure|string
    {
        return view('components.fav-destination', [
            'favouriteDestinationsByCountry' => $this->favouriteDestinationsByCountry,
        ]);
    }
}
