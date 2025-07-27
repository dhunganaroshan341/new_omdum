<?php

namespace App\View\Components;

use App\Models\PageBanner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadCrumb extends Component
{
    public $pageBanner;

    public function __construct()
    {
        $banner = PageBanner::where('page', 'all')->first();

        if ($banner && $banner->image) {
            $this->pageBanner = $banner->image;
        } else {
            $this->pageBanner = 'template/yatri_world/main-file/images/tibet_vertical.jpg'; // relative path only
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.bread-crumb', [
            'pageBanner' => $this->pageBanner,
        ]);
    }
}
