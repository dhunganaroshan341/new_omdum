<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'image1',
        'image2',
        'video1',
        'video2',
        'gallery_images', // Note: if you're working with JSON, you'll handle it as an array
    ];

    // Optional: cast JSON fields properly


    protected $casts = [
        'gallery_images' => 'array',
    ];

    // Automatically generate slug if not provided
    public static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            if (empty($page->slug)) {
                $page->slug = Str::slug($page->title);
            }
        });
    }
}
