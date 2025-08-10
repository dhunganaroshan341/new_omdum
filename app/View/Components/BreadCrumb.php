<?php

namespace App\View\Components;

use App\Models\PageBanner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class BreadCrumb extends Component
{
    public $pageBanner;
    public $mainTitle;
    public $pageName;

public function __construct($mainTitle = '', $pageName = '')
{
    $this->mainTitle = $this->limitWords($mainTitle, 3);
    $this->pageName = $pageName;

    $banner = PageBanner::where('page', 'all')->first();

    if ($banner && $banner->image_url) {
        // Check if image_url already has http or https prefix
        if (Str::startsWith($banner->image_url, ['http://', 'https://'])) {
            $this->pageBanner = $banner->image_url;
        } else {
            // prepend your base uploads URL (adjust as needed)
            $this->pageBanner = url('uploads/' . ltrim($banner->image_url, '/'));
        }
    } else {
        $this->pageBanner = url('template/yatri_world/main-file/images/tibet_vertical.jpg');
    }
}


private function limitWords($text, $limit = 3)
{
    return Str::words($text, $limit, '...');
}


    public function render(): View|Closure|string
    {
        return view('components.bread-crumb', [
            'pageBanner' => $this->pageBanner,
            'mainTitle' => $this->mainTitle,
            'pageName' => $this->pageName,
        ]);
    }
}
