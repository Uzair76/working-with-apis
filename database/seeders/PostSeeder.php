<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts=collect([

            [
                'title'=>'uzair',
                'description'=>'After you have installed PHP, Composer, and the Laravel installer, youre ready to create a new Laravel application',
                'user_id'=>'1',
                'image'=>''
            ],
            [
               'title'=>'uzair',
                'description'=>'uzair@gmail.com',
                'user_id'=>'3',
                'image'=>''
            ],
            [
                'title'=>'uzair',
                'description'=>'After you have installed PHP, Composer, and the Laravel installer, youre ready to create a new Laravel application',
                'user_id'=>'1',
                'image'=>''
            ],
            [
                'title'=>'uzair',
                'description'=>'After you have installed PHP, Composer, and the Laravel installer, youre ready to create a new Laravel application',
                'user_id'=>'2',
                'image'=>''
            ],
            [
               'title'=>'uzair',
                'description'=>'After you have installed PHP, Composer, and the Laravel installer, youre ready to create a new Laravel application',
                'user_id'=>'3',
                'image'=>''
            ],
            [
               'title'=>'uzair',
                'description'=>'After you have installed PHP, Composer, and the Laravel installer, youre ready to create a new Laravel application',
                'user_id'=>'3',
                'image'=>''
            ],
        ]);

        $posts->each(function($posts){

            Post::insert($posts);
        });

    }
}
