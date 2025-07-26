<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\CallToAction;
use App\Models\Category;
use App\Models\Destination;
use App\Models\TourPackage;
use App\SampleData\HomeSampleData;
use Illuminate\Http\Request;
use App\Models\frontend;
use App\Models\User;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Country;
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
    $testimonials = Testimonial::where('status', 'Active')->get();
    $destinations = TourPackage::where('status', 'Active')->get();
    $topDestinations = TourPackage::where('status', 'Active')->where('top_deal',1)->get();
    $topDeals =$topDestinations;
    $favDestinations = TourPackage::where('status', 'Active')->where('favourite_destination',1)->get();

    $clients = \App\Models\Client::with('albums')->get();
    $services = Service::where('status', 1)->get();
    $content_title = "Home";
    $cta = CallToAction::where('page', 'home')->first();
    $posts = Post::with('category', 'postImages')->latest()->take(6)->get();




    return view('frontend.home', compact([

        'destinations',
        'posts',
        'cta',
        'services',
        'frontend',
        'homeslides',
        'testimonials',
        'content_title',
        'clients',
        'topDeals'
    ]));
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

   $posts = Post::with(['category', 'postImages'])
             ->where('status', 'Active')
             ->latest()
             ->paginate(6);
// dd($posts);


    $categories = Category::withCount('post')->get();

    $recentPosts = Post::with('category') // in case view needs category
                    ->latest()
                    ->take(3)
                    ->get();

    $popularPosts = Post::with('category')
                    ->orderBy('views', 'desc')
                    ->take(3)
                    ->get();

    return view('frontend.blog', compact('posts', 'content_title', 'pageBanner', 'categories', 'popularPosts', 'recentPosts'));
}

  public function blogsByCategory($category_id)
{

    $content_title = "Blogs";
    $pageBanner = PageBanner::where('page', 'blog')->first();
    $category = Category::find($category_id);
$category_title = $category ? $category->title : null;

    // 6 posts per page (you can change the number)
    $posts = Post::with('postImages')->where('status', 'Active')->where('category_id',$category_id)->paginate(6);

    return view('frontend.blog', compact('posts', 'category_title','content_title', 'pageBanner'));
}


public function blogDetail($slug)
{
    $content_title = "Blog Detail";
    $pageBanner = PageBanner::where('page', 'blog')->first();

    // Fetch post by slug
    $post = Post::with(['createdBy', 'category', 'postImages', 'comments'])
        ->where('slug', $slug)
        ->firstOrFail();

    $postId = $post->id;

    // ✅ Count views only once per session
    $sessionKey = 'post_' . $postId . '_viewed';
    if (!session()->has($sessionKey)) {
        $post->increment('views');
        session()->put($sessionKey, true);
    }

    // Fetch images related to the post
    $images = Post::with(['postImages' => function ($query) use ($postId) {
        $query->where('post_id', $postId);
    }])->findOrFail($postId);

    // Fetch comments
    $comments = Comment::with('user')
        ->where('commentable_id', $postId)
        ->orderBy('created_at', 'desc')
        ->get();

    // Full detail with all necessary relationships
    $detail = Post::with('category', 'postImages', 'comments', 'createdBy', 'updatedBy')
        ->findOrFail($postId);

    // Recent posts
    $recentPosts = Post::with('postImages')
        ->where('status', 'Active')
        ->latest()
        ->take(3)
        ->get();

    // Categories with post count
    $categories = Category::where('status', 'Active')
        ->withCount('post')
        ->get();

    // Fetch related posts
    $recentIds = $recentPosts->pluck('id')->toArray();
    $currentCategoryId = $post->category_id ?? null;

    $relatedPosts = Post::with('postImages')
        ->where('status', 'Active')
        ->where('category_id', $currentCategoryId)
        ->whereNotIn('id', $recentIds)
        ->latest()
        ->take(3)
        ->get();

    if ($relatedPosts->count() === 0) {
        $relatedPosts = Post::with('postImages')
            ->where('status', 'Active')
            ->whereNotIn('id', $recentIds)
            ->inRandomOrder()
            ->take(3)
            ->get();
    }

    // Process title
    $processedDescription = $detail->title;
    if (!empty($pageBanner?->title)) {
        $processedDescription .= ' → ' . Str::words(strip_tags($pageBanner->title), 5, '...');
    }

    return view('frontend.blog-detail', compact(
        'detail',
        'images',
        'post',
        'recentPosts',
        'relatedPosts',
        'categories',
        'comments',
        'content_title',
        'pageBanner',
        'processedDescription'
    ));
}


public function searchBlogs(Request $request)
{
    $query = Post::query();

    // Search by keyword in title or description
    if ($request->filled('keyword')) {
        $keyword = $request->keyword;
        $query->where(function ($q) use ($keyword) {
            $q->where('title', 'LIKE', '%' . $keyword . '%')
              ->orWhere('description', 'LIKE', '%' . $keyword . '%');
        });
    }

    // Filter by category
    if ($request->filled('category_id')) {
        $query->where('category_id', $request->category_id);
    }

    // Filter by tag (assuming you have a relation or a tag_id)
    if ($request->filled('tag_id')) {
        $query->whereHas('tags', function ($q) use ($request) {
            $q->where('id', $request->tag_id);
        });
    }

    // Limit & get results
    $posts = $query->select('id', 'title', 'slug')
        ->latest()
        ->take(10)
        ->get();

    return response()->view($posts);
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

    public function destinationGrid(){
        return view('frontend.destination.destination-grid');
    } public function destinationFull(){
        return view('frontend.destination.destination-full');
    }public function destinationSingle(){
        return view('frontend.destination.destination-single');
    }public function destinationList(){
        return view('frontend.destination.destination-list');
    }
    // public function blogSingle(){
    //     return view('frontend.pages.blog-single');
    // }public function blogGrid(){
    //     return view('frontend.pages.blog-grid');
    // }public function blogFull(){
    //     return view('frontend.pages.blog-full');
    // }

}
