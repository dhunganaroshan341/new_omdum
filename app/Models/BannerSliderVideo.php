<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerSliderVideo extends Model
{
    protected $fillable = [
        'type',  // embed/upload
        'url',   // video URL or uploaded file path
    ];
}
