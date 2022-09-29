<?php

namespace App\Models;



class Post {

    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aaniyal",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing 
            elit. Cum quidem dolore eaque iure odit praesentium, nesciunt 
            adipisci quos. Animi, eius! Possimus, fugit unde excepturi eaque 
            quisquam itaque aut quibusdam, fugiat, est nesciunt illum nemo 
            veniam alias quaerat recusandae quod porro temporibus vitae 
            labore quia voluptatum tempore assumenda ab? Ullam perferendis 
            recusandae debitis fuga numquam nostrum similique, nisi, 
            repellat quaerat dolores consequatur atque sunt officia totam 
            tempora, voluptates ad doloribus veritatis veniam sed dolore 
            necessitatibus excepturi eum fugiat. Saepe, quae nemo!"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ussop",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure optio ea ab totam? Laudantium, unde. Incidunt nobis veniam accusantium ut nulla amet dolorum, quasi ullam eligendi officiis aspernatur consectetur eos asperiores excepturi distinctio praesentium blanditiis! Architecto perspiciatis tenetur aliquid amet illum nemo illo quaerat asperiores repellendus facere. Perferendis, magnam ea aliquam animi atque rem autem explicabo alias dignissimos itaque commodi recusandae amet nihil deserunt, ipsum eos numquam inventore aliquid suscipit placeat ad ex, nam possimus accusantium! Architecto officiis delectus laudantium veritatis fugiat qui minima magni ullam, aperiam voluptatibus sit tenetur libero provident in voluptate est, inventore doloribus nemo facilis dignissimos?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug) {

        $posts = static::all();
        return $posts -> firstWhere('slug',$slug);
    }    
}
