<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourPackageRequest;
use App\Models\Country;
use App\Models\TourPackage;
use App\Models\TourPackageImage;
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
            ->rawColumns(['status', 'action'])
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
    public function destory($id)
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
}
