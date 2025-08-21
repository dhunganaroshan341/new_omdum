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
        'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20|regex:/^\+\d{1,4}\d{6,14}$/',
       'message' => [
    'required',
    'string',
    'max:1000',
  'not_regex:/\b(congrat|winner|prize|lottery|free\ money|click\ here)\b/i'

],

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
