<?php

use App\Models\CallToAction;
use App\Models\FeaturedService;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\Cta;
use App\Models\GalleryAlbum;
use App\Models\Notice;
use App\Models\Post;
use App\Models\Service;

function getSettings(){
    return Setting::first();
}

function getServices(){
    return FeaturedService::leftJoin('services','services.id','featured_services.service_id')
    ->orderBy('sort_order','ASC')
    ->get();
}

function getLatestBlog(){
    $blogs = Post::where('status',1)->orderBy('created_at','DESC')->take(6)->get();
    return $blogs;
}

function getGalleryAlbum($id=null){
    if($id!=null){
        $album = GalleryAlbum::find($id)->with(['client','galleryMedia'])->get();
    }
    $album = GalleryAlbum::with(['client','galleryMedia'])->get();
    return $album;
}

function get_tailwind_data(){
    $notice = Notice::first();
    $setting = Setting::first();
    $blog = Post::with('category')->get();
    $cta = CallToAction::first();
    return [
        'notice' => $notice,
        'setting' => $setting,
        'blog' => $blog,
        'cta' => $cta
    ];
}
function getActiveStatusServices(){
    $activeServices = Service::where('status',1)->get();
    return $activeServices;


}
?>
