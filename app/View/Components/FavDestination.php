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
        $countries = OurCountry::with(['favouritePackages' => function ($query) {
            $query->with(['images', 'country']);
        }])->get();

        $this->favouriteDestinationsByCountry = $countries->filter(
            fn ($country) => $country->favouritePackages->isNotEmpty()
        );
    }

    public function render(): View|Closure|string
    {
        return view('components.fav-destination', [
            'favouriteDestinationsByCountry' => $this->favouriteDestinationsByCountry,
        ]);
    }
}

