<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait HandlesPageMediaUploads
{
    /**
     * Handle single media uploads.
     * Deletes old files if exists before storing new ones.
     *
     * @param Request $request
     * @param array $fields
     * @param array $existingData Current existing data (to delete old files)
     * @param string $folder
     * @return array
     */
    public function handleSingleMediaUploads(Request $request, array $fields, array $existingData = [], $folder = 'uploads/pages')
    {
        $mediaData = [];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                // Delete old file if exists
                if (!empty($existingData[$field]) && Storage::disk('public')->exists($existingData[$field])) {
                    Storage::disk('public')->delete($existingData[$field]);
                }
                // Store new file
                $mediaData[$field] = $request->file($field)->store($folder, 'public');
            }
        }

        return $mediaData;
    }

    /**
     * Handle gallery uploads (multiple images).
     *
     * @param Request $request
     * @param string $field
     * @param string $folder
     * @return array
     */
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
