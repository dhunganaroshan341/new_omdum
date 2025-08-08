<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $search = $request->input('search.value');
            $columns = $request->input('columns');
            $pageSize = $request->input('length');
            $order = $request->input(['order'])[0];
            $orderColumnIndex = $order['column'];
            $orderBy = $order['dir'];
            $start = $request->input('start');

            $NewsLetter = NewsletterSubscriber::query();
            $totalNewsLetter = $NewsLetter->count();

            $searchNewsLetter = $NewsLetter->when($search, function ($query) use ($search) {
                $query->where('email', 'LIKE', "%$search%")

            });

            $searchCount = $searchNewsLetter->count();
            $response = $searchNewsLetter->orderBy($columns[$orderColumnIndex]['data'], $orderBy)
                ->offset($start)
                ->limit($pageSize);
            return NewsletterSubscriber::of($response)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return view('Admin.Button.button', compact('data'));
                })
                ->addColumn('image', function ($item) {
                    $dataimage = asset('uploads/' . $item->image);
                    $defaultImage=asset('defaultImage/defaultimage.webp');
                    return ' <td class="py-1">
                    <img src="' . $dataimage . '" width="50" height="50" onerror="this.src=\''.$defaultImage.'\'"/>
                    </td>';
                })
                ->addColumn('description', function ($item) {
                    return Str::limit(strip_tags($item->description), 20);
                })
                ->addColumn('status', function ($status) {
                    $checked = $status->status == 'Active' ? 'checked' : '';
                    return '<div class="form-check form-switch">
                    <input class="form-check-input statusIdData d-flex mx-auto" type="checkbox" data-id="' . $status->id . '" role="switch" id="flexSwitchCheckChecked" ' . $checked . '>
                    </div>';
                })
                ->with('recordsTotal', $totalNewsLetter)
                ->with('recordsFiltered', $searchCount)

                ->rawColumns(['action', 'image', 'status'])
                ->make(true);
        }

        $extraJs = array_merge(
            config('js-map.admin.datatable.script'),
            config('js-map.admin.summernote.script'),
            config('js-map.admin.sweetalert.script'),
            config('js-map.admin.buttons.script')
        );

        $extraCs = array_merge(
            config('js-map.admin.datatable.style'),
            config('js-map.admin.summernote.style'),
            config('js-map.admin.sweetalert.style'),
            config('js-map.admin.buttons.style')
        );
        return view('Admin.pages.NewsLetter.newsletter', ['extraJs' => $extraJs, 'extraCs' => $extraCs]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
