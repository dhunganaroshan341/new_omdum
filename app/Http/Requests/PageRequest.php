<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Allow all users or add auth check
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $this->id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ];
    }
}
