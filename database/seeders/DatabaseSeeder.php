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
        
        
        // User::create ([

        //     'name' => 'Aniyal Usop',
        //     'email' => 'aniyalusop@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create ([

        //     'name' => 'Ayyan robloks',
        //     'email' => 'ayyan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([

            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([

            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([

            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([

        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex sapiente laborum atque inventore veritatis consectetur eaque, odio beatae deserunt, hic commodi, at reprehenderit excepturi libero itaque autem in porro? Facilis corrupti iure dolores modi sint ratione nostrum quibusdam unde deleniti inventore officiis, odit non minus magni ducimus totam fuga dicta facere aliquid? Nisi voluptatibus sint dolores repellendus, ea quibusdam quisquam, modi error tempore itaque, aliquam sit consequatur eaque enim atque voluptatum possimus molestiae dolorum nesciunt? Voluptatem, cumque? Sapiente obcaecati modi blanditiis numquam quos quibusdam assumenda beatae quo enim, consectetur voluptates tenetur eos at vel distinctio labore. Dolor accusantium dolorem cupiditate porro debitis nam ducimus? Magni veniam aperiam laborum distinctio est adipisci temporibus molestiae explicabo ipsum illo molestias fugiat, numquam earum, corrupti sunt voluptatibus optio, harum officia. Consequuntur vero id nostrum tenetur voluptatum, deleniti eum nulla eveniet consectetur nobis, quaerat, dolorum at fuga ullam ea beatae amet quas. Doloremque, odio fugiat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        
        // Post::create([

        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex sapiente laborum atque inventore veritatis consectetur eaque, odio beatae deserunt, hic commodi, at reprehenderit excepturi libero itaque autem in porro? Facilis corrupti iure dolores modi sint ratione nostrum quibusdam unde deleniti inventore officiis, odit non minus magni ducimus totam fuga dicta facere aliquid? Nisi voluptatibus sint dolores repellendus, ea quibusdam quisquam, modi error tempore itaque, aliquam sit consequatur eaque enim atque voluptatum possimus molestiae dolorum nesciunt? Voluptatem, cumque? Sapiente obcaecati modi blanditiis numquam quos quibusdam assumenda beatae quo enim, consectetur voluptates tenetur eos at vel distinctio labore. Dolor accusantium dolorem cupiditate porro debitis nam ducimus? Magni veniam aperiam laborum distinctio est adipisci temporibus molestiae explicabo ipsum illo molestias fugiat, numquam earum, corrupti sunt voluptatibus optio, harum officia. Consequuntur vero id nostrum tenetur voluptatum, deleniti eum nulla eveniet consectetur nobis, quaerat, dolorum at fuga ullam ea beatae amet quas. Doloremque, odio fugiat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        
        // Post::create([

        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex sapiente laborum atque inventore veritatis consectetur eaque, odio beatae deserunt, hic commodi, at reprehenderit excepturi libero itaque autem in porro? Facilis corrupti iure dolores modi sint ratione nostrum quibusdam unde deleniti inventore officiis, odit non minus magni ducimus totam fuga dicta facere aliquid? Nisi voluptatibus sint dolores repellendus, ea quibusdam quisquam, modi error tempore itaque, aliquam sit consequatur eaque enim atque voluptatum possimus molestiae dolorum nesciunt? Voluptatem, cumque? Sapiente obcaecati modi blanditiis numquam quos quibusdam assumenda beatae quo enim, consectetur voluptates tenetur eos at vel distinctio labore. Dolor accusantium dolorem cupiditate porro debitis nam ducimus? Magni veniam aperiam laborum distinctio est adipisci temporibus molestiae explicabo ipsum illo molestias fugiat, numquam earum, corrupti sunt voluptatibus optio, harum officia. Consequuntur vero id nostrum tenetur voluptatum, deleniti eum nulla eveniet consectetur nobis, quaerat, dolorum at fuga ullam ea beatae amet quas. Doloremque, odio fugiat.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([

        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex sapiente laborum atque inventore veritatis consectetur eaque, odio beatae deserunt, hic commodi, at reprehenderit excepturi libero itaque autem in porro? Facilis corrupti iure dolores modi sint ratione nostrum quibusdam unde deleniti inventore officiis, odit non minus magni ducimus totam fuga dicta facere aliquid? Nisi voluptatibus sint dolores repellendus, ea quibusdam quisquam, modi error tempore itaque, aliquam sit consequatur eaque enim atque voluptatum possimus molestiae dolorum nesciunt? Voluptatem, cumque? Sapiente obcaecati modi blanditiis numquam quos quibusdam assumenda beatae quo enim, consectetur voluptates tenetur eos at vel distinctio labore. Dolor accusantium dolorem cupiditate porro debitis nam ducimus? Magni veniam aperiam laborum distinctio est adipisci temporibus molestiae explicabo ipsum illo molestias fugiat, numquam earum, corrupti sunt voluptatibus optio, harum officia. Consequuntur vero id nostrum tenetur voluptatum, deleniti eum nulla eveniet consectetur nobis, quaerat, dolorum at fuga ullam ea beatae amet quas. Doloremque, odio fugiat.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
