<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $names_en = ['Basket-ball Race','kids Basket-ball','Others'];
        $names_ar = ["سباق كرة السلة", "اطفال كرة السلة" ,  'اخرين']; 
        $files= ['kid1.jpg','kid2.jpg','kid3.jpg','kid4.jpg','portfolio-1.jpg','portfolio-2.jpg','portfolio-3.jpg','portfolio-4.jpg','kid5.jpg','kid6.jpg'];

        $project1 =  Project::create([
            'en' => [
                'name' => $names_en[0]
            ],
            'ar' => [
                'name' => $names_ar[0]
            ]
        ]);

        $photo1 = Photo::create([
            'project_id' => 1,
            'status' => 1,
            'en' => [
             'title' =>  'amazing',
             'subtitle' => 'basket ball'
            ],
            'ar' => [
              'title' => 'رائع',
              'subtitle' => 'كرة السلة',
            ]
        ]);
        $photo1->file()->create([
            'path' => '/seeders/gallery/'.$files[4],
            'type' => 'image'
        ]);

        $photo2 = Photo::create([
            'project_id' => 1,
            'status' => 1,
            'en' => [
             'title' =>  'goal',
             'subtitle' => 'basket ball'
            ],
            'ar' => [
              'title' => 'رائع',
              'subtitle' => 'كرة السلة',
            ]
        ]);
        $photo2->file()->create([
            'path' => '/seeders/gallery/'.$files[5],
            'type' => 'image'
        ]);

        $photo3 = Photo::create([
            'project_id' => 1,
            'status' => 1,
            'en' => [
             'title' =>  'omg',
             'subtitle' => 'wonderful'
            ],
            'ar' => [
              'title' => 'ياالله',
              'subtitle' => 'كرة السلة',
            ]
        ]);
        $photo3->file()->create([
            'path' => '/seeders/gallery/'.$files[6],
            'type' => 'image'
        ]);

        $photo4 = Photo::create([
            'project_id' => 1,
            'status' => 1,
            'en' => [
             'title' =>  'wow',
             'subtitle' => 'great'
            ],
            'ar' => [
              'title' => 'واو',
              'subtitle' => 'رائع',
            ]
        ]);
        $photo4->file()->create([
            'path' => '/seeders/gallery/'.$files[7],
            'type' => 'image'
        ]);

         
        $project1->photos()->save($photo1);
        $project1->photos()->save($photo2);
        $project1->photos()->save($photo3);
        $project1->photos()->save($photo4);

///////////////////////////////////////////////////
        $project2 =  Project::create([
            'en' => [
                'name' => $names_en[1]
            ],
            'ar' => [
                'name' => $names_ar[1]
            ]
        ]);


        $photo5 = Photo::create([
            'project_id' => 2,
            'status' => 1,
            'en' => [
             'title' =>  'wow',
             'subtitle' => 'great'
            ],
            'ar' => [
              'title' => 'واو',
              'subtitle' => 'رائع',
            ]
        ]);
        $photo5->file()->create([
            'path' => '/seeders/gallery/'.$files[0],
            'type' => 'image'
        ]);

        $photo6 = Photo::create([
            'project_id' => 2,
            'status' => 1,
            'en' => [
             'title' =>  ' no comment',
             'subtitle' => 'great'
            ],
            'ar' => [
              'title' => 'لا تعليق',
              'subtitle' => 'رائع',
            ]
        ]);
        $photo6->file()->create([
            'path' => '/seeders/gallery/'.$files[1],
            'type' => 'image'
        ]);

        $photo7 = Photo::create([
            'project_id' => 2,
            'status' => 1,
            'en' => [
             'title' =>  ' no comment',
             'subtitle' => 'great'
            ],
            'ar' => [
              'title' => 'لا تعليق',
              'subtitle' => 'رائع',
            ]
        ]);
        $photo7->file()->create([
            'path' => '/seeders/gallery/'.$files[2],
            'type' => 'image'
        ]);

       
            
        $project2->photos()->save($photo5);
        $project2->photos()->save($photo6);
        $project2->photos()->save($photo7);
        $project2->photos()->save($photo4);

        $project3 =  Project::create([
            'en' => [
                'name' => $names_en[2]
            ],
            'ar' => [
                'name' => $names_ar[2]
            ]
        ]);
        
        $photo8 = Photo::create([
            'project_id' => 3,
            'status' => 1,
            'en' => [
             'title' =>  'wow',
             'subtitle' => 'great'
            ],
            'ar' => [
              'title' => 'واو',
              'subtitle' => 'رائع',
            ]
        ]);
        $photo8->file()->create([
            'path' => '/seeders/gallery/'.$files[3],
            'type' => 'image'
        ]);

        $photo9 = Photo::create([
            'project_id' => 3,
            'status' => 1,
            'en' => [
             'title' =>  ' no comment',
             'subtitle' => 'great'
            ],
            'ar' => [
              'title' => 'لا تعليق',
              'subtitle' => 'رائع',
            ]
        ]);
        $photo9->file()->create([
            'path' => '/seeders/gallery/'.$files[8],
            'type' => 'image'
        ]);

        $photo10 = Photo::create([
            'project_id' => 3,
            'status' => 1,
            'en' => [
             'title' =>  ' no comment',
             'subtitle' => 'great'
            ],
            'ar' => [
              'title' => 'لا تعليق',
              'subtitle' => 'رائع',
            ]
        ]);
        $photo10->file()->create([
            'path' => '/seeders/gallery/'.$files[9],
            'type' => 'image'
        ]);

        $project3->photos()->save($photo8);
        $project3->photos()->save($photo9);
        $project3->photos()->save($photo10);
    }
}