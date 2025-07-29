<?php

namespace App\View\Components;

use Closure;
use App\Models\Achievement;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AchievementCounter extends Component
{
    public $achievements;

    public function __construct()
    {
        $achievements = Achievement::take(4)->get();

        // Optional fallback logic if not enough achievements
        if ($achievements->isEmpty()) {
            $achievements = collect([
                (object)[ 'count' => 100, 'title' => 'Happy Customers', 'icon_class' => 'fa-smile' ],
                (object)[ 'count' => 50, 'title' => 'Amazing Tours', 'icon_class' => 'fa-plane' ],
                (object)[ 'count' => 3472, 'title' => 'In Business', 'icon_class' => 'fa-briefcase' ],
                (object)[ 'count' => 523, 'title' => 'Support Case', 'icon_class' => 'fa-headset' ],
            ]);
        }

        $this->achievements = $achievements;
    }

    public function render(): View|Closure|string
    {
        return view('components.achievement-counter');
    }
}
