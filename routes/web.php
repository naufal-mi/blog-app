<?php


use App\Models\Post;
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
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

Route::get('posts/{slug}', function ($slug) {

    return view('post', [
        'title' => "Single Post",
        "post" => Post::find($slug),
    ]);
});

