<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutUsSection extends Component
{
    public $aboutContent;
    public $missionVision;

    /**
     * Create a new component instance.
     */
    public function __construct($aboutContent = null, $missionVision = null)
    {
        $this->aboutContent = $aboutContent;
        $this->missionVision = $missionVision;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about-us-section');
    }
}
