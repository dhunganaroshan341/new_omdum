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
        // Load all countries, eager load only favourite packages
        $countries = OurCountry::with(['tourPackages' => function ($query) {
            $query->where('favourite_destination', 1);
        }])->get();

        // Filter countries to only those having favourite packages
        $this->favouriteDestinationsByCountry = $countries->filter(fn($country) => $country->tourPackages->isNotEmpty());
    }

    public function render(): View|Closure|string
    {
        return view('components.fav-destination');
    }
}
