<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = ['1.jpg', '2.jpg', '3.jpg'];

        $en_titles = ['Stay Healthy With', 'We Deliver Organic Fruits.', 'We care for your'];
        $en_descriptions = [
            "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. tellus lacus faucibus lectus, sed cursused eros ligula non odio.</p>",
            "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. tellus lacus faucibus lectus, sed cursused eros ligula non odio.</p>",
            "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. tellus lacus faucibus lectus, sed cursused eros ligula non odio.</p>",
        ];

        $ar_titles = ['حافظ على صحتك', 'نحن نقدم الفواكه العضوية', 'نحن نهتم بك'];
        $ar_descriptions = [
            "<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً</p>",
            "<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً</p>",
            "<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً</p>",
        ];

        for ($s = 0; $s < count($en_titles); $s++) {
            $blog = Blog::create([
                'en' => [
                    'title' => $en_titles[$s],
                    'description' => $en_descriptions[$s]
                ],
                'ar' => [
                    'title' => $ar_titles[$s],
                    'description' => $ar_descriptions[$s]
                ],
                'status' => 1
            ]);
            $blog->file()->create([
                'path' => 'seeders/blogs/' . $images[$s],
                'type' => 'image'
            ]);
        }
    }
}
