<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pages = [
            'home','gallery','blog','contact','about','services','packages','why_us','mission_vision','mission','vision'

        ];
        foreach($pages as $page){
            Page::updateOrCreate(['title'=>$page,'slug'=>$page]);
        }
    }
}
