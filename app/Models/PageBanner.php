<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageBanner extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'page',
        'section',
        'image',
        'status',
    ];
    protected $table = 'page_banners';
    protected $primaryKey = 'id';
}
