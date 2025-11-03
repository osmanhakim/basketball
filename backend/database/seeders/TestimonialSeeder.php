<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
       $files = ['face-1.jpg','face-2.jpg','face-3.jpg','face-4.jpg','face-5.jpg'];

       $names_en = ['sara','perlo','mariem','khaled','nancy'];

       $names_ar = ['سارة','بيرلو','مريم','خالد','نانسي'];

       $desc_en = ["Seeing my players' shooting form improve week after week is why I coach!",
     "Nothing beats the moment when the team executes a perfect play we practiced!",
     "Watching shy beginners become confident team players? That’s the magic.",
     "I live for the ‘aha!’ moments when a drill finally clicks for a player.",
      "Building skills is great, but shaping respectful young athletes is everything."
    ];

    $desc_ar = ["رؤية تحسن أداء اللاعبين في التصويب أسبوعًا بعد أسبوع هو سبب تدريبي",
    "لا شيء يُضاهي لحظة تنفيذ الفريق لخطة تدربنا عليها بإتقان",
    "رؤية المبتدئين الخجولين يتحولون إلى لاعبين واثقين؟ هذه هي المعجزة.",
    'أعيش لأجل لحظات الـ "فهمت!" عندما يستوعب اللاعب التمرين أخيرًا',
    "تنمية المهارات رائع، لكن تشكيل رياضيين صغار محترمين هو الأهم"
];

     for ($i=0;$i<count($files);$i++){
        $test = Testimonial::create([
            'status' => true,
            'en' => [
                'name' => $names_en[$i],
                'description' => $desc_en[$i]
            ],
            'ar' => [
                'name' => $names_ar[$i],
                'description' => $desc_ar[$i]
            ]
        ]);

        $test->file()->create([
            'path' => 'seeders/testimonials/'.$files[$i],
            'type' => 'image'
        ]);
     }
    }
}