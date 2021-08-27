<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function blog()
    {
        return view('blog', [
            "title" => "Blog",
            "img" => "post-bg.jpg",
            "posts" => Post::all()
        ]);
    }

    public function post($slug)
    {
        return view('post', [
            "title" => "Single Post " . Post::find_title($slug),
            "img" => "post-sample-image.jpg",
            "post" => Post::find($slug)
        ]);
    }
}
