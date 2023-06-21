<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Naufal MI",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae blanditiis molestiae eveniet inventore autem corporis impedit sit laborum perferendis optio et dicta maxime minima iste nulla quaerat, rem laboriosam dolorem? Nesciunt veritatis deserunt autem a quidem, adipisci inventore obcaecati delectus excepturi nemo esse cumque consequuntur! Consequuntur, dicta aspernatur dolor facere optio dolorem magnam adipisci molestiae id quia omnis culpa sed labore incidunt voluptatum ducimus iusto? Veritatis adipisci inventore perferendis, dolorem, tempora laboriosam ducimus temporibus amet non cupiditate, incidunt dolor minima?",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Valll",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae blanditiis molestiae eveniet inventore autem corporis impedit sit laborum perferendis optio et dicta maxime minima iste nulla quaerat, rem laboriosam dolorem? Nesciunt veritatis deserunt autem a quidem, adipisci inventore obcaecati delectus excepturi nemo esse cumque consequuntur! Consequuntur, dicta aspernatur dolor facere optio dolorem magnam adipisci molestiae id quia omnis culpa sed labore incidunt voluptatum ducimus iusto? Veritatis adipisci inventore perferendis, dolorem, tempora laboriosam ducimus temporibus amet non cupiditate, incidunt dolor minima?",
        ],
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
