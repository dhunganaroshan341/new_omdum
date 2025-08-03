<?php

namespace App\Models;

use App\Traits\HasUploadUrl;
use Illuminate\Database\Eloquent\Model;

class TourPackageImage extends BaseModel
{
    use HasUploadUrl;
    // If your column is named 'image_path' (default), no need to set this
    protected $uploadPathColumn = 'image_path';
      protected $appends = ['image_url'];
    protected $fillable = [
        'tour_package_id',
        'image_path',
        'caption',
        'is_featured',
    ];

   public function tourPackage()
{
    return $this->belongsTo(TourPackage::class, 'tour_package_id', 'id');
}

}
