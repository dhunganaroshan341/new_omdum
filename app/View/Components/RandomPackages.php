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
        $this->packages = TourPackage::with('images','country')->latest()
            ->take(8)
            ->get()
            ->shuffle(); // shuffle() randomizes the collection order
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
