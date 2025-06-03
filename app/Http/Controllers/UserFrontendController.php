<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\CallToAction;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\frontend;
use App\Models\User;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\HomeSlide;
use App\Models\Notice;
use App\Models\PageBanner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserFrontendController extends Controller
{

    public function home()
    {
        $frontend = Setting::first();
        $homeslides = HomeSlide::where('status', 'Active')->get();
        // dd($homeslides);
        $testimonials = Testimonial::where('status', 'Active')->get();
        $notice = Notice::where('status', 'Active')->first();
        $clients = \App\Models\Client::with('albums')->get();;
        // dd($notice);
        $services = Service::where('status', 1)->get();
        $content_title="Home";
        $cta = CallToAction::where('page', 'home')->first();
 $posts = Post::with('category', 'postImages')
            ->latest()
            ->take(6) // or ->limit(6)
            ->get();

        return view('frontend.home', compact([ 'posts','cta','services','frontend', 'homeslides', 'testimonials', 'notice','content_title','clients']));

    }
    public function aboutUs()
{

    // Fetch rest of members excluding top members, paginated
    $members = User::whereNotIn('id', [1, 2])->paginate(6);

    $pageBanner = PageBanner::where('page','about')->first();
    $frontend = Setting::first();
    $cta = CallToAction::where('page', 'about')->first();
    $pageDescription = Setting::first()->work_description;
    $pageDescriptionImage  = Setting::first()->about_image;
    $content_title="About Us";

    return view('frontend.about', compact(
        'pageDescription', 'pageDescriptionImage', 'cta',  'members', 'frontend', 'content_title', 'pageBanner'
    ));
}


    public function service()
    {
        $services = Service::where('status', 1)->get();
        $content_title="Services";
        $pageBanner = PageBanner::where('page','services')->first();

        return view('frontend.services', compact('services','content_title','pageBanner'));
    }

    public function servicedetail($id)
    {
        $serviceDetail = Service::find($id);
        $otherServices = Service::where('status', 1)->where('id', '!=', $id)->get();
        $posts = Post::with('category', 'postImages')
            ->latest()
            ->get();
            $content_title="Service Detail";

        if (!$serviceDetail || !$posts) {
            abort('404');
        }
        $pageBanner = PageBanner::where('page','services')->first();

        return view('frontend.service-detail', compact('serviceDetail', 'posts','content_title','pageBanner','otherServices'));
    }

    public function blog()
{
    $content_title = "Blogs";
    $pageBanner = PageBanner::where('page', 'blog')->first();

    // 6 posts per page (you can change the number)
    $posts = Post::with('postImages')->where('status', 'Active')->paginate(6);

    return view('frontend.blog', compact('posts', 'content_title', 'pageBanner'));
}


    public function blogDetail($id)
{
    $content_title = "Blog Detail";
    $pageBanner = PageBanner::where('page', 'blog')->first();

    $images = Post::with(['postImages' => function ($query) use ($id) {
        $query->where('post_id', $id);
    }])->findOrFail($id);

    $post = Post::with(['createdBy', 'category', 'postImages', 'comments'])->find($id);
  $comments = Comment::with('user')
    ->where('commentable_id', $id)
    ->orderBy('created_at', 'desc')
    ->get();

    $detail = Post::with('category', 'postImages', 'comments', 'createdBy', 'updatedBy', 'category')->find($id);
    $recentPosts = Post::with('postImages')
        ->where('status', 'Active')
        ->latest()
        ->take(3)
        ->get();
       $categories = Category::where('status', 'Active')
    ->withCount('post')
    ->get();

    // ✅ Process title
$processedDescription  = $detail->title;
    if (!empty($pageBanner?->title)) {
        $processedDescription .= ' → ' . Str::words(strip_tags($pageBanner->title), 5, '...');
    }

    return view('frontend.blog-detail-sean', compact(
        'detail',
        'images',
        'post',
        'recentPosts',
        'categories',
        'comments',
        'content_title',
        'pageBanner',
        'processedDescription'
    ));
}
public function searchBlogs(Request $request)
{
    $keyword = $request->get('keyword');

    $posts = Post::where('title', 'LIKE', '%' . $keyword . '%')
        ->select('id', 'title') // Only fetch what you need
        ->latest()
        ->take(10)
        ->get();

    return response()->json($posts);
}
    public function contactUs()
    {
        $content_title="Home";
        $pageBanner = PageBanner::where('page','contact')->first();

        return view('frontend.contact',compact('content_title','pageBanner'));
    }

    public function storeContactUs(ContactRequest $request)
    {
        try {
            Contact::create($request->validated());
            return response()->json(['status'=>true,'message' => 'Message has been Submited']);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['status'=>false,'message' => 'Something went wrong']);
        }
    }

}
