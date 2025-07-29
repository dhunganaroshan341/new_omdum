<?php
namespace App\View\Components;

use App\Models\CallToAction;
use Closure;
use App\Models\CallToActionHome;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CallToActionHomeSection extends Component
{
    public $callToAction;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Fetch the record where title is 'home'
        $this->callToAction = CallToAction::where('title', 'home')->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.call-to-action-home-section');
    }
}
