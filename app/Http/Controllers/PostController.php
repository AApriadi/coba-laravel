<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function blog()
    {
        $title = "";
        $img = "blog-bg.jpg";
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
            $img = 'category-bg.jpg';
        }

        if (request('author')) {
            $user = User::firstWhere('username', request('author'));
            $title = ' by ' . $user->name;
            $img = 'user-bg.jpg';
        }

        return view('blog', [
            "title" => "All Post" . $title,
            "img" => $img,
            //"posts" => Post::all()
            //"posts" => Post::latest()->get()
            //pake eager loading
            //"posts" => Post::with(['category', 'user'])->latest()->get()
            //pake eager loading, withnya di model, filternya dimodel
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
