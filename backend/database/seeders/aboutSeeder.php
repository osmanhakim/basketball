<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $files = ['standalone-0-img.jpg','standalone-1-img.jpg','standalone-2-img.jpg','standalone-3-img.jpg'];

        $title_en = ['Basket-Ball Passion','Little Dunk Heroes','Mini Ballers Club','Tiny Hoops Academy'];
        $subtitle_en = ['Information About Us','Fun Basketball for Kids!','Kids Love Basketball!','Where Kids Shoot for the Stars!'];
        $desc_en = ["Welcome to Basket-Ball Passion, your ultimate hub for everything basketball! We are dedicated to sharing the latest news, tips, and insights about the game we love. Whether you're a player, coach, or fan, our goal is to inspire and educate. Join us in celebrating the spirit of basketball and connecting with fellow enthusiasts worldwide.",
    "Welcome to Little Dunk Heroes—where kids learn basketball with joy! We teach basic skills, teamwork, and sportsmanship in a fun, safe environment. Our games and drills make every child feel like a superstar. Let’s dribble, shoot, and score with big smiles!",
    "Join the Mini Ballers Club—the coolest basketball adventure for kids! Through playful drills and mini-games, we help young players build confidence and make new friends. Basketball is about fun, learning, and growing together. Let’s bounce into action!",
    "At Tiny Hoops Academy, every child discovers the magic of basketball! Our friendly coaches focus on fun fundamentals, coordination, and fair play. Whether shooting hoops or passing the ball, kids learn while laughing. Let’s play and dream big!"
    ];

    $title_ar = ['شغف كرة السلة', 'أبطال الدنك الصغار','نادي الكُرات الصغيرة','أكاديمية السلال الصغيرة'];
    $subtitle_ar = ['معلومات عنا','كرة سلة ممتعة للأطفال','الأطفال يحبون كرة السلة','حيث يصوب الأطفال نحو النجوم'];
    $desc_ar = ['مرحبًا بكم في شغف كرة السلة، مركزكم الشامل لكل ما يتعلق بهذه اللعبة! نحن نشارك أحدث الأخبار والنصائح والتحليلات حول اللعبة التي نحب. سواء كنت لاعبًا أو مدربًا أو مشجعًا، هدفنا هو الإلهام والتعليم. انضم إلينا في الاحتفال بروح كرة السلة!',
'مرحبًا بكم في أبطال الدنك الصغار—حيث يتعلم الأطفال كرة السلة بفرح! نعلمهم المهارات الأساسية، والعمل الجماعي، والروح الرياضية في بيئة ممتعة وآمنة. ألعابنا وتماريننا تجعل كل طفل يشعر بأنه نجم. دعونا نمرر، نسدد، ونحرز الأهداف بابتسامات كبيرة!',
'انضم إلى نادي الكُرات الصغيرة—مغامرة كرة السلة الأروع للأطفال! من خلال التمارين الممتعة والألعاب المصغرة، نساعد الصغار على بناء الثقة وتكوين صداقات جديدة. كرة السلة تعني المرح، التعلم، والنمو معًا. هيا نبدأ اللعب!',
'في أكاديمية السلال الصغيرة، يكتشف كل طفل سحر كرة السلة! مدربوننا الودودون يركزون على الأساسيات الممتعة، التنسيق، واللعب النظيف. سواء في التسديد أو التمرير، الأطفال يتعلمون وهم يضحكون. هيا نلعب ونحلم كبيرًا!',
];

     for ($i = 0;$i<count($files);$i++) {

        $aboutUs = About::create([
            'en' => [
                'title' => $title_en[$i],
                'sub_title' => $subtitle_en[$i],
                'description' => $desc_en[$i]
            ],
            'ar' => [
                'title' => $title_ar[$i],
                'sub_title' => $subtitle_ar[$i],
                'description' => $desc_ar[$i]
            ],
            'status' => 1
        ]);

        $aboutUs->file()->create([
            'path' => 'seeders/about/'.$files[$i],
            'type' => 'image'
        ]);
     }
    }
}