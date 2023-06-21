<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Naufal Mahfud Irfandi",
        "email" => "naufal.mi.9999@gmail.com",
        "image" => "image.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => "Single Post",
        "post" => $new_post,
    ]);
});
