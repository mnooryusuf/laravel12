<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
