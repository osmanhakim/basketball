<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = ['1.jpg', '2.jpg', '3.jpg'];

        $en_title = ['Category 1', 'Category 2', 'Category 3'];

        $ar_title = ['فئة 1', 'فئة 2', 'فئة 3'];

        for ($i = 0; $i < count($en_title); $i++) {
            $category = Category::create([
                'ar' => [
                    'title' => $ar_title[$i],
                ],

                'en' => [
                    'title' => $en_title[$i],
                ],
                'status' => 1,
                'icon' => 'fab fa-amazon-pay'
            ]);
            $category->file()->create([
                'path' => 'seeders/categories/' . $images[$i],
                'type' => 'image'
            ]);
        }
    }
}
