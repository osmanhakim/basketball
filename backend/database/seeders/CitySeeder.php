<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ar_egypt_cities = ['القاهرة', 'الجيزه', 'المنصورة'];
        $en_egypt_cities = ['Cairo', 'Giza', 'Mansoura'];
        for ($c = 0; $c < count($ar_egypt_cities); $c++) {
            City::create([
                'ar' => [
                    'name' => $ar_egypt_cities[$c],
                ],
                'en' => [
                    'name' => $en_egypt_cities[$c],
                ],
                'country_id' => 1
            ]);
        }
        // City::create([
        //     'ar' => [
        //         'name' => "القاهرة",
        //     ],
        //     'en' => [
        //         'name' => "Cairo",
        //     ],
        //     'country_id' => 1
        // ]);
        // City::create([
        //     'ar' => [
        //         'name' => "الجيزه",
        //     ],
        //     'en' => [
        //         'name' => "Giza",
        //     ],
        //     'country_id' => 1
        // ]);
        // City::create([
        //     'ar' => [
        //         'name' => "المنصوره",
        //     ],
        //     'en' => [
        //         'name' => "Mansoura",
        //     ],
        //     'country_id' => 1
        // ]);

        City::create([
            'ar' => [
                'name' => "مكه",
            ],
            'en' => [
                'name' => "Makka",
            ],
            'country_id' => 2
        ]);
        City::create([
            'ar' => [
                'name' => "المدينه",
            ],
            'en' => [
                'name' => "El-Madeena",
            ],
            'country_id' => 2
        ]);
        City::create([
            'ar' => [
                'name' => "الرياض",
            ],
            'en' => [
                'name' => "Al-Ryad",
            ],
            'country_id' => 2
        ]);

        City::create([
            'ar' => [
                'name' => "مسقط",
            ],
            'en' => [
                'name' => "Maskat",
            ],
            'country_id' => 3
        ]);
        City::create([
            'ar' => [
                'name' => "ظفار",
            ],
            'en' => [
                'name' => "Zaffar",
            ],
            'country_id' => 3
        ]);
        City::create([
            'ar' => [
                'name' => "صحار",
            ],
            'en' => [
                'name' => "Sahar",
            ],
            'country_id' => 3
        ]);
    }
}
