<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Nikolas',
        //     'email' => 'nikoniloas@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'ramadhan',
        //     'email' => 'ramadhan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::factory(20)->create();
    //     Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' =>'judul-pertama',
    //         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, ducimus molestias reprehenderit non, porro magni consectetur laboriosam amet, velit voluptatum quos alias totam. Enim neque est consectetur, eligendi modi incidunt quae accusamus veniam eos veritatis sequi itaque libero reprehenderit fugiat totam qui nesciunt voluptates nihil obcaecati molestias iure ea vitae repellendus autem. Debitis quae, odit incidunt temporibus dicta accusantium! Placeat perspiciatis fuga eveniet iusto quaerat impedit odio quos aspernatur nemo aut voluptas culpa facilis accusamus animi quia explicabo quo, dignissimos velit aperiam error aliquid ab? Quaerat optio architecto beatae amet ducimus placeat fugit? Saepe nam fugit qui officiis iusto molestias.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Kedua',
    //         'slug' =>'judul-kedua',
    //         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, ducimus molestias reprehenderit non, porro magni consectetur laboriosam amet, velit voluptatum quos alias totam. Enim neque est consectetur, eligendi modi incidunt quae accusamus veniam eos veritatis sequi itaque libero reprehenderit fugiat totam qui nesciunt voluptates nihil obcaecati molestias iure ea vitae repellendus autem. Debitis quae, odit incidunt temporibus dicta accusantium! Placeat perspiciatis fuga eveniet iusto quaerat impedit odio quos aspernatur nemo aut voluptas culpa facilis accusamus animi quia explicabo quo, dignissimos velit aperiam error aliquid ab? Quaerat optio architecto beatae amet ducimus placeat fugit? Saepe nam fugit qui officiis iusto molestias.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Ke Tiga',
    //         'slug' =>'judul-ketiga',
    //         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, ducimus molestias reprehenderit non, porro magni consectetur laboriosam amet, velit voluptatum quos alias totam. Enim neque est consectetur, eligendi modi incidunt quae accusamus veniam eos veritatis sequi itaque libero reprehenderit fugiat totam qui nesciunt voluptates nihil obcaecati molestias iure ea vitae repellendus autem. Debitis quae, odit incidunt temporibus dicta accusantium! Placeat perspiciatis fuga eveniet iusto quaerat impedit odio quos aspernatur nemo aut voluptas culpa facilis accusamus animi quia explicabo quo, dignissimos velit aperiam error aliquid ab? Quaerat optio architecto beatae amet ducimus placeat fugit? Saepe nam fugit qui officiis iusto molestias.',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Ke Empat',
    //         'slug' =>'judul-keempat',
    //         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, ducimus molestias reprehenderit non, porro magni consectetur laboriosam amet, velit voluptatum quos alias totam. Enim neque est consectetur, eligendi modi incidunt quae accusamus veniam eos veritatis sequi itaque libero reprehenderit fugiat totam qui nesciunt voluptates nihil obcaecati molestias iure ea vitae repellendus autem. Debitis quae, odit incidunt temporibus dicta accusantium! Placeat perspiciatis fuga eveniet iusto quaerat impedit odio quos aspernatur nemo aut voluptas culpa facilis accusamus animi quia explicabo quo, dignissimos velit aperiam error aliquid ab? Quaerat optio architecto beatae amet ducimus placeat fugit? Saepe nam fugit qui officiis iusto molestias.',
    //         'category_id' => 2,
    //         'user_id' => 2
    //     ]);
    }
}
