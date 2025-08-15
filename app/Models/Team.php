<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- add this
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory; // <-- add this

    protected $fillable = [
        'name',
        'position',
        'photo',
        'facebook',
        'twitter',
        'linkedin',
    ];
}


