<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
public function rules(): array
{
    return [
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'phone'   => [
            'nullable',
            'regex:/^\+?[1-9]\d{0,3}\d{7,14}$/'
        ],
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string|max:1000',
    ];
}


public function messages()
{
    return [
        'name.required'     => 'Please enter your name',
        'email.required'    => 'Please enter your email',
        'email.email'       => 'Please enter a valid email address',
        'phone.regex'       => 'Please enter a valid phone number with country code (e.g. +9779841234567)',
        'message.required'  => 'Please enter the message',
        'message.max'       => 'Maximum message length is 1000 characters',
    ];
}


}
