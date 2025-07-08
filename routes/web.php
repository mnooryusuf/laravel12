<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['tittle' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Noor Yusuf', 'tittle' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['tittle' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'tittle' => 'Judul Artikel 1',
            'author' => 'Muhammad Noor Yusuf',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod consequatur cupiditate
            magnam impedit aperiam
            commodi ad voluptatibus ipsam vel, fugit soluta suscipit temporibus.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'tittle' => 'Judul Artikel 2',
            'author' => 'Muhammad Noor Yusuf',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus iste non esse
            molestias ullam dolore ab quam, voluptatibus id iure, dolor debitis autem nemo commodi accusantium neque
            illo dolores excepturi earum quidem eligendi. Eius.'
        ]
    ]]);
});

Route::get('/post/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'tittle' => 'Judul Artikel 1',
            'author' => 'Muhammad Noor Yusuf',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod consequatur cupiditate
            magnam impedit aperiam
            commodi ad voluptatibus ipsam vel, fugit soluta suscipit temporibus.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'tittle' => 'Judul Artikel 2',
            'author' => 'Muhammad Noor Yusuf',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus iste non esse
            molestias ullam dolore ab quam, voluptatibus id iure, dolor debitis autem nemo commodi accusantium neque
            illo dolores excepturi earum quidem eligendi. Eius.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['tittle' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact']);
});
