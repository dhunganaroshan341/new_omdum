<?php
namespace App\Models;
use App\Models\BaseModel;
use App\Models\Category;
use App\Models\Comment;
use App\Models\PostImage;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends BaseModel
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'created_by', 'updated_by', 'status', 'views'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function postImages()
    {
        return $this->hasMany(PostImage::class, 'post_id', 'id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }

    public function getFirstImageUrlAttribute()
    {
        return $this->postImages->first()?->image ?? asset('template/yatri_world/main-file/images/india.jpg');
    }
}
