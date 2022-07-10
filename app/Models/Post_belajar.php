<?php

namespace App\Models;
use Illuminate\Http\Request;


class Post 
{
    private static $pot = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "Raga Devara",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam suscipit dolor hic in dicta ipsam vero facilis accusantium quia tempora quisquam ducimus debitis a commodi deserunt voluptates temporibus ab dolores, perferendis possimus. Ad fugit, quia dicta nesciunt voluptas at exercitationem a modi repellat deserunt unde! Porro dolore deserunt repellat a eveniet sit rerum, accusantium vel vero totam molestiae facilis voluptates neque beatae, id quibusdam quaerat cum repellendus voluptate aliquid? Ad illum sit totam et quidem incidunt ut magni. Velit, quisquam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-Post-Kedua",
            "author" => "Sugeng Super",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam suscipit dolor hic in dicta ipsam vero facilis accusantium quia tempora quisquam ducimus debitis a commodi deserunt voluptates temporibus ab dolores, perferendis possimus. Ad fugit, quia dicta nesciunt voluptas at exercitationem a modi repellat deserunt unde! Porro dolore deserunt repellat a eveniet sit rerum, accusantium vel vero totam molestiae facilis voluptates neque beatae, id quibusdam quaerat cum repellendus voluptate aliquid? Ad illum sit totam et quidem incidunt ut magni. Velit, quisquam."
        ]
    ];

    public static function all()
    {
        return collect(self::$pot);
    }
    public static function find($slug)
    {
        $blog_post = static::all();
        // $post = [];
        // foreach($blog_post as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $blog_post->firstWhere('slug', $slug);
    }
}
