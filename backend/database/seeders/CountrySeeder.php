<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name_ar = [
            'مصر',
            'السعودية',
            'عمان',
        ];

        $name_en = [
            'Egypt',
            'Saudi Arabia',
            'Oman',
        ];

        for ($i = 0; $i < count($name_ar); $i++) {
            Country::create([
                'ar' => [
                    'name' => $name_ar[$i],
                ],

                'en' => [
                    'name' => $name_en[$i],
                ],
            ]);
        }
    }
}
