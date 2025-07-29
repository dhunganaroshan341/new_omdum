<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallToAction extends BaseModel
{
    use HasFactory;
    protected $table = 'call_to_actions';
    protected $primaryKey = "id";
    protected $fillable = ['title','page','sub_heading','description', 'image','link','iframe'];


}
