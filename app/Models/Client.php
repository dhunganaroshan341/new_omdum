<?php

namespace App\Models;

use App\Traits\HasUploadUrl;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends BaseModel
{
    use HasFactory;
    //  use HasUploadUrl;
    // // If your column is named 'image_path' (default), no need to set this
    // protected $uploadPathColumn = 'image';
    // protected $appends = ['image_url'];

    protected $fillable=['name','email','address','contact','image','description'];
    public function albums()
    {
        return $this->hasMany(GalleryAlbum::class);
    }
    public function getImageUrlAttribute()
{
    if ($this->image) {
        return asset('/uploads/' . ltrim($this->image, '/'));
    } else {
        return asset('template/yatri_world/main-file/images/clients/logo-01.png');
    }
}


}
