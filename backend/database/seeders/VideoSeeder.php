<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $titles_en = ["Slam Dunk Highlights","Coaching Tips for Young Players","
        Dribbling Drills for kids" , 
        "Perfecting Your Free Throw " ,
        "Youth Basketball League Finals ",
        "Fast Break Techniques"

    ];

        $description_en = ["watch the best slam dunks from the recent tourmament",
    "Learn valuable coaching tips to improve your game.",
    "Enhance your dribbling skills with these fun drills ",
    "step-by-step guide to improve your free throw accuracy",
    "Catch all the action from the latest league finals.",
    "Master the art of fast breaks with these strategies."

    ];

        $titles_ar = [
            "أبرز لقطات السلم دانك",
            "نصائح تدريبية للاعبين الصغار",
            "تمارين المراوغة للأطفال",
            "إتقان الرمية الحرة",
            "نهائيات دوري كرة السلة للشباب",
            "تقنيات الهجمة السريعة"
        ];

        $description_ar = ["شاهد أفضل لقطات السلم دانك من البطولة الأخيرة",
    "تعلّم نصائح تدريبية قيّمة لتحسين مستواك في اللعب",
    "طوّر مهاراتك في المراوغة مع هذه التمارين الممتعة",
    "دليل خطوة بخطوة لتحسين دقة رميتك الحرة",
    'تابع كل الأحداث من نهائيات الدوري الأخيرة',
    "أتقن فن الهجمات السريعة مع هذه الاستراتيجيات",
    ];
        
        $photos = ['1.png','2.png','3.png','4.png','5.png','6.png'];
        
        $links = ['https://www.youtube.com/watch?v=YnrxuxyeAZg','https://www.youtube.com/watch?v=8tmEg-VxTYI','https://www.youtube.com/watch?v=MRrNi7uHmaY',
    'https://www.youtube.com/watch?v=buVrB8_h9tE',
    'https://www.youtube.com/watch?v=32dFSE_CHc0',
    'https://www.youtube.com/watch?v=WJB6I5B2hL8',
    ];
        for ($i = 0; $i < count($titles_en); $i++) {
         $video = Video::create(
            [
                'status' => true,
                'link' => $links[$i],
                'en' => [
                    'title' => $titles_en[$i],
                    'description' => $description_en[$i],
                ],
                'ar' => [
                    'title' => $titles_ar[$i],
                    'description' => $description_ar[$i],
                ]
            ]
                );
         
         $video->file()->create([
            'path' => 'seeders/basket/'.$photos[$i],
            'type' => 'image'
        ]);
         
        }
    }

 
}