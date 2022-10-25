<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "Nama" => "Nikolas Ramadhan",
        "email" => "nikonikolas@gmai.com",
        "image" => "Nik.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [ 
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});
 // Halaman singel post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);

});