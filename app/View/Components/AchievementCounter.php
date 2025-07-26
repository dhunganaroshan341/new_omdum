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
                (object)[ 'value' => 100, 'title' => 'Happy Customers', 'icon' => 'fa-smile' ],
                (object)[ 'value' => 50, 'title' => 'Amazing Tours', 'icon' => 'fa-plane' ],
                (object)[ 'value' => 3472, 'title' => 'In Business', 'icon' => 'fa-briefcase' ],
                (object)[ 'value' => 523, 'title' => 'Support Case', 'icon' => 'fa-headset' ],
            ]);
        }

        $this->achievements = $achievements;
    }

    public function render(): View|Closure|string
    {
        return view('components.achievement-counter');
    }
}
