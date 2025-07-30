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
            'video' => 'required|file|mimetypes:video/mp4,video/ogg,video/webm|max:102400',
        ]);

        $existing = BannerSliderVideo::latest()->first();

        if ($existing) {
            // Delete old uploaded video file if exists
            $oldPath = public_path($existing->url);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }
            $existing->delete();
        }

        $file = $request->file('video');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $uploadPath = public_path('uploads/banner_videos');

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0775, true);
        }

        $file->move($uploadPath, $fileName);
        $relativePath = 'upload/banner_videos/' . $fileName;

        BannerSliderVideo::create([
            'type' => 'upload',
            'url' => $relativePath,
        ]);

        return redirect()->back()->with('success', 'Video uploaded and saved successfully.');
    }
}

