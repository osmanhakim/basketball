<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingContactSeeder extends Seeder
{
    public function run()
    {
        $setting = Setting::first();
        //contact 1
        $setting->contact()->create([
            "status" => "1",
            "contact" => "+966558555555",
            "type" => "mobile",
            "icon" => "fas fa-mobile-alt",
        ]);

        // $setting->contact()->create([
        //     "status" => "1",
        //     "contact" => "+966558555555",
        //     "type" => "phone",
        //     "icon" => "fas fa-mobile-alt",
        // ]);

        //whatsapp
        $setting->contact()->create([
            "status" => "1",
            "contact" => "+966558555555",
            "type" => "whatsapp",
            "icon" => "fab fa-whatsapp",
        ]);

        //contact 3
        $setting->contact()->create([
            "status" => "1",
            "contact" => "contact@advacon.com",
            "type" => "email",
            "icon" => "far fa-envelope",
        ]);

        //contact 4
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.facebook.com/",
            "type" => "social",
            "icon" => "lab la-facebook-f",
        ]);

        //contact 5
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://twitter.com/",
            "type" => "social",
            "icon" => "lab la-twitter",
        ]);

        //contact 6
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://google.com/",
            "type" => "social",
            "icon" => "lab la-google",
        ]);

        //contact 7
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.linkedin.com/",
            "type" => "social",
            "icon" => "lab la-linkedin-in",
        ]);

        //contact 8
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.instagram.com/",
            "type" => "social",
            "icon" => "lab la-instagram",
        ]);

        //contact 9
        $setting->contact()->create([
            "status" => "1",
            "contact" => "mailto:mail@website.com",
            "type" => "social",
            "icon" => "las la-envelope",
        ]);
    }
}
