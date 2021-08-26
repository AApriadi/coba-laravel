<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::view('/','welcome');
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "img" => "home-bg.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "img" => "about-bg.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Dedot",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, at dicta labore possimus quas rem repellat repudiandae. Aspernatur eos facilis inventore labore maiores nihil, odit perferendis vel! Accusamus deserunt ducimus eius facilis illo ipsum magnam maxime ut voluptatem voluptates. At culpa enim eos nihil nostrum quaerat quidem quisquam sequi suscipit vitae. Dolore ipsum laudantium magni maxime natus placeat similique sit."
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Dedot",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, at dicta labore possimus quas rem repellat repudiandae. Aspernatur eos facilis inventore labore maiores nihil, odit perferendis vel! Accusamus deserunt ducimus eius facilis illo ipsum magnam maxime ut voluptatem voluptates. At culpa enim eos nihil nostrum quaerat quidem quisquam sequi suscipit vitae."
        ]
    ];

    return view('blog', [
        "title" => "Blog",
        "img" => "post-bg.jpg",
        "posts" => $blog_posts
    ]);
});

//single blog post page
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Dedot",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, at dicta labore possimus quas rem repellat repudiandae. Aspernatur eos facilis inventore labore maiores nihil, odit perferendis vel! Accusamus deserunt ducimus eius facilis illo ipsum magnam maxime ut voluptatem voluptates. At culpa enim eos nihil nostrum quaerat quidem quisquam sequi suscipit vitae. Dolore ipsum laudantium magni maxime natus placeat similique sit."
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Dedot",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, at dicta labore possimus quas rem repellat repudiandae. Aspernatur eos facilis inventore labore maiores nihil, odit perferendis vel! Accusamus deserunt ducimus eius facilis illo ipsum magnam maxime ut voluptatem voluptates. At culpa enim eos nihil nostrum quaerat quidem quisquam sequi suscipit vitae."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "img" => "post-sample-image.jpg",
        "post" => $new_post
    ]);
});

Route::get('/contact', [ContactController::class, 'contact']);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
