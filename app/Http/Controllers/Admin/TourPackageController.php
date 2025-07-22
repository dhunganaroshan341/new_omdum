<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourPackageRequest;
use App\Models\Country;
use App\Models\TourPackage;
use App\Models\TourPackageImage;
use App\Models\TourPackageVideo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TourPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     protected $latestOrder = 1;
    public function __construct()
    {
        $this->middleware('auth');
        $this->latestOrder = TourPackage::max('order') ?? 0; // Get the maximum order value
        $this->latestOrder++; // Increment it for the next user
    }
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

        $query = TourPackage::with('country')->withCount('images'); // ✅ eager load + image count
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

            ->addColumn('itinerary', function ($item) {
                return '<a href="javascript:void(0);" class="addItineraryBtn btn btn-sm btn-primary" data-id="' . $item->id . '">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a title="View Itineraries" href="javascript:void(0);" class="viewItineraryBtn btn btn-sm btn-primary" data-id="' . $item->id . '">
                            <i class="fas fa-eye"></i>
                        </a>';
            })

            ->addColumn('images', function ($item) {
                $imageCount = $item->images_count ?? 0;

                $viewGallery = '<a type="button" data-id="' . $item->id . '" class="imageListPopup">
                                    <span class="badge badge-primary">' . $imageCount . '</span>
                                </a>';

                $editUploads = '<a title="Edit Uploads" href="javascript:void(0);" class="editUploads btn btn-sm btn-primary" data-id="' . $item->id . '">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>';

                return $viewGallery . ' ' . $editUploads;
            })

            ->addColumn('status', function ($item) {
                $checked = $item->status === 'Active' ? 'checked' : '';
                return '<div class="form-check form-switch">
                            <input class="form-check-input statusToggle" type="checkbox" data-id="' . $item->id . '" ' . $checked . '>
                        </div>';
            })

            ->addColumn('action', function ($item) {
                return view('Admin.Button.button', ['data' => $item]);
            })

            ->addColumn('short_description', function ($item) {
                return \Illuminate\Support\Str::limit(strip_tags($item->short_description), 30);
            })

            ->rawColumns(['images', 'itinerary', 'status', 'action'])

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
        config('js-map.admin.dropzone.script'),
        config('js-map.admin.buttons.script')
    );

    $extraCs = array_merge(
        config('js-map.admin.datatable.style'),
        config('js-map.admin.summernote.style'),
        config('js-map.admin.dropzone.style'),
        config('js-map.admin.buttons.style')
    );

    return view('Admin.pages.TourPackage.tourPackage', [
        'extraJs' => $extraJs,
        'extraCs' => $extraCs,
        'countries' => $countries,
    ]);
}

    public function latestOrder()
    {
        try {

            return response()->json(data: ['success' => true, 'message' => $this->latestOrder]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
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
             $data = TourPackage::with('images')->findOrFail($id);
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
    'images' => 'required|array',
    'images.*' => 'image|max:5120', // each image max 5MB
]);


    $tourPackageId = $request->tour_package_id;
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
        'message' => 'Images uploaded successfully',
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

    public function bookNow($id)
    {
        try {
            $tourPackage = TourPackage::findOrFail($id);
            return view('frontend.pages.booking', compact('tourPackage'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function packageBycountry($country)
    {
        try {
            $tourPackages = TourPackage::whereHas('country', function ($query) use ($country) {
                $query->where('title', $country);
            })->get();

            if ($tourPackages->isEmpty()) {
                return redirect()->back()->withErrors(['error' => 'No packages found for this country']);
            }

            return view('frontend.pages.destination-grid', compact('tourPackages'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }public function packageByType($type)
    {
        try {
            $tourPackages = TourPackage::whereHas('country', function ($query) use ($type) {
                $query->where('name', $type);
            })->get();

            if ($tourPackages->isEmpty()) {
                return redirect()->back()->withErrors(['error' => 'No packages found for this country']);
            }

            return view('frontend.pages.destination-grid', compact('tourPackages'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function deleteImages(string $id)
{
    // Find the image record
    $image = TourPackageImage::find($id);

    if (!$image) {
        return response()->json(['error' => 'Image not found'], 404);
    }

    // Assuming the image path is stored in a column, e.g., 'filepath' or 'image_path'
    $filePath = $image->image_path; // replace 'filepath' with your actual column name

    // Delete the file from storage (e.g., 'public' disk)
    if (Storage::disk('public')->exists($filePath)) {
        Storage::disk('public')->delete($filePath);
    }

    // Delete the database record
    $image->delete();

    return response()->json(['success' => 'Image deleted successfully']);
}
public function showImages($tour_package_id)
{
    $images = TourPackageImage::where('tour_package_id', $tour_package_id)->get();

    return response()->json($images);
}

}
