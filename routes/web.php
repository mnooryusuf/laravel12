<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['tittle' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Noor Yusuf', 'tittle' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['tittle' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/post/{post:slug}', function (Post $post) {

    // $post = Post::find($id);

    return view('post', ['tittle' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact']);
});
