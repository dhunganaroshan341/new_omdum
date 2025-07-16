<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends BaseModel
{
    use HasFactory;
    protected $casts = [
    'images' => 'array',
];

     protected $fillable = [
        'country_id',
        'service_id',
        'type',
        'images',
        'title',
        'drop',
        'pickup',
        'price',
        'price_includes',
        'price_excludes ',
        'slug',
        'short_description',
        'long_description',
        'itinerary',
        'duration',
        'languages',
        'difficulty',
        'max_elevation',
        'best_season',
        'start_point',
        'end_point',
        'status',
        'max_group_size',
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
public function services() {
    return $this->hasMany(TourPackageService::class);
}
public function packageType(){
    return $this->belongsTo(PackageType::class, 'package_type_id');
}

}
