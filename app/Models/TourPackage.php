<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TourPackage extends BaseModel
{
    use HasFactory;
    protected $casts = [
    'images' => 'array',
];

     protected $fillable = [
        'our_country_id',
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
        'top_deal',
        'favourite_destination',
        'start_point',
        'end_point',
        'status',
        'max_people',
        'available_seat',
        'is_featured',
    ];
    public function country() {
    return $this->belongsTo(OurCountry::class);
}

public function itineraries() {
    return $this->hasMany(Itinerary::class);
}public function priceIncludes() {
    return $this->hasMany(PriceInclude::class);
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
}public function batches() {
    return $this->hasMany(TourBatch::class);
}public function bookings() {
    return $this->hasMany(PackageBooking::class);
}
public function packageType(){
    return $this->belongsTo(PackageType::class, 'package_type_id');
}
public function getDurationAttribute($value)
{
    $number = (int) $value; // cast string to integer
    return $number . ' ' . Str::plural('day', $number);
}
// public function getFirstImageAttribute(){
// }    TourPackage->


}
