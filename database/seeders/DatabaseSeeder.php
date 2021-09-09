<?php

namespace Database\Seeders;

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


        // User::create([
        //     'name' => 'Masrianto',
        //     'email' => 'masrianto@lakip.co.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Muh Zainal',
        //     'email' => 'Zainalmuh@lakip.co.id',
        //     'password' => bcrypt('54321')
        // ]);

        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@lakip.co.id',
        //     'password' => bcrypt('98765')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas. Excepturi atque fugiat sit sint beatae perferendis error ratione voluptatibus assumenda amet nam magnam consequatur molestias nostrum deleniti, nemo dolores sapiente provident!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odio omnis molestias corrupti nesciunt qui suscipit a totam architecto quo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et culpa officia voluptas ad necessitatibus consectetur recusandae eveniet quos numquam, deleniti accusamus error voluptatem. Harum voluptatum ducimus impedit debitis, ut vitae aliquam ullam excepturi, nisi nemo placeat doloribus tempore! Consequuntur!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas. Excepturi atque fugiat sit sint beatae perferendis error ratione voluptatibus assumenda amet nam magnam consequatur molestias nostrum deleniti, nemo dolores sapiente provident!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odio omnis molestias corrupti nesciunt qui suscipit a totam architecto quo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et culpa officia voluptas ad necessitatibus consectetur recusandae eveniet quos numquam, deleniti accusamus error voluptatem. Harum voluptatum ducimus impedit debitis, ut vitae aliquam ullam excepturi, nisi nemo placeat doloribus tempore! Consequuntur!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas. Excepturi atque fugiat sit sint beatae perferendis error ratione voluptatibus assumenda amet nam magnam consequatur molestias nostrum deleniti, nemo dolores sapiente provident!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odio omnis molestias corrupti nesciunt qui suscipit a totam architecto quo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et culpa officia voluptas ad necessitatibus consectetur recusandae eveniet quos numquam, deleniti accusamus error voluptatem. Harum voluptatum ducimus impedit debitis, ut vitae aliquam ullam excepturi, nisi nemo placeat doloribus tempore! Consequuntur!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas. Excepturi atque fugiat sit sint beatae perferendis error ratione voluptatibus assumenda amet nam magnam consequatur molestias nostrum deleniti, nemo dolores sapiente provident!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odio omnis molestias corrupti nesciunt qui suscipit a totam architecto quo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et culpa officia voluptas ad necessitatibus consectetur recusandae eveniet quos numquam, deleniti accusamus error voluptatem. Harum voluptatum ducimus impedit debitis, ut vitae aliquam ullam excepturi, nisi nemo placeat doloribus tempore! Consequuntur!</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'judul-ke-lima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque placeat corrupti harum quis repudiandae modi dolores, deserunt ratione sed id, sit dolor voluptatibus distinctio nihil necessitatibus deleniti voluptas. Excepturi atque fugiat sit sint beatae perferendis error ratione voluptatibus assumenda amet nam magnam consequatur molestias nostrum deleniti, nemo dolores sapiente provident!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odio omnis molestias corrupti nesciunt qui suscipit a totam architecto quo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et culpa officia voluptas ad necessitatibus consectetur recusandae eveniet quos numquam, deleniti accusamus error voluptatem. Harum voluptatum ducimus impedit debitis, ut vitae aliquam ullam excepturi, nisi nemo placeat doloribus tempore! Consequuntur!</p>',
        //     'category_id' => 1,
        //     'user_id' => 3
        // ]);

    }
}
