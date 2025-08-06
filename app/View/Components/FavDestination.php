<?php

namespace App\View\Components;

use App\Models\OurCountry;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FavDestination extends Component
{
    public $favouriteDestinationsByCountry;

    /**
     * Create a new component instance.
     */
   public function __construct()
{
    $countries = OurCountry::with(['packages' => function ($query) {
        $query->with('images', 'country')
            ->where('favourite_destination', 0)
            ->where('status', 'Active');
    }])->get();

    $this->favouriteDestinationsByCountry = $countries->filter(fn ($country) => $country->packages->isNotEmpty());
}


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fav-destination', [
            'favouriteDestinationsByCountry' => $this->favouriteDestinationsByCountry,
        ]);
    }
}
