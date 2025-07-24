<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackageBookingRequest extends FormRequest
{
    /**
     * Allow all users to submit the request (can restrict later if needed)
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Define validation rules that match your `package_bookings` table
     */
    public function rules(): array
    {
        return [
            'user_id'         => 'nullable|exists:users,id',
            'email'           => 'nullable|email|max:255',
            'message'           => 'nullable|string',
            'phone'           => 'nullable|string|max:20',
            'country'         => 'nullable|string|max:100',

            'children'        => 'nullable|integer|min:0',
            'adult'           => 'nullable|integer|min:0',
            'total_people'    => 'nullable|integer|min:1',
            'price'           => 'nullable|numeric|min:0',

            'tour_package_id' => 'required|exists:tour_packages,id',

            // Mutually exclusive fields
            'tour_batch_id'   => 'nullable|exists:tour_batches,id|required_without:custom_date|prohibited_if:custom_date,present',
            'custom_date'     => 'nullable|date|after_or_equal:today|required_without:tour_batch_id|prohibited_if:tour_batch_id,present',

            'booking_type'    => 'required|in:batch,custom',
            'status'          => 'in:pending,confirmed,cancelled,active,inactive',
        ];
    }

    /**
     * Optional: custom messages for clarity
     */
    public function messages(): array
    {
        return [
            'tour_batch_id.required_without' => 'Please select a batch or provide a custom date.',
            'custom_date.required_without'   => 'Please select a custom date or choose a batch.',
            'custom_date.after_or_equal'     => 'Custom date must be today or a future date.',
            'tour_batch_id.prohibited_if'    => 'You cannot fill both batch and custom date at the same time.',
            'custom_date.prohibited_if'      => 'You cannot fill both custom date and batch at the same time.',
        ];
    }
}
