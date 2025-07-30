<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerSliderVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerSliderVideoController extends Controller
{
    public function index()
    {
        $video = BannerSliderVideo::latest()->first();
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
        return view('Admin.pages.BannerVideo.uploadVideo', compact('video','extraJs','extraCs'));
    }

   public function store(Request $request)
    {
        $request->validate([
            'video_type' => 'required|in:iframe,upload',
            'url' => 'required|string',
        ]);

        $existing = BannersliderVideo::latest()->first();

        if ($existing) {
            if ($existing->type === 'upload') {
                $oldPath = public_path($existing->url);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }
            $existing->delete();
        }

        BannersliderVideo::create([
            'type' => $request->video_type,
            'url'  => $request->url,
        ]);

        return redirect()->back()->with('success', 'Video saved successfully.');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimetypes:video/mp4,video/ogg,video/webm|max:102400',
        ]);

        $file = $request->file('file');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $uploadPath = public_path('upload/banner_videos');

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0775, true);
        }

        $file->move($uploadPath, $fileName);
        $relativePath = 'upload/banner_videos/' . $fileName;

        return response()->json(['path' => $relativePath]);
    }
}

