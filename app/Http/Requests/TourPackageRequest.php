<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class TourPackageRequest extends FormRequest
{
    public function authorize()
    {
        // Change this based on your auth logic; true means everyone allowed
        return true;
    }

   public function rules()
{
    $tourPackageId = $this->route('id');

    return [
        'country_id' => 'required|exists:countries,id',
        'service_id' => '|exists:countries,id',
        'title' => 'required|string|max:255',
        'slug' => [
            'required',
            'string',
            'max:255',
            $tourPackageId
                ? Rule::unique('tour_packages', 'slug')->ignore($tourPackageId)
                : Rule::unique('tour_packages', 'slug'),
        ],
        // ... other rules
        'short_description' => 'nullable|string',
        'long_description' => 'nullable|string',
        'itinerary' => 'nullable|string',
        'duration' => 'nullable|string|max:100',
        'difficulty' => 'nullable|in:easy,moderate,hard',
        'max_elevation' => 'nullable|integer|min:0',
        'best_season' => 'nullable|string|max:100',
        'start_point' => 'nullable|string|max:255',
        'end_point' => 'nullable|string|max:255',
        'status' => 'nullable|in:Active,Inactive',
        'type' => 'nullable|in:trekking,tour,other',
        'max_people' => 'nullable|integer|min:1',
        'available_seats' => 'nullable|integer|min:0|lte:max_people',
    ];
}

}
