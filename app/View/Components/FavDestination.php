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
        // Load all countries, eager load only favourite packages + their images and country data
        $countries = OurCountry::with(['packages' => function ($query) {
            $query->with('images', 'country')
                ->where('favourite_destination', 1)
                ->where('status', 'Active');
        }])->get();

        // Filter out countries that have no favourite packages
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
