<?php


namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogAndNewsSection extends Component
{
    public $posts;

    public function __construct()
    {
        // Fetch latest 5 posts with at least one image
        $this->posts = Post::with('postImages')  // assumes you have a relationship
            ->latest()
            ->take(5)
            ->get()
            ->filter(fn($post) => $post->postImages->isNotEmpty());
    }

    public function render(): View|Closure|string
    {
        return view('components.blog-and-news-section');
    }
}
