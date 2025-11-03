<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run()
    {
        //AboutOur Farm
        Page::create([
            "identifier" => "about_our_farm",
            "has_title" => 1,
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 0,
            "en" => [
                "title" => "About Our Farm",                                                                                        
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            ],
            "ar" => [
                "title" => "حول مزرعتنا",
                "description" => "هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.",
            ],
        ]);

        //Header Standalone
        Page::create([
            "identifier" => "header_standalone",
            "has_title" => 1,
            "has_sub_title" => 1,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 0,
            "en" => [
                "title" => "Most flexible one page",
                "sub_title" => "Section Title",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            ],
            "ar" => [
                "title" => "الأكثر مرونة في صفحة واحدة",
                "sub_title" => "عنوان القسم",
                "description" => "هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.",
            ],
        ]);

        //First Standalone
        $first_standalone = Page::create([
            "identifier" => "first_standalone",
            "has_title" => 1,
            "has_sub_title" => 1,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "en" => [
                "title" => "Most flexible one page",
                "sub_title" => "Standalone Heading",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            ],
            "ar" => [
                "title" => "الأكثر مرونة في صفحة واحدة",
                "sub_title" => "عنوان مستقل",
                "description" => "هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.",
            ],
        ]);
        $first_standalone->file()->create([
            "path" => "seeders/pages/first_standalone.jpeg",
            "type" => "image",
        ]);

        //Second Standalone
        $second_standalone = Page::create([
            "identifier" => "second_standalone",
            "has_title" => 1,
            "has_sub_title" => 1,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "en" => [
                "title" => "Most flexible one page",
                "sub_title" => "Standalone Heading",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            ],
            "ar" => [
                "title" => "الأكثر مرونة في صفحة واحدة",
                "sub_title" => "عنوان مستقل",
                "description" => "هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.",
            ],
        ]);
        $second_standalone->file()->create([
            "path" => "seeders/pages/second_standalone.jpg",
            "type" => "image",
        ]);

        //Third Standalone
        $third_standalone = Page::create([
            "identifier" => "third_standalone",
            "has_title" => 1,
            "has_sub_title" => 1,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "en" => [
                "title" => "Most flexible one page",
                "sub_title" => "Standalone Heading",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            ],
            "ar" => [
                "title" => "الأكثر مرونة في صفحة واحدة",
                "sub_title" => "عنوان مستقل",
                "description" => "هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.",
            ],
        ]);
        $third_standalone->file()->create([
            "path" => "seeders/pages/third_standalone.jpg",
            "type" => "image",
        ]);
    }
}