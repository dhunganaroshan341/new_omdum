<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use App\Traits\HandlesMediaUploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  use HandlesMediaUploads;

public function index(Request $request)
{
    if ($request->ajax()) {
        $search = $request->input('search.value');
        $columns = $request->input('columns');
        $pageSize = $request->input('length');
        $order = $request->input('order')[0];
        $orderColumnIndex = $order['column'];
        $orderBy = $order['dir'];
        $start = $request->input('start');

        $query = Page::query();

        $totalCount = $query->count();

        // Apply search filter
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('slug', 'LIKE', "%{$search}%")
                  ->orWhere('meta_title', 'LIKE', "%{$search}%")
                  ->orWhere('meta_description', 'LIKE', "%{$search}%");
            });
        }

        $filteredCount = $query->count();

        $pages = $query
            ->orderBy($columns[$orderColumnIndex]['data'], $orderBy)
            ->offset($start)
            ->limit($pageSize)
            ->get();

        return DataTables::of($pages)
            ->addIndexColumn()

            ->addColumn('action', function ($data) {
                return view('Admin.Button.button', compact('data'))->render();
            })

            ->addColumn('image', function ($item) {
                $dataImage = asset('uploads/' . $item->image_1);
                $defaultImage = asset('defaultImage/defaultimage.webp');
                return '<img src="' . $dataImage . '" width="50" height="50" onerror="this.src=\'' . $defaultImage . '\'" />';
            })

            ->addColumn('content', function ($item) {
                return Str::limit(strip_tags($item->content), 30);
            })

            ->addColumn('status', function ($item) {
                $checked = $item->status == 'Active' ? 'checked' : '';
                return '<div class="form-check form-switch">
                            <input class="form-check-input statusIdData d-flex mx-auto" type="checkbox"
                            data-id="' . $item->id . '" role="switch" id="statusSwitch" ' . $checked . '>
                        </div>';
            })

            ->with('recordsTotal', $totalCount)
            ->with('recordsFiltered', $filteredCount)
            ->rawColumns(['action', 'image', 'status'])
            ->make(true);
    }

    $extraJs = array_merge(
        config('js-map.admin.datatable.script'),
        config('js-map.admin.summernote.script'),
        config('js-map.admin.buttons.script')
    );

    $extraCs = array_merge(
        config('js-map.admin.datatable.style'),
        config('js-map.admin.summernote.style'),
        config('js-map.admin.buttons.style')
    );

    return view('Admin.pages.pages.pages', [
        'extraJs' => $extraJs,
        'extraCs' => $extraCs
    ]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(PageRequest $request)
    {
        $data = $request->validated();

        // Handle uploads of image_1, image_2, video_1, video_2
        $mediaData = $this->handleMediaUploads($request, [], 'uploads/pages');
        $data = array_merge($data, $mediaData);

        // Handle gallery images separately (multiple uploads)
        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            $galleryFolder = public_path('uploads/pages/gallery');
            if (!file_exists($galleryFolder)) {
                mkdir($galleryFolder, 0755, true);
            }

            foreach ($request->file('gallery_images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move($galleryFolder, $filename);
                $galleryPaths[] = 'uploads/pages/gallery/' . $filename;
            }
            $data['gallery_images'] = json_encode($galleryPaths);
        }

        // Auto-generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $page = Page::create($data);

        return redirect()->route('pages.index')->with('success', 'Page created successfully!');
    }


    public function show(string $id)
    {
        $page = Page::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $page
        ]);
    }


    public function update(Request $request, string $id)
    {
        $page = Page::findOrFail($id);

        // Validate
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'image_1' => 'nullable|file|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_2' => 'nullable|file|image|mimes:jpeg,png,jpg,webp|max:2048',
            'video_1' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg|max:10240',
            'video_2' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg|max:10240',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'nullable|file|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Handle uploads and deletions
        $mediaData = $this->handleMediaUploads($request, $page->toArray(), 'uploads/pages');
        $validated = array_merge($validated, $mediaData);

        // Handle gallery images: append new uploaded images to existing gallery
        $galleryPaths = json_decode($page->gallery_images, true) ?? [];
        if ($request->hasFile('gallery_images')) {
            $galleryFolder = public_path('uploads/pages/gallery');
            if (!file_exists($galleryFolder)) {
                mkdir($galleryFolder, 0755, true);
            }
            foreach ($request->file('gallery_images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move($galleryFolder, $filename);
                $galleryPaths[] = 'uploads/pages/gallery/' . $filename;
            }
        }
        $validated['gallery_images'] = json_encode($galleryPaths);

        $page->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Page updated successfully.',
            'data' => $page,
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
  public function destroy(string $id)
{
    $page = Page::findOrFail($id);

    $page->delete();

    return response()->json([
        'success' => true,
        'message' => 'Page deleted successfully.'
    ]);
}
   public function uploadImage(Request $request)
{
    $request->validate([
        'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/pages', $imageName);

        return response()->json([
            'success' => true,
            'image_url' => asset('uploads/pages/' . $imageName),
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'No image uploaded.',
    ], 400);
}
 public function destroyImage(Request $request)
{
    $request->validate([
        'image_path' => 'required|string',
    ]);

    // Remove the storage URL if needed
    $imagePath = str_replace(asset('storage') . '/', '', $request->image_path);

    if (Storage::exists('public/' . $imagePath)) {
        Storage::delete('public/' . $imagePath);

        return response()->json([
            'success' => true,
            'message' => 'Image deleted successfully.',
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Image not found.',
    ], 404);
}
}
