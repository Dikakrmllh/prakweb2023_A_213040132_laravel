<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama ",
            "slug" => "judul-post-pertama",
            "author" => "Dika Karomalloh",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa mollitia,
             non dolores impedit quibusdam, blanditiis aspernatur perferendis repudiandae tempore maxime soluta nisi ipsa perspiciatis? 
             Delectus error dolorem explicabo ratione, deserunt ab consectetur, 
             rerum facilis quas officia dicta eum sit possimus iste natus aperiam inventore hic nihil optio quam rem voluptatem esse ad repellendus. 
             Quas ipsum, maiores voluptatibus in nobis culpa dignissimos praesentium autem alias consequuntur cupiditate quisquam voluptas iure ullam
             impedit placeat magni asperiores at. Corporis velit a est omnis."
        ],
        [
            "title" => "Judul Post kedua ",
            "slug" => "judul-post-kedua",
            "author" => "Hana Nurhalimah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia totam consectetur a voluptatibus eos nemo eaque nam sunt laborum earum. 
            Repellendus cupiditate pariatur iusto eius, minus laborum sit dolores exercitationem iste quas corporis a suscipit quis, 
            quisquam aliquid enim illum quam sequi assumenda error est! Possimus vitae facilis delectus rem animi suscipit repellendus quia tempora aliquam, sed corrupti, 
            voluptates facere. Necessitatibus praesentium iure eaque temporibus quasi quae ex itaque nam, 
            corporis ad optio consequuntur quaerat eos cupiditate voluptatum esse quam voluptatem, 
            sequi odit! Eveniet voluptas nihil eaque cumque ipsum beatae soluta illo laboriosam ratione exercitationem reiciendis sit, nisi ipsa. Blanditiis."
        ],
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
