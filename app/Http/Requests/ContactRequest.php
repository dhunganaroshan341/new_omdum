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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please Enter your name',
            'email.required' => 'Please Enter your email',
            'email.email' => 'Please Enter valid email address',
            'subject.required'=>'Please Enter the Subject',
            'message.required' => 'Please Enter the message',
            'message.max' => 'Max limit for message is 1000',

        ];
    }
}
