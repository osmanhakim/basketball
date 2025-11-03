<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run()
    {
        $images = ['slider1.jpg','slider2.jpg'];
        $page_1 = [1,0];
        $page_2 = [0,1];
        $en_titles = ['Basket-Ball Lovers', 'About Basketball'];
        $en_sub_titles = ['Where Passion Meets the Court', 'More Than Just a Game'];
        $en_descriptions = [
            "Join a community of young basketball fans chasing their dreams.
We focus on skill, spirit, and sportsmanship.
Because the love for the game starts early!",
            "Basketball teaches focus, teamwork, and resilience.
It’s a sport that builds character on and off the court.
From drills to dreams, every moment counts.",
        ];

        $ar_titles = ['محبين كرة السلة', 'عن كرة السلة'];
        $ar_sub_titles = ['حيث الشغف يلتقي بالميدان', 'أكثر من مجرد لعبة'];
        $ar_descriptions = [
            "انضم إلى مجتمع من عشاق كرة السلة الصغار في طريقهم لتحقيق الأحلام.
نركز على المهارة، الروح الرياضية، والعمل الجماعي.
لأن حب اللعبة يبدأ من الصغر!",
            "كرة السلة تعلّم التركيز والعمل الجماعي والصبر.
هي رياضة تبني الشخصية داخل الملعب وخارجه.
من التمارين إلى الأحلام، كل لحظة لها قيمة.",
        ];

        for ($s = 0; $s < count($en_titles); $s++) {
            $slider = Slider::create([
                'en' => [
                    'title' => $en_titles[$s],
                    'sub_title' => $en_sub_titles[$s],
                    'description' => $en_descriptions[$s]
                ],
                'ar' => [
                    'title' => $ar_titles[$s],
                    'sub_title' => $ar_sub_titles[$s],
                    'description' => $ar_descriptions[$s]
                ],
                'status' => 1,
                'page_1' => $page_1[$s],
                'page_2' => $page_2[$s],
            ]);
            $slider->file()->create([
                'path' => 'seeders/sliders/' . $images[$s],
                'type' => 'image'
            ]);
        }
    }
}