<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function blog()
    {
        return view('blog', [
            "title" => "Blog",
            "img" => "blog-bg.jpg",
            //"posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            "title" => "Single Post " . $post->title,
            "img" => "post-bg.jpg",
            "post" => $post
        ]);
    }
}
