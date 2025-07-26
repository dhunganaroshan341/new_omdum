<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Achievement;

class AchievementCounter extends Component
{
    public $achievements;

    public function __construct()
    {
        $this->achievements = Achievement::all()->isNotEmpty()
            ? Achievement::all()
            : collect([
                (object)[ 'icon' => 'fa-smile', 'value' => 100, 'title' => 'Happy Customers' ],
                (object)[ 'icon' => 'fa-map', 'value' => 50, 'title' => 'Amazing Tours' ],
                (object)[ 'icon' => 'fa-briefcase', 'value' => 3472, 'title' => 'In Business' ],
                (object)[ 'icon' => 'fa-headset', 'value' => 523, 'title' => 'Support Case' ],
            ]);
    }

    public function render(): View|Closure|string
    {
        return view('components.achievement-counter');
    }
}
