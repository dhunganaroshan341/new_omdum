<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
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
    'title1',
    'title2',
    'short_desc1',
    'short_desc2',
    'desc1',
    'desc2',
    'image1',
    'image2',
    'video1',
    'video2',
    'gallery_images', // JSON field as array
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
protected static function booted()
    {
        static::updating(function ($page) {
            // Check and delete old image1
            if ($page->isDirty('image1') && !empty($page->getOriginal('image1'))) {
                $oldPath = public_path($page->getOriginal('image1'));
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // Check and delete old image2
            if ($page->isDirty('image2') && !empty($page->getOriginal('image2'))) {
                $oldPath = public_path($page->getOriginal('image2'));
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // Check and delete old video1
            if ($page->isDirty('video1') && !empty($page->getOriginal('video1'))) {
                $oldPath = public_path($page->getOriginal('video1'));
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // Check and delete old video2
            if ($page->isDirty('video2') && !empty($page->getOriginal('video2'))) {
                $oldPath = public_path($page->getOriginal('video2'));
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
        });

        static::deleting(function ($page) {
            // Delete all related media files on deleting the page record

            foreach (['image1', 'image2', 'video1', 'video2'] as $field) {
                $filePath = public_path($page->$field);
                if (!empty($page->$field) && file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        });
    }

}
