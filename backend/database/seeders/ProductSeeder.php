<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg'];

        $en_title = ['Product 1', 'Product 2', 'Product 3', 'Product 4', 'Product 5', 'Product 6', 'Product 7', 'Product 8'];
        $en_description = [
            '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'
        ];

        $ar_title = ['منتج 1', 'منتج 2', 'منتج 3', 'منتج 4', 'منتج 5', 'منتج 6', 'منتج 7', 'منتج 8'];
        $ar_description = [
            '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>',
            '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>',
            '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>',
            '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>',
            '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>',
            '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>',
            '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>',
            '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>'
        ];

        $origin_price = ['100', '200', '300', '400', '500', '600', '700', '800'];
        $price_after_discount = ['99', '199', '299', '399', '499', '599', '699', '799'];
        $quantity = ['10', '20', '30', '40', '50', '60', '70', '80'];

        for ($i = 0; $i < count($en_title); $i++) {
            $product = Product::create([
                'ar' => [
                    'title' => $ar_title[$i],
                    'description' => $ar_description[$i],
                    'category_id' => 1
                ],

                'en' => [
                    'title' => $en_title[$i],
                    'description' => $en_description[$i],
                    'category_id' => 1
                ],
                'status' => 1,
                'origin_price' => $origin_price[$i],
                'price_after_discount' => $price_after_discount[$i],
                'quantity' => $quantity[$i]
            ]);
            $product->file()->create([
                'path' => 'seeders/products/' . $images[$i],
                'type' => 'image'
            ]);
        }
    }
}
