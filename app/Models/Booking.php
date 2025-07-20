<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_package_id',
        'name',
        'email',
        'phone',
        'booking_date',
        'number_of_people',
        'message',
        'status',
    ];
}
