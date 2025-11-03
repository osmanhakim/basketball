<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $en_title = ['FREE SHIPPING', 'SUPPORT', 'FREE REFUND', 'CONTACT US'];
        $en_sub_title = ['ON $100 ABOVE ORDER', 'ON $200 ABOVE ORDER', 'ON $300 ABOVE ORDER', 'ON $400 ABOVE ORDER'];

        $ar_title = ['ًالشحن مجانا', 'يدعم', 'استرداد مجاني', 'اتصل بنا'];
        $ar_sub_title = ['على 100 دولار فوق الطلب', 'على 200 دولار فوق الطلب', 'على 300 دولار فوق الطلب', 'على 400 دولار فوق الطلب'];

        $icon = ['las la-paper-plane', 'las la-headset', 'las la-globe-europe', 'las la-phone'];

        for ($i = 0; $i < count($en_title); $i++) {
            Service::create([
                'en' => [
                    'title' => $en_title[$i],
                    'sub_title' => $en_sub_title[$i],
                ],
                'ar' => [
                    'title' => $ar_title[$i],
                    'sub_title' => $ar_sub_title[$i],
                ],
                'status' => 1,
                'icon' => $icon[$i],
            ]);
        }
    }
}
