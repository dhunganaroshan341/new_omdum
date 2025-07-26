<?php
namespace App\View\Components;

use App\Models\OurCountry;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FavDestination extends Component
{
    public $destinationsByCountry;

    public function __construct()
    {
        $this->destinationsByCountry = OurCountry::with(['packages' => function ($query) {
            $query->where('favourite_destination', 1);
        }])->get()->filter(function ($country) {
            return $country->tourPackages->isNotEmpty();
        });
    }

    public function render(): View|Closure|string
    {
        return view('components.fav-destination', [
            'destinationsByCountry' => $this->destinationsByCountry
        ]);
    }
}
