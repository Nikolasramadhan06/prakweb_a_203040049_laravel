<?php

namespace App\Models;



class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Niko",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sint tenetur sed ipsa temporibus inventore ex, exercitationem adipisci libero, pariatur eum dolorum consectetur. Quos a id earum qui ex harum"
        ],
        [
            "title" => "Judul Post Keduaa",
            "slug" => "judul-post-kedua",
            "author" => "Niko",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sint tenetur sed ipsa temporibus inventore ex, exercitationem adipisci libero, pariatur eum dolorum consectetur. Quos a id earum qui ex harum"
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
