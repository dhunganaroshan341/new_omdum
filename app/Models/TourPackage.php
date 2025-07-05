<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    use HasFactory;
     protected $fillable = [
        'country_id',
        'title',
        'slug',
        'short_description',
        'long_description',
        'itinerary',
        'duration',
        'difficulty',
        'max_elevation',
        'best_season',
        'start_point',
        'end_point',
        'status',
    ];
    public function country() {
    return $this->belongsTo(Country::class);
}

public function itineraries() {
    return $this->hasMany(Itinerary::class);
}

public function images() {
    return $this->hasMany(TourPackageImage::class);
}

public function videos() {
    return $this->hasMany(TourPackageVideo::class);
}

public function faqs() {
    return $this->hasMany(TourFaq::class);
}

public function testimonials() {
    return $this->hasMany(Testimonial::class);
}

}
