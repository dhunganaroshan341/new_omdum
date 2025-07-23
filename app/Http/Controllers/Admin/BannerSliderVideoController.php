<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerSliderVideo;
use Illuminate\Http\Request;

class BannerSliderVideoController extends Controller
{
    public function index()
    {
        $bannerVideo = BannerSliderVideo::latest()->first();
        // Load page normally if not AJAX
    $extraJs = array_merge(
        config('js-map.admin.datatable.script'),
        config('js-map.admin.summernote.script'),
        config('js-map.admin.dropzone.script'),
        config('js-map.admin.buttons.script')
    );

    $extraCs = array_merge(
        config('js-map.admin.datatable.style'),
        config('js-map.admin.summernote.style'),
        config('js-map.admin.dropzone.style'),
        config('js-map.admin.buttons.style')
    );
        return view('Admin.pages.BannerVideo.uploadVideo', compact('bannerVideo','extraJs','extraCs'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:51200',
        ]);

        $path = $request->file('file')->store('banner_videos', 'public');

        return response()->json(['path' => $path]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'video_type' => 'required|in:embed,upload',
            'embed_link' => 'nullable|url|required_if:video_type,embed',
            'uploaded_video' => 'nullable|string|required_if:video_type,upload',
        ]);

        $url = $request->video_type === 'embed' ? $request->embed_link : $request->uploaded_video;

        BannerSliderVideo::updateOrCreate([], [ // Only one banner video, so empty condition
            'type' => $request->video_type,
            'url' => $url,
        ]);

        return redirect()->back()->with('success', 'Banner video saved!');
    }
}
