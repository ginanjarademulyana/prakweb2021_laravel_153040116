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
        "name" => "Ginanjar Ade Mulyana",
        "email" => "ginanjaradem@mail.unpas.ac.id",
        "image" => "Gingin.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ginanjar Ade Mulyana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, assumenda eligendi? At fugiat ab aperiam modi perferendis cupiditate nisi reiciendis non. Dolorem iure fugiat nemo officia similique, unde nesciunt facilis beatae quia reiciendis ratione distinctio quasi autem inventore nisi explicabo rerum voluptas quos, consectetur numquam a voluptates corporis excepturi! Inventore aliquid odio quas, dolore natus optio debitis. Qui obcaecati perferendis minima iusto asperiores, ratione, illum nulla explicabo porro, quis quod expedita earum fugiat dolorum animi totam suscipit aliquid odit sapiente."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dewi Wisuda Wardani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, assumenda eligendi? At fugiat ab aperiam modi perferendis cupiditate nisi reiciendis non. Dolorem iure fugiat nemo officia similique, unde nesciunt facilis beatae quia reiciendis ratione distinctio quasi autem inventore nisi explicabo rerum voluptas quos, consectetur numquam a voluptates corporis excepturi! Inventore aliquid odio quas, dolore natus optio debitis. Qui obcaecati perferendis minima iusto asperiores, ratione, illum nulla explicabo porro, quis quod expedita earum fugiat dolorum animi totam suscipit aliquid odit sapiente."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ginanjar Ade Mulyana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, assumenda eligendi? At fugiat ab aperiam modi perferendis cupiditate nisi reiciendis non. Dolorem iure fugiat nemo officia similique, unde nesciunt facilis beatae quia reiciendis ratione distinctio quasi autem inventore nisi explicabo rerum voluptas quos, consectetur numquam a voluptates corporis excepturi! Inventore aliquid odio quas, dolore natus optio debitis. Qui obcaecati perferendis minima iusto asperiores, ratione, illum nulla explicabo porro, quis quod expedita earum fugiat dolorum animi totam suscipit aliquid odit sapiente."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dewi Wisuda Wardani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, assumenda eligendi? At fugiat ab aperiam modi perferendis cupiditate nisi reiciendis non. Dolorem iure fugiat nemo officia similique, unde nesciunt facilis beatae quia reiciendis ratione distinctio quasi autem inventore nisi explicabo rerum voluptas quos, consectetur numquam a voluptates corporis excepturi! Inventore aliquid odio quas, dolore natus optio debitis. Qui obcaecati perferendis minima iusto asperiores, ratione, illum nulla explicabo porro, quis quod expedita earum fugiat dolorum animi totam suscipit aliquid odit sapiente."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
