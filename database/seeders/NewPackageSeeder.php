<?php

namespace Database\Seeders;

use App\Models\TourPackage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewPackageSeeder extends Seeder
{
    public function run(): void
    {
        $parentPackages = [
            ['name' => 'Trekking Routes in Nepal', 'slug' => 'trekking-routes-in-nepal'],
            ['name' => 'Everest Region Trek', 'slug' => 'everest-region-trek'],
            ['name' => 'Mustang Region', 'slug' => 'mustang-region'],
            ['name' => 'Peak Climbing', 'slug' => 'peak-climbing'],
            ['name' => 'Family Friendly Holidays', 'slug' => 'family-friendly-holidays'],
            ['name' => 'Far Western Region Treks', 'slug' => 'far-western-region-treks'],
            ['name' => 'Annapurna Region Trek', 'slug' => 'annapurna-region-trek'],
            ['name' => 'Langtang Region Trek', 'slug' => 'langtang-region-trek'],
            ['name' => 'Off The Beaten Trails', 'slug' => 'off-the-beaten-trails'],
            ['name' => 'Manaslu Region', 'slug' => 'manaslu-region'],
        ];

        foreach ($parentPackages as $package) {
            TourPackage::updateOrCreate(
                ['slug' => $package['slug']],
                ['name' => $package['name']]
            );
        }
    }
}
