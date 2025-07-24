<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    protected $fillable = [
        'user_id',
        'tour_package_id',
        'tour_batch_id',
        'custom_date',
        'booking_type',
        'email',
        'phone',
        'message',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class);
    }

    public function tourBatch()
    {
        return $this->belongsTo(TourBatch::class);
    }
}

