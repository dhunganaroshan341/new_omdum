<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait HandlesPageMediaUploads
{
    public function handleSingleMediaUploads(Request $request, array $fields, $folder = 'uploads/pages')
    {
        $mediaData = [];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $mediaData[$field] = $request->file($field)->store($folder, 'public');
            }
        }

        return $mediaData;
    }

    public function handleGalleryUploads(Request $request, $field = 'gallery_images', $folder = 'uploads/pages/gallery')
    {
        $paths = [];

        if ($request->hasFile($field)) {
            foreach ($request->file($field) as $image) {
                $paths[] = $image->store($folder, 'public');
            }
        }

        return $paths;
    }
}
