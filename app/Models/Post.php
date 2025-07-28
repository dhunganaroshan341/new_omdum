<?php

namespace App\Models;

use App\Traits\HasUploadUrl;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    use HasFactory;

       // If your column is named 'image_path' (default), no need to set this

    protected $fillable=['title','category_id','description','created_by','updated_by','status','views'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }



    public function postImages(){
        return $this->hasMany(PostImage::class,'post_id','id');
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }


    public function createdBy(){
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by','id');
    }
    public function getFirstImageUrlAttribute()
{
    return $this->postImages->first()?->image ?? asset('template/yatri_world/main-file/images/tibet.jpg');
}
}
