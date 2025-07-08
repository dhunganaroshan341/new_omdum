<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourPackageRequest;
use App\Models\Country;
use App\Models\TourPackage;
use App\Models\TourPackageImage;
use App\Models\TourPackageVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TourPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $countries = Country::all();
    if ($request->ajax()) {
        $search = $request->input('search.value');
        $columns = $request->input('columns');
        $pageSize = $request->input('length');
        $order = $request->input('order')[0];
        $orderColumnIndex = $order['column'];
        $orderBy = $order['dir'];
        $start = $request->input('start');

        $query = TourPackage::with('country'); // eager load country
        $total = $query->count();

        $filtered = $query->when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%")
                ->orWhere('slug', 'LIKE', "%$search%")
                ->orWhere('duration', 'LIKE', "%$search%")
                ->orWhere('difficulty', 'LIKE', "%$search%")
                ->orWhereHas('country', function ($q2) use ($search) {
                    $q2->where('name', 'LIKE', "%$search%");
                });
        });

        $filteredCount = $filtered->count();

        $data = $filtered
            ->orderBy($columns[$orderColumnIndex]['data'], $orderBy)
            ->offset($start)
            ->limit($pageSize);

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('country', fn($item) => $item->country->name ?? '-')
            // In controller's addColumn:
->addColumn('itinerary', function($item) {
    return '<a href="javascript:void(0);" class="addItineraryBtn btn btn-sm btn-primary" data-id="' . $item->id . '">
                <i class="fas fa-plus"></i>
            </a>


            <a title = " view Itineraries" href="javascript:void(0);" class="viewItineraryBtn btn btn-sm btn-primary" data-id="' . $item->id . '">
                <i class="fas fa-eye"></i>
            </a>


            ';
})->addColumn('images', function($item) {
    $imageCount = $item->gallery_media_count ?? 0;

    $viewGallery = '<a type="button" data-id="' . $item->id . '" class="imageListPopup">
                        <span class="badge badge-primary">' . $imageCount . '</span>
                    </a>';

    $editUploads = '<a title="Edit Uploads" href="javascript:void(0);" class="editUploads btn btn-sm btn-primary" data-id="' . $item->id . '">
                        <i class="fas fa-pencil-alt"></i>
                    </a>';

    return $viewGallery . ' ' . $editUploads;
})
 // ⬅️ Important to render HTML properly



            ->addColumn('status', function ($item) {
                $checked = $item->status === 'active' ? 'checked' : '';
                return '<div class="form-check form-switch">
                    <input class="form-check-input statusToggle" type="checkbox" data-id="' . $item->id . '" ' . $checked . '>
                </div>';
            })
            ->addColumn('action', function ($item) {
                return view('Admin.Button.button', ['data' => $item]);
 // assuming you use reusable buttons
            })
            ->addColumn('short_description', function ($item) {
                return \Illuminate\Support\Str::limit(strip_tags($item->short_description), 30);
            })
            ->rawColumns(['images','itinerary','status', 'action'])
            ->with([
                'recordsTotal' => $total,
                'recordsFiltered' => $filteredCount,
            ])
            ->make(true);
    }

    // Load page normally if not AJAX
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

    return view('Admin.pages.TourPackage.tourPackage', [
        'extraJs' => $extraJs,
        'extraCs' => $extraCs,
        'countries' => $countries,
    ]);
}

   public function statusToggle($id)
    {
        try {
            $data = TourPackage::find($id);

            if ($data->status === 'Active') {
                $data->status = 'Inactive';
            } else {
                $data->status = 'Active';
            }
            $data->save();
            return response()->json(['success' => true, 'message' => 'Status Changes'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(TourPackageRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->only([
                'title',
        'slug',
        'short_description',
        'long_description',
        'duration',
        'difficulty',
        'max_elevation',
        'best_season',
        'start_point',
        'end_point',
        'country_id',
        'status',]);
            if ($request->hasFile('image')) {
                $path = '/images/TourPackage/';
                $imagename = time() . '.' . $request->image->extension();
                $path = $request->image->storeAs($path, $imagename, 'public');
                $data['image'] = $path;
            }
            TourPackage::create($data);
            DB::commit();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */


     public function show(string $id)
    {
        try {
            $data = TourPackage::find($id);
            return response()->json(['success' => true, 'message' => $data]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(TourPackageRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $album = TourPackage::findOrFail($id);

            $album->update($request->validated());
            $gallery = $album;
            if ($request->hasFile('image_path')) {
                foreach ($request->media_path as $key => $value) {
                    $file = $request->file('image_path')[$key];
                    $filename = time() . '_' . $key . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('images/tour-packages'), $filename);
                    $image = 'images/tour-packages/' . $filename;
                    TourPackageImage::create([
                        'tour_package_id' => $gallery->id,
                        'image_path' => $image,
                        // 'status' => 'Active',
                    ]);
                }
            }
            DB::commit();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = TourPackage::find($id);
            if ($data->image) {
                Storage::disk('public')->delete($data->image);
            }
            $data->delete();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }



   public function uploadImages(Request $request)
{
    $request->validate([
        'tour_package_id' => 'required|exists:tour_packages,id',
        'images.*' => 'nullable|image|max:5120',
        'keep_ids' => 'nullable|array', // IDs of images to keep (optional)
        'keep_ids.*' => 'integer|exists:tour_package_images,id',
    ]);

    $tourPackageId = $request->tour_package_id;
    $keepIds = $request->keep_ids ?? [];

    // 🔥 Delete old images not in keep_ids
    $imagesToDelete = TourPackageImage::where('tour_package_id', $tourPackageId)
        ->whereNotIn('id', $keepIds)
        ->get();

    foreach ($imagesToDelete as $oldImage) {
        Storage::disk('public')->delete($oldImage->image_path);
        $oldImage->delete();
    }

    // 📦 Upload new images
    $uploadedImages = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('tour-packages', 'public');

            $tourPackageImage = new TourPackageImage();
            $tourPackageImage->tour_package_id = $tourPackageId;
            $tourPackageImage->image_path = $path;
            $tourPackageImage->save();

            $uploadedImages[] = $tourPackageImage;
        }
    }

    return response()->json([
        'message' => 'Images updated successfully',
        'data' => $uploadedImages,
    ]);
}

    public function uploadYoutube(Request $request)
    {
        $request->validate([
            'iframe' => 'required|string',
        ]);

        // Optionally, sanitize/validate iframe content here.
        $iframe = $request->input('iframe');

        // Save iframe or extract src URL and save as per your model
        $tourPackageVideo = new TourPackageVideo();
        $tourPackageVideo->iframe = $iframe; // Assuming this column exists
        // Assign other fields like tour_package_id if needed
        $tourPackageVideo->save();

        return response()->json([
            'message' => 'YouTube video saved successfully',
            'data' => $tourPackageVideo,
        ]);
    }
}
