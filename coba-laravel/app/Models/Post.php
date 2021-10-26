<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
