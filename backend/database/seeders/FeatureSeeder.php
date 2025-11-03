<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{

    public function run()
    {
        //features
        $en_title = ['Stay Healthy', 'Build Muscle', 'Strengthen Immune System','Cuts Heart Diseases'];
        $en_description = [
            'Basketball keeps you active, improves stamina, and enhances overall fitness',
            'Regular playing strengthens legs, arms, and core muscles',
            'Physical activity boosts immunity and fights illnesses',
            'Basketball improves cardiovascular health and reduces heart risks'
        ];

        $ar_title = ['حافظ على صحتك', 'بناء العضلات', 'تقوية الجهاز المناعي','تقليل أمراض القلب'];
        $ar_description = [
            'تساعد كرة السلة في الحفاظ على النشاط، تحسين التحمل، وتعزيز اللياقة العامة',
            'الممارسة المنتظمة تقوي عضلات الساقين، الذراعين، ومنطقة الوسط',
            'النشاط البدني يعزز المناعة ويحارب الأمراض',
            'تحسن كرة السلة صحة القلب وتقلل من مخاطر الأمراض القلبية'
        ];

        $icon = [
            'las la-thumbs-up',
            'las la-trophy',
            'las la-user-tie',
            'lni lni-heart'
        ];

        for ($i = 0; $i < count($en_title); $i++) {
            Feature::create([
                'en' => [
                    'title' => $en_title[$i],
                    'description' => $en_description[$i],
                ],
                'ar' => [
                    'title' => $ar_title[$i],
                    'description' => $ar_description[$i],
                ],
                'status' => 1,
                'icon' => $icon[$i],

            ]);
        }
    }
}