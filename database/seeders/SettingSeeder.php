<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting=new Setting();
        $setting->title="Realm Infotech";
        $setting->description=fake()->paragraph();
        $setting->work_description=fake()->paragraph();
        $setting->email="realminfo@gmail.com";
        $setting->address="Patan Dhoka";
        $setting->contact="12345678";
        $setting->facebook_url="https://www.facebook.com/";
        $setting->twitter_url="https://en.wikipedia.org/wiki/Twitter";
        $setting->github_url="https://github.com";
        $setting->instagram_url="https://instagram.com";
        $setting->save();
    }
}
